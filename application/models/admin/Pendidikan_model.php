<?php
class Pendidikan_model extends CI_Model{

    public function rules()
    {
        return [
            ['field' => 'nama_sekolah',
            'label' => 'Nama Sekolah',
            'rules' => 'required'],

            ['field' => 'tahun_lulus',
            'label' => 'Tahun Lulus',
            'rules' => 'required'],

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']
        ];
    }

    public function getPendidikan()
    {
        return $this->db->get('sekolah')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('sekolah', ["pendidikan_id" => $id])->row();
    }

    public function simpan()
    {
        $post = $this->input->post();
        $this->pendidikan_id    = uniqid();
        $this->nama_sekolah            = $post["nama_sekolah"];
        $this->tahun_lulus       = $post["tahun_lulus"];
        $this->deskripsi       = $post["deskripsi"];
        $this->db->insert('sekolah', $this);
    }

    public function edit()
    {
        $post                   = $this->input->post();
        $this->nama_sekolah            = $post["nama_sekolah"];
        $this->tahun_lulus       = $post["tahun_lulus"];
        $this->deskripsi       = $post["deskripsi"];
        
        // $var_dump($post);
        $this->db->update('sekolah', $this, array('pendidikan_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('sekolah', array("pendidikan_id" => $id));
    }

}
?>