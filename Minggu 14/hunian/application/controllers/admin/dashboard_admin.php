<?php

class Dashboard_admin extends CI_Controller{

	public function index()
	{
		$data['hunian'] = $this->model_hunian->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/banner');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates_admin/footer');
	}
}