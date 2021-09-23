<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/user', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $this->load->model('m_user');
        $detail = $this->m_user->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/user', $data);
        $this->load->view('templates/footer');
    }
}
