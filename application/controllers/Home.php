<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("home_model");
		$this->load->model("admin/pengalaman_model");
		$this->load->model("admin/pendidikan_model");
		$this->load->model("admin/skill_model");
		$this->load->model("admin/work_model");
	}
	public function index()
	{
		$data["biografi"] = $this->home_model->getAll();
		$data["pengalaman"] = $this->pengalaman_model->getPengalaman();
		$data["pendidikan"] = $this->pendidikan_model->getPendidikan();
		$data["skill"] = $this->skill_model->getSkills();
		$data["work"] = $this->work_model->getwork();
		//var_dump($data);
		$this->load->view('home', $data);
		// $this->load->view('home');
	}
}
