<?php
class Skck extends CI_Controller
{
	public function index()
	{
		$data['skck'] = $this->m_skck->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/skck', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_skck		   	        = $this->input->post('tgl_skck');
		$nama_skck  		        = $this->input->post('nama_skck');
		$tempat_lahir_skck 	        = $this->input->post('tempat_lahir_skck');
		$ttl_skck  		            = $this->input->post('ttl_skck');
		$jenis_kelamin_skck         = $this->input->post('jenis_kelamin_skck');
		$status_perkawinan_skck     = $this->input->post('status_perkawinan_skck');
		$agama_skck       	        = $this->input->post('agama_skck');
		$pendidikan_terakhir_skck   = $this->input->post('pendidikan_terakhir_skck');
		$alamat_skck                = $this->input->post('alamat_skck');
		$nik_skck       	        = $this->input->post('nik_skck');
		$tujuan_skck                = $this->input->post('tujuan_skck');
		$keterangan_skck            = $this->input->post('keterangan_skck');

		$data = array(
			'tgl_skck' 		   	         => $tgl_skck,
			'nama_skck' 		         => $nama_skck,
			'tempat_lahir_skck'          => $tempat_lahir_skck,
			'ttl_skck'   		         => $ttl_skck,
			'jenis_kelamin_skck'         => $jenis_kelamin_skck,
			'status_perkawinan_skck'     => $status_perkawinan_skck,
			'agama_skck' 	   	         => $agama_skck,
			'pendidikan_terakhir_skck'   => $pendidikan_terakhir_skck,
			'alamat_skck'                => $alamat_skck,
			'nik_skck' 	   	             => $nik_skck,
			'tujuan_skck'                => $tujuan_skck,
			'keterangan_skck'            => $keterangan_skck,

		);

		$this->m_skck->input_data($data, 'skck');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('skck/index');
	}

	public function hapus($id)
	{
		$where = array('id_skck' => $id);
		$this->m_skck->hapus_data($where, 'skck');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('skck/index');
	}

	public function edit($id)
	{
		$where = array('id_skck' => $id);
		$data['skck'] = $this->m_skck->edit_data($where, 'skck')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_skck', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id						  	= $this->input->post('id_skck');
		$tgl_skck		   	        = $this->input->post('tgl_skck');
		$nama_skck  		        = $this->input->post('nama_skck');
		$tempat_lahir_skck 	        = $this->input->post('tempat_lahir_skck');
		$ttl_skck  		            = $this->input->post('ttl_skck');
		$jenis_kelamin_skck         = $this->input->post('jenis_kelamin_skck');
		$status_perkawinan_skck     = $this->input->post('status_perkawinan_skck');
		$agama_skck       	        = $this->input->post('agama_skck');
		$pendidikan_terakhir_skck   = $this->input->post('pendidikan_terakhir_skck');
		$alamat_skck                = $this->input->post('alamat_skck');
		$nik_skck       	        = $this->input->post('nik_skck');
		$tujuan_skck                = $this->input->post('tujuan_skck');
		$keterangan_skck            = $this->input->post('keterangan_skck');


		$data = array(
			'tgl_skck' 		   	         => $tgl_skck,
			'nama_skck' 		         => $nama_skck,
			'tempat_lahir_skck'          => $tempat_lahir_skck,
			'ttl_skck'   		         => $ttl_skck,
			'jenis_kelamin_skck'         => $jenis_kelamin_skck,
			'status_perkawinan_skck'     => $status_perkawinan_skck,
			'agama_skck' 	   	         => $agama_skck,
			'pendidikan_terakhir_skck'   => $pendidikan_terakhir_skck,
			'alamat_skck'                => $alamat_skck,
			'nik_skck' 	   	             => $nik_skck,
			'tujuan_skck'                => $tujuan_skck,
			'keterangan_skck'            => $keterangan_skck,
		);

		$where = array('id_skck' => $id);
		$this->m_skck->update_data($where, $data, 'skck');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('skck/index');
	}

	public function detail($id)
	{
		$this->load->model('m_skck');
		$detail = $this->m_skck->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_skck', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['skck'] = $this->m_skck->tampil_data("skck")->result();
		$this->load->view('print/print_skck', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['skck'] = $this->m_skck->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/skck', $data);
		$this->load->view('templates/footer');
	}
}
