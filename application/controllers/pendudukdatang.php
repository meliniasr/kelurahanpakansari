<?php
class Pendudukdatang extends CI_Controller
{
	public function index()
	{
		$data['pendudukdatang'] = $this->m_pendudukdatang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/pendudukdatang', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_pendudukdatang		        = $this->input->post('tgl_pendudukdatang');
		$nama_pendudukdatang		    = $this->input->post('nama_pendudukdatang');
		$tempat_lahir_pendudukdatang    = $this->input->post('tempat_lahir_pendudukdatang');
		$ttl_pendudukdatang             = $this->input->post('ttl_pendudukdatang ');
		$pekerjaan_pendudukdatang       = $this->input->post('pekerjaan_pendudukdatang');
		$jenis_kelamin_pendudukdatang	= $this->input->post('jenis_kelamin_pendudukdatang');
		$nik_pendudukdatang	            = $this->input->post('nik_pendudukdatang');
		$alamat_datang_pendudukdatang   = $this->input->post('alamat_datang_pendudukdatang');
		$alamat_asal_pendudukdatang     = $this->input->post('alamat_asal_pendudukdatang');
		$keterangan_pendudukdatang      = $this->input->post('keterangan_pendudukdatang');

		$data = array(
			'tgl_pendudukdatang'             => $tgl_pendudukdatang,
			'nama_pendudukdatang' 		     => $nama_pendudukdatang,
			'tempat_lahir_pendudukdatang'    => $tempat_lahir_pendudukdatang,
			'ttl_pendudukdatang'             => $ttl_pendudukdatang,
			'pekerjaan_pendudukdatang'       => $pekerjaan_pendudukdatang,
			'jenis_kelamin_pendudukdatang'   => $jenis_kelamin_pendudukdatang,
			'nik_pendudukdatang' 	         => $nik_pendudukdatang,
			'alamat_datang_pendudukdatang' 	 => $alamat_datang_pendudukdatang,
			'alamat_asal_pendudukdatang' 	 => $alamat_asal_pendudukdatang,
			'keterangan_pendudukdatang' 	 => $keterangan_pendudukdatang,

		);

		$this->m_pendudukdatang->input_data($data, 'pendudukdatang');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('pendudukdatang/index');
	}

	public function hapus($id)
	{
		$where = array('id_pendudukdatang' => $id);
		$this->m_pendudukdatang->hapus_data($where, 'pendudukdatang');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('pendudukdatang/index');
	}

	public function edit($id)
	{
		$where = array('id_pendudukdatang' => $id);
		$data['pendudukdatang'] = $this->m_pendudukdatang->edit_data($where, 'pendudukdatang')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_pendudukdatang', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id						  		= $this->input->post('id_pendudukdatang');
		$tgl_pendudukdatang		        = $this->input->post('tgl_pendudukdatang');
		$nama_pendudukdatang		    = $this->input->post('nama_pendudukdatang');
		$tempat_lahir_pendudukdatang    = $this->input->post('tempat_lahir_pendudukdatang');
		$ttl_pendudukdatang             = $this->input->post('ttl_pendudukdatang');
		$pekerjaan_pendudukdatang       = $this->input->post('pekerjaan_pendudukdatang');
		$jenis_kelamin_pendudukdatang	= $this->input->post('jenis_kelamin_pendudukdatang');
		$nik_pendudukdatang	            = $this->input->post('nik_pendudukdatang');
		$alamat_datang_pendudukdatang   = $this->input->post('alamat_datang_pendudukdatang');
		$alamat_asal_pendudukdatang     = $this->input->post('alamat_asal_pendudukdatang');
		$keterangan_pendudukdatang      = $this->input->post('keterangan_pendudukdatang');

		$data = array(
			'tgl_pendudukdatang'             => $tgl_pendudukdatang,
			'nama_pendudukdatang' 		     => $nama_pendudukdatang,
			'tempat_lahir_pendudukdatang'    => $tempat_lahir_pendudukdatang,
			'ttl_pendudukdatang'             => $ttl_pendudukdatang,
			'pekerjaan_pendudukdatang'       => $pekerjaan_pendudukdatang,
			'jenis_kelamin_pendudukdatang'   => $jenis_kelamin_pendudukdatang,
			'nik_pendudukdatang' 	         => $nik_pendudukdatang,
			'alamat_datang_pendudukdatang' 	 => $alamat_datang_pendudukdatang,
			'alamat_asal_pendudukdatang' 	 => $alamat_asal_pendudukdatang,
			'keterangan_pendudukdatang' 	 => $keterangan_pendudukdatang,
		);

		$where = array('id_pendudukdatang' => $id);
		$this->m_pendudukdatang->update_data($where, $data, 'pendudukdatang');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('pendudukdatang/index');
	}

	public function detail($id)
	{
		$this->load->model('m_pendudukdatang');
		$detail = $this->m_pendudukdatang->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_pendudukdatang', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['pendudukdatang'] = $this->m_pendudukdatang->tampil_data("pendudukdatang")->result();
		$this->load->view('print/print_pendudukdatang', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['pendudukdatang'] = $this->m_pendudukdatang->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/pendudukdatang', $data);
		$this->load->view('templates/footer');
	}
}
