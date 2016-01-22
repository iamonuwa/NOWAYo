<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Camera extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('upload');
		$this->load->model(array('upload_model','state_model','gender_model','upload_model'));
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['list'] = $this->upload_model->get_list();
		$data['uploads'] = $this->upload_model->loadView();
		$data['camera'] = $this->upload_model->fetchByType('cam-tales');

		$data['state']= $this->state_model->loadAll();
		$data['gender']= $this->gender_model->loadAll();
		$data['limit'] = $this->upload_model->Limit();
		


		$this->load->library('pagination');

		$config['base_url'] = base_url('cp/camera');
		$config['total_rows'] = $this->upload_model->countAll();
		$config['per_page'] = "10";

		$data['pagination'] = $this->pagination->initialize($config);
		$this->title = "Our Camera Tales";
		$this->load->view('cpanel/layout/header');
		$this->load->view('cpanel/camera/list', $data);
		$this->load->view('cpanel/layout/footer');
	}

}

/* End of file Camera.php */
/* Location: ./application/controllers/cpanel/Camera.php */