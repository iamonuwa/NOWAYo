<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cam extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('Aauth', 'upload','image_lib'));
        $this->load->model(array('upload_model', 'state_model', 'gender_model', 'upload_model', 'userutitlities'));
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $this->all();
    }

    public function resize_image() {

        $this->load->library('image_lib');

        $img_cfg['image_library'] = 'gd2';
        $img_cfg['source_image'] = base_url('uploads/steel.jpg');
        $img_cfg['maintain_ratio'] = TRUE;
        $img_cfg['create_thumb'] = TRUE;
        $img_cfg['new_image'] = base_url('uploads/');
        $img_cfg['width'] = 50;
        $img_cfg['quality'] = 100;
        $img_cfg['height'] = 50;

        $this->image_lib->initialize($img_cfg);
        if(!$this->image_lib->resize())
            {
            
            echo $this->image_lib->display_errors('<p>', '</p>');
            
        }
        
      
    }

    public function upload() {

        if (!$this->aauth->is_loggedin()) {
            redirect(base_url('cam-tales'));
        } else {


            $this->title = "Upload To Camera Tales";
            $this->load->view('camera/layout/header');
            $this->load->view('camera/upload');
            $this->load->view('camera/layout/footer');
        }
    }

    function do_upload() {
        if ($_POST) {
            $description = $this->input->post('description');

            $this->load->library('upload');
            $files = $_FILES;

            $count = count($_FILES['userfile']['name']);

            for ($i = 0; $i < $count; $i++) {
                $filename = preg_replace('/\s+/', '', $files['userfile']['name']);
                $_FILES['userfile']['name'] = 'cam' . -time() . $filename[$i];
                $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                $_FILES['userfile']['size'] = $files['userfile']['size'][$i];


                $configure = $this->upload->initialize($this->set_upload_options());
                $implode = $_FILES['userfile']['name'];
                //var_dump($implode);
                if ($this->upload->do_upload() == False) {
                    $this->session->set_flashdata('msg', 'An Error Occurred. Please Try Again Later');
                    redirect('cam-tales/create');
                } else {
                    $data['description'] = $description;
                    $data['link'] = $implode;
                    $data['user_id'] = $this->session->userdata('id');
                    $data['type'] = 'cam-tales';
                    $data['server_created'] = time();

                    //echo $implode;
                    $this->upload_model->insert($data);

                    //if($this->upload_model->insert($data)){
                    //var_dump($this->upload_model->insert($data));
                    //$this->session->set_flashdata('success', 'Your File Has been Uploaded Successfully');
                    //redirect('cam-tales/');
                    //}
                }
            }
            redirect('cam-tales/');
        } else {
            $errorMes = $this->session->set_flashdata('msg', 'No File(s) Was Uploaded');
            redirect('cam/create', $errorMes);
        }
    }

    public function profile_picture() {
        if ($_POST) {
//            $description = $this->input->post('description');

            $this->load->library('upload');
            $files = $_FILES;

            $count = count($_FILES['userfile']['name']);

            for ($i = 0; $i < $count; $i++) {
                $filename = preg_replace('/\s+/', '', $files['userfile']['name']);
                $_FILES['userfile']['name'] = 'cam' . -time() . $filename[$i];
                $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                $_FILES['userfile']['size'] = $files['userfile']['size'][$i];


                $configure = $this->upload->initialize($this->set_upload_options());
                $implode = $_FILES['userfile']['name'];
                //var_dump($implode);
                if ($this->upload->$configure == False) {
//                                var_dump($_FILES);

                    $this->session->set_flashdata('msg', 'An Error Occurred. Please Try Again Later');
//                    redirect('cam-tales/presenters/account', $erroFeed);
                } else {
//                    $data['description'] = $description;
                    $imageFile = $_FILES['userfile']['name'];
                    $userId = $this->session->userdata('id');
//                    $data['type'] = 'cam-tales';
//                    $data['server_created'] = time();

                    $result = $this->userutitlities->update_image($imageFile, $userId);
                    if ($result) {
//                       $e =  "saved";
                        redirect('cam-tales/presenters/account', $e);
                    } else {
//                        var_dump($query);
//                        echo "not saved";
//                        var_dump (mysqli_error($link));
                    }

//                    $this->upload_model->saveImage();
//$imageFile, $userId
                    //if($this->upload_model->insert($data)){
                    //var_dump($this->upload_model->insert($data));
                    //$this->session->set_flashdata('success', 'Your File Has been Uploaded Successfully');
                    redirect('cam-tales/presenters/account');
                    //}
                }
            }
            redirect('cam-tales/presenters/account');
        } else {
//            var_dump($_FILES);

            $this->session->set_flashdata('msg', 'No File(s) Was Uploaded');
            //redirect('cam/create', $errorMes);
        }
    }

    public function image_resieze($image = NULL) {
        $config['image_library'] = 'gd2';
        $config['source_image'] = base_url('uploads/' . $image);
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 75;
        $config['height'] = 50;

        $this->load->library('image_lib', $config);

        return $this->image_lib->resize();
    }

    private function set_upload_options() {

        $config = array();
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5024';
        $config['overwrite'] = FALSE;
        return $config;
    }

    private function all() {

        $data['list'] = $this->upload_model->get_list();
        $data['uploads'] = $this->upload_model->loadView();
        $data['presenter'] = $this->upload_model->fetch_presenters('presenter');

        $data['state'] = $this->state_model->loadAll();
        $data['gender'] = $this->gender_model->loadAll();
        $data['limit'] = $this->upload_model->Limit();



        $this->load->library('pagination');

        $config['base_url'] = base_url('cam-tales/');
        $config['total_rows'] = $this->upload_model->countAll();
        $config['per_page'] = "10";

        $data['pagination'] = $this->pagination->initialize($config);
        $this->title = "Our Camera Tales";
        $this->load->view('camera/layout/header');
        $this->load->view('camera/index', $data);
        $this->load->view('camera/layout/footer');
    }

    public function views($user_id, $date = null) {
        if (ctype_alpha($date)) {
            $this->session->set_flashdata('msg', 'Invalid Date Format');
        }
        if (empty($date)) {
            $data['upload'] = $this->upload_model->fetchByUser($user_id);
        } else {
            $data['upload'] = $this->upload_model->fetchByUserDate($user_id, $date);
        }



        $this->title = $this->aauth->get_user($user_id)->fullname . ' Album';
        $this->load->view('camera/layout/header');
        $this->load->view('camera/view', $data);
        $this->load->view('camera/layout/footer');
    }

    public function presenters($page) {
//                            var_dump($page);

        $this->load->view('camera/layout/header');
        $this->load->view('camera/' . $page);
        $this->load->view('camera/layout/footer');
    }

    public function user($user_id) {
        $data['value'] = $this->userutitlities->getUserDetails($user_id);
//        var_dump($data);
//        print_r($data['value']['gender_id']);

        $id = $data['value']['gender_id'];
        $gender['sex'] = $this->gender_model->get_gender($id);
//        print_r($gender);
//        echo $gender['sex'][0]['gender_name'];
//        print_r($gender);
//        $data['fullname'] =


        $this->load->view('camera/layout/header', $data);
        $this->load->view('camera/user_preview', $data = array('value' => $data, 'sex' => $gender));
        $this->load->view('camera/layout/footer.php');
    }

//        public function 

    public function account($page) {
//        $user_id = $this->auuth->get_user()->id;
//        $this->upload_model->fetchByUser($user_id);

        if (!file_exists(APPPATH . 'camera/' . $page)) {
//                    show_404();
//                    echo 'error display';
        }
        $data['title'] = $page;
        $this->load->view('camera/layout/header');
        $this->load->view('camera/' . $page);
        $this->load->view('camera/layout/footer.php');
    }

//        public function

    public function delete($upload_id) {
        if ($_POST) {
            //$type = 'cam-tales';
            $check = $this->upload_model->delete($upload_id);
            if ($check) {
                $this->session->set_flashdata('success', 'Image Has Been Deleted Successfully');
                redirect(base_url('cam/views/' . $this->session->userdata('id')), 'refresh');
            } else {
                $this->session->flashdata('msg', 'Image Could Not Be Deleted At The Moment. Please Try Again Later');
                redirect(base_url('cam/views/' . $this->session->userdata('id')), 'refresh');
            }
        } else {
            $this->session->set_flashdata('msg', 'No Image Was Selected');
            redirect(base_url('cam/views/' . $this->session->userdata('id')), 'refresh');
        }
    }

}

?>
