<?php
class M_umum extends CI_Model{
    public function tampil_data(){
        return $this->db->get('umum');
    }

    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table){
    	$this->db->where($where);
    	$this->db->delete($table);
    }

    public function edit_data($where, $table){
    	return $this->db->get_where($table,$where); 
    }

    function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function detail_data($id = NULL){
        $query = $this->db->get_where('umum', array('id_umum' => $id))->row();
        return $query;
    }
    
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('umum');
        $this->db->like('id_umum', $keyword);
        $this->db->or_like('tgl_umum', $keyword);
        $this->db->or_like('nama_umum', $keyword);
        $this->db->or_like('tempat_lahir_umum', $keyword);
        $this->db->or_like('ttl_lahir_umum', $keyword);
        $this->db->or_like('pekerjaan_umum', $keyword);
        $this->db->or_like('jenis_kelamin_umum', $keyword);
        $this->db->or_like('agama_umum', $keyword);
        $this->db->or_like('tujuan_umum', $keyword);
        $this->db->or_like('keterangan_umum', $keyword);
        return $this->db->get()->result();
    }
}
?>