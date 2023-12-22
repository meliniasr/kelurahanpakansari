<?php
class Domisilikoperai extends CI_Controller{
    public function index(){
        $data['domisilikoperai'] = $this->m_domisilikoperai->tampil_data()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/domisilikoperai', $data);
		$this->load->view('templates/footer');
    }

    public function tambah_aksi(){
        $tgl_koperasi		   = $this->input->post('tgl_koperasi');
		$nama_pemilikkoperasi  = $this->input->post('nama_pemilikkoperasi');
		$tempat_lahir_koperasi = $this->input->post('tempat_lahir_koperasi');
		$ttl_lahir_koperasi    = $this->input->post('ttl_lahir_koperasi');
        $pekerjaan_koperasi    = $this->input->post('pekerjaan_koperasi');
		$alamat_koperasi       = $this->input->post('alamat_koperasi');
		$no_ktp_koperasi       = $this->input->post('no_ktp_koperasi');
		$jenis_koperasi        = $this->input->post('jenis_koperasi');
        $status_kepemilikan    = $this->input->post('status_kepemilikan');
        $nama_koperasi         = $this->input->post('nama_koperasi');
        $lokasi_koperasi       = $this->input->post('lokasi_koperasi');
        $keterangan_koperasi   = $this->input->post('keterangan_koperasi');

		$data = array(
			'tgl_koperasi' 		   => $tgl_koperasi,
			'nama_pemilikkoperasi' => $nama_pemilikkoperasi,
			'tempat_lahir_koperasi'   => $tempat_lahir_koperasi,
			'ttl_lahir_koperasi'   => $ttl_lahir_koperasi,
            'pekerjaan_koperasi'   => $pekerjaan_koperasi,
			'alamat_koperasi'      => $alamat_koperasi,
			'no_ktp_koperasi'      => $no_ktp_koperasi,
			'jenis_koperasi' 	   => $jenis_koperasi,
            'status_kepemilikan'   => $status_kepemilikan,
            'nama_koperasi' 	   => $nama_koperasi,
            'lokasi_koperasi' 	   => $lokasi_koperasi,
            'keterangan_koperasi' => $keterangan_koperasi,

		);

		$this->m_domisilikoperai->input_data($data, 'domisilikoperai');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('domisilikoperai/index');
	}

	public function hapus($id){
		$where = array('id_koperasi' => $id);
		$this->m_domisilikoperai->hapus_data($where, 'domisilikoperai');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('domisilikoperai/index');
	}

	public function edit($id){
		$where = array('id_koperasi' => $id);
		$data['domisilikoperai'] = $this->m_domisilikoperai->edit_data($where, 'domisilikoperai')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_domisilikoperai', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$id					   = $this->input->post('id_koperasi');
		$tgl_koperasi		   = $this->input->post('tgl_koperasi');
		$nama_pemilikkoperasi  = $this->input->post('nama_pemilikkoperasi');
		$tempat_lahir_koperasi = $this->input->post('tempat_lahir_koperasi');
		$ttl_lahir_koperasi    = $this->input->post('ttl_lahir_koperasi');
        $pekerjaan_koperasi    = $this->input->post('pekerjaan_koperasi');
		$alamat_koperasi       = $this->input->post('alamat_koperasi');
		$no_ktp_koperasi       = $this->input->post('no_ktp_koperasi');
		$jenis_koperasi        = $this->input->post('jenis_koperasi');
        $status_kepemilikan    = $this->input->post('status_kepemilikan');
        $nama_koperasi         = $this->input->post('nama_koperasi');
        $lokasi_koperasi       = $this->input->post('lokasi_koperasi');
        $keterangan_koperasi   = $this->input->post('keterangan_koperasi');
		
		$data = array(
			'tgl_koperasi' 		    => $tgl_koperasi,
			'nama_pemilikkoperasi'  => $nama_pemilikkoperasi,
			'tempat_lahir_koperasi' => $tempat_lahir_koperasi,
			'ttl_lahir_koperasi'    => $ttl_lahir_koperasi,
            'pekerjaan_koperasi'    => $pekerjaan_koperasi,
			'alamat_koperasi'       => $alamat_koperasi,
			'no_ktp_koperasi'       => $no_ktp_koperasi,
			'jenis_koperasi' 	    => $jenis_koperasi,
            'status_kepemilikan'    => $status_kepemilikan,
            'nama_koperasi' 	    => $nama_koperasi,
            'lokasi_koperasi' 	    => $lokasi_koperasi,
            'keterangan_koperasi'   => $keterangan_koperasi,
		);

		$where = array('id_koperasi' => $id);
		$this->m_domisilikoperai->update_data($where, $data, 'domisilikoperai');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('domisilikoperai/index');

	}

	
	public function detail($id){
		$this->load->model('m_domisilikoperai');
		$detail = $this->m_domisilikoperai->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_domisilikoperai', $data);
		$this->load->view('templates/footer');
	}

	public function print(){
		$data['domisilikoperai'] = $this->m_domisilikoperai->tampil_data("domisilikoperai")->result();
		$this->load->view('print/print_domisilikoperai', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['domisilikoperai'] = $this->m_domisilikoperai->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/domisilikoperai', $data);
		$this->load->view('templates/footer');
	}
}
