<?php

class Skill extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model("admin/skill_model");
        $this->load->library('form_validation');
	}

	public function index()
	{
        $data["skill"] = $this->skill_model->getSkills();
        var_dump($data);
		$this->load->view('admin/skill', $data);
	}

	public function simpan()
    {
        $data = $this->skill_model;
        $validation = $this->form_validation;
        $validation->set_rules($data->rules());

		// var_dump($validation->run()); 
        if ($validation->run()) {
            $data->simpan();
            $this->session->set_flashdata('success', 'Data pendidikan Berhasil ditambahkan');
            redirect('admin/skill');
        }

        $this->load->view("admin/skill", $data);
    }

    public function edit($id = null)
    {       
        $data = $this->skill_model;
        $validation = $this->form_validation;
        $validation->set_rules($data->rules());

        // var_dump($validation->run());
        if ($validation->run()) {
            $data->edit();
            $this->session->set_flashdata('success', 'Berhasil disimpan');            
            redirect('admin/skill');
            
        }
        $data->skill = $data->getById($id);
        if (!$data->skill) show_404();

        // var_dump();
        $this->load->view("admin/edit_skill", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->skill_model->delete($id)) {
            redirect(site_url('admin/skill'));
        }
    }
}