<?php
class M_pensiunan extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('pensiunan');
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
        $query = $this->db->get_where('pensiunan', array('id_pensiun' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('pensiunan');
        $this->db->like('id_pensiun', $keyword);
        $this->db->or_like('tgl_pensiun', $keyword);
        $this->db->or_like('nama_pensiun', $keyword);
        $this->db->or_like('tempat_lahir_pensiun', $keyword);
        $this->db->or_like('ttl_lahir_pensiun', $keyword);
        $this->db->or_like('pensiunan', $keyword);
        $this->db->or_like('jenis_kelamin_pensiun', $keyword);
        $this->db->or_like('agama_pensiun', $keyword);
        $this->db->or_like('alamat_pensiun', $keyword);
        $this->db->or_like('tujuan_pensiun', $keyword);
        $this->db->or_like('keterangan_pensiun', $keyword);
        return $this->db->get()->result();
    }
}
