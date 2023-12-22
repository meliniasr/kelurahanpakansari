<?php
class M_kelahiran extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('kelahiran');
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
        $query = $this->db->get_where('kelahiran', array('id_kelahiran' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('kelahiran');
        $this->db->like('id_kelahiran', $keyword);
        $this->db->or_like('tgl_kelahiran', $keyword);
        $this->db->or_like('nama_anak_kelahiran', $keyword);
        $this->db->or_like('tempat_lahir_kelahiran', $keyword);
        $this->db->or_like('ttl_kelahiran', $keyword);
        $this->db->or_like('jenis_kelamin_kelahiran', $keyword);
        $this->db->or_like('nama_bapak_kelahiran', $keyword);
        $this->db->or_like('nama_ibu_kelahiran', $keyword);
        $this->db->or_like('alamat_kelahiran', $keyword);
        $this->db->or_like('keterangan_kelahiran', $keyword);
        return $this->db->get()->result();
    }
}
