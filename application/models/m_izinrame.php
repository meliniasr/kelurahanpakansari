<?php
class M_izinrame extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('izinrame');
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
        $query = $this->db->get_where('izinrame', array('id_izinrame' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('izinrame');
        $this->db->like('id_izinrame', $keyword);
        $this->db->or_like('tgl_izinrame', $keyword);
        $this->db->or_like('nama_pemohon_izinrame', $keyword);
        $this->db->or_like('tempat_lahir_izinrame', $keyword);
        $this->db->or_like('ttl_izinrame', $keyword);
        $this->db->or_like('jenis_kelamin_izinrame', $keyword);
        $this->db->or_like('nik_izinrame', $keyword);
        $this->db->or_like('pekerjaan_izinrame', $keyword);
        $this->db->or_like('alamat_izinrame', $keyword);
        $this->db->or_like('waktu_izinrame', $keyword);
        $this->db->or_like('acara_izinrame', $keyword);
        return $this->db->get()->result();
    }
}
