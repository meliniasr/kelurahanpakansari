<?php
class Permohonanproposal extends CI_Controller
{
	public function index()
	{
		$data['permohonanproposal'] = $this->m_permohonanproposal->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/permohonanproposal', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_permohonanproposal 	= $this->input->post('tgl_permohonanproposal');
		$perihal_proposal		    = $this->input->post('perihal_proposal');
		$no_proposal  				= $this->input->post('no_proposal');
		$tgl_proposal     			= $this->input->post('tgl_proposal');
		$penanggungjawab_proposal   = $this->input->post('penanggungjawab_proposal');
		$pemohon_proposal 			= $this->input->post('pemohon_proposal');
		$alamat_proposal 			= $this->input->post('alamat_proposal');
		$keterangan_proposal 		= $this->input->post('keterangan_proposal');

		$data = array(
			'tgl_permohonanproposal'  	 => $tgl_permohonanproposal,
			'perihal_proposal' 			 => $perihal_proposal,
			'no_proposal'  				 => $no_proposal,
			'tgl_proposal'     			 => $tgl_proposal,
			'penanggungjawab_proposal' 	 => $penanggungjawab_proposal,
			'pemohon_proposal' 			 => $pemohon_proposal,
			'alamat_proposal' 			 => $alamat_proposal,
			'keterangan_proposal' 		 => $keterangan_proposal,
		);

		$this->m_permohonanproposal->input_data($data, 'permohonanproposal');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('permohonanproposal/index');
	}

	public function hapus($id)
	{
		$where = array('id_permohonanproposal' => $id);
		$this->m_permohonanproposal->hapus_data($where, 'permohonanproposal');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('permohonanproposal/index');
	}

	public function edit($id)
	{
		$where = array('id_permohonanproposal' => $id);
		$data['permohonanproposal'] = $this->m_permohonanproposal->edit_data($where, 'permohonanproposal')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_permohonanproposal', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id						  	= $this->input->post('id_permohonanproposal');
		$tgl_permohonanproposal 	= $this->input->post('tgl_permohonanproposal');
		$perihal_proposal		    = $this->input->post('perihal_proposal');
		$no_proposal  				= $this->input->post('no_proposal');
		$tgl_proposal     			= $this->input->post('tgl_proposal');
		$penanggungjawab_proposal   = $this->input->post('penanggungjawab_proposal');
		$pemohon_proposal 			= $this->input->post('pemohon_proposal');
		$alamat_proposal 			= $this->input->post('alamat_proposal');
		$keterangan_proposal 		= $this->input->post('keterangan_proposal');

		$data = array(
			'tgl_permohonanproposal'  	 => $tgl_permohonanproposal,
			'perihal_proposal' 			 => $perihal_proposal,
			'no_proposal'  				 => $no_proposal,
			'tgl_proposal'     			 => $tgl_proposal,
			'penanggungjawab_proposal' 	 => $penanggungjawab_proposal,
			'pemohon_proposal' 			 => $pemohon_proposal,
			'alamat_proposal' 			 => $alamat_proposal,
			'keterangan_proposal' 		 => $keterangan_proposal,
		);

		$where = array('id_permohonanproposal' => $id);
		$this->m_permohonanproposal->update_data($where, $data, 'permohonanproposal');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('permohonanproposal/index');
	}


	public function detail($id)
	{
		$this->load->model('m_permohonanproposal');
		$detail = $this->m_permohonanproposal->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_permohonanproposal', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['permohonanproposal'] = $this->m_permohonanproposal->tampil_data("permohonanproposal")->result();
		$this->load->view('print/print_permohonanproposal', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['permohonanproposal'] = $this->m_permohonanproposal->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/permohonanproposal', $data);
		$this->load->view('templates/footer');
	}
}
