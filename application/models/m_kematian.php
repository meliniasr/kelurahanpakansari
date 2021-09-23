<?php
class M_kematian extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('kematian');
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
        $query = $this->db->get_where('kematian', array('id_kematian' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('kematian');
        $this->db->like('id_kematian', $keyword);
        $this->db->or_like('tgl_keterangankematian', $keyword);
        $this->db->or_like('nama_kematian', $keyword);
        $this->db->or_like('tempat_lahir_kematian', $keyword);
        $this->db->or_like('ttl_kematian', $keyword);
        $this->db->or_like('jenis_kelamin_kematian', $keyword);
        $this->db->or_like('agama_kematian', $keyword);
        $this->db->or_like('alamat_kematian', $keyword);
        $this->db->or_like('keterangan_kematian', $keyword);
        return $this->db->get()->result();
    }
}
