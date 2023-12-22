<?php
class Suratmasuk extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('download'));
	}
	public function index()
	{
		$data['suratmasuk'] = $this->m_suratmasuk->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/suratmasuk', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_pengiriman 		    = $this->input->post('tgl_pengiriman');
		$nama_instansi_sm 		    = $this->input->post('nama_instansi_sm');
		$no_suratmasuk              = $this->input->post('no_suratmasuk');
		$tgl_suratmasuk             = $this->input->post('tgl_suratmasuk');
		$prihal_suratmasuk          = $this->input->post('prihal_suratmasuk');
		$penanggungjawab_suratmasuk = $this->input->post('penanggungjawab_suratmasuk');
		$keterangan_suratmasuk      = $this->input->post('keterangan_suratmasuk');

		$data = array(
			'tgl_pengiriman' 		     => $tgl_pengiriman,
			'nama_instansi_sm ' 		 => $nama_instansi_sm,
			'no_suratmasuk'              => $no_suratmasuk,
			'tgl_suratmasuk'             => $tgl_suratmasuk,
			'prihal_suratmasuk' 	     => $prihal_suratmasuk,
			'penanggungjawab_suratmasuk' => $penanggungjawab_suratmasuk,
			'keterangan_suratmasuk' 	 => $keterangan_suratmasuk,

		);

		$this->m_suratmasuk->input_data($data, 'suratmasuk');
		$this->session->set_flashdata('message', '<div class="btn btn-success toastrDefaultSuccess" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('suratmasuk/index');
	}

	public function hapus($id)
	{
		$where = array('id_suratmasuk' => $id);
		$this->m_suratmasuk->hapus_data($where, 'suratmasuk');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('suratmasuk/index');
	}

	public function edit($id)
	{
		$where = array('id_suratmasuk' => $id);
		$data['suratmasuk'] = $this->m_suratmasuk->edit_data($where, 'suratmasuk')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_suratmasuk', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id						  	= $this->input->post('id_suratmasuk');
		$tgl_pengiriman 		    = $this->input->post('tgl_pengiriman');
		$nama_instansi_sm 		    = $this->input->post('nama_instansi_sm');
		$no_suratmasuk              = $this->input->post('no_suratmasuk');
		$tgl_suratmasuk             = $this->input->post('tgl_suratmasuk');
		$prihal_suratmasuk          = $this->input->post('prihal_suratmasuk');
		$penanggungjawab_suratmasuk = $this->input->post('penanggungjawab_suratmasuk');
		$keterangan_suratmasuk      = $this->input->post('keterangan_suratmasuk');

		$data = array(
			'tgl_pengiriman' 		     => $tgl_pengiriman,
			'nama_instansi_sm' 		 	 => $nama_instansi_sm,
			'no_suratmasuk'              => $no_suratmasuk,
			'tgl_suratmasuk'           	 => $tgl_suratmasuk,
			'prihal_suratmasuk' 	     => $prihal_suratmasuk,
			'penanggungjawab_suratmasuk' => $penanggungjawab_suratmasuk,
			'keterangan_suratmasuk' 	 => $keterangan_suratmasuk,
		);

		$where = array('id_suratmasuk' => $id);
		$this->m_suratmasuk->update_data($where, $data, 'suratmasuk');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('suratmasuk/index');
	}

	public function detail($id)
	{
		$this->load->model('m_suratmasuk');
		$detail = $this->m_suratmasuk->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_suratmasuk', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['suratmasuk'] = $this->m_suratmasuk->tampil_data("suratmasuk")->result();
		$this->load->view('print/print_suratmasuk', $data);
	}

	public function create_file()
	{
		$data['suratmasuk'] = $this->m_suratmasuk->tampil_data("suratmasuk")->result();
		$this->load->view('register/suratmasuk.php', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['suratmasuk'] = $this->m_suratmasuk->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/suratmasuk', $data);
		$this->load->view('templates/footer');
	}
}
