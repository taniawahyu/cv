<?php

class Work extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model("admin/work_model");
        $this->load->library('form_validation');
	}

	public function index()
	{
        //foreach
        $data["work"] = $this->work_model->getWork();
        var_dump($data);
		$this->load->view('admin/work', $data);
	}

	public function simpan()
    {
        $data = $this->work_model;
        $validation = $this->form_validation;
        $validation->set_rules($data->rules());

		// var_dump($validation->run()); 
        if ($validation->run()) {
            $data->simpan();
            $this->session->set_flashdata('success', 'Data Berhasil ditambahkan');
            redirect('admin/work');
        }

        $this->load->view("admin/work", $data);
    }

    public function edit($id = null)
    {       
        $data = $this->work_model;
        $validation = $this->form_validation;
        $validation->set_rules($data->rules());

        // var_dump($validation->run());
        if ($validation->run()) {
            $data->edit();
            $this->session->set_flashdata('success', 'Berhasil disimpan');            
            redirect('admin/work');
            
        }
        $data->work = $data->getById($id);
        if (!$data->work) show_404();

        // var_dump();
        $this->load->view("admin/edit_work", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->work_model->delete($id)) {
            redirect(site_url('admin/work'));
        }
    }
}