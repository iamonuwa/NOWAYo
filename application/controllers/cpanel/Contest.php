<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contest extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('upload');
		$this->load->model(array('upload_model','state_model','gender_model','contest_model'));
		$this->load->helper(array('form', 'url'));
	}

	public function turnOn($value)
	{
		if($value == 1){
		$turnOn = $this->contest_model->switchOn();
		}
		else{
		$turnOn = $this->contest_model->switchOff();
		}
		return $turnOn;
	}

	public function addImages($image_id = array())
	{
		# code...
	}

	public function removeImages($image_id=array())
	{
		# code...
	}
	public function voteImage($value='')
	{
		# code...
	}
}

/* End of file Contest.php */
/* Location: ./application/controllers/cpanel/Contest.php */