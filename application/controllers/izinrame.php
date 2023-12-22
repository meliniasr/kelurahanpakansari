<?php
class Izinrame extends CI_Controller
{
	public function index()
	{
		$data['izinrame'] = $this->m_izinrame->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/izinrame', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_izinrame		      = $this->input->post('tgl_izinrame');
		$nama_pemohon_izinrame	  = $this->input->post('nama_pemohon_izinrame');
		$tempat_lahir_izinrame    = $this->input->post('tempat_lahir_izinrame');
		$ttl_izinrame          	  = $this->input->post('ttl_izinrame');
		$jenis_kelamin_izinrame	  = $this->input->post('jenis_kelamin_izinrame');
		$nik_izinrame	    	  = $this->input->post('nik_izinrame');
		$pekerjaan_izinrame       = $this->input->post('pekerjaan_izinrame');
		$alamat_izinrame          = $this->input->post('alamat_izinrame');
		$waktu_izinrame           = $this->input->post('waktu_izinrame');
		$acara_izinrame           = $this->input->post('acara_izinrame');

		$data = array(
			'tgl_izinrame' 		     => $tgl_izinrame,
			'nama_pemohon_izinrame'  => $nama_pemohon_izinrame,
			'tempat_lahir_izinrame'  => $tempat_lahir_izinrame,
			'ttl_izinrame'           => $ttl_izinrame,
			'jenis_kelamin_izinrame' => $jenis_kelamin_izinrame,
			'nik_izinrame'       	 => $nik_izinrame,
			'pekerjaan_izinrame'     => $pekerjaan_izinrame,
			'alamat_izinrame' 	     => $alamat_izinrame,
			'waktu_izinrame' 	     => $waktu_izinrame,
			'acara_izinrame' 	     => $acara_izinrame,

		);

		$this->m_izinrame->input_data($data, 'izinrame');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('izinrame/index');
	}

	public function hapus($id)
	{
		$where = array('id_izinrame' => $id);
		$this->m_izinrame->hapus_data($where, 'izinrame');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('izinrame/index');
	}

	public function edit($id)
	{
		$where = array('id_izinrame' => $id);
		$data['izinrame'] = $this->m_izinrame->edit_data($where, 'izinrame')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_izinrame', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id						  = $this->input->post('id_izinrame');
		$tgl_izinrame		      = $this->input->post('tgl_izinrame');
		$nama_pemohon_izinrame	  = $this->input->post('nama_pemohon_izinrame');
		$tempat_lahir_izinrame    = $this->input->post('tempat_lahir_izinrame');
		$ttl_izinrame          	  = $this->input->post('ttl_izinrame');
		$jenis_kelamin_izinrame	  = $this->input->post('jenis_kelamin_izinrame');
		$nik_izinrame	    	  = $this->input->post('nik_izinrame');
		$pekerjaan_izinrame       = $this->input->post('pekerjaan_izinrame');
		$alamat_izinrame          = $this->input->post('alamat_izinrame');
		$waktu_izinrame           = $this->input->post('waktu_izinrame');
		$acara_izinrame           = $this->input->post('acara_izinrame');

		$data = array(
			'tgl_izinrame' 		     => $tgl_izinrame,
			'nama_pemohon_izinrame'  => $nama_pemohon_izinrame,
			'tempat_lahir_izinrame'  => $tempat_lahir_izinrame,
			'ttl_izinrame'           => $ttl_izinrame,
			'jenis_kelamin_izinrame' => $jenis_kelamin_izinrame,
			'nik_izinrame'       	 => $nik_izinrame,
			'pekerjaan_izinrame'     => $pekerjaan_izinrame,
			'alamat_izinrame' 	     => $alamat_izinrame,
			'waktu_izinrame' 	     => $waktu_izinrame,
			'acara_izinrame' 	     => $acara_izinrame,
		);

		$where = array('id_izinrame' => $id);
		$this->m_izinrame->update_data($where, $data, 'izinrame');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('izinrame/index');
	}

	public function detail($id)
	{
		$this->load->model('m_izinrame');
		$detail = $this->m_izinrame->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_izinrame', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['izinrame'] = $this->m_izinrame->tampil_data("izinrame")->result();
		$this->load->view('print/print_izinrame', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['izinrame'] = $this->m_izinrame->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/izinrame', $data);
		$this->load->view('templates/footer');
	}
}
