<?php
class Ajb extends CI_Controller
{
	public function index()
	{
		$data['ajb'] = $this->m_ajb->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/ajb', $data);
		$this->load->view('templates/footer');
	}

 	public function tambah_aksi()
	{
		$tgl_ajb		    = $this->input->post('tgl_ajb');
		$nama_penjual_ajb   = $this->input->post('nama_penjual_ajb');
		$kepemilikan_ajb    = $this->input->post('kepemilikan_ajb');
		$alamat_ajb         = $this->input->post('alamat_ajb');
		$nama_pembeli_ajb	= $this->input->post('nama_pembeli_ajb');
		$nama_letter_ajb    = $this->input->post('nama_letter_ajb');
		$no_sppt_ajb        = $this->input->post('no_sppt_ajb');
		$luastanah_ajb      = $this->input->post('luastanah_ajb');
		$no_sertifikat_ajb  = $this->input->post('no_sertifikat_ajb');
		$lokasitanah_ajb    = $this->input->post('lokasitanah_ajb');
		$keterangan_ajb	    = $this->input->post('keterangan_ajb');

		$data = array(
			'tgl_ajb' 		     => $tgl_ajb,
			'nama_penjual_ajb'   => $nama_penjual_ajb,
			'kepemilikan_ajb'    => $kepemilikan_ajb,
			'alamat_ajb'         => $alamat_ajb,
			'nama_pembeli_ajb'   => $nama_pembeli_ajb,
			'nama_letter_ajb'    => $nama_letter_ajb,
			'no_sppt_ajb'        => $no_sppt_ajb,
			'luastanah_ajb'      => $luastanah_ajb,
			'no_sertifikat_ajb'  => $no_sertifikat_ajb,
			'lokasitanah_ajb'    => $lokasitanah_ajb,
			'keterangan_ajb'     => $keterangan_ajb,
		);

		$this->m_ajb->input_data($data, 'ajb');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('ajb/index');
	}

	public function hapus($id)
	{
		$where = array('id_ajb' => $id);
		$this->m_ajb->hapus_data($where, 'ajb');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('ajb/index');
	}

	public function edit($id)
	{
		$where = array('id_ajb' => $id);
		$data['ajb'] = $this->m_ajb->edit_data($where, 'ajb')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_ajb', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id					= $this->input->post('id_ajb');
		$tgl_ajb		    = $this->input->post('tgl_ajb');
		$nama_penjual_ajb   = $this->input->post('nama_penjual_ajb');
		$kepemilikan_ajb    = $this->input->post('kepemilikan_ajb');
		$alamat_ajb         = $this->input->post('alamat_ajb');
		$nama_pembeli_ajb	= $this->input->post('nama_pembeli_ajb');
		$nama_letter_ajb    = $this->input->post('nama_letter_ajb');
		$no_sppt_ajb        = $this->input->post('no_sppt_ajb');
		$luastanah_ajb      = $this->input->post('luastanah_ajb');
		$no_sertifikat_ajb  = $this->input->post('no_sertifikat_ajb');
		$lokasitanah_ajb    = $this->input->post('lokasitanah_ajb');
		$keterangan_ajb	    = $this->input->post('keterangan_ajb');

		$data = array(
			'tgl_ajb' 		     => $tgl_ajb,
			'nama_penjual_ajb'   => $nama_penjual_ajb,
			'kepemilikan_ajb'    => $kepemilikan_ajb,
			'alamat_ajb'         => $alamat_ajb,
			'nama_pembeli_ajb'   => $nama_pembeli_ajb,
			'nama_letter_ajb' 	 => $nama_letter_ajb,
			'no_sppt_ajb'        => $no_sppt_ajb,
			'luastanah_ajb'      => $luastanah_ajb,
			'no_sertifikat_ajb'  => $no_sertifikat_ajb,
			'lokasitanah_ajb'    => $lokasitanah_ajb,
			'keterangan_ajb'     => $keterangan_ajb,

		);

		$where = array('id_ajb' => $id);
		$this->m_ajb->update_data($where, $data, 'ajb');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('ajb/index');
	}

	public function detail($id)
	{
		$this->load->model('m_ajb');
		$detail = $this->m_ajb->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_ajb', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['ajb'] = $this->m_ajb->tampil_data("ajb")->result();
		$this->load->view('print/print_ajb', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['ajb'] = $this->m_ajb->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/ajb', $data);
		$this->load->view('templates/footer');
	}
}
