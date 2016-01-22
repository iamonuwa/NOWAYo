<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Index extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('news_model','state_model','gender_model','upload_model', 'userutitlities'));
		$this->load->library('Aauth');
		$this->load->library('user_agent');
		$this->session->set_userdata('redirect_back', $this->agent->referrer());  
	}

	public function index($page_id = null)
	{
		//Opinion page
		$data['opinion'] = $this->userutitlities->opinion(NULL, NULL, 5);

		$data['news'] = $this->news_model->loadView();
		$data['state']= $this->state_model->loadAll();
		$data['gender']= $this->gender_model->loadAll();
		$data['limit'] = $this->upload_model->Limit();
		$data['list'] = $this->news_model->limitView();
		



		$this->load->library('pagination');
		$config['base_url'] = base_url('index/');
		$config['total_rows'] = $this->news_model->countAll();
		$config['per_page'] = "5";
		$data['pagination'] = $this->pagination->initialize($config);
        $this->title = "NOWAYO&trade;";
        $this->load->view('layout/header');
        $this->load->view('index',$data);
        $this->load->view('layout/footer');
	}

	public function login()
	{

		$this->form_validation->set_rules('email', 'Email Address', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$email 		= html_escape($this->input->post('email'));
		$password 	= html_escape($this->input->post('password'));


		if($this->form_validation->run() == true){
			$check = $this->aauth->login($email, $password , $remember = FALSE, $totp_code = NULL);
			//var_export($check);
			if($check)
	{
		$this->session->set_flashdata('success',"You Have Logged In Successfully.");
		$this->redirect_url();
	}
		else
	{
		$this->session->set_flashdata('msg',"An Error Has Occurred. Please Check Your Login Credentials");
		$this->redirect_url();
	}
		}
		else
		{
			$this->session->set_flashdata('msg', "We Cannot log you in at this moment. Please try again Later");
			$this->redirect_url();
		}
	}
	public function is_loggedin() {

        if ($this->aauth->is_loggedin()){
            return true;
        }
        else
        {
        	return false;
        }
    }

	public function logout() {

      if($this->aauth->logout()){
      	$this->redirect_url();
       	}
    }

    public function is_member() {

        if ($this->aauth->is_member())
           return true;
    }

    public function is_admin() {

        if ($this->aauth->is_member('Admin'))
        	return true;
    }

	function get_user_groups(){
        //print_r( $this->aauth->get_user_groups());

        foreach($this->aauth->get_user_groups() as $a){

            echo $a->id . " " . $a->name . "<br>";
        }
    }

    public function get_group_name() {

        //echo $this->aauth->get_group_name(1);
    }

	public function forgot()
	{
		$check = $this->aauth->remind_password($this->input->post('email'));
		if($check){
			$this->session->set_flashdata('success', "A Password Reset Has Been Sent To Your Email Address");
		}
		else
		{
			$this->session->set_flashdata('msg',"An Error Occurred. Please Try Again Later");
			$this->redirect_url();
       		}
	}

	public function register()
	{
		$email 		= html_escape($this->input->post('email'));
		$password 	= html_escape($this->input->post('password'));
		$username 	= html_escape($this->input->post('user_name'));
		$fullname 	= html_escape($this->input->post('full_name'));
		$residence 	= html_escape($this->input->post('residence'));
		//$country 	= html_escape($this->input->post('country'));
		$phone 		= html_escape($this->input->post('phone'));
		$gender 	= html_escape($this->input->post('gender'));
		//$picture 	= "";
		$check 		= $this->aauth->create_user($email, $password, $username ,$fullname, $residence, $phone, $gender);

		if($check)
	{
		$this->session->set_flashdata('success', "Your Account Has Been Created Successfully");
		$this->redirect_url();
	}
		else
	{
		$this->session->flashdata($this->aauth->print_errors());
		/*$this->session->set_flashdata('msg', "Failed To Create Account At This Moment. Please Try Again Later");
      	$this->redirect_url();*/
		}
	}

	private function redirect_url()
	{
	if( $this->session->userdata('redirect_back') ) {
   	$redirect_url = $this->session->userdata('redirect_back'); 
   	$this->session->unset_userdata('redirect_back');
   	redirect( $redirect_url );
   		}
	}

	public function user()
	{
		$data['account'] = $this->aauth->get_user();
		$this->title = $this->session->userdata('fullname') .' Profile';
		$this->load->view('layout/header');
		$this->load->view('control/index',$data);
		$this->load->view('layout/footer');
	}

	public function control()
	{	
		if(!$this->aauth->is_member('Administrator')){
		$this->session->set_flashdata('msg', 'Access Denied. The Requested Page is Not For Normal Users');
		$this->redirect_url();
		}
		else{

		$this->title = 'Site Control Panel';
		$this->load->view('layout/header');
		$this->load->view('control/index');
		$this->load->view('layout/footer');
		}
	}

	public function opinion($page = NULL)
	{
		// var_dump($page);


		if($page === "submit")
		{	


			$title = $this->input->post('title');
			$link = $this->input->post('link');
			$message = $this->input->post('opinion');
			$state_id = $this->input->post('state');
			$user_id = $this->aauth->get_user()->id;
			$image = $this->image_pro($_FILES['image'], $user_id, $title);
			$date_created = time();
			if(!empty($message) AND !empty($title) AND !empty($image))
			{
				$store = $this->userutitlities->opinion(
					array("title"=>$title,
					"user_id" => $user_id,
						"link"=> $link,
						"content" => $message,
						"image_id" => $image,
						"date_created" => $date_created));
				if($store)
				{
					$this->session->set_flashdata('success', 'Opinion submitted Successfully for approval');

					$this->title = "Opinion Poll";

					$get_opinion['opinion'] = $this->userutitlities->opinion(NULL, NULL);

					$this->load->view('layout/header');
					$this->load->view('opinion/view', $get_opinion);
					$this->load->view('layout/footer');
				}
				else
				{
					$this->session->set_flashdata('msg', "Something went wrong couldn't submit " );
				}
			}
			else
				{
					$this->session->set_flashdata('msg', "Fields Can't be empty!!!, try again please" );
				}

			}

		if($page === NULL)
		{
			$get_opinion['opinion'] = $this->userutitlities->opinion(NULL, NULL);
			$this->title = "Opinion Poll";
			$this->load->view('layout/header');
			$this->load->view('opinion/view', $get_opinion);
			$this->load->view('layout/footer');
		 }elseif($page === "create")
		{
			$get_opinion['state'] = $this->state_model->loadAll();
			$this->title ="Submit an Opinion";
		$this->load->view('layout/header');
		$this->load->view('opinion/create', $get_opinion);
		$this->load->view('layout/footer');
		}
		if($page === "view")
		{

					if($page != NULL)
					{
						$id = $this->uri->segment(3);
					$get_opinion['opinion'] = $this->userutitlities->opinion(NULL, $id);
					$this->title = $get_opinion['opinion']['title'];
					
					$this->load->view('layout/header');
					$this->load->view('opinion/preview', $get_opinion);
					$this->load->view('layout/footer');
					}

		}
	}

	public function image_pro($image_file = array(), $id, $title)
	{
		// var_dump($image_file);
		
		$filename = preg_replace('/\s+/', '', $image_file['name']);
		$image_name = "opinion-".time().$filename;
		$filesize= $image_file['size'];
		$fileTemp = $image_file['tmp_name'];
		$fileType = $image_file['type'];
		$server_created = time();
		$type = "Opinion Picture";
		$presenter_id = $id;

		$transfer = move_uploaded_file($fileTemp, 'uploads/'.$image_name);	

		if($transfer)
		{
			$move = $this->upload_model->insert(array('description'=>$title,
				"link" => $image_name,
				"type" => $type,
				"user_id" => $presenter_id,
				"server_created" => $server_created));
			if($move)
			{

				$pres_imag  = $this->userutitlities->get_uploadID($image_name);
				return $pres_imag['upload_id'];
				
			}
		}


		

	}


}