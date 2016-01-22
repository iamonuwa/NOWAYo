<?php

class M_comment extends CI_Model
{
    function add_comment($data)
    {
        $this->db->insert('comments',$data);
        return $this->db->insert_id();
    }
    
    function get_comment($type_id)
    {
        $this->db->select('comments.*,id, fullname');
        $this->db->from('comments');
        $this->db->join('aauth_users','aauth_users.id = comments.user_id', 'left');
        $this->db->where('post_id',$type_id);
        $this->db->order_by('date_added','desc');
        $query = $this->db->get();
        return $query->result_array();
    }
}

