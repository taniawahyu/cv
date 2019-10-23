<?php

class Profile extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model("admin/Profile_model");
        $this->load->library('form_validation');
	}

	public function index()
	{
		$data["biografi"] = $this->Profile_model->getProfile();
		//var_dump($data);
		$this->load->view('admin/profile', $data);
	}

	public function edit($id = null)
    {       
        $biografi = $this->Profile_model;
        $validation = $this->form_validation;
        $validation->set_rules($biografi->rules());

        // var_dump($validation->run());
        if ($validation->run()) {
            $biografi->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');            
            redirect(site_url('admin/profile'));
            
        }
        $data["biografi"] = $biografi->getById($id);
        if (!$data["biografi"]) show_404();
        //var_dump();
        $this->load->view("admin/biodata/profile", $data);
    }
}