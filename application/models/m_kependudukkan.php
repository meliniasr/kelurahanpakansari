<?php
class M_kependudukkan extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('kependudukkan');
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
        $query = $this->db->get_where('kependudukkan', array('id_kp' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('kependudukkan');
        $this->db->like('id_kp', $keyword);
        $this->db->or_like('tgl_kp', $keyword);
        $this->db->or_like('nik_kp', $keyword);
        $this->db->or_like('kk_kp', $keyword);
        $this->db->or_like('nama_pemohon_kp', $keyword);
        $this->db->or_like('tempat_lahir_kp', $keyword);
        $this->db->or_like('ttl_kp', $keyword);
        $this->db->or_like('jenis_kelamin_kp', $keyword);
        $this->db->or_like('status_kp', $keyword);
        $this->db->or_like('alamat_kp', $keyword);
        $this->db->or_like('keterangan_kp', $keyword);
        return $this->db->get()->result();
    }
}
