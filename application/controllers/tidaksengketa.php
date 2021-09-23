<?php
class Tidaksengketa extends CI_Controller{
    public function index(){
        $data['tidaksengketa'] = $this->m_tidaksengketa->tampil_data()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/tidaksengketa', $data);
		$this->load->view('templates/footer');
    }

    public function tambah_aksi(){
        $tgl_tidaksengketa 		   	     = $this->input->post('tgl_tidaksengketa');
		$nama_pemohon_tidaksengketa      = $this->input->post('nama_pemohon_tidaksengketa');
		$suratkepemilikan_tidaksengketa  = $this->input->post('suratkepemilikan_tidaksengketa');
        $alamat_tidaksengketa       	 = $this->input->post('alamat_tidaksengketa');
        $keterangan_tidaksengketa        = $this->input->post('keterangan_tidaksengketa');

		$data = array(
			'tgl_tidaksengketa' 		 	 => $tgl_tidaksengketa,
			'nama_pemohon_tidaksengketa'     => $nama_pemohon_tidaksengketa,
			'suratkepemilikan_tidaksengketa' => $suratkepemilikan_tidaksengketa,
            'alamat_tidaksengketa'           => $alamat_tidaksengketa,
            'keterangan_tidaksengketa' 	     => $keterangan_tidaksengketa,

		);

		$this->m_tidaksengketa->input_data($data, 'tidaksengketa');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('tidaksengketa/index');
	}

	public function hapus($id){
		$where = array('id_tidaksengketa' => $id);
		$this->m_tidaksengketa->hapus_data($where, 'tidaksengketa');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('tidaksengketa/index');
	}

	public function edit($id){
		$where = array('id_tidaksengketa' => $id);
		$data['tidaksengketa'] = $this->m_tidaksengketa->edit_data($where, 'tidaksengketa')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_tidaksengketa', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$id						  		 = $this->input->post('id_tidaksengketa');
		$tgl_tidaksengketa 		   	     = $this->input->post('tgl_tidaksengketa');
		$nama_pemohon_tidaksengketa      = $this->input->post('nama_pemohon_tidaksengketa');
		$suratkepemilikan_tidaksengketa  = $this->input->post('suratkepemilikan_tidaksengketa');
        $alamat_tidaksengketa       	 = $this->input->post('alamat_tidaksengketa');
        $keterangan_tidaksengketa        = $this->input->post('keterangan_tidaksengketa');

		$data = array(
			'tgl_tidaksengketa ' 		 	 => $tgl_tidaksengketa,
			'nama_pemohon_tidaksengketa'     => $nama_pemohon_tidaksengketa,
			'suratkepemilikan_tidaksengketa' => $suratkepemilikan_tidaksengketa,
            'alamat_tidaksengketa'           => $alamat_tidaksengketa,
            'keterangan_tidaksengketa' 	     => $keterangan_tidaksengketa,
		);

		$where = array('id_tidaksengketa' => $id);
		$this->m_tidaksengketa->update_data($where, $data, 'tidaksengketa');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('tidaksengketa/index');

	}

	
	public function detail($id){
		$this->load->model('m_tidaksengketa');
		$detail = $this->m_tidaksengketa->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_tidaksengketa', $data);
		$this->load->view('templates/footer');
	}

	public function print(){
		$data['tidaksengketa'] = $this->m_tidaksengketa->tampil_data("tidaksengketa")->result();
		$this->load->view('print/print_tidaksengketa', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['tidaksengketa'] = $this->m_tidaksengketa->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/tidaksengketa', $data);
		$this->load->view('templates/footer');
	}
}
