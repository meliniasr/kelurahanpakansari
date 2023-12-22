<?php
class Belumpernahmenikah extends CI_Controller
{
	public function index()
	{
		$data['belumpernahmenikah'] = $this->m_belumpernahmenikah->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/belumpernahmenikah', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_bpm		      = $this->input->post('tgl_bpm');
		$nama_pemohon_bn      = $this->input->post('nama_pemohon_bn');
		$ttl_lahir_bpm        = $this->input->post('ttl_lahir_bpm');
		$jenis_kelamin_bpm    = $this->input->post('jenis_kelamin_bpm');
		$nik_bpm              = $this->input->post('nik_bpm');
		$pekerjaan_bpm        = $this->input->post('pekerjaan_bpm');
		$alamat_bpm           = $this->input->post('alamat_bpm');
		$tujuan_bpm           = $this->input->post('tujuan_bpm');
		$keterangan_bpm       = $this->input->post('keterangan_bpm');

		$data = array(
			'tgl_bpm' 		      => $tgl_bpm,
			'nama_pemohon_bn'     => $nama_pemohon_bn,
			'ttl_lahir_bpm'       => $ttl_lahir_bpm,
			'jenis_kelamin_bpm'   => $jenis_kelamin_bpm,
			'nik_bpm'             => $nik_bpm,
			'pekerjaan_bpm'       => $pekerjaan_bpm,
			'alamat_bpm' 	      => $alamat_bpm,
			'tujuan_bpm'          => $tujuan_bpm,
			'keterangan_bpm'      => $keterangan_bpm,

		);

		$this->m_belumpernahmenikah->input_data($data, 'belumpernahmenikah');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('belumpernahmenikah/index');
	}

	public function hapus($id)
	{
		$where = array('id_bpm' => $id);
		$this->m_belumpernahmenikah->hapus_data($where, 'belumpernahmenikah');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('belumpernahmenikah/index');
	}

	public function edit($id)
	{
		$where = array('id_bpm' => $id);
		$data['belumpernahmenikah'] = $this->m_belumpernahmenikah->edit_data($where, 'belumpernahmenikah')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_belumpernahmenikah', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id					  = $this->input->post('id_bpm');
		$tgl_bpm		      = $this->input->post('tgl_bpm');
		$nama_pemohon_bn      = $this->input->post('nama_pemohon_bn');
		$ttl_lahir_bpm        = $this->input->post('ttl_lahir_bpm');
		$jenis_kelamin_bpm    = $this->input->post('jenis_kelamin_bpm');
		$nik_bpm              = $this->input->post('nik_bpm');
		$pekerjaan_bpm        = $this->input->post('pekerjaan_bpm');
		$alamat_bpm           = $this->input->post('alamat_bpm');
		$tujuan_bpm           = $this->input->post('tujuan_bpm');
		$keterangan_bpm       = $this->input->post('keterangan_bpm');

		$data = array(
			'tgl_bpm' 		      => $tgl_bpm,
			'nama_pemohon_bn'     => $nama_pemohon_bn,
			'ttl_lahir_bpm'       => $ttl_lahir_bpm,
			'jenis_kelamin_bpm'   => $jenis_kelamin_bpm,
			'nik_bpm'             => $nik_bpm,
			'pekerjaan_bpm'       => $pekerjaan_bpm,
			'alamat_bpm' 	      => $alamat_bpm,
			'tujuan_bpm'          => $tujuan_bpm,
			'keterangan_bpm'      => $keterangan_bpm,
		);

		$where = array('id_bpm' => $id);
		$this->m_belumpernahmenikah->update_data($where, $data, 'belumpernahmenikah');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('belumpernahmenikah/index');
	}


	public function detail($id)
	{
		$this->load->model('m_belumpernahmenikah');
		$detail = $this->m_belumpernahmenikah->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_belumpernahmenikah', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['belumpernahmenikah'] = $this->m_belumpernahmenikah->tampil_data("belumpernahmenikah")->result();
		$this->load->view('print/print_belumpernahmenikah', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['belumpernahmenikah'] = $this->m_belumpernahmenikah->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/belumpernahmenikah', $data);
		$this->load->view('templates/footer');
	}
}
