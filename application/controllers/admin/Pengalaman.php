<?php

class Pengalaman extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model("admin/pengalaman_model");
        $this->load->library('form_validation');
	}

	public function index()
	{
        $data["pengalaman"] = $this->pengalaman_model->getPengalaman();
        //var_dump($data);
		$this->load->view('admin/pengalaman', $data);
	}

	public function simpan()
    {
        $data = $this->pengalaman_model;
        $validation = $this->form_validation;
        $validation->set_rules($data->rules());

		// var_dump($validation->run());  Untuk ngetest
        if ($validation->run()) {
            $data->simpan();
            $this->session->set_flashdata('success', 'Data Pengalaman Berhasil ditambahkan');
            redirect(site_url('admin/pengalaman'));
        }

        $this->load->view("admin/pengalaman", $data);
    }

    public function edit($id = null)
    {       
        $data = $this->pengalaman_model;
        $validation = $this->form_validation;
        $validation->set_rules($data->rules());

        // var_dump($validation->run());
        if ($validation->run()) {
            $data->edit();
            $this->session->set_flashdata('success', 'Berhasil disimpan');            
            redirect('admin/pengalaman');
            
        }
        $data->pengalaman = $data->getById($id);
        if (!$data->pengalaman) show_404();

        //var_dump();
        $this->load->view("admin/edit_pengalaman", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pengalaman_model->delete($id)) {
            redirect(site_url('admin/pengalaman'));
        }
    }
}