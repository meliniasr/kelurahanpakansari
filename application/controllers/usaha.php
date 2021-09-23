<?php
class Usaha extends CI_Controller
{
	public function index()
	{
		$data['usaha'] = $this->m_usaha->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/usaha', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_usaha		            = $this->input->post('tgl_usaha');
		$nama_usaha	                = $this->input->post('nama_usaha');
		$tempat_lahir_usaha         = $this->input->post('tempat_lahir_usaha');
		$ttl_usaha                  = $this->input->post('ttl_usaha');
		$pekerjaan_usaha            = $this->input->post('pekerjaan_usaha');
		$alamat_usaha               = $this->input->post('alamat_usaha');
		$no_ktp_usaha               = $this->input->post('no_ktp_usaha');
		$jenis_usaha                = $this->input->post('jenis_usaha');
		$statuskepemilikan_usaha    = $this->input->post('statuskepemilikan_usaha');
		$bank_usaha                 = $this->input->post('bank_usaha');
		$lokasi_usaha               = $this->input->post('bank_usaha');
		$keterangan_usaha           = $this->input->post('bank_usaha');

		$data = array(
			'tgl_usaha' 		        => $tgl_usaha,
			'nama_usaha' 		        => $nama_usaha,
			'tempat_lahir_usaha'        => $tempat_lahir_usaha,
			'ttl_usaha'                 => $ttl_usaha,
			'pekerjaan_usaha' 	        => $pekerjaan_usaha,
			'alamat_usaha'              => $alamat_usaha,
			'no_ktp_usaha'              => $no_ktp_usaha,
			'jenis_usaha' 	            => $jenis_usaha,
			'statuskepemilikan_usaha' 	=> $statuskepemilikan_usaha,
			'bank_usaha' 	            => $bank_usaha,
			'lokasi_usaha' 	            => $lokasi_usaha,
			'keterangan_usaha' 	        => $keterangan_usaha,

		);

		$this->m_usaha->input_data($data, 'usaha');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('usaha/index');
	}

	public function hapus($id)
	{
		$where = array('id_usaha' => $id);
		$this->m_usaha->hapus_data($where, 'usaha');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('usaha/index');
	}

	public function edit($id)
	{
		$where = array('id_usaha' => $id);
		$data['usaha'] = $this->m_usaha->edit_data($where, 'usaha')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_usaha', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id						    = $this->input->post('id_usaha');
		$tgl_usaha		            = $this->input->post('tgl_usaha');
		$nama_usaha	                = $this->input->post('nama_usaha');
		$tempat_lahir_usaha         = $this->input->post('tempat_lahir_usaha');
		$ttl_usaha                  = $this->input->post('ttl_usaha');
		$pekerjaan_usaha            = $this->input->post('pekerjaan_usaha');
		$alamat_usaha               = $this->input->post('alamat_usaha');
		$no_ktp_usaha               = $this->input->post('no_ktp_usaha');
		$jenis_usaha                = $this->input->post('jenis_usaha');
		$statuskepemilikan_usaha    = $this->input->post('statuskepemilikan_usaha');
		$bank_usaha                 = $this->input->post('bank_usaha');
		$lokasi_usaha               = $this->input->post('bank_usaha');
		$keterangan_usaha           = $this->input->post('bank_usaha');

		$data = array(
			'tgl_usaha' 		        => $tgl_usaha,
			'nama_usaha' 		        => $nama_usaha,
			'tempat_lahir_usaha'        => $tempat_lahir_usaha,
			'ttl_usaha'                 => $ttl_usaha,
			'pekerjaan_usaha' 	        => $pekerjaan_usaha,
			'alamat_usaha'              => $alamat_usaha,
			'no_ktp_usaha'              => $no_ktp_usaha,
			'jenis_usaha' 	            => $jenis_usaha,
			'statuskepemilikan_usaha' 	=> $statuskepemilikan_usaha,
			'bank_usaha' 	            => $bank_usaha,
			'lokasi_usaha' 	            => $lokasi_usaha,
			'keterangan_usaha' 	        => $keterangan_usaha,
		);

		$where = array('id_usaha' => $id);
		$this->m_usaha->update_data($where, $data, 'usaha');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('usaha/index');
	}


	public function detail($id)
	{
		$this->load->model('m_usaha');
		$detail = $this->m_usaha->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_usaha', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['usaha'] = $this->m_usaha->tampil_data("usaha")->result();
		$this->load->view('print/print_usaha', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['usaha'] = $this->m_usaha->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/usaha', $data);
		$this->load->view('templates/footer');
	}
}
