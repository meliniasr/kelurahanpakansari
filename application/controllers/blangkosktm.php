<?php
class Blangkosktm extends CI_Controller
{
	public function index()
	{
		$data['blangkosktm'] = $this->m_blangkosktm->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('blangko/blangkosktm', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$bulan_register_blangkosktm 	 = $this->input->post('bulan_register_blangkosktm');
		$tahun_register_blangkosktm 	 = $this->input->post('tahun_register_blangkosktm');
		$rt_blangkosktm   				 = $this->input->post('rt_blangkosktm');
		$tgl_suratpengantar_blangkosktm  = $this->input->post('tgl_suratpengantar_blangkosktm');
		$nama_blangkosktm		    	 = $this->input->post('nama_blangkosktm');
		$jenis_kelamin_blangkosktm  	 = $this->input->post('jenis_kelamin_blangkosktm');
		$ttl_blangkosktm   				 = $this->input->post('ttl_blangkosktm');
		$bangsa_blangkosktm         	 = $this->input->post('bangsa_blangkosktm');
		$agama_blangkosktm          	 = $this->input->post('agama_blangkosktm');
		$nik_blangkosktm            	 = $this->input->post('nik_blangkosktm');
		$kk_blangkosktm            		 = $this->input->post('kk_blangkosktm');
		$pekerjaan_blangkosktm      	 = $this->input->post('pekerjaan_blangkosktm');
		$statuskawin_blangkosktm    	 = $this->input->post('statuskawin_blangkosktm');
		$alamat_blangkosktm         	 = $this->input->post('alamat_blangkosktm');
		$nama_anak_blangkosktm      	 = $this->input->post('nama_anak_blangkosktm');
		$nama_sekolah_blangkosktm    	 = $this->input->post('nama_sekolah_blangkosktm');
		$tgl_dibuat_blangkosktm          = $this->input->post('tgl_dibuat_blangkosktm');

		$data = array(
			'bulan_register_blangkosktm' 	 => $bulan_register_blangkosktm,
			'tahun_register_blangkosktm' 	 => $tahun_register_blangkosktm,
			'rt_blangkosktm'  				 => $rt_blangkosktm,
			'tgl_suratpengantar_blangkosktm' => $tgl_suratpengantar_blangkosktm,
			'nama_blangkosktm' 		    	 => $nama_blangkosktm,
			'jenis_kelamin_blangkosktm' 	 => $jenis_kelamin_blangkosktm,
			'ttl_blangkosktm'  	 			 => $ttl_blangkosktm,
			'bangsa_blangkosktm'        	 => $bangsa_blangkosktm,
			'agama_blangkosktm'         	 => $agama_blangkosktm,
			'nik_blangkosktm'           	 => $nik_blangkosktm,
			'kk_blangkosktm'           	 	 => $kk_blangkosktm,
			'pekerjaan_blangkosktm' 		 => $pekerjaan_blangkosktm,
			'statuskawin_blangkosktm' 		 => $statuskawin_blangkosktm,
			'alamat_blangkosktm'        	 => $alamat_blangkosktm,
			'nama_anak_blangkosktm' 		 => $nama_anak_blangkosktm,
			'nama_sekolah_blangkosktm' 		 => $nama_sekolah_blangkosktm,
			'tgl_dibuat_blangkosktm '        => $tgl_dibuat_blangkosktm,

		);

		$this->m_blangkosktm->input_data($data, 'blangkosktm');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('blangkosktm/index');
	}

	public function hapus($id)
	{
		$where = array('id_blangkosktm' => $id);
		$this->m_blangkosktm->hapus_data($where, 'blangkosktm');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('blangkosku/index');
	}

	public function edit($id)
	{
		$where = array('id_blangkosktm' => $id);
		$data['blangkosktm'] = $this->m_blangkosktm->edit_data($where, 'blangkosktm')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_blangkosktm', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id					        	 = $this->input->post('id_blangkosktm');
		$bulan_register_blangkosktm 	 = $this->input->post('bulan_register_blangkosktm');
		$tahun_register_blangkosktm 	 = $this->input->post('tahun_register_blangkosktm');
		$rt_blangkosktm   				 = $this->input->post('rt_blangkosktm');
		$tgl_suratpengantar_blangkosktm  = $this->input->post('tgl_suratpengantar_blangkosktm');
		$nama_blangkosktm		    	 = $this->input->post('nama_blangkosktm');
		$jenis_kelamin_blangkosktm  	 = $this->input->post('jenis_kelamin_blangkosktm');
		$ttl_blangkosktm   	 			 = $this->input->post('ttl_blangkosktm');
		$bangsa_blangkosktm         	 = $this->input->post('bangsa_blangkosktm');
		$agama_blangkosktm          	 = $this->input->post('agama_blangkosktm');
		$nik_blangkosktm            	 = $this->input->post('nik_blangkosktm');
		$kk_blangkosktm            		 = $this->input->post('kk_blangkosktm');
		$pekerjaan_blangkosktm      	 = $this->input->post('pekerjaan_blangkosktm');
		$statuskawin_blangkosktm    	 = $this->input->post('statuskawin_blangkosktm');
		$alamat_blangkosktm         	 = $this->input->post('alamat_blangkosktm');
		$nama_anak_blangkosktm      	 = $this->input->post('nama_anak_blangkosktm');
		$nama_sekolah_blangkosktm    	 = $this->input->post('nama_sekolah_blangkosktm');
		$tgl_dibuat_blangkosktm          = $this->input->post('tgl_dibuat_blangkosktm');


		$data = array(
			'bulan_register_blangkosktm' 	 => $bulan_register_blangkosktm,
			'tahun_register_blangkosktm' 	 => $tahun_register_blangkosktm,
			'rt_blangkosktm'  				 => $rt_blangkosktm,
			'tgl_suratpengantar_blangkosktm' => $tgl_suratpengantar_blangkosktm,
			'nama_blangkosktm' 		    	 => $nama_blangkosktm,
			'jenis_kelamin_blangkosktm' 	 => $jenis_kelamin_blangkosktm,
			'ttl_blangkosktm'  	 			 => $ttl_blangkosktm,
			'bangsa_blangkosktm'        	 => $bangsa_blangkosktm,
			'agama_blangkosktm'         	 => $agama_blangkosktm,
			'nik_blangkosktm'           	 => $nik_blangkosktm,
			'kk_blangkosktm'           	 	 => $kk_blangkosktm,
			'pekerjaan_blangkosktm' 		 => $pekerjaan_blangkosktm,
			'statuskawin_blangkosktm' 		 => $statuskawin_blangkosktm,
			'alamat_blangkosktm'        	 => $alamat_blangkosktm,
			'nama_anak_blangkosktm' 		 => $nama_anak_blangkosktm,
			'nama_sekolah_blangkosktm' 		 => $nama_sekolah_blangkosktm,
			'tgl_dibuat_blangkosktm '        => $tgl_dibuat_blangkosktm,
		);

		$where = array('id_blangkosktm' => $id);
		$this->m_blangkosku->update_data($where, $data, 'blangkosktm');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('blangkosktm/index');
	}

	public function pdf($id)
	{
		$where = array('id_blangkosktm' => $id);
		$this->m_blangkosktm->pdf_data($where, 'blangkosktm');
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
		$this->load->library('pdfgenerator');

		$data['blangkosktm'] = $this->m_blangkosktm->pdf_data($where, 'blangkosktm')->result();
		$this->load->view('pdf/laporan_blangkosktm', $data);
		// title dari pdf
		$this->data['title_pdf'] = 'Surat Keterangan Tidak Mampu';

		// filename dari pdf ketika didownload
		$file_pdf = 'Surat Keterangan Tidak Mampu';
		// setting paper
		$paper = 'F4';
		//orientasi paper potrait / landscape
		$orientation = "portrait";

		$html = $this->load->view('pdf/laporan_blangkosktm', $this->data, true);

		// run dompdf
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}

	public function detail($id){
		$this->load->model('m_blangkosktm');
		$detail = $this->m_blangkosktm->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_blangkosktm', $data);
		$this->load->view('templates/footer');
	}
}
