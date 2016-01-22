<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('Aauth');
        $this->load->library('user_agent');
        $this->load->model(array('gender_model', 'state_model', 'settings_model', 'news_model', 'upload_model', 'userutitlities'));
        $this->session->set_userdata('redirect_back', $this->agent->referrer());
        if (!$this->aauth->is_member('Administrator')) {
            redirect(base_url());
        }
    }

    private function redirect_url() {
        if ($this->session->userdata('redirect_back')) {
            $redirect_url = $this->session->userdata('redirect_back');  // grab value and put into a temp variable so we unset the session value
            $this->session->unset_userdata('redirect_back');
            redirect($redirect_url);
        }
    }

    public function index() {
        if (!$this->aauth->is_loggedin()) {
            $this->title = "Nowayo CPanel";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/login');
            $this->load->view('cpanel/layout/footer');
        } else {
            redirect(base_url('cp/dashboard'), 'refresh');
        }
    }

    public function home() {
        if (!$this->aauth->is_loggedin()) {
            redirect(base_url('cp/'));
        } else {
            $data['users'] = $this->aauth->list_users();
            $data['list'] = $this->news_model->countAll();
            $data['upload'] = $this->upload_model->fetchByType('cam-tales');
            $data['blog'] = $this->userutitlities->countAllTable('nowayo_blog');
            $data['opinion'] = $this->userutitlities->countAllTable('nowayo_opinion');
            $this->title = "WebAdmin Dashboard";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/layout/sidebar', $data);
            $this->load->view('cpanel/dashboard', $data);
            $this->load->view('cpanel/layout/footer');
        }
    }

    public function users() {
        if (!$this->aauth->is_loggedin()) {
            redirect(base_url('cp/'));
        } else {
            $data['users'] = $this->aauth->list_users();
            $data['roles'] = $this->aauth->list_groups();
            $this->title = "Nowayo User Base";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/users/list', $data);
            $this->load->view('cpanel/layout/footer');
        }
    }

    public function moderators() {
        if (!$this->aauth->is_loggedin()) {
            redirect(base_url('cp/'));
        } else {
            $data['mods'] = $this->aauth->list_users('1');
            $this->title = "Nowayo Moderators";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/mods/list', $data);
            $this->load->view('cpanel/layout/footer');
        }
    }

    public function presenters() {
        if (!$this->aauth->is_loggedin()) {
            redirect(base_url('cp/'));
        } else {
            $data['presenters'] = $this->aauth->list_users('2');
            $this->title = "Nowayo Presenters";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/presenters/list', $data);
            $this->load->view('cpanel/layout/footer');
        }
    }

    public function groups() {
        if (!$this->aauth->is_loggedin()) {
            redirect(base_url('cp/'));
        } else {
            $data['groups'] = $this->aauth->list_groups();
            $this->title = "Nowayo RBAC";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/groups/list', $data);
            $this->load->view('cpanel/layout/footer');
        }
    }

    public function ban() {
        if (!$this->aauth->is_loggedin()) {
            redirect(base_url('cp/'));
        } else {
            $data['groups'] = $this->aauth->list_groups();
            $data['ban'] = $this->aauth->list_ban();
            $this->title = "Banned Users";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/users/banned', $data);
            $this->load->view('cpanel/layout/footer');
        }
    }

    public function settings() {
        if (!$this->aauth->is_loggedin()) {
            redirect(base_url('cp/'));
        } else {
            $data['settings'] = $this->settings_model->getVar();
            $this->title = "Website Configuration";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/settings', $data);
            $this->load->view('cpanel/layout/footer');
        }
    }

    public function login() {

        $this->form_validation->set_rules('email', 'Email Address', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $email = html_escape($this->input->post('email'));
        $password = html_escape($this->input->post('password'));


        if ($this->form_validation->run() == true) {
            $check = $this->aauth->login($email, $password, $remember = FALSE, $totp_code = NULL);
            //var_export($check);
            if ($check) {
                $this->session->set_flashdata('success', "You Have Logged In Successfully.");
                redirect(base_url('cp/dashboard'));
            } else {
                $this->session->set_flashdata('msg', "An Error Has Occurred. Please Check Your Login Credentials");
                redirect(base_url('cp/'));
            }
        } else {
            $this->session->set_flashdata('msg', "We Cannot log you in at this moment. Please try again Later");
            redirect(base_url('cp/'));
        }
    }

    public function create_user() {
        if (!$this->aauth->is_loggedin()) {
            redirect(base_url('cp/'));
        } else {
            $data['roles'] = $this->aauth->list_groups();
            $data['gender'] = $this->gender_model->loadAll();
            $data['state'] = $this->state_model->loadAll();
            $this->title = "Add New User";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/users/add', $data);
            $this->load->view('cpanel/layout/footer');
        }
    }

    public function register() {
        $email = html_escape($this->input->post('email'));
        $password = html_escape($this->input->post('password'));
        $username = html_escape($this->input->post('user_name'));
        $fullname = html_escape($this->input->post('full_name'));
        $residence = html_escape($this->input->post('residence'));
        //$country 	= html_escape($this->input->post('country'));
        $phone = html_escape($this->input->post('phone'));
        $gender = html_escape($this->input->post('gender'));
        //$picture 	= "";
        $check = $this->aauth->create_user($email, $password, $username, $fullname, $residence, $phone, $gender);

        if ($check) {
            $this->session->set_flashdata('success', "Your Account Has Been Created Successfully");
            $this->redirect_url();
        } else {
            $this->session->set_flashdata('msg', "Failed To Create Account At This Moment. Please Try Again Later");
            $this->redirect_url();
        }
    }

    public function is_loggedin() {

        if ($this->aauth->is_loggedin()) {
            return true;
        } else {
            return false;
        }
    }

    public function logout() {

        if ($this->aauth->logout()) {
            redirect(base_url(), 'refresh');
        }
    }

    function ban_user($value) {

        $a = $this->aauth->ban_user($value);

        if ($a) {
            $this->session->set_flashdata('success', "User #" . $value . "Has Been banned");
            $this->redirect_url();
        } else {
            $this->session->set_flashdata('msg', "Banning Process Has Failed... Please Try Again Later");
            $this->redirect_url();
        }
    }

    function unban_user($value) {

        $a = $this->aauth->unban_user($value);
        if ($a) {
            $this->session->set_flashdata('success', "User #" . $value . "Has Been unbanned");
            $this->redirect_url();
        } else {
            $this->session->set_flashdata('msg', "Unbanning Process Has Failed... Please Try Again Later");
            $this->redirect_url();
        }
    }

    public function is_banned($value) {
        return $this->aauth->is_banned($value);
    }

    public function news() {
        $data['list'] = $this->news_model->loadView();
        $this->title = "Nowayo News Panel";
        $this->load->view('cpanel/layout/header');
        $this->load->view('cpanel/posts/list', $data);
        $this->load->view('cpanel/layout/footer');
    }

    public function assign_role($value) {
        $data['mods'] = $this->aauth->list_groups();
        $data['assign'] = $this->aauth->get_user($value);
        $this->title = "Assign Role To User";
        $this->load->view('cpanel/layout/header');
        $this->load->view('cpanel/groups/assign', $data);
        $this->load->view('cpanel/layout/footer');
    }

    public function create_post() {

        if (!$this->aauth->is_loggedin()) {
            redirect(base_url());
        } else {
            $data['list'] = $this->news_model->loadView();
            $data['state'] = $this->state_model->loadAll();
            $this->title = "Nowayo News Panel";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/posts/add', $data);
            $this->load->view('cpanel/layout/footer');
        }
    }

    private function set_upload_options() {

        $config = array();
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = FALSE;
        return $config;
    }

    private function url_pl($text) {
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

//Chinaza's Methods for Adverts

    public function uploadads() {
        if (!$this->aauth->is_loggedin()) {
            redirect(base_url());
        } else {
            $data['state'] = $this->state_model->loadAll();
            $this->title = "Upload Advertisment";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/uploadads', $data);
            $this->load->view('cpanel/layout/footer');
        }
    }

    public function add_ads() {
        if (!$this->aauth->is_loggedin()) {
            redirect(base_url());
        }

        $this->load->helper('form');

        $name = html_escape($this->input->post('title'));
        $state = html_escape($this->input->post('ad_state'));
        $number = html_escape($this->input->post('number'));
        $location = html_escape($this->input->post('location'));
        $website = html_escape($this->input->post('website'));
        $description = html_escape($this->input->post('descrip'));
        $store = array('title' => $name,
            'state_id' => $state,
            'phone' => $number,
            'location' => $location,
            'website' => $website,
            'description' => $description
        );

        $push = $this->userutitlities->add_advert($store);
        // return $this->db->error();
        // var_dump($push);


        if ($push === TRUE) {
            $data['value'] = $this->userutitlities->add_advert();
            $this->title = "Manage Ads";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/manageads', $data);
            $this->load->view('cpanel/layout/footer');
        } else {
            $this->session->set_flashdata('msg', "Couldn't add Advert... Please Try Again Later");

            $data['state'] = $this->state_model->loadAll();
            $this->title = "Upload Advertisment";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/uploadads', $data, $store);
            $this->load->view('cpanel/layout/footer');
        }
    }

    public function manageads($preview_ad = NULL) {
        if (!$this->aauth->is_loggedin()) {
            redirect(base_url());
        }

        if ($preview_ad === NULL) {
            $data['value'] = $this->userutitlities->add_advert(NULL, NULL);
            $this->title = "Manage Ads";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/manageads', $data);
            $this->load->view('cpanel/layout/footer');
        } elseif (!empty($preview_ad)) {
            $single_ad['get_single'] = $this->userutitlities->add_advert(NULL, $preview_ad);
            $this->title = $single_ad['get_single']['title'];
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/viewads', $single_ad);
            $this->load->view('cpanel/layout/footer');
            // print_r($single_ad['title']);
        }
    }

    public function business_list($page = NULL) {


        if (!$this->aauth->is_loggedin()) {
            redirect(base_url());
        }


        if ($page === NULL) {

            $data['state'] = $this->state_model->loadAll();
            // $page = 'list_biz';
            $this->title = 'Business Listing';
            $this->load->view('news/layout/header');
            // $this->load->view('cpanel/business_list', $data);
            $this->load->view('news/biz_listing', $data);
            $this->load->view('layout/footer');
        } elseif ($page === 'list_biz') {


            $loadAll['business'] = $this->userutitlities->store_biz(NULL);
            // var_dump($loadAll);

            $this->title = 'Business List';
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/list_biz', $loadAll);
            $this->load->view('cpanel/layout/footer');
        } elseif ($page === 'update') {

            $this->load->helper('form');

            // $name = html_escape($this->input->post('title'));
            $state = html_escape($this->input->post('ad_state'));
            // $number = html_escape($this->input->post('number'));
            // $location = html_escape($this->input->post('location'));
            // $website = html_escape($this->input->post('website'));
            $description = html_entity_decode($this->input->post('descrip'));
            // $category = html_escape($this->input->post('ad_category'));
            // $image_pro = $this->upload_image_biz($_FILES['userfile'], $name);
            $user_id = $this->aauth->get_user()->id;

            // {

            $store = array('user_id' => $user_id,
                'description' => $description,
                'state_id' => $state
            );
            // $image_id = $this->upload_model->
            $update_biz = $this->userutitlities->store_biz($store);
            if ($update_biz) {
                $loadAll['business'] = $this->userutitlities->store_biz(NULL);
                $this->title = 'Business List';
                $this->load->view('cpanel/layout/header');
                $this->load->view('cpanel/list_biz', $loadAll);
                $this->load->view('cpanel/layout/footer');
            }
            // }
        } elseif ($request = $this->input->post('delete_sta')) {

            $delet_biz = "";
            $delete_dbs = 'nowayo_business_listing'; //table name

            if ($request === "Delete Selected") {
                $delet_biz = "";
                $delete_dbs = 'nowayo_business_listing';
                $image_id = $this->input->post('imageid');
                $selected = $this->input->post('selector');
                // echo $selected;
                if (!empty($selected) || !empty($imageid)) {
                    $delet_biz = $this->userutitlities->delete($delete_dbs, $selected, $image_id);
                }

                if ($delet_biz) {
                    $this->session->set_flashdata('success', 'Business was Successfully removed');
                } else {
                    $this->session->set_flashdata('msg', "Oops!! Sorry no business was selected please select the checkbox and try again or I don't know what happened just try again");
                }
            } else {
                // if($request ==="Publish" || $request ==="Disconnect")
                $id = $this->input->post('userId');
                $publishBusiness = $this->userutitlities->publish_business($id, $request);
                if ($publishBusiness) {
                    $this->session->set_flashdata('success', "Business was Successfully " . $request . "ed");
                } else {
                    $this->session->set_flashdata('msg', "Oops!! Sorry no business was selected please select the checkbox and try again or I don't know what happened just try again");
                }
            }


            $loadAll['business'] = $this->userutitlities->store_biz(NULL);
            $this->title = 'Business List';
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/list_biz', $loadAll);
            $this->load->view('cpanel/layout/footer');
        } else {
            redirect(base_url('businesse/biz_category'));
        }
    }

    public function upload_image_biz($content = array(), $name) {
        $this->load->library('upload');
        $this->load->library('image_lib');


        $filename = preg_replace('/\s+/', '', $content['name']);
        $content['name'] = 'biz' . -time() . $filename;
        $imgTmp['tmp_name'] = $content['tmp_name'];
        $imgType['type'] = $content['type'];
        $imgSize ['size'] = $content['size'];
        $imgErr['error'] = $content['error'];
        $server_created = time();

        $configure = $this->upload->initialize($this->set_upload_options());
        $implode = $content['name'];

        $save = move_uploaded_file($imgTmp['tmp_name'], "uploads/" . $content['name']);
        if ($save) {
            $save_image = $this->upload_model->insert(array('description' => $name,
                'link' => $content['name'],
                'type' => 'Business',
                'user_id' => $this->aauth->get_user()->id,
                'server_created' => $server_created));
            if ($save_image) {
                $imageDetails['img'] = $this->userutitlities->get_uploadID($content['name']);
                $image_id = $imageDetails['img']['upload_id'];
                return $image_id;
            } else {
                $this->session->set_flashdata('msg', 'An error Occurred please upload the image again');
            }
        } else {
            $this->session->set_flashdata('msg', 'An error Occurred your image was not saved');
        }
    }

    public function biz_category($para = NULL) {
        // var_dump($para);
        $display = array();
        $display['business_list'] = $this->userutitlities->store_biz(NULL);



        if ($para === NULL) {
            $display['business'] = $this->userutitlities->add_biz_cat(NULL, $para, NULL);

            $this->title = "Business Category";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/biz_category', $display);
            $this->load->view('cpanel/layout/footer');
        } elseif ($para === 'edit') {
            // var_dump($para);
            $this->load->helper('form');

            $title = html_escape($this->input->post('title'));
            $comment = html_escape($this->input->post('comment'));
            $save = array('name' => $title, 'Comment' => $comment);
            $update_cat = $this->userutitlities->add_biz_cat($save, $para, NULL);
            if ($update_cat) {

                $this->session->set_flashdata('success', $title . " has been added as Business Category Successfully!");

                $this->title = "Business Category";
                $display['business'] = $this->userutitlities->add_biz_cat(NULL, NULL, NULL);

                $this->title = "Business Category";
                $this->load->view('cpanel/layout/header');
                $this->load->view('cpanel/biz_category', $display);
                $this->load->view('cpanel/layout/footer');
            } else {
                // $this->session->set_flashdata('msg', $title." has already been added");
                redirect(base_url('cp/biz_category'));
                // exit();
            }
        } elseif ($para === "delete_cat") {

            $delete_status = "";
            $delete_dbs = "nowayo_biz_cat";
            $category = $this->input->post('selector');
            if (!empty($category)) {
                // $catId = $this->input->post('catId');
                $delete_status = $this->userutitlities->delete_category($delete_dbs, $category);
            }
            if ($delete_status) {
                $this->session->set_flashdata('success', 'The category  selected was deleted Successfully');
            } else {
                $this->session->set_flashdata('msg', 'Sorry it looks like you did not select any category please try again.');
            }


            $this->title = "Business Category";
            $display['business'] = $this->userutitlities->add_biz_cat(NULL, NULL, NULL);

            $this->title = "Business Category";
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/biz_category', $display);
            $this->load->view('cpanel/layout/footer');
        }
    }

    public function deleteBlog($id = NULL) {
        if ($this->uri->segment(3) === 'delete' || $this->uri->segment(3) === 'edit') {

            $this->title = "Confirm Delete";
            $blog['delete'] = $this->userutitlities->getId($id);

            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/blog/delete', $blog);
            $this->load->view('cpanel/layout/footer');
        }

        if ($this->uri->segment(3) === "confirm") {

            $confirmed = $this->userutitlities->delete('nowayo_blog', $id, null);
            if ($confirmed) {
                redirect(base_url('cp/presenter/status/deleted'));
            }
        }
        if ($this->uri->segment(4) === 'deleted') {
            $this->session->set_flashdata('success', 'Blog Deleted Successfully');

            $info['business'] = $this->userutitlities->create_blog(NULL, NULL, NULL, NULL);
            $info['state'] = $this->state_model->loadAll();

            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/blog/blog', $info);
            $this->load->view('cpanel/layout/footer');
        }
    }

    public function blog_post($blog = NULL) {
        // if($blog === NULL)
        // {post_blog
        $this->title = "Add Blog Post";
        $loadAllBlog['post'] = $this->userutitlities->post_manager(NULL, NULL);
        $loadAllBlog['blogs'] = $this->userutitlities->create_blog(NULL, NULL, NULL);

        $this->load->view('cpanel/layout/header');
        $this->load->view('cpanel/blog/add', $loadAllBlog);
        $this->load->view('cpanel/layout/footer');


        // }

        if ($this->uri->segment(4) === "post") {
            if (isset($_POST['submit'])) {
                // print_r($_FILES);
                $user_id = $this->aauth->get_user()->id;
                $post_title = $this->input->post('post_title');
                $post_intro = $this->input->post('post_intro');
                $post_content = $this->input->post('post_content');
                $post_category = $this->input->post('post_category');
                $post_image1['images'] = $this->post_file($_FILES['image_post'], $user_id, $post_title);
                // $post_img2 = $this->post_file($_FILES['pic_illustrate'], $user_id, $post_title);

                $time = time();
                // crea

                $create = array("post_title" => $post_title,
                    "post_content" => $post_content,
                    "field_id" => $post_category,
                    "img_link_1" => $post_image1['images'],
                    "update_by" => $user_id,
                    // "img_link_2" => $post_img2,
                    "img_link_3" => 'NULL',
                    "created" => $time);
                $loadAllBlog['store_post'] = $this->userutitlities->post_manager($create, NULL);

                if ($loadAllBlog) {
                    redirect(base_url('cp/presenter/blog/post/true'));
                }
            }
        }
    }

    //blog post file upload


    public function post_file($image_file = null, $id = null, $title = null) {

        // print_r($image_file);


        $filename = preg_replace('/\s+/', '', $image_file['name']);
        $image_name = "blog-" . time() . $filename;
        $filesize = $image_file['size'];
        $fileTemp = $image_file['tmp_name'];
        $fileType = $image_file['type'];
        $server_created = time();
        $type = "Blog Post Picture";
        $presenter_id = $id;
        if ($fileType === "image/jpeg" || $fileType === "image/png" || $fileType === "image/jpg") {

            $transfer = move_uploaded_file($fileTemp, 'uploads/' . $image_name);

            if ($transfer) {
                $move = $this->upload_model->insert(array('description' => $title,
                    "link" => $image_name,
                    "type" => $type,
                    "user_id" => $id,
                    "server_created" => $server_created));
                if ($move) {

                    $pres_imag = $this->userutitlities->get_uploadID($image_name);
                    return $pres_imag['upload_id'];
                }
            }
        } //unsupported  file type
    }

    public function image_pro($image_file = array(), $id = NULL, $title = NULL) {


        $filename = preg_replace('/\s+/', '', $image_file[0]['name']);
        $image_name = "blog-" . time() . $filename;
        $filesize = $image_file[0]['size'];
        $fileTemp = $image_file[0]['tmp_name'];
        $fileType = $image_file[0]['type'];
        $server_created = time();
        $type = "Blog Picture";
        $presenter_id = $id;

        if ($fileType === "image/jpeg" || $fileType === "image/jpg" || $fileType === "image/png") {

            $transfer = move_uploaded_file($fileTemp, 'uploads/' . $image_name);

            if ($transfer) {
                $move = $this->upload_model->insert(array('description' => $title,
                    "link" => $image_name,
                    "type" => $type,
                    "user_id" => $presenter_id,
                    "server_created" => $server_created));
                if ($move) {

                    $pres_imag = $this->userutitlities->get_uploadID($image_name);
                    return $pres_imag['upload_id'];
                }
            }
        }
    }

    public function opinion($id = NULL) {
        // var_dump($id);
        if ($id === NULL) {
            $this->title = "Opinion Poll";

            $get['opinion'] = $this->userutitlities->opinion(NULL, NULL);
            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/opinion/view', $get);
            $this->load->view('cpanel/layout/footer');
        } elseif ($this->uri->segment(3) === "Publish") {
            // var_dump($id);
            $get['opinion'] = $this->userutitlities->opinion(NULL, NULL);
            $get['id_status'] = $this->userutitlities->opinion(NULL, $id);
            $status = $get['id_status']['reviewed'];

            $get['re'] = $this->userutitlities->opinion_status($id, $status);
            if ($get['re']) {
                redirect(base_url('cp/opinion'));
            }
            // }else
            // {
            // 	redirect(base_url('cp/opinion'));
            // }
        } elseif ($this->uri->segment(3) === "edit") {
            $content = $this->input->post('content');


            if ($this->uri->segment(4) === "save") {
                $content = $this->input->post('content');
                $store = $this->userutitlities->opinion_status($id, NULL, $content);
                if ($store) {
                    redirect(base_url('cp/opinion/view/' . $id), 'refresh');
                }
            }
            $get['opinion'] = $this->userutitlities->opinion(NULL, $id);
            if (isset($get['opinion'])) {

                $this->title = $get['opinion']['title'];
                $this->load->view('cpanel/layout/header');
                $this->load->view('cpanel/opinion/preview', $get);
                $this->load->view('cpanel/layout/footer');
            } else {
                redirect(base_url('cp/opinion'));
            }
        } elseif ($this->uri->segment(3) === "view") {
            $get['opinion'] = $this->userutitlities->opinion(NULL, $id);
            if (isset($get['opinion'])) {
                $this->title = $get['opinion']['title'];
                $this->load->view('cpanel/layout/header');
                $this->load->view('cpanel/opinion/preview', $get);
                $this->load->view('cpanel/layout/footer');
            } else {
                redirect(base_url('cp/opinion'));
            }
        }
    }

    //video upload page
    public function uploadPage($id) {


        if (isset($_POST['title'])){
            if(!empty($_FILES['video'])){
                $activeUpload['filename'] = $_FILES['video']['name'];
            $activeUpload['title'] = $this->input->post('title');
            $activeUpload['comment'] = $this->input->post('comment');
            $activeUpload['saved'] = $this->getVideo($_FILES['video'], $id, $activeUpload['comment'], $activeUpload['title']);
            
            }else{
               $this->session->set_flashdata('msg', "Oops! we couldn't complete your request please ensure that all fields was filled and try again");

            }
        }
        if($this->uri->segment(5) =="publish")
        {
            $server = $this->uri->segment(6);
             
                $update = $this->upload_model->updateVideo($server);
                if($update)
                {
                    $this->session->set_flashdata('success', ' Published successfully');
//                    $this->session->redirect();
                }
//            }
        }
        //Returns all the uploaded videos in a blog
        $activeUpload['uploaded'] = $this->upload_model->getVideoId(NULL, $id);
        
        //Returns the blog info/data
        $activeUpload['blogger'] = $this->userutitlities->getId($id);
//        $activeUpload['b']
        $this->title = "Upload New Video to ".$activeUpload['blogger']['swag_name'].' blog <br/><small>'.strtoupper($activeUpload['blogger']['title']).'</small>';

        

        $activeUpload['blogID'] = $id;
        $this->load->view('cpanel/layout/header');
        $this->load->view('cpanel/blog/upload', $activeUpload);
        $this->load->view('cpanel/layout/footer');

//            if($_POST[''])
    }

    //Presenters Blog management

    public function presenter_blog($action = Null) {
//            var_dump($action);

        $vale = $this->input->post('delete_sta');

        $this->title = "Presenters Blog";
        if ($this->uri->segment(4) === 'post') {
            $this->session->set_flashdata('success', 'Post Added Successfully');
        }


        $info['state'] = $this->state_model->loadAll();
        $info['business'] = $this->userutitlities->create_blog(NULL, NULL, NULL, NULL);




        if ($action === "edit" AND empty($vale)) {
            $info['state'] = $this->state_model->loadAll();
            $id = $this->input->post('selector');
            $presenter_id = $this->input->post('userid');
            if (isset($presenter_id)) {
                $blog['title'] = $this->input->post('blog_title');

                $blog['_cate'] = "Nowayo Blog";
                $blog['_intro'] = $this->input->post('introd_blog');
                $blog['_desc'] = $this->input->post('blog_desc');
                $presenter_swagz = $this->input->post('presenter_swagz');
                $presentr_name = $this->input->post('presenter_name');
                $preseter_cate = $this->input->post('presenter_cat');


                $info['detail'] = $this->userutitlities->edit_blog(array(
                    "title" => $blog['title'],
                    "intro" => $blog['_intro'],
                    "user_id" => $this->aauth->get_user()->id,
                    "description" => $blog['_desc'],
                    "field" => $preseter_cate,
                    "name" => $presentr_name,
                    "swag_name" => $presenter_swagz
                        ), $presenter_id);
            }

            $info['edit'] = $this->userutitlities->create_blog(NULL, NULL, NULL, $id);
//			$get['posts'] = $this->userutitlities->post_manager(NULL, $this->id);

            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/blog/view', $info);
            $this->load->view('cpanel/layout/footer');
        }

        // var_dump($vale);
        //$vale ==="Disconnect" || $vale ==="Publish"
        // var_dump($this->uri->segment(3));
        elseif ($action === "create") {
            if ($this->input->post('blog_title')) {

//                        var_dump($_FILES['video']);
//                        try{
//                        }catch(Exception $exc){
//                            $exc->getMessage();
//                        }


                if ($this->input->post('pre_state') != NULL AND !empty($this->input->post('presenter_name'))) {
                    $blog['title'] = $this->input->post('blog_title');
                    $blog['pre_sta'] = $this->input->post('pre_state');
                    $blog['_cate'] = "Nowayo Blog";
                    $blog['_intro'] = $this->input->post('introd_blog');
                    $blog['_desc'] = $this->input->post('blog_desc');
                    $presenter_swagz = $this->input->post('presenter_swagz');
                    $presentr_name = $this->input->post('presenter_name');
                    $preseter_cate = $this->input->post('presenter_cat');
                    $blog['presenter_id'] = "NOWAYO_PRE_" . uniqid();
//                    $blog['video'] = isset($_FILES['video']) ? $this->getVideo($_FILES['video'], $id, $blog['_intro']): 'NULL';

                    $blog['banner_id'] = $this->image_pro(array($_FILES['blog_banner']), $blog['presenter_id'], $blog['title']);
                    $blog['image_id'] = $this->image_pro(array($_FILES['blog_pic']), $blog['presenter_id'], $blog['title']);


                    $info['detail'] = $this->userutitlities->create_blog(array(
                        "presenter_id" => $blog['presenter_id'],
                        "title" => $blog['title'],
                        "intro" => $blog['_intro'],
                        "user_id" => $this->aauth->get_user()->id,
                        "image_id" => $blog['image_id'],
                        "state_id" => $blog['pre_sta'],
                        "theme_id" => $blog['banner_id'],
                        "description" => $blog['_desc'],
                        "field" => $preseter_cate,
                        "name" => $presentr_name,
                        "time_updated" => time(),
                        "swag_name" => $presenter_swagz
                            ));
                    if ($info['detail']) {

                        redirect(base_url('cp/presenter_blog/true'));
                    } else {
                        $this->session->set_flashdata('msg', "Sorry the Blog was Not created try again");
                    }
                } else {
                    $this->session->set_flashdata('msg', "Oops!!! Unable to publish blog all fields are required");
                }
            }


            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/blog/view', $info);
            $this->load->view('cpanel/layout/footer');
        } elseif ($action === "true") {
            $this->session->set_flashdata('success', "Blog Created Successfully");


            $this->load->view('cpanel/layout/header');
            $this->load->view('cpanel/blog/blog', $info);
            $this->load->view('cpanel/layout/footer');
        } else {
            //Editing each 
            if ($this->uri->segment(3) === "edit") {
                $blogTitle = $this->input->post('blog_title');
                // $blogTitle = $this->input->post('pre_state');
                // $blog = "Nowayo Blog";
                $blog_intro = $this->input->post('introd_blog');
                $blog_d = $this->input->post('blog_desc');
                $presenter_swagz = $this->input->post('presenter_swagz');
                $presentr_name = $this->input->post('presenter_name');
                $preseter_cate = $this->input->post('presenter_cat');
                // var_dump($blogTitle);
                $q_str = array(
                    "title = '" . $blogTitle . "',
            intro = '" . $blog_intro . "',
            field = '" . $preseter_cate . "',
            swag_name = '" . $presenter_swagz . "',
            name = '" . $presentr_name . "',
            description = '" . $blog_d . "'");
                // var_dump($q_str);
                $update_blo = $this->userutitlities->update_b($q_str, $action);
                // var_dump($update_blo);/
                if ($update_blo) {
                    redirect(base_url('cp/presenter_blog/blog/' . $action));
                }
            }


            if ($this->uri->segment(3) === "blog") {

                if ($this->uri->segment(4) === "publish") {
                    $idPresenter = $action;
                    $info['opinion'] = $this->userutitlities->getId($idPresenter);
                    $info['id'] = $info['opinion']['status'];





                    $info['status'] = $this->userutitlities->edit_blog($info['id'], $idPresenter);
                    if ($info['status']) {
                        redirect(base_url('cp/presenter_blog/blog/' . $action));
                    }
                } elseif ($this->uri->segment(4) === 'edit') {
                    $info['edit'] = $this->userutitlities->getId($action);
                    $info['state'] = $this->state_model->loadAll();

                    $this->load->view('cpanel/layout/header');
                    $this->load->view('cpanel/blog/edit', $info);
                    $this->load->view('cpanel/layout/footer');
                } else {
                    $info['opinion'] = $this->userutitlities->getId($action);
                    if (isset($info['opinion'])) {
//                        var_dump($this->uri->segment(5));
                        if($this->uri->segment(5) == "edit" && isset($_FILES['picture'])){
                            $upload_id = $this->input->post('upload_id');
                        $info['changePic'] = $this->changePic($_FILES['picture'], $upload_id);
                        }
                        $info['posts'] = $this->userutitlities->post_manager(NULL, $info['opinion']['id']);
                        
                        //get Videos in the selected blog 
                        $info['uploaded'] = $this->upload_model->getVideoId(NULL, $info['opinion']['id']);


                        // $info['business'] = $this->userutitlities->create_blog(NULL, NULL, NULL, NULL);
                        $info['state'] = $this->state_model->loadAll();

                        $this->load->view('cpanel/layout/header');
                        $this->load->view('cpanel/blog/preview', $info);
                        $this->load->view('cpanel/layout/footer');
                    }
                    //else{
                    //	redirect(base_url('cp/presenter_blog'));
                    // }
                }
            } else {

                //if($this->uri->segment(2) === )
                // var_dump($action);
                $info['business'] = $this->userutitlities->create_blog(NULL, NULL, NULL, NULL);
                $info['state'] = $this->state_model->loadAll();

                $this->load->view('cpanel/layout/header');
                $this->load->view('cpanel/blog/blog', $info);
                $this->load->view('cpanel/layout/footer');
            }
        }
    }

    public function changePic($file = array(), $upload_id = null)
    {

//        var_dump($upload_id);

        $upload['name'] = $file['name'];
        $filename = 'blog-n'.time().$upload['name'];
        $upload['type'] = $file['type'];
        $upload['tmp_name'] = $file['tmp_name'];
        $upload['error'] = $file['error'];
        $upload['size'] = $file['size'];
        if($upload['type'] == "image/jpg" || $upload['type'] == "image/png" || $upload['type'] == "image/jpeg")
        {
            if(file_exists('uploads'))
            {
                $saveFile = move_uploaded_file($upload['tmp_name'], "uploads/".$filename);
                if($saveFile)
                {
                    
                    $update = $this->upload_model->changeProfilePic($upload_id, $filename);
                    $this->session->set_flashdata('success', 'Your Picture was successfully change');
                    return $update;
                }
            }  else {
                     $this->session->set_flashdata('msg', 'Folder doesnt exist contact the site adminsitrator');
    
            }
            
        }else
        {
            $this->session->set_flashdata('msg', 'Oops!! Invalid file type ensure its any of these file format .jpg, .png, .jpeg');

        }
    }
    public function getVideo($file = array(), $id = NULL, $comment = NULL, $title = NULL) {
//        var_dump($file);
        $vidFile['name'] = $file['name'];
        $vidFile['type'] = $file['type'];
        $vidFile['size'] = $file['size'];
        $vidFile['tmp'] = $file['tmp_name'];
        


        if ($vidFile['type'] === "video/mp4" || $vidFile['type'] === "video/3gp" || $vidFile['type'] === "video/mpeg4") {
            $filename = time() . '' . $vidFile["name"];
//            var_dump(base_url('/uploads/videos'));
            if (file_exists(base_url('videos'))) {
                mkdir('videos');
            }

            $store = move_uploaded_file($vidFile['tmp'], "videos/" . $filename);
            if ($store) {
                
                //Array of files to be stored in the database
                $comment = empty($comment) ? "Blog Video" : $comment;
                $link = $filename;
                $type = "Blog Videos";
                $server = time();
                $blogId = $id;
                $adminId = $this->aauth->get_user()->id;

                $save = $this->upload_model->insertVideo(
                        array('admin_id' => $adminId,
                            'title'=> $title,
                            'blog_id' => $blogId,
                            'description' => $comment,
                                'link' => $link,
                                'type' => $type,
                                'server_created' => $server));
                if($save){
                $data = $this->upload_model->getVideoId($server, NULL);
                $this->session->set_flashdata('success', $title." Uploaded Successfully");
                return $data;

                }
            } else {
                $this->session->set_flashdata('msg', "file was unable to upload file");
            }
//            }
        } else {
            $this->session->set_flashdata('msg', "invalid file format " . $vidFile['type']);
//            throw new Exception("Invalid File type! <small>acceptable formats mp4 o</small>");
        }
    }

}