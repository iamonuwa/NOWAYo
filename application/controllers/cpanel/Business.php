<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Business extends CI_Controller

{
	function __construct()
	{
		parent:: __construct();
		$this->load->helper('uri');
		$this->load->model(array('userutitlities','news_model','state_model','gender_model','upload_model', ))
		$this->load->library('Aauth');
		$this->load->library('user_agent');
		$this->title = "Business Listing";
		$this->session->set_userdata('redirect_back', $this->agent->referrer());  

	}

	public function business($view = NULL)
	{
		if($view === NULL)
		{
			$list['business'] = $this->userutitlities->add_biz_cat(NULL, NULL);

			$this->load->view('layout/header');
			$this->load->view('news/biz_listing', $list);
			$this->load->view('layout/footer');

		}
			$list['business'] = $this->userutitlities->add_biz_cat(NULL, NULL);

			$this->load->view('layout/header');
			$this->load->view('business/biz_listing', $list);
			$this->load->view('layout/footer');
	}

}


?>