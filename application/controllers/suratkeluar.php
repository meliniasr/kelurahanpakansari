<?php
class Suratkeluar extends CI_Controller
{
	public function index()
	{
		$data['suratkeluar'] = $this->m_suratkeluar->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/suratkeluar', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$nama_instansi_sk 		   	 = $this->input->post('nama_instansi_sk');
		$no_suratkeluar              = $this->input->post('no_suratkeluar');
		$tgl_suratkeluar           	 = $this->input->post('tgl_suratkeluar');
		$prihal_suratkeluar       	 = $this->input->post('prihal_suratkeluar');
		$penanggungjawab_suratkeluar = $this->input->post('penanggungjawab_suratkeluar');
		$tgl_pengiriman_sk			 = $this->input->post('tgl_pengiriman_sk');
		$keterangan_suratkeluar      = $this->input->post('keterangan_suratkeluar');

		$data = array(
			'nama_instansi_sk' 		 	 => $nama_instansi_sk,
			'no_suratkeluar' 		 	 => $no_suratkeluar,
			'tgl_suratkeluar'            => $tgl_suratkeluar,
			'prihal_suratkeluar'         => $prihal_suratkeluar,
			'penanggungjawab_suratkeluar' => $penanggungjawab_suratkeluar,
			'tgl_pengiriman_sk' 		 => $tgl_pengiriman_sk,
			'keterangan_suratkeluar' 	 => $keterangan_suratkeluar,

		);

		$this->m_suratmasuk->input_data($data, 'suratkeluar');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('suratkeluar/index');
	}

	public function hapus($id)
	{
		$where = array('id_suratkeluar' => $id);
		$this->m_suratkeluar->hapus_data($where, 'suratkeluar');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('suratkeluar/index');
	}

	public function edit($id)
	{
		$where = array('id_suratkeluar' => $id);
		$data['suratkeluar'] = $this->m_suratkeluar->edit_data($where, 'suratkeluar')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_suratkeluar', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id						  	 = $this->input->post('id_suratkeluar');
		$nama_instansi_sk 		   	 = $this->input->post('nama_instansi_sk');
		$no_suratkeluar              = $this->input->post('no_suratkeluar');
		$tgl_suratkeluar           	 = $this->input->post('tgl_suratkeluar');
		$prihal_suratkeluar       	 = $this->input->post('prihal_suratkeluar');
		$penanggungjawab_suratkeluar = $this->input->post('penanggungjawab_suratkeluar');
		$tgl_pengiriman_sk			 = $this->input->post('tgl_pengiriman_sk');
		$keterangan_suratkeluar      = $this->input->post('keterangan_suratkeluar');

		$data = array(
			'nama_instansi_sk' 		 	 => $nama_instansi_sk,
			'no_suratkeluar' 		 	 => $no_suratkeluar,
			'tgl_suratkeluar'            => $tgl_suratkeluar,
			'prihal_suratkeluar'         => $prihal_suratkeluar,
			'penanggungjawab_suratkeluar' => $penanggungjawab_suratkeluar,
			'tgl_pengiriman_sk' 		 => $tgl_pengiriman_sk,
			'keterangan_suratkeluar' 	 => $keterangan_suratkeluar,
		);

		$where = array('id_suratkeluar' => $id);
		$this->m_suratkeluar->update_data($where, $data, 'suratkeluar');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('suratkeluar/index');
	}


	public function detail($id)
	{
		$this->load->model('m_suratkeluar');
		$detail = $this->m_suratkeluar->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_suratkeluar', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['suratkeluar'] = $this->m_suratkeluar->tampil_data("suratkeluar")->result();
		$this->load->view('print/print_suratkeluar', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['suratkeluar'] = $this->m_suratkeluar->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/suratkeluar', $data);
		$this->load->view('templates/footer');
	}
}
