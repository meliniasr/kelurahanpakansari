<?php
class Kematian extends CI_Controller
{
	public function index()
	{
		$data['kematian'] = $this->m_kematian->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/kematian', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_keterangankematian		= $this->input->post('tgl_keterangankematian');
		$nama_kematian		        = $this->input->post('nama_kematian');
		$tempat_lahir_kematian      = $this->input->post('tempat_lahir_kematian');
		$ttl_kematian               = $this->input->post('ttl_kematian');
		$jenis_kelamin_kematian		= $this->input->post('jenis_kelamin_kematian');
		$agama_kematian		        = $this->input->post('agama_kematian');
		$alamat_kematian            = $this->input->post('alamat_kematian');
		$keterangan_kematian        = $this->input->post('keterangan_kematian');

		$data = array(
			'tgl_keterangankematian' => $tgl_keterangankematian,
			'nama_kematian' 		 => $nama_kematian,
			'tempat_lahir_kematian'  => $tempat_lahir_kematian,
			'ttl_kematian' 	         => $ttl_kematian,
			'jenis_kelamin_kematian' => $jenis_kelamin_kematian,
			'agama_kematian'         => $agama_kematian,
			'alamat_kematian' 	     => $alamat_kematian,
			'keterangan_kematian' 	 => $keterangan_kematian,

		);

		$this->m_kematian->input_data($data, 'kematian');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('kematian/index');
	}

	public function hapus($id)
	{
		$where = array('id_kematian' => $id);
		$this->m_kematian->hapus_data($where, 'kematian');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('kematian/index');
	}

	public function edit($id)
	{
		$where = array('id_kematian' => $id);
		$data['kematian'] = $this->m_kematian->edit_data($where, 'kematian')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_kematian', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id						  	= $this->input->post('id_kematian');
		$tgl_keterangankematian		= $this->input->post('tgl_keterangankematian');
		$nama_kematian		        = $this->input->post('nama_kematian');
		$tempat_lahir_kematian      = $this->input->post('tempat_lahir_kematian');
		$ttl_kematian               = $this->input->post('ttl_kematian');
		$jenis_kelamin_kematian		= $this->input->post('jenis_kelamin_kematian');
		$agama_kematian		        = $this->input->post('agama_kematian');
		$alamat_kematian            = $this->input->post('alamat_kematian');
		$keterangan_kematian        = $this->input->post('keterangan_kematian');

		$data = array(
			'tgl_keterangankematian' => $tgl_keterangankematian,
			'nama_kematian' 		 => $nama_kematian,
			'tempat_lahir_kematian'  => $tempat_lahir_kematian,
			'ttl_kematian' 	         => $ttl_kematian,
			'jenis_kelamin_kematian' => $jenis_kelamin_kematian,
			'agama_kematian'         => $agama_kematian,
			'alamat_kematian ' 	     => $alamat_kematian,
			'keterangan_kematian ' 	 => $keterangan_kematian,
		);

		$where = array('id_kematian' => $id);
		$this->m_kematian->update_data($where, $data, 'kematian');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('kematian/index');
	}

	public function detail($id)
	{
		$this->load->model('m_kematian');
		$detail = $this->m_kematian->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_kematian', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['kematian'] = $this->m_kematian->tampil_data("kematian")->result();
		$this->load->view('print/print_kematian', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['kematian'] = $this->m_kematian->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/kematian', $data);
		$this->load->view('templates/footer');
	}
}
