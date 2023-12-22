<?php
class Kelahiran extends CI_Controller
{
	public function index()
	{
		$data['kelahiran'] = $this->m_kelahiran->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/kelahiran', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_kelahiran		            = $this->input->post('tgl_kelahiran');
		$nama_anak_kelahiran 		    = $this->input->post('nama_anak_kelahiran');
		$tempat_lahir_kelahiran         = $this->input->post('tempat_lahir_kelahiran');
		$ttl_kelahiran                  = $this->input->post('ttl_kelahiran');
		$jenis_kelamin_kelahiran		= $this->input->post('jenis_kelamin_kelahiran');
		$nama_bapak_kelahiran		    = $this->input->post('nama_bapak_kelahiran');
		$nama_ibu_kelahiran             = $this->input->post('nama_ibu_kelahiran');
		$alamat_kelahiran               = $this->input->post('alamat_kelahiran');
		$keterangan_kelahiran           = $this->input->post('keterangan_kelahiran');

		$data = array(
			'tgl_kelahiran' 		     => $tgl_kelahiran,
			'nama_anak_kelahiran' 		 => $nama_anak_kelahiran,
			'tempat_lahir_kelahiran'     => $tempat_lahir_kelahiran,
			'ttl_kelahiran'              => $ttl_kelahiran,
			'jenis_kelamin_kelahiran' 	 => $jenis_kelamin_kelahiran,
			'nama_bapak_kelahiran'       => $nama_bapak_kelahiran,
			'nama_ibu_kelahiran'         => $nama_ibu_kelahiran,
			'alamat_kelahiran' 	         => $alamat_kelahiran,
			'keterangan_kelahiran' 	     => $keterangan_kelahiran,

		);

		$this->m_kelahiran->input_data($data, 'kelahiran');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('kelahiran/index');
	}

	public function hapus($id)
	{
		$where = array('id_kelahiran' => $id);
		$this->m_kelahiran->hapus_data($where, 'kelahiran');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('kelahiran/index');
	}

	public function edit($id)
	{
		$where = array('id_kelahiran' => $id);
		$data['kelahiran'] = $this->m_kelahiran->edit_data($where, 'kelahiran')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_kelahiran', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id						  		= $this->input->post('id_kelahiran');
		$tgl_kelahiran		            = $this->input->post('tgl_kelahiran');
		$nama_anak_kelahiran 		    = $this->input->post('nama_anak_kelahiran');
		$tempat_lahir_kelahiran         = $this->input->post('tempat_lahir_kelahiran');
		$ttl_kelahiran                  = $this->input->post('ttl_kelahiran');
		$jenis_kelamin_kelahiran		= $this->input->post('jenis_kelamin_kelahiran');
		$nama_bapak_kelahiran		    = $this->input->post('nama_bapak_kelahiran');
		$nama_ibu_kelahiran             = $this->input->post('nama_ibu_kelahiran');
		$alamat_kelahiran               = $this->input->post('alamat_kelahiran');
		$keterangan_kelahiran           = $this->input->post('keterangan_kelahiran');

		$data = array(
			'tgl_kelahiran' 		     => $tgl_kelahiran,
			'nama_anak_kelahiran' 		 => $nama_anak_kelahiran,
			'tempat_lahir_kelahiran'     => $tempat_lahir_kelahiran,
			'ttl_kelahiran'              => $ttl_kelahiran,
			'jenis_kelamin_kelahiran' 	 => $jenis_kelamin_kelahiran,
			'nama_bapak_kelahiran'       => $nama_bapak_kelahiran,
			'nama_ibu_kelahiran'         => $nama_ibu_kelahiran,
			'alamat_kelahiran' 	         => $alamat_kelahiran,
			'keterangan_kelahiran' 	     => $keterangan_kelahiran,
		);

		$where = array('id_kelahiran' => $id);
		$this->m_kelahiran->update_data($where, $data, 'kelahiran');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('kelahiran/index');
	}

	public function detail($id)
	{
		$this->load->model('m_kelahiran');
		$detail = $this->m_kelahiran->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_kelahiran', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['kelahiran'] = $this->m_kelahiran->tampil_data("kelahiran")->result();
		$this->load->view('print/print_kelahiran', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['kelahiran'] = $this->m_kelahiran->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/kelahiran', $data);
		$this->load->view('templates/footer');
	}
}
