<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Business extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model(array('userutitlities', 'news_model', 'state_model', 'gender_model', 'upload_model'));
        $this->load->library('pagination');
        $this->load->library('Aauth');
        $this->load->library('user_agent');
        $this->title = "Business Listing";
        $this->session->set_userdata('redirect_back', $this->agent->referrer());
    }

    public function business($view = NULL) {
        // var_dump($view);
        $list['all'] = $this->userutitlities->create_blog(NULL, '5', NULL);
        $list['state'] = $this->state_model->loadAll();
        //Search by category request
        $categ = $this->input->post('category');


        //View by state request using post
        $request = $this->input->post(array('state', 'button' => 'stateButton'));

        if ($request['stateButton'] === 'Search...' AND $request['stateButton'] != NULL) {
            $list['state'] = $this->state_model->loadAll();

            $list['view'] = $this->userutitlities->getBusinessByState($request['state']);
            //redirect user back to views if no state match in biz category
            if (!empty($list['view'][0]['state_id'])) {
                $list['stateId'] = $list['view'][0]['state_id'];



                $list['business'] = $this->userutitlities->add_biz_cat(NULL, NULL, 6);
                $this->load->view('layout/header');
                $this->load->view('business/query_state', $list);
                $this->load->view('layout/footer');
            } else {
                $stateN['sta'] = $this->state_model->get_state($request['state']);

                $this->session->set_flashdata('msg', 'No Business Listed in ' . $stateN['sta'][0]['state_name'] . ' State. Showing all Businesses');
                $list['view'] = $this->userutitlities->get_business_list($view = NULL);
                $list['business'] = $this->userutitlities->add_biz_cat(NULL, NULL, 6);
                $this->load->view('layout/header');
                $this->load->view('business/views', $list);
                $this->load->view('layout/footer');
            }
        }

        $config['total_rows'] = $this->userutitlities->countAll();
        $config['base_url'] = base_url('business/biz_listing');
        $config['per_page'] = "3";
        $list['pagination'] = $this->pagination->initialize($config);

        // var_dump($view);
        if ($view === NULL) {


            $list['business'] = $this->userutitlities->add_biz_cat(NULL, NULL, 6);
            $list['view'] = $this->userutitlities->get_business_list($view);
            $list['state'] = $this->state_model->loadAll();
            //load all the categories NULL parameters
            //@parameter 1 = 
            //@param3 = limit


            $this->title = $this->uri->segment(3);

            $this->title = "Business Listing";
            $this->load->view('layout/header');
            $this->load->view('business/biz_listing', $list);
            $this->load->view('layout/footer');
        } elseif ($view != NULL || !empty($view) || $categ === "Search Category") {

            $config['total_rows'] = $this->userutitlities->countAll();
            $config['base_url'] = base_url('business/biz_listing');
            $config['per_page'] = "3";
            $list['pagination'] = $this->pagination->initialize($config);

            if ($view === 'all') {
                $view = NULL;
            }
            if ($this->input->post('name_cate')) {
                $view = $this->input->post('name_cate');
                $list['cate_dis'] = $view;
            }


            $list['business'] = $this->userutitlities->add_biz_cat(NULL, NULL, 6);
            $list['view'] = $this->userutitlities->get_business_list($view);

            $this->load->view('layout/header');
            $this->load->view('business/views', $list);
            $this->load->view('layout/footer');
        } else {
            $this->load->helper('form');
            $this->load->view('layout/header');
            $this->load->view('business/biz_listing');
            $this->load->view('layout/footer');
        }
    }

    public function get_business($viewType = NULL) {

        if (!empty($this->input->get('state')) || !empty($viewType)) {


            $state = !empty($this->input->get('state')) ? $this->input->get('state') : $viewType;
            
            if($state != "NULL"){
                

                $list['stat'] = $this->state_model->getByState($state);

                // var_dump($list['stat'][0]['state_id']);

                $list['view'] = $this->userutitlities->get_business(NULL, $list['stat'][0]['state_id']);
                if (!empty($list['view']) AND isset($list['view'])) {

                    $this->state = $state;
                    $this->load->view('layout/header');
                    $this->load->view('business/preview', $list);
                    $this->load->view('layout/footer');
                } else {
                    $this->session->set_flashdata('msg', "No Business listed in  " . $state . " state for now. Our Presenters are working to update that. you can try other states");
                    $list['all'] = $this->userutitlities->create_blog(NULL, '5', NULL);
                    $list['state'] = $this->state_model->loadAll();

                    $this->load->view('layout/header');
                    $this->load->view('business/biz_listing', $list);
                    $this->load->view('layout/footer');
                }
            }
            else
                {
                
                 $this->session->set_flashdata('msg', "You didn't Select any state...Select and try again");
                    $list['all'] = $this->userutitlities->create_blog(NULL, '5', NULL);
                    $list['state'] = $this->state_model->loadAll();

                    $this->load->view('layout/header');
                    $this->load->view('business/biz_listing', $list);
                    $this->load->view('layout/footer');
                
                
            }
                
                
        } elseif ($this->uri->segment(3) === "state") {



            //$this->session->set_flashdata('msg', "No Business listed in  ".$state." state for now. Our Presenters are working to update that. you can try other states");
            $list['all'] = $this->userutitlities->create_blog(NULL, '5', NULL);
            $list['state'] = $this->state_model->loadAll();

            $this->load->view('layout/header');
            $this->load->view('business/biz_listing', $list);
            $this->load->view('layout/footer');
        }
    }

}

