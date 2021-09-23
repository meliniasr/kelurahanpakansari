<?php
class M_suratkeluar extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('suratkeluar');
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
        $query = $this->db->get_where('suratkeluar', array('id_suratkeluar' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('suratkeluar');
        $this->db->like('id_suratkeluar', $keyword);
        $this->db->or_like('nama_instansi_sk', $keyword);
        $this->db->or_like('no_suratkeluar', $keyword);
        $this->db->or_like('tgl_suratkeluar', $keyword);
        $this->db->or_like('prihal_suratkeluar', $keyword);
        $this->db->or_like('penanggungjawab_suratkeluar', $keyword);
        $this->db->or_like('tgl_pengiriman_sk', $keyword);
        $this->db->or_like('keterangan_suratkeluar', $keyword);
        return $this->db->get()->result();
    }
}
