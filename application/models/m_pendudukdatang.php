<?php
class M_pendudukdatang extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('pendudukdatang');
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
        $query = $this->db->get_where('pendudukdatang', array('id_pendudukdatang' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('pendudukdatang');
        $this->db->like('id_pendudukdatang', $keyword);
        $this->db->or_like('tgl_pendudukdatang', $keyword);
        $this->db->or_like('nama_pendudukdatang', $keyword);
        $this->db->or_like('tempat_lahir_pendudukdatang', $keyword);
        $this->db->or_like('ttl_pendudukdatang', $keyword);
        $this->db->or_like('pekerjaan_pendudukdatang', $keyword);
        $this->db->or_like('jenis_kelamin_pendudukdatang', $keyword);
        $this->db->or_like('nik_pendudukdatang', $keyword);
        $this->db->or_like('alamat_datang_pendudukdatang', $keyword);
        $this->db->or_like('alamat_asal_pendudukdatang', $keyword);
        $this->db->or_like('keterangan_pendudukdatang', $keyword);
        return $this->db->get()->result();
    }
}
