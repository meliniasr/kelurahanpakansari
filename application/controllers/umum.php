<?php
class Umum extends CI_Controller
{
	public function index()
	{
		$data['umum'] = $this->m_umum->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/umum', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_umum 		    = $this->input->post('tgl_umum');
		$nama_umum 		    = $this->input->post('nama_umum');
		$tempat_lahir_umum  = $this->input->post('tempat_lahir_umum');
		$ttl_lahir_umum     = $this->input->post('ttl_lahir_umum');
		$pekerjaan_umum     = $this->input->post('pekerjaan_umum');
		$jenis_kelamin_umum = $this->input->post('jenis_kelamin_umum');
		$agama_umum         = $this->input->post('agama_umum');
		$tujuan_umum        = $this->input->post('tujuan_umum');
		$keterangan_umum    = $this->input->post('keterangan_umum');

		$data = array(
			'tgl_umum' 		     => $tgl_umum,
			'nama_umum' 		 => $nama_umum,
			'tempat_lahir_umum'  => $tempat_lahir_umum,
			'ttl_lahir_umum'     => $ttl_lahir_umum,
			'pekerjaan_umum' 	 => $pekerjaan_umum,
			'jenis_kelamin_umum' => $jenis_kelamin_umum,
			'agama_umum'         => $agama_umum,
			'tujuan_umum' 	     => $tujuan_umum,
			'keterangan_umum' 	 => $keterangan_umum,
		);

		$this->m_umum->input_data($data, 'umum');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('umum/index');
	}

	public function hapus($id)
	{
		$where = array('id_umum' => $id);
		$this->m_umum->hapus_data($where, 'umum');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('umum/index');
	}

	public function edit($id)
	{
		$where = array('id_umum' => $id);
		$data['umum'] = $this->m_umum->edit_data($where, 'umum')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_umum', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id					= $this->input->post('id_umum');
		$tgl_umum 		    = $this->input->post('tgl_umum');
		$nama_umum 		    = $this->input->post('nama_umum');
		$tempat_lahir_umum  = $this->input->post('tempat_lahir_umum');
		$ttl_lahir_umum     = $this->input->post('ttl_lahir_umum');
		$pekerjaan_umum     = $this->input->post('pekerjaan_umum');
		$jenis_kelamin_umum = $this->input->post('jenis_kelamin_umum');
		$agama_umum         = $this->input->post('agama_umum');
		$tujuan_umum        = $this->input->post('tujuan_umum');
		$keterangan_umum    = $this->input->post('keterangan_umum');

		$data = array(
			'tgl_umum' 		     => $tgl_umum,
			'nama_umum' 		 => $nama_umum,
			'tempat_lahir_umum'  => $tempat_lahir_umum,
			'ttl_lahir_umum'     => $ttl_lahir_umum,
			'pekerjaan_umum' 	 => $pekerjaan_umum,
			'jenis_kelamin_umum' => $jenis_kelamin_umum,
			'agama_umum'         => $agama_umum,
			'tujuan_umum' 	     => $tujuan_umum,
			'keterangan_umum' 	 => $keterangan_umum,

		);

		$where = array('id_umum' => $id);
		$this->m_umum->update_data($where, $data, 'umum');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('umum/index');
	}

	public function detail($id)
	{
		$this->load->model('m_umum');
		$detail = $this->m_umum->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_umum', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['umum'] = $this->m_umum->tampil_data("umum")->result();
		$this->load->view('print/print_umum', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['umum'] = $this->m_umum->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/umum', $data);
		$this->load->view('templates/footer');
	}
}
