<?php
class M_user extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('user');
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('user', array('id_user' => $id))->row();
        return $query;
    }
}
