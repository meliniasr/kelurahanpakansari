<?php
class M_permohonanproposal extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('permohonanproposal');
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
        $query = $this->db->get_where('permohonanproposal', array('id_permohonanproposal' => $id))->row();
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('permohonanproposal');
        $this->db->like('id_permohonanproposal', $keyword);
        $this->db->or_like('tgl_permohonanproposal', $keyword);
        $this->db->or_like('perihal_proposal', $keyword);
        $this->db->or_like('no_proposal', $keyword);
        $this->db->or_like('tgl_proposal', $keyword);
        $this->db->or_like('penanggungjawab_proposal', $keyword);
        $this->db->or_like('pemohon_proposal', $keyword);
        $this->db->or_like('alamat_proposal', $keyword);
        $this->db->or_like('keterangan_proposal', $keyword);
        return $this->db->get()->result();
    }
}
