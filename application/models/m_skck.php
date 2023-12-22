<?php
class M_skck extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('skck');
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
        $query = $this->db->get_where('skck', array('id_skck' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('skck');
        $this->db->like('id_skck', $keyword);
        $this->db->or_like('tgl_skck', $keyword);
        $this->db->or_like('nama_skck', $keyword);
        $this->db->or_like('tempat_lahir_skck', $keyword);
        $this->db->or_like('ttl_skck', $keyword);
        $this->db->or_like('jenis_kelamin_skck', $keyword);
        $this->db->or_like('status_perkawinan_skck', $keyword);
        $this->db->or_like('agama_skck', $keyword);
        $this->db->or_like('pendidikan_terakhir_skck', $keyword);
        $this->db->or_like('alamat_skck', $keyword);
        $this->db->or_like('nik_skck', $keyword);
        $this->db->or_like('tujuan_skck', $keyword);
        $this->db->or_like('keterangan_skck', $keyword);
        return $this->db->get()->result();
    }
}
