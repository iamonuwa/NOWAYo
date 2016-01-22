<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Isee extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model(array('userutitlities', 'news_model', 'state_model', 'gender_model', 'upload_model',));
        $this->load->library('pagination');
        $this->load->library('Aauth');
        $this->load->library('user_agent');
        $this->title = "Isee Isay";
        $this->session->set_userdata('redirect_back', $this->agent->referrer());
    }

    public function test_new($id = NULL) {

        if (empty($id)) {
           
            $presenters['uploaded'] = $this->upload_model->getVideoId(NULL, NULL);

            $this->title = "Nowayo Blogs";

            $presenters['all'] = $this->userutitlities->create_blog(NULL, NULL);
            //Load all the blog posts without ID;
            $presenters['all_posts'] = $this->userutitlities->post_manager(NULL, NUll);


            $this->load->view('isee/layout/new/header');
            $this->load->view('isee/index', $presenters);
            $this->load->view('isee/layout/new/footer');
        }
        
     

        if (!empty($id)) {
            //Get single blog with
            // @pram 3 = UserID e.g ...isee/presenter/nowayo...
            //@param 2 = limit if $this is used for view
            // @param1 is array of values for creating a new blog
            if ($this->uri->segment(1) ) {
                
                   if($this->uri->segment(3) ==="success")
                        {
                            $this->session->set_flashdata('success', 'Comment added successfully');                        
                        }


                $get['blog'] = $this->userutitlities->create_blog(NULL, NULL, $id);
                if (isset($get['blog'])) {
                    $this->id = $get['blog']['id'];
                    $this->title = $get['blog']['name'] . " Blog";
                    $get['all'] = $this->userutitlities->create_blog(NULL, '5');
                    $this->comment_t = $this->userutitlities->countCommentId($this->id);
                    $get['comment'] = $this->userutitlities->blog_comment(NULL, $this->id);
                    $get['posts'] = $this->userutitlities->post_manager(NULL, $this->id);

                    //Presenters Image

                    $get['image'] = $this->presenter_image($get['blog']['image_id']);
                    $get['uploaded'] = $this->upload_model->getVideoId(NULL, $this->id);


                    $this->load->view('isee/layout/new/header');
                    $this->load->view('isee/index2', $get);
                    $this->load->view('isee/layout/new/footer');
                } else {
                    redirect(base_url('blogger'));
                }
            } else {
                redirect(base_url('blogger'));
            }
        }
    }

    public function presenter_image($id = NULL) {
        $display['img'] = $this->userutitlities->presenter_img($id);
        $image = $display['img']['link'];

        return $image;
    }

    public function isee($page_show = NULL) {
        // echo $page_show;
        //View all Blogs without limit
        $presenters['all'] = $this->userutitlities->create_blog(NULL, NULL);
        $this->load->view('isee/layout/header');
        $this->load->view('isee/presenters', $presenters);
        $this->load->view('isee/layout/footer');

        if ($page_show === "post") {
            $comment = $this->input->post('comment');
            $userID = $this->input->post('userId');
            $comment_id = $this->input->post('post_id');
            $post = $this->userutitlities->blog_comment(array('user_id' => $userID, 'comment_id' => $comment_id, 'comment' => $comment));
            if ($post) {

                $get['all'] = $this->userutitlities->create_blog(NULL, '5', NULL);
                $get['blog'] = $this->userutitlities->create_blog(NULL, NULL, $id);

                if (isset($get['blog'])) {

                    $countInc['row'] = $this->userutitlities->views_inc($id, NULL);
                    $num = $countInc['row']['views'];
                    $this->id = $get['blog']['id'];
                    $this->title = $get['blog']['name'];
                    $update = $this->userutitlities->views_inc($this->id, $num);
                    //count comments
                    $this->comment_t = $this->userutitlities->countCommentId($this->id);


                    $get['comment'] = $this->userutitlities->blog_comment(NULL);
                    $this->load->view('isee/layout/header');
                    $this->load->view('isee/preview', $get);
                    $this->load->view('isee/layout/footer');
                } else {
                    redirect(base_url('isee/isee'));
                }
            }
        }
    }

    public function get_presenter($id = NULL) {
        $error = "";
        // echo $id;
        if ($id != NULL) {

            if ($this->input->post('post')) {
                //update blog post comments

                $comment = $this->input->post('comment');
                $userID = $this->input->post('userId');
                $post_id = $this->input->post('post_id');
                $comment_id = time();
                if (!empty($comment) AND !empty($comment_id) AND !empty($userID)) {
                    $post = $this->userutitlities->blog_comment(array('user_id' => $userID, 'post_id' => $post_id, 'comment_id' => $comment_id, 'comment' => $comment));
                    if ($post) {
                        //redirect if not a valid request
                        redirect(base_url('blogger/' . $id.'/sucess'), 'refresh');
                    }
                }
            }

            // var_dump($id);
            //return all blogs and First post
            $get['all'] = $this->userutitlities->create_blog(NULL, '5', NULL);
            $get['blog'] = $this->userutitlities->create_blog(NULL, NULL, $id);
            if (isset($get['blog'])) {
                if (!empty($get['blog']['status'])) {



                    $countInc['row'] = $this->userutitlities->views_inc($id, NULL);
                    $num = $countInc['row']['views'];
//					var_dump($get['blog']['id']);
                    $get['comment'] = $this->userutitlities->blog_comment(NULL, $get['blog']['id'], NULL);

                    //Other Blog post update
                    $get['posts'] = $this->userutitlities->post_manager(NULL, $get['blog']['id']);

                    $this->id = $get['blog']['id'];
                    $this->title = $get['blog']['name'];
                    $update = $this->userutitlities->views_inc($this->id, $num);
                    $this->comment_t = $this->userutitlities->countCommentId($this->id);




                    $this->load->view('isee/layout/new/header');
                    $this->load->view('isee/index2', $get);
                    $this->load->view('isee/layout/new/footer');
                } else {
                    redirect(base_url('blogger'));
                }
            } else {
                redirect(base_url('blogger'));
            }
        }
    }
    
    public function blogAds($state, $id)
    {
        $this->userutitilities->ads();
        
    }

}

?>