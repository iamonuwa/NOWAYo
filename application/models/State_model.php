<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class State_model extends CI_Model {
		function __construct() {
			parent::__construct();
		}
		
		
		/**
		 * @return integer|false
		 */
		function countAll() {
			$query = $this->db->
				select('COUNT(*) AS count')->
				get('nowayo_state');

			return ($query->num_rows() == 1) ? $query->row()->count : false;
		}
                
                public function getByState($state = NULL)
                {
                	// var_dump($state);
                    $this->db->select('*');
                    $this->db->from('nowayo_state');
                    $this->db->where('state_name', $state);
                    // $this->db->get()->result_array();                    
                        return $this->db->get()->result_array();

                    
                }


                /**
		 * @param integer $id
		 * @return array|false
		 */
		function get_state($id) {										
			$this->db->select('*');
			$this->db->from('nowayo_state');
			$this->db->where('state_id',$id);
                        return $this->db->get()->result_array();
		}

		/**
		 * @param integer $id
		 * @return array|false
		 */
		public function loadAll()
		{
			$this->db->select('*');
			$this->db->from('nowayo_state');
			return $this->db->get()->result_array();
		}
		
		
		/**
		 * Edits the state.
		 * @param integer $id
		 * @param string $title
		 * @param string $title_url
		 * @param string $content
		 * @param integer $active
		 * @return boolean
		 */
		function set_state($data = array()) {
			/*$this->db->query("
				UPDATE
					state
				SET
					state_title = '" . $title . "',
					state_title_url = '" . $title_url . "',
					state_content = '" . $content . "',
					state_active = " . $active . "
				WHERE
					state_id = " . $id . "
				LIMIT
					1
			");*/
			
			//return ($this->db->where('state_id', $id)->limit(1)->update('nowayo_state', $data))->affected_rows() > 0) ? true : false;
		}


		/**
		 * Adds new state.
		 * @param integer $user_fk
		 * @param integer $active
		 * @param string $title
		 * @param string $title_url
		 * @param string $content
		 * @param string $ip
		 * @return integer|false
		 */
		function add_state($data = array()) {
			/*$this->db->query("
				INSERT INTO
					state
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
				$this->db->insert('nowayo_state', $data);
				$query = $this->db->query('SELECT LAST_INSERT_ID()');
				$row = $query->row_array();
				$user_id=$row['LAST_INSERT_ID()'];

			return $row;

		}


	}

?>
