<?php
class Kependudukkan extends CI_Controller
{
	public function index()
	{
		$data['kependudukkan'] = $this->m_kependudukkan->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/kependudukkan', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_kp		        = $this->input->post('tgl_kp');
		$nik_kp		        = $this->input->post('nik_kp');
		$kk_kp		        = $this->input->post('kk_kp');
		$nama_pemohon_kp    = $this->input->post('nama_pemohon_kp');
		$tempat_lahir_kp    = $this->input->post('tempat_lahir_kp');
		$ttl_kp	            = $this->input->post('ttl_kp');
		$jenis_kelamin_kp	= $this->input->post('jenis_kelamin_kp');
		$status_kp          = $this->input->post('status_kp');
		$alamat_kp          = $this->input->post('alamat_kp');
		$keterangan_kp      = $this->input->post('keterangan_kp');

		$data = array(
			'nik_kp'             => $nik_kp,
			'tgl_kp'             => $tgl_kp,
			'kk_kp' 		     => $kk_kp,
			'nama_pemohon_kp'    => $nama_pemohon_kp,
			'tempat_lahir_kp'    => $tempat_lahir_kp,
			'ttl_kp'             => $ttl_kp,
			'jenis_kelamin_kp'   => $jenis_kelamin_kp,
			'status_kp' 	     => $status_kp,
			'alamat_kp' 	     => $alamat_kp,
			'keterangan_kp' 	 => $keterangan_kp,

		);

		$this->m_kependudukkan->input_data($data, 'kependudukkan');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('kependudukkan/index');
	}

	public function hapus($id)
	{
		$where = array('id_kp' => $id);
		$this->m_kependudukkan->hapus_data($where, 'kependudukkan');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('kependudukkan/index');
	}

	public function edit($id)
	{
		$where = array('id_kp' => $id);
		$data['kependudukkan'] = $this->m_kependudukkan->edit_data($where, 'kependudukkan')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_kependudukkan', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id					= $this->input->post('id_kp');
		$tgl_kp		        = $this->input->post('tgl_kp');
		$nik_kp		        = $this->input->post('nik_kp');
		$kk_kp		        = $this->input->post('kk_kp');
		$nama_pemohon_kp    = $this->input->post('nama_pemohon_kp');
		$tempat_lahir_kp    = $this->input->post('tempat_lahir_kp');
		$ttl_kp	            = $this->input->post('ttl_kp');
		$jenis_kelamin_kp	= $this->input->post('jenis_kelamin_kp');
		$status_kp          = $this->input->post('status_kp');
		$alamat_kp          = $this->input->post('alamat_kp');
		$keterangan_kp      = $this->input->post('keterangan_kp');

		$data = array(
			'nik_kp'             => $nik_kp,
			'tgl_kp'             => $tgl_kp,
			'kk_kp' 		     => $kk_kp,
			'nama_pemohon_kp'    => $nama_pemohon_kp,
			'tempat_lahir_kp'    => $tempat_lahir_kp,
			'ttl_kp'             => $ttl_kp,
			'jenis_kelamin_kp'   => $jenis_kelamin_kp,
			'status_kp' 	     => $status_kp,
			'alamat_kp' 	     => $alamat_kp,
			'keterangan_kp' 	 => $keterangan_kp,
		);

		$where = array('id_kp' => $id);
		$this->m_kependudukkan->update_data($where, $data, 'kependudukkan');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('kependudukkan/index');
	}

	public function detail($id)
	{
		$this->load->model('m_kependudukkan');
		$detail = $this->m_kependudukkan->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_kependudukkan', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['kependudukkan'] = $this->m_kependudukkan->tampil_data("kependudukkan")->result();
		$this->load->view('print/print_kependudukkan', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['kependudukkan'] = $this->m_kependudukkan->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/kependudukkan', $data);
		$this->load->view('templates/footer');
	}
}
