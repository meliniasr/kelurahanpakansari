<?php
class M_tidaksengketa extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tidaksengketa');
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
        $query = $this->db->get_where('tidaksengketa', array('id_tidaksengketa' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tidaksengketa');
        $this->db->like('id_tidaksengketa', $keyword);
        $this->db->or_like('tgl_tidaksengketa', $keyword);
        $this->db->or_like('nama_pemohon_tidaksengketa', $keyword);
        $this->db->or_like('suratkepemilikan_tidaksengketa', $keyword);
        $this->db->or_like('alamat_tidaksengketa', $keyword);
        $this->db->or_like('keterangan_tidaksengketa', $keyword);
        return $this->db->get()->result();
    }
}
