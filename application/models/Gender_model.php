<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Gender_model extends CI_Model {
		function __construct() {
			parent::__construct();
		}
		
		
		/**
		 * @return integer|false
		 */
		function countAll() {
			$query = $this->db->
				select('COUNT(*) AS count')->
				get('nowayo_gender');

			return ($query->num_rows() == 1) ? $query->row()->count : false;
		}


		/**
		 * @param integer $id
		 * @return array|false
		 */
		function get_gender($id) {										
			$query = $this->db->
				where('gender_id', $id)->
				limit(1)->
				get('nowayo_gender');
										
			return ($query->num_rows() == 1) ? $query->result_array() : false;
		}

		/**
		 * @param integer $id
		 * @return array|false
		 */
		public function loadAll()
		{
			$this->db->select('*');
			$this->db->from('nowayo_gender');
			return $this->db->get()->result_array();
		}
		
		
		/**
		 * Edits the gender.
		 * @param integer $id
		 * @param string $title
		 * @param string $title_url
		 * @param string $content
		 * @param integer $active
		 * @return boolean
		 */
		function set_gender($data = array()) {
			/*$this->db->query("
				UPDATE
					gender
				SET
					gender_title = '" . $title . "',
					gender_title_url = '" . $title_url . "',
					gender_content = '" . $content . "',
					gender_active = " . $active . "
				WHERE
					gender_id = " . $id . "
				LIMIT
					1
			");*/
			
			//return ($this->db->where('gender_id', $id)->limit(1)->update('nowayo_gender', $data))->affected_rows() > 0) ? true : false;
		}


		/**
		 * Adds new gender.
		 * @param integer $user_fk
		 * @param integer $active
		 * @param string $title
		 * @param string $title_url
		 * @param string $content
		 * @param string $ip
		 * @return integer|false
		 */
		function add_gender($data = array()) {
			/*$this->db->query("
				INSERT INTO
					gender
				VALUES (
					'',
					" . $user_fk . ",
					'" . $active . "',
					'" . $title . "',
					'" . $title_url . "',
					'" . $content . "',
					NOW(),
					'" . $ip . "
				')
			");*/
				$this->db->insert('nowayo_gender', $data);
				$query = $this->db->query('SELECT LAST_INSERT_ID()');
				$row = $query->row_array();
				$user_id=$row['LAST_INSERT_ID()'];

			return $row;

		}


	}

?>