<?php


class Video_model extends CI_Model

{
    
    public function __construct()
    {
        parent::__construct();
          $this->load->database();        
        
    }
    
    public function getVideos($id = null, $limit = null)
    {
        $this->table = "nowayo_videos";

        if($id === null)
        {
       $getVid = $this->db->query("Select * from nowayo_videos where status = 1");
       return $getVid->result_array();
        }else
        {
            
            $getVids =  $this->db->get_where($this->table, array("vidID" => $id ));
            return $getVids->result_array();
        }
        
    }
    
    
}


?>
