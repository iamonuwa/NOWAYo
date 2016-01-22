<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Blog_model extends CI_Model
{

	private $news_table = 'blog_news';
	private $uploads_table = 'blog_uploads';
	private $news_view = 'blog_news_view';
	
	function __construct()
	{
		parent::__construct();
	}

	public function insert($news_data = array())
	{
		return $this->db->insert($this->news_table,$news_data);
	}

	public function insert_upload($upload_data = array())
	{
		return $this->db->insert($this->uploads_table,$upload_data);
	}
	public function edit($data = array())
	{
		# code...
	}

	public function delete($news_id, $date)
	{
		$this->db->trans_start();
		$this->db->query('DELETE FROM blog_news WHERE news_id ='.$news_id. ' AND news_added = '. $date);
		$this->db->query('DELETE FROM blog_uploads WHERE server_created = '.$date);
		return $this->db->trans_complete();
	}

	public function loadAll()
	{
		
	}

	public function getByState($stateID)
	{
		$this->db->select('*');
 		$this->db->from($this->news_view); 
		$this->db->where('category',$stateID);
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
			return $this->db->get()->result_array();
		}
}