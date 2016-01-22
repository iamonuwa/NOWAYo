<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contest_model extends CI_Model {

		public $table_name = 'nowayo_contest';

		function __construct(){
			parent::__construct();
		}

		function getImage(){
			$this->db->select('*');
			$this->db->from($this->table_name);
			return $this->db->get()->result_array();
		}
	

}

/* End of file Contest_model.php */
/* Location: ./application/models/Contest_model.php */