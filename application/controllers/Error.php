<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {

	public function index()
	{
		$this->title = "Page Not Found";
		$this->output->set_status_header('404');
		$data['content'] = 'custom';
		$this->load->view('layout/header');
		$this->load->view('errors/html/custom', $data);
		$this->load->view('layout/footer');
	}
}