<?php
class Home_model extends CI_Model{
    public function getAll()
    {
        return $this->db->get('biografi')->row_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('biografi', ["id" => $id])->row();
    }
}
?>