<?php
class Skl extends CI_Controller
{
	public function index()
	{
		$data['skl'] = $this->m_skl->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('blangko/skl', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$bulan_register_skl		 = $this->input->post('bulan_register_skl');
		$tahun_register_skl		 = $this->input->post('tahun_register_skl');
		$rt_skl					 = $this->input->post('rt_skl');
		$tgl_suratpengantar_skl	 = $this->input->post('tgl_suratpengantar_skl');
		$kk_skl					 = $this->input->post('kk_skl');
		$surat_rumahsakit		 = $this->input->post('surat_rumahsakit');
		$no_aktanikah		     = $this->input->post('no_aktanikah');
		$tgl_dikeluarkan_akta	 = $this->input->post('tgl_dikeluarkan_akta');
		$tgl_dikeluarkan_skl	 = $this->input->post('tgl_dikeluarkan_skl');
		$jenis_kelamin_anak      = $this->input->post('jenis_kelamin_anak');
		$nama_anak    			 = $this->input->post('nama_anak');
		$anak_ke             	 = $this->input->post('anak_ke');
		$tempat_lahir_anak_skl   = $this->input->post('tempat_lahir_anak_skl');
		$hari_lahir_anak_skl     = $this->input->post('hari_lahir_anak_skl');
		$tgl_lahir_anak_skl      = $this->input->post('tgl_lahir_anak_skl');
		$jam_lahir_anak_skl      = $this->input->post('jam_lahir_anak_skl');
		$nama_ayah_skl 		     = $this->input->post('nama_ayah_skl');
		$jenis_kelamin_ayah_skl  = $this->input->post('jenis_kelamin_ayah_skl');
		$ttl_ayah_skl            = $this->input->post('ttl_ayah_skl');
		$bangsa_ayah_skl         = $this->input->post('bangsa_ayah_skl');
		$agama_ayah_skl          = $this->input->post('agama_ayah_skl');
		$nik_ayah_skl            = $this->input->post('nik_ayah_skl');
		$pekerjaan_ayah_skl      = $this->input->post('pekerjaan_ayah_skl');
		$nama_ibu_skl		     = $this->input->post('nama_ibu_skl');
		$jenis_kelamin_ibu_skl   = $this->input->post('jenis_kelamin_ibu_skl');
		$ttl_ibu_skl       		 = $this->input->post('ttl_ibu_skl');
		$bangsa_ibu_skl          = $this->input->post('bangsa_ibu_skl');
		$agama_ibu               = $this->input->post('agama_ibu');
		$nik_ibu_skl             = $this->input->post('nik_ibu_skl');
		$pekerjaan_ibu_skl       = $this->input->post('pekerjaan_ibu_skl');
		$alamat_skl              = $this->input->post('alamat_skl');
		$tgl_dibuat_suratskl     = $this->input->post('tgl_dibuat_suratskl');

		$data = array(
			'bulan_register_skl' 	 => $bulan_register_skl,
			'tahun_register_skl' 	 => $tahun_register_skl,
			'rt_skl' 		 		 => $rt_skl,
			'tgl_suratpengantar_skl' => $tgl_suratpengantar_skl,
			'kk_skl' 		 		 => $kk_skl,
			'surat_rumahsakit' 		 => $surat_rumahsakit,
			'no_aktanikah' 		     => $no_aktanikah,
			'tgl_dikeluarkan_akta'   => $tgl_dikeluarkan_akta,
			'tgl_dikeluarkan_skl'    => $tgl_dikeluarkan_skl,
			'jenis_kelamin_anak'     => $jenis_kelamin_anak,
			'nama_anak' 	         => $nama_anak,
			'anak_ke'            	 => $anak_ke,
			'tempat_lahir_anak_skl'  => $tempat_lahir_anak_skl,
			'hari_lahir_anak_skl' 	 => $hari_lahir_anak_skl,
			'tgl_lahir_anak_skl' 	 => $tgl_lahir_anak_skl,
			'jam_lahir_anak_skl'     => $jam_lahir_anak_skl,
			'nama_ayah_skl' 		 => $nama_ayah_skl,
			'jenis_kelamin_ayah_skl' => $jenis_kelamin_ayah_skl,
			'ttl_ayah_skl'      	 => $ttl_ayah_skl,
			'bangsa_ayah_skl'        => $bangsa_ayah_skl,
			'agama_ayah_skl'         => $agama_ayah_skl,
			'nik_ayah_skl' 	         => $nik_ayah_skl,
			'pekerjaan_ayah_skl' 	 => $pekerjaan_ayah_skl,
			'nama_ibu_skl' 		     => $nama_ibu_skl,
			'jenis_kelamin_ibu_skl'  => $jenis_kelamin_ibu_skl,
			'ttl_ibu_skl'       	 => $ttl_ibu_skl,
			'bangsa_ibu_skl'         => $bangsa_ibu_skl,
			'agama_ibu'              => $agama_ibu,
			'nik_ibu_skl' 	         => $nik_ibu_skl,
			'pekerjaan_ibu_skl' 	 => $pekerjaan_ibu_skl,
			'alamat_skl' 	         => $alamat_skl,
			'tgl_dibuat_suratskl' 	 => $tgl_dibuat_suratskl,
		);

		$this->m_skl->input_data($data, 'skl');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('skl/index');
	}

	public function hapus($id)
	{
		$where = array('id_skl' => $id);
		$this->m_skl->hapus_data($where, 'skl');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('skl/index');
	}

	public function edit($id)
	{
		$where = array('id_skl' => $id);
		$data['skl'] = $this->m_skl->edit_data($where, 'skl')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_skl', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id					        = $this->input->post('id_skl');
		$bulan_register_skl		 = $this->input->post('bulan_register_skl');
		$tahun_register_skl		 = $this->input->post('tahun_register_skl');
		$rt_skl					 = $this->input->post('rt_skl');
		$tgl_suratpengantar_skl	 = $this->input->post('tgl_suratpengantar_skl');
		$kk_skl					 = $this->input->post('kk_skl');
		$surat_rumahsakit		 = $this->input->post('surat_rumahsakit');
		$no_aktanikah		     = $this->input->post('no_aktanikah');
		$tgl_dikeluarkan_akta	 = $this->input->post('tgl_dikeluarkan_akta');
		$tgl_dikeluarkan_skl	 = $this->input->post('tgl_dikeluarkan_skl');
		$jenis_kelamin_anak      = $this->input->post('jenis_kelamin_anak');
		$nama_anak    			 = $this->input->post('nama_anak');
		$anak_ke             	 = $this->input->post('anak_ke');
		$tempat_lahir_anak_skl   = $this->input->post('tempat_lahir_anak_skl');
		$hari_lahir_anak_skl     = $this->input->post('hari_lahir_anak_skl');
		$tgl_lahir_anak_skl      = $this->input->post('tgl_lahir_anak_skl');
		$jam_lahir_anak_skl      = $this->input->post('jam_lahir_anak_skl');
		$nama_ayah_skl 		     = $this->input->post('nama_ayah_skl');
		$jenis_kelamin_ayah_skl  = $this->input->post('jenis_kelamin_ayah_skl');
		$ttl_ayah_skl            = $this->input->post('ttl_ayah_skl');
		$bangsa_ayah_skl         = $this->input->post('bangsa_ayah_skl');
		$agama_ayah_skl          = $this->input->post('agama_ayah_skl');
		$nik_ayah_skl            = $this->input->post('nik_ayah_skl');
		$pekerjaan_ayah_skl      = $this->input->post('pekerjaan_ayah_skl');
		$nama_ibu_skl		     = $this->input->post('nama_ibu_skl');
		$jenis_kelamin_ibu_skl   = $this->input->post('jenis_kelamin_ibu_skl');
		$ttl_ibu_skl       		 = $this->input->post('ttl_ibu_skl');
		$bangsa_ibu_skl          = $this->input->post('bangsa_ibu_skl');
		$agama_ibu               = $this->input->post('agama_ibu');
		$nik_ibu_skl             = $this->input->post('nik_ibu_skl');
		$pekerjaan_ibu_skl       = $this->input->post('pekerjaan_ibu_skl');
		$alamat_skl              = $this->input->post('alamat_skl');
		$tgl_dibuat_suratskl     = $this->input->post('tgl_dibuat_suratskl');

		$data = array(
			'bulan_register_skl' 	 => $bulan_register_skl,
			'tahun_register_skl' 	 => $tahun_register_skl,
			'rt_skl' 		 		 => $rt_skl,
			'tgl_suratpengantar_skl' => $tgl_suratpengantar_skl,
			'kk_skl' 		 		 => $kk_skl,
			'surat_rumahsakit' 		 => $surat_rumahsakit,
			'no_aktanikah' 		     => $no_aktanikah,
			'tgl_dikeluarkan_akta'   => $tgl_dikeluarkan_akta,
			'tgl_dikeluarkan_skl'    => $tgl_dikeluarkan_skl,
			'jenis_kelamin_anak'     => $jenis_kelamin_anak,
			'nama_anak' 	         => $nama_anak,
			'anak_ke'            	 => $anak_ke,
			'tempat_lahir_anak_skl'  => $tempat_lahir_anak_skl,
			'hari_lahir_anak_skl' 	 => $hari_lahir_anak_skl,
			'tgl_lahir_anak_skl' 	 => $tgl_lahir_anak_skl,
			'jam_lahir_anak_skl'     => $jam_lahir_anak_skl,
			'nama_ayah_skl' 		 => $nama_ayah_skl,
			'jenis_kelamin_ayah_skl' => $jenis_kelamin_ayah_skl,
			'ttl_ayah_skl'      	 => $ttl_ayah_skl,
			'bangsa_ayah_skl'        => $bangsa_ayah_skl,
			'agama_ayah_skl'         => $agama_ayah_skl,
			'nik_ayah_skl' 	         => $nik_ayah_skl,
			'pekerjaan_ayah_skl' 	 => $pekerjaan_ayah_skl,
			'nama_ibu_skl' 		     => $nama_ibu_skl,
			'jenis_kelamin_ibu_skl'  => $jenis_kelamin_ibu_skl,
			'ttl_ibu_skl'       	 => $ttl_ibu_skl,
			'bangsa_ibu_skl'         => $bangsa_ibu_skl,
			'agama_ibu'              => $agama_ibu,
			'nik_ibu_skl' 	         => $nik_ibu_skl,
			'pekerjaan_ibu_skl' 	 => $pekerjaan_ibu_skl,
			'alamat_skl' 	         => $alamat_skl,
			'tgl_dibuat_suratskl' 	 => $tgl_dibuat_suratskl,
		);

		$where = array('id_skl' => $id);
		$this->m_skl->update_data($where, $data, 'skl');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('skl/index');
	}


	public function pdf($id)
	{
		$where = array('id_skl' => $id);
		$this->m_skl->pdf_data($where, 'skl');
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
		$this->load->library('pdfgenerator');

		$data['skl'] = $this->m_skl->pdf_data($where, 'skl')->result();
		$this->load->view('pdf/laporan_skl', $data);
		// title dari pdf
		$this->data['title_pdf'] = 'Surat Keterangan Kelahiran';

		// filename dari pdf ketika didownload
		$file_pdf = 'Surat Keterangan Kelahiran';
		// setting paper
		$paper = 'F4';
		//orientasi paper potrait / landscape
		$orientation = "portrait";

		$html = $this->load->view('pdf/laporan_skl', $this->data, true);

		// run dompdf
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}

	public function detail($id)
	{
		$this->load->model('m_skl');
		$detail = $this->m_skl->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_skl', $data);
		$this->load->view('templates/footer');
	}
}
