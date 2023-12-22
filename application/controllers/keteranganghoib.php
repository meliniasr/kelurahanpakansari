<?php
class Keteranganghoib extends CI_Controller
{
	public function index()
	{
		$data['keteranganghoib'] = $this->m_keteranganghoib->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/keteranganghoib', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_ghoib 		        = $this->input->post('tgl_ghoib');
		$nama_ghoib 		    = $this->input->post('nama_ghoib');
		$tempat_lahir_ghoib     = $this->input->post('tempat_lahir_ghoib');
		$ttl_lahir_ghoib        = $this->input->post('ttl_lahir_ghoib');
		$pekerjaan_ghoib        = $this->input->post('pekerjaan_ghoib');
		$jenis_kelamin_ghoib    = $this->input->post('jenis_kelamin_ghoib');
		$agama_ghoib            = $this->input->post('agama_ghoib');
		$alamat_ghoib           = $this->input->post('alamat_ghoib');
		$no_suratnikah_ghoib    = $this->input->post('no_suratnikah_ghoib');
		$keterangan_ghoib        = $this->input->post('keterangan_ghoib');

		$data = array(
			'tgl_ghoib' 		    => $tgl_ghoib,
			'nama_ghoib' 		    => $nama_ghoib,
			'tempat_lahir_ghoib'    => $tempat_lahir_ghoib,
			'ttl_lahir_ghoib'       => $ttl_lahir_ghoib,
			'pekerjaan_ghoib' 	    => $pekerjaan_ghoib,
			'jenis_kelamin_ghoib'   => $jenis_kelamin_ghoib,
			'agama_ghoib'           => $agama_ghoib,
			'alamat_ghoib' 	        => $alamat_ghoib,
			'no_suratnikah_ghoib' 	=> $no_suratnikah_ghoib,
			'keterangan_ghoib' 	    => $keterangan_ghoib,

		);

		$this->m_keteranganghoib->input_data($data, 'keteranganghoib');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('keteranganghoib/index');
	}

	public function hapus($id)
	{
		$where = array('id_ghoib' => $id);
		$this->m_keteranganghoib->hapus_data($where, 'keteranganghoib');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('keteranganghoib/index');
	}

	public function edit($id)
	{
		$where = array('id_ghoib' => $id);
		$data['keteranganghoib'] = $this->m_keteranganghoib->edit_data($where, 'keteranganghoib')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_keteranganghoib', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id						= $this->input->post('id_ghoib');
		$tgl_ghoib 		        = $this->input->post('tgl_ghoib');
		$nama_ghoib 		    = $this->input->post('nama_ghoib');
		$tempat_lahir_ghoib     = $this->input->post('tempat_lahir_ghoib');
		$ttl_lahir_ghoib        = $this->input->post('ttl_lahir_ghoib');
		$pekerjaan_ghoib        = $this->input->post('pekerjaan_ghoib');
		$jenis_kelamin_ghoib    = $this->input->post('jenis_kelamin_ghoib');
		$agama_ghoib            = $this->input->post('agama_ghoib');
		$alamat_ghoib           = $this->input->post('alamat_ghoib');
		$no_suratnikah_ghoib    = $this->input->post('no_suratnikah_ghoib');
		$keterangan_ghoib        = $this->input->post('keterangan_ghoib');

		$data = array(
			'tgl_ghoib' 		    => $tgl_ghoib,
			'nama_ghoib' 		    => $nama_ghoib,
			'tempat_lahir_ghoib'    => $tempat_lahir_ghoib,
			'ttl_lahir_ghoib'       => $ttl_lahir_ghoib,
			'pekerjaan_ghoib' 	    => $pekerjaan_ghoib,
			'jenis_kelamin_ghoib'   => $jenis_kelamin_ghoib,
			'agama_ghoib'           => $agama_ghoib,
			'alamat_ghoib' 	        => $alamat_ghoib,
			'no_suratnikah_ghoib' 	=> $no_suratnikah_ghoib,
			'keterangan_ghoib' 	    => $keterangan_ghoib,
		);

		$where = array('id_ghoib' => $id);
		$this->m_keteranganghoib->update_data($where, $data, 'keteranganghoib');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('keteranganghoib/index');
	}


	public function detail($id)
	{
		$this->load->model('m_keteranganghoib');
		$detail = $this->m_keteranganghoib->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_keteranganghoib', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['keteranganghoib'] = $this->m_keteranganghoib->tampil_data("keteranganghoib")->result();
		$this->load->view('print/print_keteranganghoib', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['keteranganghoib'] = $this->m_keteranganghoib->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/keteranganghoib', $data);
		$this->load->view('templates/footer');
	}
}
