<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class News_model extends CI_Model
{

	private $news_table = 'nowayo_news';
	private $uploads_table = 'nowayo_uploads';
	private $news_view = 'nowayo_news_view';
	
	function __construct()
	{
		parent::__construct();
	}

	/**
		 * @return integer|false
		 */
		function countAll() {
			$query = $this->db->
				select('COUNT(*) AS count')->
				get($this->news_table);

			return ($query->num_rows() == 1) ? $query->row()->count : false;
		}

	public function insert($news_data = array())
	{
		return $this->db->insert($this->news_table,$news_data);		
	}

	public function insert_upload($upload_data = array())
	{
		return $this->db->insert($this->uploads_table,$upload_data);
	}
	public function edit($news_data = array() , $id)
	{
		if(!empty($news_data))
		{
					
			$this->db->where('news_id', $id);
			$result = $this->db->update($this->news_table,$news_data);
			
			return $result;
		}
		
		return FALSE;
	}

	public function delete($news_id, $date)
	{
		$this->db->trans_start();
		$this->db->query('DELETE FROM nowayo_news WHERE news_id ='.$news_id. ' AND news_added = '. $date);
		$this->db->query('DELETE FROM nowayo_uploads WHERE server_created = '.$date);
		return $this->db->trans_complete();
	}

	public function loadAll()
	{
		
	}

	public function getByState($state)
	{
		$this->db->select('*');
 		$this->db->from($this->news_view); 
		$this->db->where('category',$state);
     	return $this->db->get()->result_array();
	}

	public function getByID($id)
	{
		$this->db->select('*');
 		$this->db->from($this->news_view); 
		$this->db->where('news_id',$id);
     	return $this->db->get()->result_array();
	}
	public function getByUser($id)
	{
		$this->db->select(array('news_id', 'news_title','category', 'news_added',count('link')));
 		$this->db->from($this->news_view); 
		$this->db->where('news_user_fk',$id);
     	return $this->db->get()->result_array();
	}
	public function getByDate($date)
	{
		$this->db->select('*');
 		$this->db->from($this->news_view); 
		$this->db->where('news_added',$date);
     	return $this->db->get()->result_array();
	}
	public function loadView()
		{
			$this->db->select('*');
			$this->db->from($this->news_view);
			$this->db->order_by('server_created','DESC');
			return $this->db->get()->result_array();
		}
	public function limitView()
		{
			$this->db->select('*');
			$this->db->order_by('server_created','DESC');
			$this->db->limit('5');
			$this->db->from($this->news_view);
			return $this->db->get()->result_array();
		}

		public function join($stateID)
  {
    $this->db->select('nowayo_news.*, nowayo_state.state_id as state_id, nowayo_state.state_name as state_name')
             ->from($this->news_table)
             ->join('state_id', 'nowayo_news.state_id = state_id', 'left')
             ->join('state_id', 'user.id = album.created_by', 'left')
             ->where('album.created_by', $user_id)
             ->group_by('album.id')
             ->order_by('updated_at', 'desc'); 
    $q = $this->db->get();
    
    return $q->result();
  }
}