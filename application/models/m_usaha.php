<?php
class M_usaha extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('usaha');
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
        $query = $this->db->get_where('usaha', array('id_usaha' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('usaha');
        $this->db->like('id_usaha', $keyword);
        $this->db->or_like('tgl_usaha', $keyword);
        $this->db->or_like('nama_usaha', $keyword);
        $this->db->or_like('tempat_lahir_usaha', $keyword);
        $this->db->or_like('ttl_usaha', $keyword);
        $this->db->or_like('pekerjaan_usaha', $keyword);
        $this->db->or_like('alamat_usaha', $keyword);
        $this->db->or_like('no_ktp_usaha', $keyword);
        $this->db->or_like('jenis_usaha', $keyword);
        $this->db->or_like('statuskepemilikan_usaha', $keyword);
        $this->db->or_like('bank_usaha', $keyword);
        $this->db->or_like('lokasi_usaha', $keyword);
        $this->db->or_like('keterangan_usaha', $keyword);
        return $this->db->get()->result();
    }
}
