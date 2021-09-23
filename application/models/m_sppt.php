<?php
class M_sppt extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('sppt');
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('sppt', array('id_sppt' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('sppt');
        $this->db->like('id_sppt', $keyword);
        $this->db->or_like('tgl_sppt', $keyword);
        $this->db->or_like('nama_sppt', $keyword);
        $this->db->or_like('tempat_lahir_sppt', $keyword);
        $this->db->or_like('ttl_sppt', $keyword);
        $this->db->or_like('jenis_kelamin_sppt', $keyword);
        $this->db->or_like('bukti_kepemilikan', $keyword);
        $this->db->or_like('alamat_sppt', $keyword);
        $this->db->or_like('lokasitanah_sppt', $keyword);
        $this->db->or_like('luas_tanah_sppt', $keyword);
        return $this->db->get()->result();
    }
}
