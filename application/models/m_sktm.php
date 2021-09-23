<?php
class M_sktm extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('sktm');
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
        $query = $this->db->get_where('sktm', array('id_sktm' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('sktm');
        $this->db->like('id_sktm', $keyword);
        $this->db->or_like('tgl_sktm', $keyword);
        $this->db->or_like('nama_pemohon_sktm', $keyword);
        $this->db->or_like('tempat_lahir_sktm', $keyword);
        $this->db->or_like('ttl_lahir_sktm', $keyword);
        $this->db->or_like('jenis_kelamin_sktm', $keyword);
        $this->db->or_like('nik_sktm', $keyword);
        $this->db->or_like('pekerjaan_sktm', $keyword);
        $this->db->or_like('alamat_sktm', $keyword);
        $this->db->or_like('tujuan_sktm', $keyword);
        $this->db->or_like('keterangan_sktm', $keyword);
        return $this->db->get()->result();
    }
}
