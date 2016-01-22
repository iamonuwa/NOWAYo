<?php

/**
* 
*/
class Users extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('Aauth');
	}


    public function list_users() {
        return $this->aauth->list_users();
    }

    public function get_user() {
        return $this->aauth->get_user();
    }
    public function is_banned($value) {
        return $this->aauth->is_banned($value);
    }

    function ban_user($value) {

        $a = $this->aauth->ban_user($value);

        return $a;
    }

    function delete_user($value) {

        $a = $this->aauth->delete_user($value);

        return $a;
    }

    function unban_user($value) {

        $a = $this->aauth->unban_user($value);

        return $a;
    }
}