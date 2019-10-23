<?php
class Work_model extends CI_Model{

    public function rules()
    {
        return [
            ['field' => 'nama_project',
            'label' => 'Nama Project',
            'rules' => 'required'],

            ['field' => 'link_project',
            'label' => 'Link Project',
            'rules' => 'required'],

            ['field' => 'jenis_project',
            'label' => 'Jenis Project',
            'rules' => 'required']
        ];
    }

    public function getWork()
    {
        return $this->db->get('my_work')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('my_work', ["id" => $id])->row();
    }

    public function simpan()
    {
        $post = $this->input->post();
        $this->id    = uniqid();
        $this->nama_project  = $post["nama_project"];
        $this->link_project  = $post["link_project"];
        $this->jenis_project  = $post["jenis_project"];

        //foto
        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        }
        
        $this->db->insert('my_work', $this);
    }

    private function _uploadImage()
    {
        $post                           = $this->input->post();
        $config['upload_path']          = 'assets/images/my_work/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $_FILES["gambar"]["name"];
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    public function edit()
    {
        $post                   = $this->input->post();
        $this->nama_project  = $post["nama_project"];
        $this->link_project  = $post["link_project"];
        $this->jenis_project  = $post["jenis_project"];

        //foto
        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_image"];
        }
        // $var_dump($post);
        $this->db->update('my_work', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('my_work', array("id" => $id));
    }

}
?>