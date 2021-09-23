<?php
class M_ajb extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('ajb');
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
        $query = $this->db->get_where('ajb', array('id_ajb' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('ajb');
        $this->db->like('id_ajb', $keyword);
        $this->db->or_like('tgl_ajb', $keyword);
        $this->db->or_like('nama_penjual_ajb', $keyword);
        $this->db->or_like('kepemilikan_ajb', $keyword);
        $this->db->or_like('alamat_ajb', $keyword);
        $this->db->or_like('nama_pembeli_ajb', $keyword);
        $this->db->or_like('nama_letter_ajb', $keyword);
        $this->db->or_like('no_sppt_ajb', $keyword);
        $this->db->or_like('luastanah_ajb', $keyword);
        $this->db->or_like('no_sertifikat_ajb', $keyword);
        $this->db->or_like('lokasitanah_ajb', $keyword);
        $this->db->or_like('keterangan_ajb', $keyword);
        return $this->db->get()->result();
    }
}
