<?php
class M_suratmasuk extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('suratmasuk');
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
        $query = $this->db->get_where('suratmasuk', array('id_suratmasuk' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('suratmasuk');
        $this->db->like('id_suratmasuk', $keyword);
        $this->db->or_like('tgl_pengiriman', $keyword);
        $this->db->or_like('nama_instansi_sm', $keyword);
        $this->db->or_like('no_suratmasuk', $keyword);
        $this->db->or_like('tgl_suratmasuk', $keyword);
        $this->db->or_like('prihal_suratmasuk', $keyword);
        $this->db->or_like('penanggungjawab_suratmasuk', $keyword);
        $this->db->or_like('keterangan_suratmasuk', $keyword);
        return $this->db->get()->result();
    }

    public function HitungJumlahCount()
    {
        $this->db->select_sum('suratmasuk');
        $query = $this->db->get('suratmasuk');
        if ($query->num_rows() > 0) {
            return $query->row()->suratmasuk;
        } else {
            return 0;
        }
    }
}
