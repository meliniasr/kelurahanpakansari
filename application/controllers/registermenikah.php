<?php
class Registermenikah extends CI_Controller
{
	public function index()
	{
		$data['registermenikah'] = $this->m_registermenikah->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/registermenikah', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_menikah		   	 = $this->input->post('tgl_menikah');
		$nama_suami_menikah      = $this->input->post('nama_suami_menikah');
		$tempat_lahir_suami 	 = $this->input->post('tempat_lahir_suami');
		$tgl_lahir_suami 		 = $this->input->post('tgl_lahir_suami');
		$alamat_suami            = $this->input->post('alamat_suami');
		$status_suami            = $this->input->post('status_suami');
		$pekerjaan_menikah       = $this->input->post('pekerjaan_menikah');
		$nama_istri_menikah      = $this->input->post('nama_istri_menikah');
		$tempat_lahir_istri      = $this->input->post('tempat_lahir_istri');
		$tgl_lahir_istri       	 = $this->input->post('tgl_lahir_istri');
		$alamat_istri            = $this->input->post('alamat_istri');
		$status_istri            = $this->input->post('status_istri');
		$keterangan_menikah      = $this->input->post('keterangan_menikah');

		$data = array(
			'tgl_menikah' 		   	 => $tgl_menikah,
			'nama_suami_menikah'     => $nama_suami_menikah,
			'tempat_lahir_suami'     => $tempat_lahir_suami,
			'tgl_lahir_suami'   	 => $tgl_lahir_suami,
			'alamat_suami'           => $alamat_suami,
			'status_suami'           => $status_suami,
			'pekerjaan_menikah' 	 => $pekerjaan_menikah,
			'nama_istri_menikah'     => $nama_istri_menikah,
			'tempat_lahir_istri'     => $tempat_lahir_istri,
			'tgl_lahir_istri' 	   	 => $tgl_lahir_istri,
			'alamat_istri'           => $alamat_istri,
			'status_istri'           => $status_istri,
			'keterangan_menikah'     => $keterangan_menikah,

		);

		$this->m_registermenikah->input_data($data, 'registermenikah');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('registermenikah/index');
	}

	public function hapus($id)
	{
		$where = array('id_menikah' => $id);
		$this->m_registermenikah->hapus_data($where, 'registermenikah');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('registermenikah/index');
	}

	public function edit($id)
	{
		$where = array('id_menikah' => $id);
		$data['registermenikah'] = $this->m_registermenikah->edit_data($where, 'registermenikah')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_registermenikah', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id						 = $this->input->post('id_menikah');
		$tgl_menikah		   	 = $this->input->post('tgl_menikah');
		$nama_suami_menikah      = $this->input->post('nama_suami_menikah');
		$tempat_lahir_suami 	 = $this->input->post('tempat_lahir_suami');
		$tgl_lahir_suami 		 = $this->input->post('tgl_lahir_suami');
		$alamat_suami            = $this->input->post('alamat_suami');
		$status_suami            = $this->input->post('status_suami');
		$pekerjaan_menikah       = $this->input->post('pekerjaan_menikah');
		$nama_istri_menikah      = $this->input->post('nama_istri_menikah');
		$tempat_lahir_istri      = $this->input->post('tempat_lahir_istri');
		$tgl_lahir_istri       	 = $this->input->post('tgl_lahir_istri');
		$alamat_istri            = $this->input->post('alamat_istri');
		$status_istri            = $this->input->post('status_istri');
		$keterangan_menikah      = $this->input->post('keterangan_menikah');

		$data = array(
			'tgl_menikah' 		   	 => $tgl_menikah,
			'nama_suami_menikah'     => $nama_suami_menikah,
			'tempat_lahir_suami'     => $tempat_lahir_suami,
			'tgl_lahir_suami'   	 => $tgl_lahir_suami,
			'alamat_suami'           => $alamat_suami,
			'status_suami'           => $status_suami,
			'pekerjaan_menikah' 	 => $pekerjaan_menikah,
			'nama_istri_menikah'     => $nama_istri_menikah,
			'tempat_lahir_istri'     => $tempat_lahir_istri,
			'tgl_lahir_istri' 	   	 => $tgl_lahir_istri,
			'alamat_istri'           => $alamat_istri,
			'status_istri'           => $status_istri,
			'keterangan_menikah'     => $keterangan_menikah,
		);

		$where = array('id_menikah' => $id);
		$this->m_registermenikah->update_data($where, $data, 'registermenikah');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('registermenikah/index');
	}


	public function detail($id)
	{
		$this->load->model('m_registermenikah');
		$detail = $this->m_registermenikah->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_registermenikah', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['registermenikah'] = $this->m_registermenikah->tampil_data("registermenikah")->result();
		$this->load->view('print/print_registermenikah', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['registermenikah'] = $this->m_registermenikah->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/registermenikah', $data);
		$this->load->view('templates/footer');
	}
}
