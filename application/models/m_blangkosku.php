<?php
class M_blangkosku extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('blangkosku');
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

    public function pdf_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('blangkosku', array('id_blangkosku' => $id))->row();
        return $query;
    }
}
