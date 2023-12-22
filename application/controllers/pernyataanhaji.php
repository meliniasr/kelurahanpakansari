<?php
class Pernyataanhaji extends CI_Controller
{
	public function index()
	{
		$data['pernyataanhaji'] = $this->m_pernyataanhaji->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/pernyataanhaji', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_haji 	        = $this->input->post('tgl_haji');
		$nama_haji		    = $this->input->post('nama_haji');
		$tempat_lahir_haji 	= $this->input->post('tempat_lahir_haji');
		$ttl_lahir_haji     = $this->input->post('ttl_lahir_haji');
		$no_ktp_haji        = $this->input->post('no_ktp_haji');
		$jenis_kelamin_haji = $this->input->post('jenis_kelamin_haji');
		$pekerjaan_haji		= $this->input->post('pekerjaan_haji');
		$alamat_haji		= $this->input->post('alamat_haji');
		$keterangan_haji    = $this->input->post('keterangan_haji');

		$data = array(
			'tgl_haji'  	     => $tgl_haji,
			'nama_haji' 		 => $nama_haji,
			'tempat_lahir_haji'  => $tempat_lahir_haji,
			'ttl_lahir_haji'     => $ttl_lahir_haji,
			'no_ktp_haji' 	     => $no_ktp_haji,
			'jenis_kelamin_haji' => $jenis_kelamin_haji,
			'pekerjaan_haji' 	 => $pekerjaan_haji,
			'alamat_haji' 		 => $alamat_haji,
			'keterangan_haji' 	 => $keterangan_haji,
		);

		$this->m_pernyataanhaji->input_data($data, 'pernyataanhaji');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('pernyataanhaji/index');
	}

	public function hapus($id)
	{
		$where = array('id_haji' => $id);
		$this->m_pernyataanhaji->hapus_data($where, 'pernyataanhaji');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('pernyataanhaji/index');
	}

	public function edit($id)
	{
		$where = array('id_haji' => $id);
		$data['pernyataanhaji'] = $this->m_permohonanproposal->edit_data($where, 'pernyataanhaji')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_pernyataanhaji', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id					= $this->input->post('id_haji');
		$tgl_haji 	        = $this->input->post('tgl_haji');
		$nama_haji		    = $this->input->post('nama_haji');
		$tempat_lahir_haji 	= $this->input->post('tempat_lahir_haji');
		$ttl_lahir_haji     = $this->input->post('ttl_lahir_haji');
		$no_ktp_haji        = $this->input->post('no_ktp_haji');
		$jenis_kelamin_haji = $this->input->post('jenis_kelamin_haji');
		$pekerjaan_haji		= $this->input->post('pekerjaan_haji');
		$alamat_haji		= $this->input->post('alamat_haji');
		$keterangan_haji    = $this->input->post('keterangan_haji');

		$data = array(
			'tgl_haji'  	     => $tgl_haji,
			'nama_haji' 		 => $nama_haji,
			'tempat_lahir_haji'  => $tempat_lahir_haji,
			'ttl_lahir_haji'     => $ttl_lahir_haji,
			'no_ktp_haji' 	     => $no_ktp_haji,
			'jenis_kelamin_haji' => $jenis_kelamin_haji,
			'pekerjaan_haji' 	 => $pekerjaan_haji,
			'alamat_haji' 		 => $alamat_haji,
			'keterangan_haji' 	 => $keterangan_haji,
		);

		$where = array('id_haji' => $id);
		$this->m_pernyataanhaji->update_data($where, $data, 'pernyataanhaji');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('pernyataanhaji/index');
	}


	public function detail($id)
	{
		$this->load->model('m_pernyataanhaji');
		$detail = $this->m_pernyataanhaji->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_pernyataanhaji', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['pernyataanhaji'] = $this->m_pernyataanhaji->tampil_data("pernyataanhaji")->result();
		$this->load->view('print/print_pernyataanhaji', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['pernyataanhaji'] = $this->m_pernyataanhaji->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/pernyataanhaji', $data);
		$this->load->view('templates/footer');
	}
}
