<?php

class Upload_model extends CI_Model	
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function insert($data = array())
	{
		$msg = '0';
		$db_insert = $this->db->insert('nowayo_uploads', $data);
		$msg = '1';

		return $db_insert;
	}
        
        public function insertVideo($data = array())
        {
            {
		$msg = '0';
		$db_insert = $this->db->insert('nowayo_videos', $data);
		$msg = '1';

		return $db_insert;
	}
        }
        public function getVideoId($server_id = NULL, $id = Null)
        {
           if(!empty($server_id))
           {
            $get = $this->db->query('Select * from nowayo_videos where server_created = '.$server_id);
            return $get->row_array();
           }
            if(!empty($id))
            {
                $get = $this->db->query('Select * from nowayo_videos where blog_id = '.$id);
                return $get->result_array();
            }
            
            if(empty($id) && empty($server_id))
            {
                $getAll = $this->db->query("Select * from nowayo_videos limit 6");
                return $getAll->result_array();
            }
        }
        
        public function updateVideo($id = NULL)
        {
//            var_dump($id);
            $msg = 0;
            $update = $this->db->query("UPDATE nowayo_videos SET status = 1 WHERE vidID = ".$id);
            return $update;
            
            $msg = 1;
        }
        
        public function changeProfilePic($id = NULL, $newFile = Null)
        {
            $msg = 0;
            $change = $this->db->query("Update nowayo_uploads SET link = '$newFile' Where upload_id = ".$id);
            return $change;
            $msg = 1;
        }



        public function uploadToCam($UploadData = array())
	{
		$db_insert = $this->db->insert('nowayo_cam', $UploadData);

		return $db_insert;
	}

	public function fetch_single_content($id = null)
	{
		$this->db->where('nowayo_uploads', array('user_id' => $id));
		$result = $query->result();
		
		if($query->num_rows() > 0)
		{
			return $result;
		}
		
		return false;
	}

	public function fetch_presenters($type)
	{

		$this->db->select('*');
 		$this->db->from('nowayo_uploads');
 		$this->db->order_by('id','random'); 
		$this->db->where('type',$type);
		$this->db->limit('5');
     	return $this->db->get()->result_array();
	}

	public function fetchByType($type)
	{

		$this->db->select('*');
 		$this->db->from('nowayo_uploads');
 		$this->db->order_by('upload_id','DESC'); 
		$this->db->where('type',$type);
     	return $this->db->get()->result_array();
	}

	public function fetchByUser($user_id)
	{	
		$this->db->select('*');
 		$this->db->from('nowayo_uploads');
 		$this->db->order_by('upload_id','DESC'); 
		$this->db->where('user_id',$user_id);
     	return $this->db->get()->result_array();
	}

	/*public function fetchByUserDate($user_id, $date)
	{	
		$this->db->select('*');
 		$this->db->from('nowayo_uploads');
 		$this->db->order_by('upload_id','DESC'); 
		$this->db->where(array ('user_id' => $user_id, 'server_created'=> $date));
     	return $this->db->get()->result_array();
	}
	*/
	public function fetch_all_content()
	{
		$this->db->select('*');
 		$this->db->from('nowayo_uploads');
 		$this->db->order_by('id','random'); 

     return $this->db->get()->result_array();
	}
		/**
		 * @return integer|false
		 */
		function countAll() {
			$query = $this->db->
				select('COUNT(*) AS count')->
				get('nowayo_uploads');

			return ($query->num_rows() == 1) ? $query->row()->count : false;
		}

		public function Limit()
	{
			$this->db->select('*');
			$this->db->from('nowayo_uploads');
			$this->db->where('type', 'cam-tales');
			$this->db->limit(2);
			$this->db->order_by('server_created');

			return $this->db->get()->result_array();		
	}

	/**
		 * @param integer $user
		 * @return array|false
		 */
		function get_list($user = false) {
			$type = 'cam-tales';
			$this->db->
				select('
					upload_id,
					description,
					link,
					type,
					server_created,
					user_id,
					id,
					email
				')->
				join(
					'aauth_users',
					'aauth_users.id = nowayo_uploads.user_id',
					'left'
				);
				
			if ($user) {
				if ($this->ion_auth->get_users_groups()->row()->id !== 1) {
					$this->db->where('user_id', $this->ion_auth->user()->row()->id);
				}
			}else{
			$this->db->where('type', $type);
			$query = $this->db->get('nowayo_uploads');
			
			return ($query->num_rows() > 0) ? $query->result_array() : false;
			}
		}



		public function loadView($user_id = false)
		{
			$type = 'cam-tales';
			$this->db->
				select('
					upload_id,
					link,
					type,
					server_created,
					user_id,
					id,
					email,
					fullname
				')->
				join(
					'aauth_users',
					'aauth_users.id = nowayo_uploads_view.user_id',
					'left'
				);
			$query = $this->db->where('type', $type);
			$query = $this->db->get('nowayo_uploads_view');
			
			return ($query->num_rows() > 0) ? $query->result_array() : false;
	}
	public function delete($upload_id)
	{
		$upload = $this->db->query('DELETE FROM nowayo_uploads WHERE upload_id ='.$upload_id);
		if($upload){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	public function paginate($limit = 10, $offset = 0)
  {
    $data = array();
    $this->db->limit($limit, $offset);
    $q = $this->db->get($this->table_name);
    
    if ($q->num_rows() > 0)
    {
      foreach ($q->result_array() as $row)
      {
        $data[] = $row;
      }
    }
    
    return $data;
  }
}