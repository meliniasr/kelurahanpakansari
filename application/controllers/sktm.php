<?php
class Sktm extends CI_Controller
{
	public function index()
	{
		$data['sktm'] = $this->m_sktm->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/sktm', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_sktm	   	     = $this->input->post('tgl_sktm');
		$nama_pemohon_sktm   = $this->input->post('nama_pemohon_sktm');
		$tempat_lahir_sktm   = $this->input->post('tempat_lahir_sktm');
		$ttl_lahir_sktm      = $this->input->post('ttl_lahir_sktm');
		$jenis_kelamin_sktm  = $this->input->post('jenis_kelamin_sktm');
		$nik_sktm	   	     = $this->input->post('nik_sktm');
		$pekerjaan_sktm      = $this->input->post('pekerjaan_sktm');
		$alamat_sktm         = $this->input->post('alamat_sktm');
		$tujuan_sktm       	 = $this->input->post('tujuan_sktm');
		$keterangan_sktm     = $this->input->post('keterangan_sktm');

		$data = array(
			'tgl_sktm' 		 	 => $tgl_sktm,
			'nama_pemohon_sktm'  => $nama_pemohon_sktm,
			'tempat_lahir_sktm'  => $tempat_lahir_sktm,
			'ttl_lahir_sktm'     => $ttl_lahir_sktm,
			'jenis_kelamin_sktm' => $jenis_kelamin_sktm,
			'nik_sktm' 		 	 => $nik_sktm,
			'pekerjaan_sktm'     => $pekerjaan_sktm,
			'alamat_sktm'        => $alamat_sktm,
			'tujuan_sktm'        => $tujuan_sktm,
			'keterangan_sktm' 	 => $keterangan_sktm,

		);

		$this->m_sktm->input_data($data, 'sktm');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('sktm/index');
	}

	public function hapus($id)
	{
		$where = array('id_sktm' => $id);
		$this->m_sktm->hapus_data($where, 'sktm');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('sktm/index');
	}

	public function edit($id)
	{
		$where = array('id_sktm' => $id);
		$data['sktm'] = $this->m_sktm->edit_data($where, 'sktm')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_sktm', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id					 = $this->input->post('id_sktm');
		$tgl_sktm	   	     = $this->input->post('tgl_sktm');
		$nama_pemohon_sktm   = $this->input->post('nama_pemohon_sktm');
		$tempat_lahir_sktm   = $this->input->post('tempat_lahir_sktm');
		$ttl_lahir_sktm      = $this->input->post('ttl_lahir_sktm');
		$jenis_kelamin_sktm  = $this->input->post('jenis_kelamin_sktm');
		$nik_sktm	   	     = $this->input->post('nik_sktm');
		$pekerjaan_sktm      = $this->input->post('pekerjaan_sktm');
		$alamat_sktm         = $this->input->post('alamat_sktm');
		$tujuan_sktm       	 = $this->input->post('tujuan_sktm');
		$keterangan_sktm     = $this->input->post('keterangan_sktm');


		$data = array(
			'tgl_sktm' 		 	 => $tgl_sktm,
			'nama_pemohon_sktm'  => $nama_pemohon_sktm,
			'tempat_lahir_sktm'  => $tempat_lahir_sktm,
			'ttl_lahir_sktm'     => $ttl_lahir_sktm,
			'jenis_kelamin_sktm' => $jenis_kelamin_sktm,
			'nik_sktm' 		 	 => $nik_sktm,
			'pekerjaan_sktm'     => $pekerjaan_sktm,
			'alamat_sktm'        => $alamat_sktm,
			'tujuan_sktm'        => $tujuan_sktm,
			'keterangan_sktm' 	 => $keterangan_sktm,
		);

		$where = array('id_sktm' => $id);
		$this->m_sktm->update_data($where, $data, 'sktm');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('sktm/index');
	}

	public function detail($id)
	{
		$this->load->model('m_sktm');
		$detail = $this->m_sktm->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_sktm', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['sktm'] = $this->m_sktm->tampil_data("sktm")->result();
		$this->load->view('print/print_sktm', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['sktm'] = $this->m_sktm->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/sktm', $data);
		$this->load->view('templates/footer');
	}
}
