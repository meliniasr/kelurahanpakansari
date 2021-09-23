<?php
class Rumahtinggal extends CI_Controller
{
	public function index()
	{
		$data['rumahtinggal'] = $this->m_rumahtinggal->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/rumahtinggal', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_rt		   	 	= $this->input->post('tgl_rt');
		$nama_rt      		= $this->input->post('nama_rt');
		$tempat_lahir_rt	= $this->input->post('tempat_lahir_rt');
		$tgl_lahir_rt 		= $this->input->post('tgl_lahir_rt');
		$pekerjaan_rt       = $this->input->post('pekerjaan_rt');
		$jenis_kelamin_rt   = $this->input->post('jenis_kelamin_rt');
		$agama_rt     		= $this->input->post('agama_rt');
		$alamat_rt     		= $this->input->post('alamat_rt');
		$diperumahan_rt     = $this->input->post('diperumahan_rt');
		$keterangan_rt      = $this->input->post('keterangan_rt');

		$data = array(
			'tgl_rt' 		   	 	=> $tgl_rt,
			'nama_rt'     			=> $nama_rt,
			'tempat_lahir_rt'   	=> $tempat_lahir_rt,
			'tgl_lahir_rt'   		=> $tgl_lahir_rt,
			'pekerjaan_rt'      	=> $pekerjaan_rt,
			'jenis_kelamin_rt'  	=> $jenis_kelamin_rt,
			'agama_rt' 	 			=> $agama_rt,
			'alamat_rt'     		=> $alamat_rt,
			'diperumahan_rt'   		=> $diperumahan_rt,
			'keterangan_rt' 		=> $keterangan_rt,

		);

		$this->m_rumahtinggal->input_data($data, 'rumahtinggal');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('rumahtinggal/index');
	}

	public function hapus($id)
	{
		$where = array('id_rt' => $id);
		$this->m_rumahtinggal->hapus_data($where, 'rumahtinggal');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('rumahtinggal/index');
	}

	public function edit($id)
	{
		$where = array('id_rt' => $id);
		$data['rumahtinggal'] = $this->m_rumahtinggal->edit_data($where, 'rumahtinggal')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_rumahtinggal', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id					= $this->input->post('id_rt');
		$tgl_rt		   	 	= $this->input->post('tgl_rt');
		$nama_rt      		= $this->input->post('nama_rt');
		$tempat_lahir_rt	= $this->input->post('tempat_lahir_rt');
		$tgl_lahir_rt 		= $this->input->post('tgl_lahir_rt');
		$pekerjaan_rt       = $this->input->post('pekerjaan_rt');
		$jenis_kelamin_rt   = $this->input->post('jenis_kelamin_rt');
		$agama_rt     		= $this->input->post('agama_rt');
		$alamat_rt     		= $this->input->post('alamat_rt');
		$diperumahan_rt     = $this->input->post('diperumahan_rt');
		$keterangan_rt      = $this->input->post('keterangan_rt');

		$data = array(
			'tgl_rt' 		   	 	=> $tgl_rt,
			'nama_rt'     			=> $nama_rt,
			'tempat_lahir_rt'   	=> $tempat_lahir_rt,
			'tgl_lahir_rt'   		=> $tgl_lahir_rt,
			'pekerjaan_rt'      	=> $pekerjaan_rt,
			'jenis_kelamin_rt'  	=> $jenis_kelamin_rt,
			'agama_rt' 	 			=> $agama_rt,
			'alamat_rt'     		=> $alamat_rt,
			'diperumahan_rt'   		=> $diperumahan_rt,
			'keterangan_rt' 		=> $keterangan_rt,

		);

		$where = array('id_rt' => $id);
		$this->m_rumahtinggal->update_data($where, $data, 'rumahtinggal');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('rumahtinggal/index');
	}


	public function detail($id)
	{
		$this->load->model('m_rumahtinggal');
		$detail = $this->m_rumahtinggal->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_rumahtinggal', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['rumahtinggal'] = $this->m_rumahtinggal->tampil_data("rumahtinggal")->result();
		$this->load->view('print/print_rumahtinggal', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['rumahtinggal'] = $this->m_rumahtinggal->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/rumahtinggal', $data);
		$this->load->view('templates/footer');
	}
}
