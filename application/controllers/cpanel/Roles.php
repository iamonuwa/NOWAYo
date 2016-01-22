<?php

/**
* 
*/
class Roles extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('Aauth');
	}

	function get_user_groups(){

        return $this->aauth->get_user_groups();
    }

    public function get_group_name($value) {

        return $this->aauth->get_group_name($value);
    }

    public function get_group_id($value) {

        return $this->aauth->get_group_id($value);
    }


    public function list_groups() {
        return $this->aauth->list_groups();
    }
    function create_group() {
        if($_POST['create']){
            $name = $this->input->post('group_name');
            $definition = $this->input->post('definition');
           $check =  $this->aauth->create_group($name, $definition);
           if($check){
            $this->session->set_flashdata('success', 'Group Has Been Created Successfully');
            redirect(base_url('cp/groups'),'refresh');
           }
           else{
            $this->session->set_flashdata('msg', 'Group Creation Failed. Please Try Again Later');
            redirect(base_url('cp/groups'),'refresh');
          
           }
        } 
    }

    function delete_group($value) {
           $check =  $this->aauth->delete_group($value);
           if($check){
            $this->session->set_flashdata('success', 'Group #'.$value.' Has Been Deleted Successfully');
            redirect(base_url('cp/groups'),'refresh');
           }
           else{
            $this->session->set_flashdata('msg', 'Group Deletion Failed. Please Try Again Later');
            redirect(base_url('cp/groups'),'refresh');
          
        } 
    }

    function update_group($value = array()) {

        return $this->aauth->update_group($value);
    }

    function add_member() {
        if($_POST){
            $data['user_id'] = $this->input->post('user');
            $data['group_id'] = $this->input->post('group');
           $check =  $this->aauth->add_member($data['user_id'], $data['group_id']);
           if($check){
            $this->session->set_flashdata('success', 'Member Has Been Added To Group Successfully');
            redirect(base_url('cp/users'),'refresh');
           }
           else{
            $this->session->set_flashdata('msg', 'Failed To Add Member To Group. Please Try Again Later');
            redirect(base_url('cp/users'),'refresh');
          
           }
        } 
    }
    public function remove_member($userid, $groupid)
    {
      if($_POST){
            $data['user_id'] = $this->input->post('user');
            $data['group_id'] = $this->input->post('group');
           $check =  $this->aauth->remove_member($this->uri->segment(3), $this->uri->segment(4));
           if($check){
            var_dump($check);
           /* $this->session->set_flashdata('success', 'Member Has Been Added To Group Successfully');
            redirect(base_url('cpanel/users'),'refresh');
           }
           else{
            $this->session->set_flashdata('msg', 'Failed To Add Member To Group. Please Try Again Later');
            redirect(base_url('cpanel/users'),'refresh');
          */
           }
        } 
    }

    function fire_member($value = array()) {

        return $this->aauth->fire_member($value);
    }
}
