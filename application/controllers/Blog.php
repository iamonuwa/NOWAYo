<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Blog extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('upload','table'));
		$this->load->model(array('state_model', 'blog_model'));
		$this->load->helper(array('form', 'url'));
		$this->load->library('user_agent');
		$this->session->set_userdata('redirect_back', $this->agent->referrer()); 
	}

	public function index()
	{
		$this->all();
	}

	public function create_news()
	{
		if (!$this->aauth->is_loggedin()) {
				redirect(base_url('blog'));
		}
		if($_POST){
			

			$this->load->library('upload');
				$files = $_FILES;

				 $count = count($_FILES['userfile']['name']);

				 for($i=0; $i<$count; $i++)
            {
                $_FILES['userfile']['name']= 'blog'.-time().$files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                $_FILES['userfile']['size']= $files['userfile']['size'][$i];    


               $configure =  $this->upload->initialize($this->set_upload_options());
               	$implode = $_FILES['userfile']['name'];
               
               //var_dump($implode);
                if($this->upload->do_upload() == False)
                {
                	$this->session->set_flashdata('msg', 'An Error Occurred. Please Try Again Later');
					redirect('blog/create');
                }
                else
               {
            $upload_data['description'] = $this->input->post('title');
			$upload_data['link'] = $implode;
			$upload_data['user_id'] = $this->session->userdata('id');
			$upload_data['type'] = 'blog';
			$upload_data['server_created'] = time();
			//echo $implode;
			$upload_blog = $this->blog_model->insert_upload($upload_data);
				
            }

		}

            $url = $this->url_pl($this->input->post('title'));
			$url_replace = array('-w-', '-i-', '-z-', '-ktory-', '-a-', '-o-', '-na-', '-gdzie-', '-u-', '-ktorzy-');
			$url = str_replace($url_replace, '-', $url);
			$blog_data['news_user_fk'] 		= html_escape($this->session->userdata('id'));
			//$news_data['news_active'] 		= html_escape($this->input->post('active'));
			$blog_data['news_title'] 		= html_escape($this->input->post('title'));
			$blog_data['news_title_url'] 	= html_escape($url);
			$blog_data['news_content'] 		= $this->input->post('content');
			$blog_data['news_added']		= time();
			$blog_data['news_authors_ip'] 	= '127.0.0.1';
            $create_blog = $this->blog_model->insert($blog_data);

            if($upload_blog && $create_blog){
			$this->session->set_flashdata('success', 'I-see-I-say Content Has Been Successfully Created');
			redirect(base_url('blog'),'refresh');
        }
            else{
            	$this->session->set_flashdata('msg', 'Failed To Create I-see-I-say Content. Please Try Again Later');
            	redirect(base_url('blog/create'),'refresh');
            }

	}
			else
			{
		$entry['state'] = $this->state_model->loadAll();
		$this->title = "Report I-see-I-say";
		$this->load->view('layout/header');
		$this->load->view('blog/add',$entry);
		$this->load->view('layout/footer');
			}
		}

	private function set_upload_options()
        {   

            $config = array();
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite']     = FALSE;
            return $config;
        }

	public function modify($value)
	{
		if (!$this->aauth->is_loggedin()) {
				$this->redirect_url();
		}
		$this->news_model->edit($entry);
		$this->load->view('layout/header');
		$this->load->view('blog/edit',$post);
		$this->load->view('layout/footer');	
	}

	private function all(){
		$this->title = "I-see-I-say Posts";
		$entry['list'] = $this->blog_model->loadView();
		$this->load->view('layout/header');
		$this->load->view('blog/all',$entry);
		$this->load->view('layout/footer');		
	}

	public function views($value)
	{
		$entry['news'] = $this->blog_model->getByID($this->uri->segment(3));
		$this->title = $entry['news'][0]['news_title'];
		$this->load->view('layout/header');
		$this->load->view('blog/view',$entry);
		$this->load->view('layout/footer');
	}

/**	public function state($value)
	{
		$data['state'] = $this->news_model->getByState($this->uri->segment(3));
		$data['states'] = $this->state_model->get_state($this->uri->segment(3));
		$this->title = "News From ".$data['states'][0]['state_name'];
		$this->load->view('layout/header');
		$this->load->view('blog/list',$data);
		$this->load->view('layout/footer');
	}**/

	public function date($value)
	{
		$entry['date'] = $this->blog_model->getByDate($this->uri->segment(3));
		$this->load->view('layout/header');
		$this->load->view('blog/list',$entry);
		$this->load->view('layout/footer');
	}

	public function posts($id = null)
	{
		$entry['posts'] = $this->blog_model->getByUser($this->uri->segment(3));

		$this->title = "I-see-I-say Posts";
		$this->load->view('layout/header');
		$this->load->view('blog/posts',$entry);
		$this->load->view('layout/footer');
	}

	public function delete($id, $date)
	{
		$check = $this->blog_model->delete($this->uri->segment(3), $this->uri->segment(4));

		if($check) {
			$this->session->set_flashdata('success', "Blog Content #".$this->uri->segment(3)." Has Been Deleted");
			redirect(base_url('blog/posts/'.$this->session->userdata('id')),'refresh');
		}
		else{
			$this->session->set_flashdata('msg', "An Error Occurred. Please Try Again Later");
			redirect(base_url('blog/posts/'.$this->session->userdata('id')),'refresh');
		}
	}

	private function url_pl($text)
	{
		$litery1 = array('ę', 'ó', 'ą', 'ś', 'ł', 'ż', 'ź', 'ć', 'ń', 'Ę', 'Ó', 'Ą', 'Ś', 'Ł', 'Ż', 'Ź', 'Ć', 'Ń', ' ');		
		$litery2 = array('e', 'o', 'a', 's', 'l', 'z', 'z', 'c', 'n', 'e', 'o', 'a', 's', 'l', 'z', 'z', 'c', 'n', '-');
		
		$text = trim($text);
		$text = str_replace($litery1, $litery2, $text);
		$text = strtolower($text);
		
		$pattern = '/[^a-zA-Z0-9\-^]/';
		$text = preg_replace($pattern, '', $text);
		
		$pattern = '/-+/';
		$text = preg_replace($pattern, '-', $text);
		
		return $text;
	}
	private function redirect_url()
	{
	if( $this->session->userdata('redirect_back') ) {
   	$redirect_url = $this->session->userdata('redirect_back');  // grab value and put into a temp variable so we unset the session value
   	$this->session->unset_userdata('redirect_back');
   	redirect( $redirect_url );
   		}
	}
}