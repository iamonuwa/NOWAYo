<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_Model {

public function __construct()
{
		
}

		public function getVar()
		{
			$this->db->select('*');
			$this->db->from('settings');
			return $this->db->get()->result_array();
		}
	

}

/* End of file Settings_model.php */
/* Location: ./application/models/Settings_model.php */