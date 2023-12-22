<?php
class M_belumpernahmenikah extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('belumpernahmenikah');
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
        $query = $this->db->get_where('belumpernahmenikah', array('id_bpm' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('belumpernahmenikah');
        $this->db->like('id_bpm', $keyword);
        $this->db->or_like('tgl_bpm', $keyword);
        $this->db->or_like('nama_pemohon_bn', $keyword);
        $this->db->or_like('tempat_lahir_bpm', $keyword);
        $this->db->or_like('ttl_lahir_bpm', $keyword);
        $this->db->or_like('jenis_kelamin_bpm', $keyword);
        $this->db->or_like('nik_bpm', $keyword);
        $this->db->or_like('pekerjaan_bpm', $keyword);
        $this->db->or_like('alamat_bpm', $keyword);
        $this->db->or_like('tujuan_bpm', $keyword);
        $this->db->or_like('keterangan_bpm', $keyword);
        return $this->db->get()->result();
    }
}
