<?php
class Profile_model extends CI_Model{

    public function rules()
    {
        return [
            ['field' => 'nama_lengkap',
            'label' => 'Nama Lengkap',
            'rules' => 'required'],

            ['field' => 'nama_panggilan',
            'label' => 'Nama Panggilan',
            'rules' => 'required'],

            ['field' => 'ttl',
            'label' => 'Tempat, Tanggal lahir',
            'rules' => 'required'],

            ['field' => 'agama',
            'label' => 'Agama',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'jenis_kelamin',
            'label' => 'Jenis Kelamin',
            'rules' => 'required'],

            ['field' => 'no_telp',
            'label' => 'Nomor Telepon',
            'rules' => 'required'],

            ['field' => 'kota',
            'label' => 'Kota',
            'rules' => 'required'],

            ['field' => 'kecamatan',
            'label' => 'kecamatan',
            'rules' => 'required'],

            ['field' => 'kelurahan',
            'label' => 'Kelurahan',
            'rules' => 'required'],

            ['field' => 'pekerjaan',
            'label' => 'Pekerjaan',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required'],

            ['field' => 'hobi',
            'label' => 'Hobi',
            'rules' => 'required']
        ];
    }

    public function getProfile()
    {
        return $this->db->get('biografi')->row_array();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('biografi', ["id" => $id])->row();
    }

    public function update()
    {
        $post                   = $this->input->post();
        $this->nama_lengkap     = $post["nama_lengkap"];
        $this->nama_panggilan   = $post["nama_panggilan"];
        $this->pekerjaan        = $post["pekerjaan"];
        $this->ttl              = $post["ttl"];
        $this->jenis_kelamin    = $post["jenis_kelamin"];
        $this->agama            = $post["agama"];
        $this->no_telp          = $post["no_telp"];
        $this->alamat           = $post["alamat"];
        $this->hobi             = $post['hobi'];
        $this->deskripsi        = $post["deskripsi"];
        $this->kota             = $post['kota'];
        $this->kecamatan        = $post['kecamatan'];
        $this->kelurahan        = $post['kelurahan'];
        $this->email            = $post["email"];

        //foto
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        // $var_dump($post);
        $this->db->update('biografi', $this, array('id' => $post['id']));
        
    }

    private function _uploadImage()
    {
        $post                           = $this->input->post();
        $config['upload_path']          = 'assets/images/biodata/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $post['id'];
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        
        return "1.png";
    }
}
?>