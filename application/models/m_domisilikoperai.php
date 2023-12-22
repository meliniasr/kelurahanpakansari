<?php
class M_domisilikoperai extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('domisilikoperai');
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
        $query = $this->db->get_where('domisilikoperai', array('id_koperasi' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('domisilikoperai');
        $this->db->like('id_koperasi', $keyword);
        $this->db->or_like('tgl_koperasi', $keyword);
        $this->db->or_like('nama_pemilikkoperasi', $keyword);
        $this->db->or_like('tempat_lahir_koperasi', $keyword);
        $this->db->or_like('ttl_lahir_koperasi', $keyword);
        $this->db->or_like('pekerjaan_koperasi', $keyword);
        $this->db->or_like('alamat_koperasi', $keyword);
        $this->db->or_like('no_ktp_koperasi', $keyword);
        $this->db->or_like('jenis_koperasi', $keyword);
        $this->db->or_like('status_kepemilikan', $keyword);
        $this->db->or_like('nama_koperasi', $keyword);
        $this->db->or_like('lokasi_koperasi', $keyword);
        $this->db->or_like('keterangan_koperasi', $keyword);
        return $this->db->get()->result();
    }
}
