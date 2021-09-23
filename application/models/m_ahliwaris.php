<?php
class M_ahliwaris extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('ahliwaris');
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
        $query = $this->db->get_where('ahliwaris', array('id_ahliwaris' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('ahliwaris');
        $this->db->like('id_ahliwaris', $keyword);
        $this->db->or_like('tgl_ahliwaris', $keyword);
        $this->db->or_like('nama_almarhum_ahliwaris', $keyword);
        $this->db->or_like('nama_ahliwaris', $keyword);
        $this->db->or_like('alamat_ahliwaris', $keyword);
        $this->db->or_like('keterangan_ahliwaris', $keyword);
        return $this->db->get()->result();
    }
}
