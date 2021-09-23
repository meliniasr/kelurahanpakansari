<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'MASUK - KELURAHAN PAKANSARI';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasinya success
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        //usernya ada
        if ($user) {
            // jika usernya aktif 
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin/dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Kata sandi salah!
              </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email ini belum diaktifkan!
          </div>');
                redirect('auth');
            }
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('posisi_pekerjaan', 'Posisi_Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No_Hp', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [

            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'PENDAFTARAN - KELURAHAN PAKANSARI';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name'             => htmlspecialchars($this->input->post('name', true)),
                'username'         => htmlspecialchars($this->input->post('username', true)),
                'email'            => htmlspecialchars($this->input->post('email', true)),
                'alamat'           => htmlspecialchars($this->input->post('alamat', true)),
                'posisi_pekerjaan' => htmlspecialchars($this->input->post('posisi_pekerjaan', true)),
                'no_hp'            => htmlspecialchars($this->input->post('no_hp', true)),
                'image'            => 'default.jpg',
                'password'         => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id'          => 2,
                'is_active'        => 1,
                'date_created'     => time()

            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! Akun anda telah dibuat. Silahkan masuk
          </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Anda telah keluar!
      </div>');
        redirect('auth');
    }
}
