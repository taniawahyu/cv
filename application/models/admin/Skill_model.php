<?php
class Skill_model extends CI_Model{

    public function rules()
    {
        return [
            ['field' => 'nama_skill',
            'label' => 'Nama Skill',
            'rules' => 'required'],

            ['field' => 'value',
            'label' => 'Value',
            'rules' => 'required']
        ];
    }

    public function getSkills()
    {
        return $this->db->get('skill')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('skill', ["id" => $id])->row();
    }

    public function simpan()
    {
        $post = $this->input->post();
        $this->id    = uniqid();
        $this->nama_skill           = $post["nama_skill"];
        $this->value       = $post["value"];
        
        $this->db->insert('skill', $this);
    }

    public function edit()
    {
        $post                   = $this->input->post();
        $this->nama_skill           = $post["nama_skill"];
        $this->value       = $post["value"];
        
        // $var_dump($post);
        $this->db->update('skill', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('skill', array("id" => $id));
    }

}
?>