<?php
class Blangkobn extends CI_Controller
{
	public function index()
	{
		$data['blangkobn'] = $this->m_blangkobn->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('blangko/blangkobn', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$bulan_register_blangkobn        = $this->input->post('bulan_register_blangkobn');
		$tahun_register_blangkobn        = $this->input->post('tahun_register_blangkobn');
		$rt_blangkobn                    = $this->input->post('rt_blangkobn');
		$tgl_suratpengantar_bn           = $this->input->post('tgl_suratpengantar_bn');
		$nama_blangkobn		             = $this->input->post('nama_blangkobn');
		$jenis_kelamin_blangkobn         = $this->input->post('jenis_kelamin_blangkobn');
		$ttl_blangkobn          		 = $this->input->post('ttl_blangkobn');
		$bangsa_blangkobn                = $this->input->post('bangsa_blangkobn');
		$agama_blangkobn                 = $this->input->post('agama_blangkobn');
		$statusperkawinan_blangkobn      = $this->input->post('statusperkawinan_blangkobn');
		$nik_blangkobn                   = $this->input->post('nik_blangkobn');
		$pekerjaan_blangkobn             = $this->input->post('pekerjaan_blangkobn');
		$alamat_blangkobn                = $this->input->post('alamat_blangkobn');
		$dipergunakan_untuk_blangkobn    = $this->input->post('dipergunakan_untuk_blangkobn');
		$tgl_dibuat_blangkobn            = $this->input->post('tgl_dibuat_blangkobn');

		$data = array(
			'bulan_register_blangkobn'        => $bulan_register_blangkobn,
			'tahun_register_blangkobn'        => $tahun_register_blangkobn,
			'rt_blangkobn'                    => $rt_blangkobn,
			'tgl_suratpengantar_bn'           => $tgl_suratpengantar_bn,
			'nama_blangkobn' 		          => $nama_blangkobn,
			'jenis_kelamin_blangkobn'         => $jenis_kelamin_blangkobn,
			'ttl_blangkobn'          		  => $ttl_blangkobn,
			'bangsa_blangkobn'                => $bangsa_blangkobn,
			'agama_blangkobn'                 => $agama_blangkobn,
			'statusperkawinan_blangkobn'      => $statusperkawinan_blangkobn,
			'nik_blangkobn'                   => $nik_blangkobn,
			'pekerjaan_blangkobn' 	          => $pekerjaan_blangkobn,
			'alamat_blangkobn'                => $alamat_blangkobn,
			'dipergunakan_untuk_blangkobn' 	  => $dipergunakan_untuk_blangkobn,
			'tgl_dibuat_blangkobn'            => $tgl_dibuat_blangkobn,

		);

		$this->m_blangkobn->input_data($data, 'blangkobn');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('blangkobn/index');
	}

	public function hapus($id)
	{
		$where = array('id_blangkobn' => $id);
		$this->m_blangkobn->hapus_data($where, 'blangkobn');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('blangkobn/index');
	}

	public function edit($id)
	{
		$where = array('id_blangkobn' => $id);
		$data['blangkobn'] = $this->m_blangkobn->edit_data($where, 'blangkobn')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_blangkobn', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id					           = $this->input->post('id_blangkobn');
		$bulan_register_blangkobn      = $this->input->post('bulan_register_blangkobn');
		$tahun_register_blangkobn      = $this->input->post('tahun_register_blangkobn');
		$rt_blangkobn                  = $this->input->post('rt_blangkobn');
		$tgl_suratpengantar_bn         = $this->input->post('tgl_suratpengantar_bn');
		$nama_blangkobn		           = $this->input->post('nama_blangkobn');
		$jenis_kelamin_blangkobn       = $this->input->post('jenis_kelamin_blangkobn');
		$ttl_blangkobn          	   = $this->input->post('ttl_blangkobn');
		$bangsa_blangkobn              = $this->input->post('bangsa_blangkobn');
		$agama_blangkobn               = $this->input->post('agama_blangkobn');
		$statusperkawinan_blangkobn    = $this->input->post('statusperkawinan_blangkobn');
		$nik_blangkobn                 = $this->input->post('nik_blangkobn');
		$pekerjaan_blangkobn           = $this->input->post('pekerjaan_blangkobn');
		$alamat_blangkobn              = $this->input->post('alamat_blangkobn');
		$dipergunakan_untuk_blangkobn  = $this->input->post('dipergunakan_untuk_blangkobn');
		$tgl_dibuat_blangkobn          = $this->input->post('tgl_dibuat_blangkobn');

		$data = array(
			'bulan_register_blangkobn'    => $bulan_register_blangkobn,
			'tahun_register_blangkobn'    => $tahun_register_blangkobn,
			'rt_blangkobn'                => $rt_blangkobn,
			'tgl_suratpengantar_bn'       => $tgl_suratpengantar_bn,
			'nama_blangkobn' 		      => $nama_blangkobn,
			'jenis_kelamin_blangkobn'     => $jenis_kelamin_blangkobn,
			'ttl_blangkobn'          		  => $ttl_blangkobn,
			'bangsa_blangkobn'            => $bangsa_blangkobn,
			'agama_blangkobn'             => $agama_blangkobn,
			'statusperkawinan_blangkobn'  => $statusperkawinan_blangkobn,
			'nik_blangkobn'               => $nik_blangkobn,
			'pekerjaan_blangkobn' 	      => $pekerjaan_blangkobn,
			'alamat_blangkobn'            => $alamat_blangkobn,
			'dipergunakan_untuk_blangkobn' 	  => $dipergunakan_untuk_blangkobn,
			'tgl_dibuat_blangkobn'            => $tgl_dibuat_blangkobn,
		);

		$where = array('id_blangkobn' => $id);
		$this->m_blangkobn->update_data($where, $data, 'blangkobn');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('blangkobn/index');
	}

	public function pdf($id)
	{
		$where = array('id_blangkobn' => $id);
		$this->m_blangkobn->pdf_data($where, 'blangkobn');
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
		$this->load->library('pdfgenerator');

		$data['blangkobn'] = $this->m_blangkobn->pdf_data($where, 'blangkobn')->result();
		$this->load->view('pdf/laporan_blangkobn', $data);
		// title dari pdf
		$this->data['title_pdf'] = 'Surat Keterangan Belum Menikah';

		// filename dari pdf ketika didownload
		$file_pdf = 'Surat Keterangan Belum Menikah';
		// setting paper
		$paper = 'F4';
		//orientasi paper potrait / landscape
		$orientation = "portrait";

		$html = $this->load->view('pdf/laporan_blangkobn', $this->data, true);

		// run dompdf
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}

	public function detail($id)
	{
		$this->load->model('m_blangkobn');
		$detail = $this->m_blangkobn->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_blangkobn', $data);
		$this->load->view('templates/footer');
	}
}
