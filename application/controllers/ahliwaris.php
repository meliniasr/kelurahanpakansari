<?php
class Ahliwaris extends CI_Controller
{
	public function index()
	{
		$data['ahliwaris'] = $this->m_ahliwaris->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/ahliwaris', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_ahliwaris		      = $this->input->post('tgl_ahliwaris');
		$nama_almarhum_ahliwaris  = $this->input->post('nama_almarhum_ahliwaris');
		$nama_ahliwaris           = $this->input->post('nama_ahliwaris');
		$alamat_ahliwaris         = $this->input->post('alamat_ahliwaris');
		$keterangan_ahliwaris	  = $this->input->post('keterangan_ahliwaris');

		$data = array(
			'tgl_ahliwaris' 		   => $tgl_ahliwaris,
			'nama_almarhum_ahliwaris'  => $nama_almarhum_ahliwaris,
			'nama_ahliwaris'           => $nama_ahliwaris,
			'alamat_ahliwaris'         => $alamat_ahliwaris,
			'keterangan_ahliwaris'     => $keterangan_ahliwaris,
		);

		$this->m_ahliwaris->input_data($data, 'ahliwaris');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('ahliwaris/index');
	}

	public function hapus($id)
	{
		$where = array('id_ahliwaris' => $id);
		$this->m_ahliwaris->hapus_data($where, 'ahliwaris');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('ahliwaris/index');
	}

	public function edit($id)
	{
		$where = array('id_ahliwaris' => $id);
		$data['ahliwaris'] = $this->m_ahliwaris->edit_data($where, 'ahliwaris')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_ahliwaris', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id						  = $this->input->post('id_ahliwaris');
		$tgl_ahliwaris		      = $this->input->post('tgl_ahliwaris');
		$nama_almarhum_ahliwaris  = $this->input->post('nama_almarhum_ahliwaris');
		$nama_ahliwaris           = $this->input->post('nama_ahliwaris');
		$alamat_ahliwaris         = $this->input->post('alamat_ahliwaris');
		$keterangan_ahliwaris	  = $this->input->post('keterangan_ahliwaris');

		$data = array(
			'tgl_ahliwaris' 		   => $tgl_ahliwaris,
			'nama_almarhum_ahliwaris'  => $nama_almarhum_ahliwaris,
			'nama_ahliwaris'           => $nama_ahliwaris,
			'alamat_ahliwaris'         => $alamat_ahliwaris,
			'keterangan_ahliwaris'     => $keterangan_ahliwaris,
		);

		$where = array('id_ahliwaris' => $id);
		$this->m_ahliwaris->update_data($where, $data, 'ahliwaris');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('ahliwaris/index');
	}


	public function detail($id)
	{
		$this->load->model('m_ahliwaris');
		$detail = $this->m_ahliwaris->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_ahliwaris', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['ahliwaris'] = $this->m_ahliwaris->tampil_data("ahliwaris")->result();
		$this->load->view('print/print_ahliwaris', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['ahliwaris'] = $this->m_ahliwaris->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register/ahliwaris', $data);
		$this->load->view('templates/footer');
	}
}
