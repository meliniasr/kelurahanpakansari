<?php
class Blangkokematian extends CI_Controller
{
	public function index()
	{
		$data['blangkokematian'] = $this->m_blangkokematian->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('blangko/blangkokematian', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$bulan_register_blangkokematian		 = $this->input->post('bulan_register_blangkokematian');
		$tahun_register_blangkokematian		 = $this->input->post('tahun_register_blangkokematian');
		$rt_blangkokematian					 = $this->input->post('rt_blangkokematian');
		$tgl_suratpengantar_blangkokematian	 = $this->input->post('tgl_suratpengantar_blangkokematian');
		$tgl_dibuat_blangkokematian			 = $this->input->post('tgl_dibuat_blangkokematian');
		$nama_pemohon_blangkokematian		 = $this->input->post('nama_pemohon_blangkokematian');
		$nama_kepalakeluarga_blangkokematian = $this->input->post('nama_kepalakeluarga_blangkokematian');
		$jenis_kelamin_blangkokematian		 = $this->input->post('jenis_kelamin_blangkokematian');
		$ttl_blangkokematian				 = $this->input->post('ttl_blangkokematian');
		$bangsa_blangkokematian				 = $this->input->post('bangsa_blangkokematian');
		$agama_blangkokematian				 = $this->input->post('agama_blangkokematian');
		$nik_blangkokematian				 = $this->input->post('nik_blangkokematian');
		$kk_blangkokematian					 = $this->input->post('kk_blangkokematian');
		$pekerjaan_blangkokematian			 = $this->input->post('pekerjaan_blangkokematian');
		$statuskawin_blangkokematian		 = $this->input->post('statuskawin_blangkokematian');
		$alamat_blangkokematian				 = $this->input->post('alamat_blangkokematian');
		$statushubungankeluarga				 = $this->input->post('statushubungankeluarga');
		$nama_si_meninggal					 = $this->input->post('nama_si_meninggal');
		$tgl_kematian_blangkokematian		 = $this->input->post('tgl_kematian_blangkokematian');
		$dikarenakan_blangkokematian		 = $this->input->post('dikarenakan_blangkokematian');
		$meninggal_di_blangkokematian		 = $this->input->post('meninggal_di_blangkokematian');
		$tujuan_untuk_blangkokematian	 	 = $this->input->post('tujuan_untuk_blangkokematian');


		$data = array(
			'bulan_register_blangkokematian'  	  => $bulan_register_blangkokematian,
			'tahun_register_blangkokematian'  	  => $tahun_register_blangkokematian,
			'rt_blangkokematian'                  => $rt_blangkokematian,
			'tgl_suratpengantar_blangkokematian'  => $tgl_suratpengantar_blangkokematian,
			'tgl_dibuat_blangkokematian'          => $tgl_dibuat_blangkokematian,
			'nama_pemohon_blangkokematian'        => $nama_pemohon_blangkokematian,
			'nama_kepalakeluarga_blangkokematian' => $nama_kepalakeluarga_blangkokematian,
			'jenis_kelamin_blangkokematian'  	  => $jenis_kelamin_blangkokematian,
			'ttl_blangkokematian'  			      => $ttl_blangkokematian,
			'bangsa_blangkokematian'  			  => $bangsa_blangkokematian,
			'agama_blangkokematian'  			  => $agama_blangkokematian,
			'nik_blangkokematian'  				  => $nik_blangkokematian,
			'kk_blangkokematian'  			      => $kk_blangkokematian,
			'pekerjaan_blangkokematian'  		  => $pekerjaan_blangkokematian,
			'statuskawin_blangkokematian'  		  => $statuskawin_blangkokematian,
			'alamat_blangkokematian'  			  => $alamat_blangkokematian,
			'statushubungankeluarga'  			  => $statushubungankeluarga,
			'nama_si_meninggal'  				  => $nama_si_meninggal,
			'tgl_kematian_blangkokematian'  	  => $tgl_kematian_blangkokematian,
			'dikarenakan_blangkokematian'  		  => $dikarenakan_blangkokematian,
			'meninggal_di_blangkokematian'  	  => $meninggal_di_blangkokematian,
			'tujuan_untuk_blangkokematian'  	  => $tujuan_untuk_blangkokematian,
		);

		$this->m_blangkokematian->input_data($data, 'blangkokematian');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('blangkokematian/index');
	}

	public function hapus($id)
	{
		$where = array('id_blangkokematian' => $id);
		$this->m_blangkokematian->hapus_data($where, 'blangkokematian');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('blangkokematian/index');
	}

	public function edit($id)
	{
		$where = array('id_blangkokematian' => $id);
		$data['blangkokematian'] = $this->m_blangkokematian->edit_data($where, 'blangkokematian')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_blangkokematian', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id					        		 = $this->input->post('id_blangkokematian');
		$bulan_register_blangkokematian		 = $this->input->post('bulan_register_blangkokematian');
		$tahun_register_blangkokematian		 = $this->input->post('tahun_register_blangkokematian');
		$rt_blangkokematian					 = $this->input->post('rt_blangkokematian');
		$tgl_suratpengantar_blangkokematian	 = $this->input->post('tgl_suratpengantar_blangkokematian');
		$tgl_dibuat_blangkokematian			 = $this->input->post('tgl_dibuat_blangkokematian');
		$nama_pemohon_blangkokematian		 = $this->input->post('nama_pemohon_blangkokematian');
		$nama_kepalakeluarga_blangkokematian = $this->input->post('nama_kepalakeluarga_blangkokematian');
		$jenis_kelamin_blangkokematian		 = $this->input->post('jenis_kelamin_blangkokematian');
		$ttl_blangkokematian				 = $this->input->post('ttl_blangkokematian');
		$bangsa_blangkokematian				 = $this->input->post('bangsa_blangkokematian');
		$agama_blangkokematian				 = $this->input->post('agama_blangkokematian');
		$nik_blangkokematian				 = $this->input->post('nik_blangkokematian');
		$kk_blangkokematian					 = $this->input->post('kk_blangkokematian');
		$pekerjaan_blangkokematian			 = $this->input->post('pekerjaan_blangkokematian');
		$statuskawin_blangkokematian		 = $this->input->post('statuskawin_blangkokematian');
		$alamat_blangkokematian				 = $this->input->post('alamat_blangkokematian');
		$statushubungankeluarga				 = $this->input->post('statushubungankeluarga');
		$nama_si_meninggal					 = $this->input->post('nama_si_meninggal');
		$tgl_kematian_blangkokematian		 = $this->input->post('tgl_kematian_blangkokematian');
		$dikarenakan_blangkokematian		 = $this->input->post('dikarenakan_blangkokematian');
		$meninggal_di_blangkokematian		 = $this->input->post('meninggal_di_blangkokematian');
		$tujuan_untuk_blangkokematian	 	 = $this->input->post('tujuan_untuk_blangkokematian');



		$data = array(
			'bulan_register_blangkokematian'  	  => $bulan_register_blangkokematian,
			'tahun_register_blangkokematian'  	  => $tahun_register_blangkokematian,
			'rt_blangkokematian'                  => $rt_blangkokematian,
			'tgl_suratpengantar_blangkokematian'  => $tgl_suratpengantar_blangkokematian,
			'tgl_dibuat_blangkokematian'          => $tgl_dibuat_blangkokematian,
			'nama_pemohon_blangkokematian'        => $nama_pemohon_blangkokematian,
			'nama_kepalakeluarga_blangkokematian' => $nama_kepalakeluarga_blangkokematian,
			'jenis_kelamin_blangkokematian'  	  => $jenis_kelamin_blangkokematian,
			'ttl_blangkokematian'  			      => $ttl_blangkokematian,
			'bangsa_blangkokematian'  			  => $bangsa_blangkokematian,
			'agama_blangkokematian'  			  => $agama_blangkokematian,
			'nik_blangkokematian'  				  => $nik_blangkokematian,
			'kk_blangkokematian'  			      => $kk_blangkokematian,
			'pekerjaan_blangkokematian'  		  => $pekerjaan_blangkokematian,
			'statuskawin_blangkokematian'  		  => $statuskawin_blangkokematian,
			'alamat_blangkokematian'  			  => $alamat_blangkokematian,
			'statushubungankeluarga'  			  => $statushubungankeluarga,
			'nama_si_meninggal'  				  => $nama_si_meninggal,
			'tgl_kematian_blangkokematian'  	  => $tgl_kematian_blangkokematian,
			'dikarenakan_blangkokematian'  		  => $dikarenakan_blangkokematian,
			'meninggal_di_blangkokematian'  	  => $meninggal_di_blangkokematian,
			'tujuan_untuk_blangkokematian'  	  => $tujuan_untuk_blangkokematian,

		);

		$where = array('id_blangkokematian' => $id);
		$this->m_blangkokematian->update_data($where, $data, 'blangkokematian');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('blangkokematian/index');
	}

	public function pdf($id)
	{
		$where = array('id_blangkokematian' => $id);
		$this->m_blangkokematian->pdf_data($where, 'blangkokematian');
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
		$this->load->library('pdfgenerator');

		$data['blangkokematian'] = $this->m_blangkokematian->pdf_data($where, 'blangkokematian')->result();
		$this->load->view('pdf/laporan_blangkokematian', $data);
		// title dari pdf
		$this->data['title_pdf'] = 'Surat Keterangan Kematian';

		// filename dari pdf ketika didownload
		$file_pdf = 'Surat Keterangan Kematian';
		// setting paper
		$paper = 'F4';
		//orientasi paper potrait / landscape
		$orientation = "portrait";

		$html = $this->load->view('pdf/laporan_blangkokematian', $this->data, true);

		// run dompdf
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}

	public function detail($id)
	{
		$this->load->model('m_blangkokematian');
		$detail = $this->m_blangkokematian->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_blangkokematian', $data);
		$this->load->view('templates/footer');
	}
}
