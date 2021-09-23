<?php
class M_registermenikah extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('registermenikah');
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
        $query = $this->db->get_where('registermenikah', array('id_menikah' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('registermenikah');
        $this->db->like('id_menikah', $keyword);
        $this->db->or_like('tgl_menikah', $keyword);
        $this->db->or_like('nama_suami_menikah', $keyword);
        $this->db->or_like('tempat_lahir_suami', $keyword);
        $this->db->or_like('tgl_lahir_suami', $keyword);
        $this->db->or_like('alamat_suami', $keyword);
        $this->db->or_like('status_suami', $keyword);
        $this->db->or_like('pekerjaan_menikah', $keyword);
        $this->db->or_like('nama_istri_menikah', $keyword);
        $this->db->or_like('tempat_lahir_istri', $keyword);
        $this->db->or_like('tgl_lahir_istri', $keyword);
        $this->db->or_like('alamat_istri', $keyword);
        $this->db->or_like('status_istri', $keyword);
        $this->db->or_like('keterangan_menikah', $keyword);
        return $this->db->get()->result();
    }
}
