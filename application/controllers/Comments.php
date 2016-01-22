<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends CI_Controller {

	function add_comment($postID,$url)
    {
        if(!$this->input->post())
        {
            redirect(base_url().$url.'/'.$type_id);
        }
        
        $this->load->model('m_comment');
        $data = array(
            'post_id' => $postID,
            'user_id' => $this->session->userdata('user_id'),
            'comment' => $this->input->post('comment'),
        );
        $this->m_comment->add_comment($data);
        redirect(base_url().$url.'/'.$type_id);
    }

}