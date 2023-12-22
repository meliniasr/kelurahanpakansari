<?php
class M_rumahtinggal extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('rumahtinggal');
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
        $query = $this->db->get_where('rumahtinggal', array('id_rt' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('rumahtinggal');
        $this->db->like('id_rt', $keyword);
        $this->db->or_like('tgl_rt', $keyword);
        $this->db->or_like('nama_rt', $keyword);
        $this->db->or_like('tempat_lahir_rt', $keyword);
        $this->db->or_like('tgl_lahir_rt', $keyword);
        $this->db->or_like('pekerjaan_rt', $keyword);
        $this->db->or_like('jenis_kelamin_rt', $keyword);
        $this->db->or_like('agama_rt', $keyword);
        $this->db->or_like('alamat_rt', $keyword);
        $this->db->or_like('diperumahan_rt', $keyword);
        $this->db->or_like('keterangan_rt', $keyword);
        return $this->db->get()->result();
    }
}
