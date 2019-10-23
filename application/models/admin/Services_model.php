<?php
class Services_model extends CI_Model{

    public function rules()
    {
        return [
            ['field' => 'judul_services',
            'label' => 'Nama Service',
            'rules' => 'required'],

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']
        ];
    }

    public function getServices()
    {
        return $this->db->get('services')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('services', ["id" => $id])->row();
    }

    public function simpan()
    {
        $post = $this->input->post();
        $this->id    = uniqid();
        $this->judul_services           = $post["judul_services"];
        $this->deskripsi       = $post["deskripsi"];
        
        $this->db->insert('services', $this);
    }

    public function edit()
    {
        $post                   = $this->input->post();
        $this->judul_services           = $post["judul_services"];
        $this->deskripsi       = $post["deskripsi"];
        
        // $var_dump($post);
        $this->db->update('services', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('services', array("id" => $id));
    }

}
?>