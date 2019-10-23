<?php

class services extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model("admin/services_model");
        $this->load->library('form_validation');
	}

	public function index()
	{
        $data["services"] = $this->services_model->getServices();
        var_dump($data);
		$this->load->view('admin/services', $data);
	}

	public function simpan()
    {
        $data = $this->services_model;
        $validation = $this->form_validation;
        $validation->set_rules($data->rules());

		// var_dump($validation->run()); 
        if ($validation->run()) {
            $data->simpan();
            $this->session->set_flashdata('success', 'Data pendidikan Berhasil ditambahkan');
            redirect('admin/services');
        }

        $this->load->view("admin/services", $data);
    }

    public function edit($id = null)
    {       
        $data = $this->services_model;
        $validation = $this->form_validation;
        $validation->set_rules($data->rules());

        // var_dump($validation->run());
        if ($validation->run()) {
            $data->edit();
            $this->session->set_flashdata('success', 'Berhasil disimpan');            
            redirect('admin/services');
            
        }
        $data->services = $data->getById($id);
        if (!$data->services) show_404();

        // var_dump();
        $this->load->view("admin/edit_services", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->services_model->delete($id)) {
            redirect(site_url('admin/services'));
        }
    }
}