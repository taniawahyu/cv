<?php

class Sosmed extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        // $this->load->model("admin/sosmed_model");
        // $this->load->library('form_validation');
	}

	public function index()
	{
        // $data["sosmed"] = $this->sosmed_model->getsosmed();
        // var_dump($data);
		$this->load->view('admin/sosmed');
	}

	// public function simpan()
    // {
    //     // $data = $this->sosmed_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($data->rules());

	// 	// var_dump($validation->run()); 
    //     if ($validation->run()) {
    //         $data->simpan();
    //         $this->session->set_flashdata('success', 'Data pendidikan Berhasil ditambahkan');
    //         redirect('admin/sosmed');
    //     }

    //     $this->load->view("admin/sosmed", $data);
    // }

    // public function edit($id = null)
    // {       
    //     // $data = $this->sosmed_model;
    //     // $validation = $this->form_validation;
    //     $validation->set_rules($data->rules());

    //     // var_dump($validation->run());
    //     if ($validation->run()) {
    //         $data->edit();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');            
    //         redirect('admin/sosmed');
            
    //     }
    //     $data->sosmed = $data->getById($id);
    //     if (!$data->sosmed) show_404();

    //     // var_dump();
    //     $this->load->view("admin/edit_sosmed", $data);
    // }

    // public function delete($id=null)
    // {
    //     if (!isset($id)) show_404();
        
    //     if ($this->sosmed_model->delete($id)) {
    //         redirect(site_url('admin/sosmed'));
    //     }
    // }
}