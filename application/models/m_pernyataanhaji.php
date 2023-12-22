<?php
class M_pernyataanhaji extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('pernyataanhaji');
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
        $query = $this->db->get_where('pernyataanhaji', array('id_haji' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('pernyataanhaji');
        $this->db->like('id_haji', $keyword);
        $this->db->or_like('tgl_haji', $keyword);
        $this->db->or_like('nama_haji', $keyword);
        $this->db->or_like('tempat_lahir_haji', $keyword);
        $this->db->or_like('ttl_lahir_haji', $keyword);
        $this->db->or_like('no_ktp_haji', $keyword);
        $this->db->or_like('jenis_kelamin_haji', $keyword);
        $this->db->or_like('pekerjaan_haji', $keyword);
        $this->db->or_like('alamat_haji', $keyword);
        $this->db->or_like('keterangan_haji', $keyword);
        return $this->db->get()->result();
    }
}
