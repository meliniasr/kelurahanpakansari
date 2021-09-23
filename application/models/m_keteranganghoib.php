<?php
class M_keteranganghoib extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('keteranganghoib');
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
        $query = $this->db->get_where('keteranganghoib', array('id_ghoib' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('keteranganghoib');
        $this->db->like('id_ghoib', $keyword);
        $this->db->or_like('tgl_ghoib', $keyword);
        $this->db->or_like('nama_ghoib', $keyword);
        $this->db->or_like('tempat_lahir_ghoib', $keyword);
        $this->db->or_like('ttl_lahir_ghoib', $keyword);
        $this->db->or_like('pekerjaan_ghoib', $keyword);
        $this->db->or_like('jenis_kelamin_ghoib', $keyword);
        $this->db->or_like('agama_ghoib', $keyword);
        $this->db->or_like('alamat_ghoib', $keyword);
        $this->db->or_like('no_suratnikah_ghoib', $keyword);
        $this->db->or_like('keterangan_ghoib', $keyword);
        return $this->db->get()->result();
    }
}
