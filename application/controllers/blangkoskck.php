<?php
class Blangkoskck extends CI_Controller
{
	public function index()
	{
		$data['blangkoskck'] = $this->m_blangkoskck->tampil_data()->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('blangko/blangkoskck', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$bulan_register_blangkoskck  	   = $this->input->post('bulan_register_blangkoskck');
		$tahun_register_blangkoskck  	   = $this->input->post('tahun_register_blangkoskck');
		$rt_blangkoskck   				   = $this->input->post('rt_blangkoskck');
		$nomor_suratpengantar_blangkoskck  = $this->input->post('nomor_suratpengantar_blangkoskck');
		$nama_blangkoskck		    	   = $this->input->post('nama_blangkoskck');
		$nama_kepalakeluarga_blangkoskck   = $this->input->post('nama_kepalakeluarga_blangkoskck');
		$jenis_kelamin_blangkoskck  	   = $this->input->post('jenis_kelamin_blangkoskck');
		$ttl_blangkoskck   	   			   = $this->input->post('ttl_blangkoskck');
		$bangsa_blangkoskck         	   = $this->input->post('bangsa_blangkoskck');
		$agama_blangkoskck          	   = $this->input->post('agama_blangkoskck');
		$nik_blangkoskck            	   = $this->input->post('nik_blangkoskck');
		$kk_blangkoskck            		   = $this->input->post('kk_blangkoskck');
		$pekerjaan_blangkoskck      	   = $this->input->post('pekerjaan_blangkoskck');
		$statuskawin_blangkoskck    	   = $this->input->post('statuskawin_blangkoskck');
		$alamat_blangkoskck         	   = $this->input->post('alamat_blangkoskck');
		$tujuan_untuk_blangkoskck    	   = $this->input->post('tujuan_untuk_blangkoskck');
		$tgl_dibuat_blangkoskck            = $this->input->post('tgl_dibuat_blangkoskck');

		$data = array(
			'bulan_register_blangkoskck' 		=> $bulan_register_blangkoskck,
			'tahun_register_blangkoskck' 		=> $tahun_register_blangkoskck,
			'rt_blangkoskck' 	 				=> $rt_blangkoskck,
			'nomor_suratpengantar_blangkoskck'  => $nomor_suratpengantar_blangkoskck,
			'nama_blangkoskck' 		    		=> $nama_blangkoskck,
			'nama_kepalakeluarga_blangkoskck'   => $nama_kepalakeluarga_blangkoskck,
			'jenis_kelamin_blangkoskck' 		=> $jenis_kelamin_blangkoskck,
			'ttl_blangkoskck'  					=> $ttl_blangkoskck,
			'bangsa_blangkoskck'        		=> $bangsa_blangkoskck,
			'agama_blangkoskck'         		=> $agama_blangkoskck,
			'nik_blangkoskck'           		=> $nik_blangkoskck,
			'kk_blangkoskck'           			=> $kk_blangkoskck,
			'pekerjaan_blangkoskck' 			=> $pekerjaan_blangkoskck,
			'statuskawin_blangkoskck' 			=> $statuskawin_blangkoskck,
			'alamat_blangkoskck'        		=> $alamat_blangkoskck,
			'tujuan_untuk_blangkoskck' 			=> $tujuan_untuk_blangkoskck,
			'tgl_dibuat_blangkoskck'        	=> $tgl_dibuat_blangkoskck,

		);

		$this->m_blangkoskck->input_data($data, 'blangkoskck');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('blangkoskck/index');
	}

	public function hapus($id)
	{
		$where = array('id_blangkoskck' => $id);
		$this->m_blangkoskck->hapus_data($where, 'blangkoskck');
		$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Dihapus !
		</div>
	  </div>');
		redirect('blangkoskck/index');
	}

	public function edit($id)
	{
		$where = array('id_blangkoskck' => $id);
		$data['blangkoskck'] = $this->m_blangkoskck->edit_data($where, 'blangkoskck')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_blangkoskck', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id					        	   = $this->input->post('id_blangkoskck');
		$bulan_register_blangkoskck  	   = $this->input->post('bulan_register_blangkoskck');
		$tahun_register_blangkoskck  	   = $this->input->post('tahun_register_blangkoskck');
		$rt_blangkoskck   				   = $this->input->post('rt_blangkoskck');
		$nomor_suratpengantar_blangkoskck  = $this->input->post('nomor_suratpengantar_blangkoskck');
		$nama_blangkoskck		    	   = $this->input->post('nama_blangkoskck');
		$nama_kepalakeluarga_blangkoskck   = $this->input->post('nama_kepalakeluarga_blangkoskck');
		$jenis_kelamin_blangkoskck  	   = $this->input->post('jenis_kelamin_blangkoskck');
		$ttl_blangkoskck   	   			   = $this->input->post('ttl_blangkoskck');
		$bangsa_blangkoskck         	   = $this->input->post('bangsa_blangkoskck');
		$agama_blangkoskck          	   = $this->input->post('agama_blangkoskck');
		$nik_blangkoskck            	   = $this->input->post('nik_blangkoskck');
		$kk_blangkoskck            		   = $this->input->post('kk_blangkoskck');
		$pekerjaan_blangkoskck      	   = $this->input->post('pekerjaan_blangkoskck');
		$statuskawin_blangkoskck    	   = $this->input->post('statuskawin_blangkoskck');
		$alamat_blangkoskck         	   = $this->input->post('alamat_blangkoskck');
		$tujuan_untuk_blangkoskck    	   = $this->input->post('tujuan_untuk_blangkoskck');
		$tgl_dibuat_blangkoskck            = $this->input->post('tgl_dibuat_blangkoskck');


		$data = array(
			'bulan_register_blangkoskck' 		=> $bulan_register_blangkoskck,
			'tahun_register_blangkoskck' 		=> $tahun_register_blangkoskck,
			'rt_blangkoskck' 	 				=> $rt_blangkoskck,
			'nomor_suratpengantar_blangkoskck'  => $nomor_suratpengantar_blangkoskck,
			'nama_blangkoskck' 		    		=> $nama_blangkoskck,
			'nama_kepalakeluarga_blangkoskck'   => $nama_kepalakeluarga_blangkoskck,
			'jenis_kelamin_blangkoskck' 		=> $jenis_kelamin_blangkoskck,
			'ttl_blangkoskck'  					=> $ttl_blangkoskck,
			'bangsa_blangkoskck'        		=> $bangsa_blangkoskck,
			'agama_blangkoskck'         		=> $agama_blangkoskck,
			'nik_blangkoskck'           		=> $nik_blangkoskck,
			'kk_blangkoskck'           			=> $kk_blangkoskck,
			'pekerjaan_blangkoskck' 			=> $pekerjaan_blangkoskck,
			'statuskawin_blangkoskck' 			=> $statuskawin_blangkoskck,
			'alamat_blangkoskck'        		=> $alamat_blangkoskck,
			'tujuan_untuk_blangkoskck' 			=> $tujuan_untuk_blangkoskck,
			'tgl_dibuat_blangkoskck'        	=> $tgl_dibuat_blangkoskck,
		);

		$where = array('id_blangkoskck' => $id);
		$this->m_blangkoskck->update_data($where, $data, 'blangkoskck');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('blangkoskck/index');
	}

	public function pdf($id)
	{
		$where = array('id_blangkoskck' => $id);
		$this->m_blangkoskck->pdf_data($where, 'blangkoskck');
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
		$this->load->library('pdfgenerator');

		$data['blangkoskck'] = $this->m_blangkoskck->pdf_data($where, 'blangkoskck')->result();
		$this->load->view('pdf/laporan_blangkoskck', $data);
		// title dari pdf
		$this->data['title_pdf'] = 'Surat Keterangan Catatan Kepolisian';

		// filename dari pdf ketika didownload
		$file_pdf = 'Surat Keterangan Catatan Kepolisian';
		// setting paper
		$paper = 'F4';
		//orientasi paper potrait / landscape
		$orientation = "portrait";

		$html = $this->load->view('pdf/laporan_blangkoskck', $this->data, true);

		// run dompdf
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}

	public function detail($id){
		$this->load->model('m_blangkoskck');
		$detail = $this->m_blangkoskck->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_blangkoskck', $data);
		$this->load->view('templates/footer');
	}
}
