<?php
class Blangkosku extends CI_Controller
{
	public function index()
	{
		$data['blangkosku'] = $this->m_blangkosku->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('blangko/blangkosku', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$bulan_register_blangkosku 	  = $this->input->post('bulan_register_blangkosku');
		$tahun_register_blangkosku 	  = $this->input->post('tahun_register_blangkosku');
		$nama_blangkosku		   	  = $this->input->post('nama_blangkosku');
		$jenis_kelamin_blangkosku  	  = $this->input->post('jenis_kelamin_blangkosku');
		$ttl_blangkosku   	 		  = $this->input->post('ttl_blangkosku');
		$bangsa_blangkosku         	  = $this->input->post('bangsa_blangkosku');
		$agama_blangkosku          	  = $this->input->post('agama_blangkosku');
		$nik_blangkosku            	  = $this->input->post('nik_blangkosku');
		$pekerjaan_blangkosku      	  = $this->input->post('pekerjaan_blangkosku');
		$alamat_blangkosku         	  = $this->input->post('alamat_blangkosku');
		$rt_blangkosku                = $this->input->post('rt_blangkosku');
		$tgl_dibuat_blangkosku        = $this->input->post('tgl_dibuat_blangkosku');
		$usaha_apa_blangkosku         = $this->input->post('usaha_apa_blangkosku');
		$tujuan_keperluan_blangkosku  = $this->input->post('tujuan_keperluan_blangkosku');

		$data = array(
			'bulan_register_blangkosku'   => $bulan_register_blangkosku,
			'tahun_register_blangkosku'   => $tahun_register_blangkosku,
			'nama_blangkosku' 		      => $nama_blangkosku,
			'jenis_kelamin_blangkosku'    => $jenis_kelamin_blangkosku,
			'ttl_blangkosku'     		  => $ttl_blangkosku,
			'bangsa_blangkosku'           => $bangsa_blangkosku,
			'agama_blangkosku'            => $agama_blangkosku,
			'nik_blangkosku'              => $nik_blangkosku,
			'pekerjaan_blangkosku' 	      => $pekerjaan_blangkosku,
			'alamat_blangkosku'           => $alamat_blangkosku,
			'rt_blangkosku'           	  => $rt_blangkosku,
			'tgl_dibuat_blangkosku '      => $tgl_dibuat_blangkosku,
			'usaha_apa_blangkosku' 	      => $usaha_apa_blangkosku,
			'tujuan_keperluan_blangkosku' => $tujuan_keperluan_blangkosku,

		);

		$this->m_blangkosku->input_data($data, 'blangkosku');
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Ditambahkan !
		</div>
	  </div>');
		redirect('blangkosku/index');
	}

	public function hapus($id)
	{
		$where = array('id_blangkosku' => $id);
		$this->m_blangkosku->hapus_data($where, 'blangkosku');
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
		$where = array('id_blangkosku' => $id);
		$data['blangkosku'] = $this->m_blangkosku->edit_data($where, 'blangkosku')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit/edit_blangkosku', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id					       	  = $this->input->post('id_blangkosku');
		$bulan_register_blangkosku 	  = $this->input->post('bulan_register_blangkosku');
		$tahun_register_blangkosku 	  = $this->input->post('tahun_register_blangkosku');
		$nama_blangkosku		   	  = $this->input->post('nama_blangkosku');
		$jenis_kelamin_blangkosku  	  = $this->input->post('jenis_kelamin_blangkosku');
		$ttl_blangkosku   	 		  = $this->input->post('ttl_blangkosku');
		$bangsa_blangkosku         	  = $this->input->post('bangsa_blangkosku');
		$agama_blangkosku          	  = $this->input->post('agama_blangkosku');
		$nik_blangkosku            	  = $this->input->post('nik_blangkosku');
		$pekerjaan_blangkosku      	  = $this->input->post('pekerjaan_blangkosku');
		$alamat_blangkosku         	  = $this->input->post('alamat_blangkosku');
		$rt_blangkosku                = $this->input->post('rt_blangkosku');
		$tgl_dibuat_blangkosku        = $this->input->post('tgl_dibuat_blangkosku');
		$usaha_apa_blangkosku         = $this->input->post('usaha_apa_blangkosku');
		$tujuan_keperluan_blangkosku  = $this->input->post('tujuan_keperluan_blangkosku');

		$data = array(
			'bulan_register_blangkosku'   => $bulan_register_blangkosku,
			'tahun_register_blangkosku'   => $tahun_register_blangkosku,
			'nama_blangkosku' 		      => $nama_blangkosku,
			'jenis_kelamin_blangkosku'    => $jenis_kelamin_blangkosku,
			'ttl_blangkosku'     		  => $ttl_blangkosku,
			'bangsa_blangkosku'           => $bangsa_blangkosku,
			'agama_blangkosku'            => $agama_blangkosku,
			'nik_blangkosku'              => $nik_blangkosku,
			'pekerjaan_blangkosku' 	      => $pekerjaan_blangkosku,
			'alamat_blangkosku'           => $alamat_blangkosku,
			'rt_blangkosku'           	  => $rt_blangkosku,
			'tgl_dibuat_blangkosku '      => $tgl_dibuat_blangkosku,
			'usaha_apa_blangkosku' 	      => $usaha_apa_blangkosku,
			'tujuan_keperluan_blangkosku' => $tujuan_keperluan_blangkosku,
		);

		$where = array('id_blangkosku' => $id);
		$this->m_blangkosku->update_data($where, $data, 'blangkosku');
		$this->session->set_flashdata('message', '<div class="alert alert-primary d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
		  Data Berhasil Diupdate !
		</div>
	  </div>');
		redirect('blangkosku/index');
	}

	public function pdf($id)
	{
		$where = array('id_blangkosku' => $id);
		$this->m_blangkosku->pdf_data($where, 'blangkosku');
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
		$this->load->library('pdfgenerator');

		$data['blangkosku'] = $this->m_blangkosku->pdf_data($where, 'blangkosku')->result();
		$this->load->view('pdf/laporan_blangkosku', $data);
		// title dari pdf
		$this->data['title_pdf'] = 'Surat Keterangan Usaha';

		// filename dari pdf ketika didownload
		$file_pdf = 'Surat Keterangan Usaha';
		// setting paper
		$paper = 'F4';
		//orientasi paper potrait / landscape
		$orientation = "portrait";

		$html = $this->load->view('pdf/laporan_blangkosku', $this->data, true);

		// run dompdf
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}

	public function detail($id)
	{
		$this->load->model('m_blangkosku');
		$detail = $this->m_blangkosku->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_blangkosku', $data);
		$this->load->view('templates/footer');
	}

	
}
