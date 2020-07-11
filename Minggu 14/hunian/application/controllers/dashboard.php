<?php

class Dashboard extends CI_Controller{

	public function index()
	{
		$data['hunian'] = $this->model_hunian->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/banner');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id_hunian)
	{
		$data['hunian'] = $this->model_hunian->detail_hunian($id_hunian);
		$this->load->view('templates/header');
		$this->load->view('templates/banner');
		$this->load->view('templates/detail_hunian', $data);
		$this->load->view('templates/footer');
	}

	public function detailadmin($id_hunian)
	{
		$data['hunian'] = $this->model_hunian->detail_hunian($id_hunian);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/banner');
		$this->load->view('templates_admin/detail_hunian', $data);
		$this->load->view('templates_admin/footer');
	}
}