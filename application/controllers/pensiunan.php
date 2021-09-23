<?php
class Pensiunan extends CI_Controller{
    public function index(){
        $data['pensiunan'] = $this->m_pensiunan->tampil_data()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/pensiunan', $data);
		$this->load->view('templates/footer');
    }

    public function tambah_aksi(){
        $tgl_pensiun 	        = $this->input->post('tgl_pensiun');
		$nama_pensiun		    = $this->input->post('nama_pensiun');
		$tempat_lahir_pensiun 	= $this->input->post('tempat_lahir_pensiun');
		$ttl_lahir_pensiun     	= $this->input->post('ttl_lahir_pensiun');
        $pensiunan              = $this->input->post('pensiunan');
		$jenis_kelamin_pensiun	= $this->input->post('jenis_kelamin_pensiun');
		$agama_pensiun			= $this->input->post('agama_pensiun');
		$alamat_pensiun 		= $this->input->post('alamat_pensiun');
        $tujuan_pensiun			= $this->input->post('tujuan_pensiun');
		$keterangan_pensiun 	= $this->input->post('keterangan_pensiun');

		$data = array(
			'tgl_pensiun'  	         => $tgl_pensiun,
			'nama_pensiun' 			 => $nama_pensiun,
			'tempat_lahir_pensiun'   => $tempat_lahir_pensiun,
			'ttl_lahir_pensiun'      => $ttl_lahir_pensiun,
            'pensiunan' 	         => $pensiunan,
			'jenis_kelamin_pensiun'  => $jenis_kelamin_pensiun,
			'agama_pensiun' 	     => $agama_pensiun,
			'alamat_pensiun' 		 => $alamat_pensiun,
            'tujuan_pensiun' 	     => $tujuan_pensiun,
			'keterangan_pensiun'     => $keterangan_pensiun,
		);

		$this->m_pensiunan->input_data($data, 'pensiunan');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('pensiunan/index');
	}

	public function hapus($id){
		$where = array('id_pensiun' => $id);
		$this->m_pensiunan->hapus_data($where, 'pensiunan');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('pensiunan/index');
	}

	public function edit($id){
		$where = array('id_pensiun' => $id);
		$data['pensiunan'] = $this->m_pensiunan->edit_data($where, 'pensiunan')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_pensiunan', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$id						= $this->input->post('id_pensiun');
		$tgl_pensiun 	        = $this->input->post('tgl_pensiun');
		$nama_pensiun		    = $this->input->post('nama_pensiun');
		$tempat_lahir_pensiun 	= $this->input->post('tempat_lahir_pensiun');
		$ttl_lahir_pensiun     	= $this->input->post('ttl_lahir_pensiun');
        $pensiunan              = $this->input->post('pensiunan');
		$jenis_kelamin_pensiun	= $this->input->post('jenis_kelamin_pensiun');
		$agama_pensiun			= $this->input->post('agama_pensiun');
		$alamat_pensiun 		= $this->input->post('alamat_pensiun');
        $tujuan_pensiun			= $this->input->post('tujuan_pensiun');
		$keterangan_pensiun 	= $this->input->post('keterangan_pensiun');
		
		$data = array(
			'tgl_pensiun'  	         => $tgl_pensiun,
			'nama_pensiun' 			 => $nama_pensiun,
			'tempat_lahir_pensiun'   => $tempat_lahir_pensiun,
			'ttl_lahir_pensiun'      => $ttl_lahir_pensiun,
            'pensiunan' 	         => $pensiunan,
			'jenis_kelamin_pensiun'  => $jenis_kelamin_pensiun,
			'agama_pensiun' 	     => $agama_pensiun,
			'alamat_pensiun' 		 => $alamat_pensiun,
            'tujuan_pensiun' 	     => $tujuan_pensiun,
			'keterangan_pensiun'     => $keterangan_pensiun,
		);

		$where = array('id_pensiun' => $id);
		$this->m_pensiunan->update_data($where, $data, 'pensiunan');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('pensiunan/index');

	}

	
	public function detail($id){
		$this->load->model('m_pensiunan');
		$detail = $this->m_pensiunan->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_pensiunan', $data);
		$this->load->view('templates/footer');
	}

	public function print(){
		$data['pensiunan'] = $this->m_pensiunan->tampil_data("pensiunan")->result();
		$this->load->view('print/print_pensiunan', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['pensiunan'] = $this->m_pensiunan->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/pensiunan', $data);
		$this->load->view('templates/footer');
	}
}
