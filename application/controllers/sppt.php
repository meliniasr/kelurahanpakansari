<?php
class Sppt extends CI_Controller
{
	public function index()
	{
		$data['sppt'] = $this->m_sppt->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/sppt', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_sppt		   	= $this->input->post('tgl_sppt');
		$nama_sppt  		= $this->input->post('nama_sppt');
		$tempat_lahir_sppt 	= $this->input->post('tempat_lahir_sppt');
		$ttl_sppt   		= $this->input->post('ttl_sppt');
		$jenis_kelamin_sppt = $this->input->post('jenis_kelamin_sppt');
		$bukti_kepemilikan  = $this->input->post('bukti_kepemilikan');
		$alamat_sppt       	= $this->input->post('alamat_sppt');
		$lokasitanah_sppt   = $this->input->post('lokasitanah_sppt');
		$luas_tanah_sppt    = $this->input->post('luas_tanah_sppt');

		$data = array(
			'tgl_sppt' 		   	 => $tgl_sppt,
			'nama_sppt' 		 => $nama_sppt,
			'tempat_lahir_sppt'  => $tempat_lahir_sppt,
			'ttl_sppt'   		 => $ttl_sppt,
			'jenis_kelamin_sppt' => $jenis_kelamin_sppt,
			'bukti_kepemilikan'  => $bukti_kepemilikan,
			'alamat_sppt' 	   	 => $alamat_sppt,
			'lokasitanah_sppt'   => $lokasitanah_sppt,
			'luas_tanah_sppt'    => $luas_tanah_sppt,

		);

		$this->m_sppt->input_data($data, 'sppt');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('sppt/index');
	}

	public function hapus($id)
	{
		$where = array('id_sppt' => $id);
		$this->m_sppt->hapus_data($where, 'sppt');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('sppt/index');
	}

	public function edit($id)
	{
		$where = array('id_sppt' => $id);
		$data['sppt'] = $this->m_sppt->edit_data($where, 'sppt')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_sppt', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id					= $this->input->post('id_sppt');
		$tgl_sppt		   	= $this->input->post('tgl_sppt');
		$nama_sppt  		= $this->input->post('nama_sppt');
		$tempat_lahir_sppt 	= $this->input->post('tempat_lahir_sppt');
		$ttl_sppt   		= $this->input->post('ttl_sppt');
		$jenis_kelamin_sppt = $this->input->post('jenis_kelamin_sppt');
		$bukti_kepemilikan  = $this->input->post('bukti_kepemilikan');
		$alamat_sppt       	= $this->input->post('alamat_sppt');
		$lokasitanah_sppt   = $this->input->post('lokasitanah_sppt');
		$luas_tanah_sppt    = $this->input->post('luas_tanah_sppt');

		$data = array(
			'tgl_sppt' 		   	 => $tgl_sppt,
			'nama_sppt' 		 => $nama_sppt,
			'tempat_lahir_sppt'  => $tempat_lahir_sppt,
			'ttl_sppt'   		 => $ttl_sppt,
			'jenis_kelamin_sppt' => $jenis_kelamin_sppt,
			'bukti_kepemilikan'  => $bukti_kepemilikan,
			'alamat_sppt' 	   	 => $alamat_sppt,
			'lokasitanah_sppt'   => $lokasitanah_sppt,
			'luas_tanah_sppt'    => $luas_tanah_sppt,

		);

		$where = array('id_sppt' => $id);
		$this->m_sppt->update_data($where, $data, 'sppt');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('sppt/index');
	}

	public function detail($id)
	{
		$this->load->model('m_sppt');
		$detail = $this->m_sppt->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_sppt', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['sppt'] = $this->m_sppt->tampil_data("sppt")->result();
		$this->load->view('print/print_sppt', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['sppt'] = $this->m_sppt->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/sppt', $data);
		$this->load->view('templates/footer');
	}
}
