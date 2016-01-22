<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class News extends CI_Controller
{
	public $comments;
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('upload','table','typography'));
		$this->load->model(array('news_model','state_model','gender_model','upload_model','m_comment','userutitlities'));
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
		if (!$this->aauth->is_loggedin() && !$this->aauth->is_admin()) {
				redirect(base_url('news'));
		}
		if($_POST){
			

			$this->load->library('upload');
				$files = $_FILES;

				 $count = count($_FILES['userfile']['name']);

				 for($i=0; $i<$count; $i++)
            {
                $filename = preg_replace('/\s+/', '', $files['userfile']['name']);
                $_FILES['userfile']['name']= 'news'.-time().$filename[$i];
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
					redirect('cp/create-post');
                }
                else
               {
            $upload_data['description'] = $this->input->post('title');
			$upload_data['link'] = $implode;
			$upload_data['user_id'] = $this->session->userdata('id');
			$upload_data['type'] = 'news';
			$upload_data['server_created'] = time();
			//echo $implode;
			$upload_news = $this->news_model->insert_upload($upload_data);
				
            }

		}

            $url = $this->url_pl($this->input->post('title'));
			$url_replace = array('-w-', '-i-', '-z-', '-ktory-', '-a-', '-o-', '-na-', '-gdzie-', '-u-', '-ktorzy-');
			$url = str_replace($url_replace, '-', $url);
			$news_data['news_user_fk'] 		= html_escape($this->session->userdata('id'));
			//$news_data['news_active'] 		= html_escape($this->input->post('active'));
			$news_data['news_title'] 		= html_escape($this->input->post('title'));
			$news_data['news_title_url'] 	= html_escape($url);
			$news_data['news_content'] 		= $this->typography->format_characters($this->input->post('content'));
			$news_data['category'] 			= html_escape($this->input->post('category'));
			$news_data['news_added']		= $upload_data['server_created'];
			$news_data['news_authors_ip'] 	= $_SERVER['REMOTE_ADDR'];
            $create_news = $this->news_model->insert($news_data);

            if($create_news && $upload_news){
			$this->session->set_flashdata('success', 'News Content Has Been Successfully Created');
			redirect(base_url('cp/news'),'refresh');
        }
            else{
            	$this->session->set_flashdata('msg', 'Failed To Create News Content. Please Try Again Later');
            	redirect(base_url('cp/news/create-post'),'refresh');
            }
            

	}
			else
			{
		$data['state'] = $this->state_model->loadAll();
		$this->title = "Create News";
		$this->load->view('layout/header');
		$this->load->view('news/add',$data);
		$this->load->view('layout/footer');
			}
		}

	private function set_upload_options()
        {   

            $config = array();
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|JPEG';
            $config['overwrite']     = FALSE;
            return $config;
        }

	public function modify()
	{
		if (!$this->aauth->is_loggedin() && !$this->aauth->is_admin()) {
				$this->redirect_url();
		}
		if($_POST){
			$url = $this->url_pl($this->input->post('title'));
			$url_replace = array('-w-', '-i-', '-z-', '-ktory-', '-a-', '-o-', '-na-', '-gdzie-', '-u-', '-ktorzy-');
			$url = str_replace($url_replace, '-', $url);
			$news_data['news_user_fk'] 		= html_escape($this->session->userdata('id'));
			//$news_data['news_active'] 		= html_escape($this->input->post('active'));
			$news_data['news_title'] 		= html_escape($this->input->post('title'));
			$news_data['news_title_url'] 	= html_escape($url);
			$news_data['news_content'] 		= $this->input->post('content');
			$news_data['category'] 			= html_escape($this->input->post('category'));
			$news_data['news_authors_ip'] 	= $_SERVER['REMOTE_ADDR'];
			//var_dump($this->news_model->edit($news_data ,$this->uri->segment(3)));
		if($this->news_model->edit($news_data ,$this->uri->segment(3))){
			$this->session->set_flashdata('success', "You Have Successfully Modified The News Content");
			redirect(base_url('cp/news'),'refresh');
		}
		else{
			$this->session->set_flashdata('msg', "An Error Has Occurred. Please Try Again Later");
			redirect(base_url('cp/news'),'refresh');
		}
	}
	else{
		$data['state'] = $this->state_model->loadAll();
		$data['fetch'] = $this->news_model->getByID($this->uri->segment(3));
		$this->title = 'Modifying News # '. $data['fetch'][0]['news_id'] .' Content';
		$this->load->view('cpanel/layout/header');
		$this->load->view('cpanel/posts/edit',$data);
		$this->load->view('cpanel/layout/footer');	
		
		}
	}

	private function all(){
		$this->title = "General News";

		$this->load->library('pagination');

		$config['base_url'] = base_url('news/');
		$config['total_rows'] = $this->news_model->countAll();
		$config['per_page'] = "10";
		$data['paginate'] = $this->pagination->initialize($config);
				
		$data['state']= $this->state_model->loadAll();
		$data['gender']= $this->gender_model->loadAll();
		$data['limit'] = $this->upload_model->Limit();
		$data['list'] = $this->news_model->loadView();
		$this->load->view('layout/header');
		$this->load->view('news/all',$data);
		$this->load->view('layout/footer');		
	}

	public function views($value)
	{

		$data['business'] = $this->userutitlities->add_biz_cat(NULL, NULL, 6);
		$data['state']= $this->state_model->loadAll();
		$data['gender']= $this->gender_model->loadAll();
		$data['news'] = $this->news_model->getByID($this->uri->segment(3));
		$this->title = $data['news'][0]['news_title'];
		$data['comments'] = $this->m_comment->get_comment($this->uri->segment(3));
		$this->load->view('layout/header');
		$this->load->view('news/view',$data);
		$this->load->view('layout/footer');
	}

	public function state($value)
	{
		$this->load->library('pagination');
		// var_dump($value);

		$data['state']= $this->state_model->loadAll();
		$data['gender']= $this->gender_model->loadAll();
		$data['getBystate'] = $this->news_model->getByState($this->uri->segment(3));
		$data['states'] = $this->state_model->get_state($this->uri->segment(3));
		$data['list'] = $this->news_model->limitView();

		$config['base_url'] = base_url('news/state/'.$this->uri->segment(3));
		$config['total_rows'] = $this->news_model->countAll();
		$config['per_page'] = "1";
		$data['pagination'] = $this->pagination->initialize($config);
		$this->title = "NEWS from ".strtoupper($this->uri->segment(3));
		$this->load->view('layout/header');
		$this->load->view('news/list',$data);
		$this->load->view('layout/footer');
	}

	public function date($value)
	{
		$data['state']= $this->state_model->loadAll();
		$data['gender']= $this->gender_model->loadAll();
		$data['date'] = $this->news_model->getByDate($this->uri->segment(3));
		$this->load->view('layout/header');
		$this->load->view('news/list',$data);
		$this->load->view('layout/footer');
	}

	public function posts($id = null)
	{
		$data['state']= $this->state_model->loadAll();
		$data['gender']= $this->gender_model->loadAll();
		$data['posts'] = $this->news_model->getByUser($this->uri->segment(3));
		//$data['category_name'] = $this->news_model->getByID($data['posts'][0]['news_id']);

		$this->title = "My News Posts";
		$this->load->view('layout/header');
		$this->load->view('news/posts',$data);
		$this->load->view('layout/footer');
	}

	public function delete($id, $date)
	{
		if (!$this->aauth->is_loggedin()) {
				$this->redirect_url();
		}
		$check = $this->news_model->delete($this->uri->segment(3), $this->uri->segment(4));

		if($check) {
			$this->session->set_flashdata('success', "News Content #".$this->uri->segment(3)." Has Been Deleted");
			redirect(base_url('cp/news'),'refresh');
		}
		else{
			$this->session->set_flashdata('msg', "An Error Occurred. Please Try Again Later");
			redirect(base_url('cp/news'),'refresh');
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

	function add_comment($type_id , $url)
    {
        if(!$this->input->post())
        {
            redirect(base_url().$url.'/'.$type_id);
        }
        
        $this->load->model('m_comment');
        $data = array(
            'post_id' => $type_id,
            'user_id' => $this->session->userdata('id'),
            'comment' => $this->input->post('comment'),
        );
        $this->m_comment->add_comment($data);
        redirect(base_url('news/views/').'/'.$type_id);
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