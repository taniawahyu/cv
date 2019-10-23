<?php

class Pendidikan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model("admin/pendidikan_model");
        $this->load->library('form_validation');
	}

	public function index()
	{
        $data["pendidikan"] = $this->pendidikan_model->getPendidikan();
       // var_dump($data);
		$this->load->view('admin/pendidikan', $data);
	}

	public function simpan()
    {
        $data = $this->pendidikan_model;
        $validation = $this->form_validation;
        $validation->set_rules($data->rules());

		// var_dump($validation->run()); 
        if ($validation->run()) {
            $data->simpan();
            $this->session->set_flashdata('success', 'Data pendidikan Berhasil ditambahkan');
            redirect('admin/pendidikan');
        }

        $this->load->view("admin/pendidikan", $data);
    }

    public function edit($id = null)
    {       
        $data = $this->pendidikan_model;
        $validation = $this->form_validation;
        $validation->set_rules($data->rules());

        // var_dump($validation->run());
        if ($validation->run()) {
            $data->edit();
            $this->session->set_flashdata('success', 'Berhasil disimpan');            
            redirect('admin/pendidikan');
            
        }
        $data->pendidikan = $data->getById($id);
        if (!$data->pendidikan) show_404();

        // var_dump();
        $this->load->view("admin/edit_pendidikan", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pendidikan_model->delete($id)) {
            redirect(site_url('admin/pendidikan'));
        }
    }
}