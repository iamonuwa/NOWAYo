<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('Images'));
	}

	public function index()
	{
		die(var_dump($this->images));		
	}

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */