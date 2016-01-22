<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserUtitlities
 *
 * @author BILL
 */
class UserUtitlities extends CI_Model {
         
 // public $table_listing = 'nowayo_business_listing';
    

    //put your code here
    public function __construct() {
        parent:: __construct(); 
        $this->load->database();
    }

    public function getUserDetails($user_id = NULL, $value = NULL) {

        if ($user_id === NULL) {
            $this->db->select('*');
            $this->db->from('aauth_users');
            $this->db->limit($value);
            $this->db->order_by('id DESC');
            return $this->db->get()->result_array();
        }
        $query = $this->db->get_where('aauth_users', array('id'=>$user_id));
        return $query->row_array();
        
//        var_dump($this->db->get()->result_array());
    }
    public function update_image($image = NULL, $user_id = NULL)
    {
        $this->db->set('profile_picture', $image);
        $this->db->where('id',$user_id);
        return $this->db->update('aauth_users');
//        return 
    }

    public function add_advert($store = NULL, $single_ad = NULL)
    {
        $nowayo_table = 'nowayo_ads';
        // print_r($store);
        if($store != NULL)
        {
        $save = $this->db->insert($nowayo_table, $store);
        return $save;
    }elseif(!empty($single_ad))
    {
        $get_single = $this->db->get_where($nowayo_table, array('id' => $single_ad));
        return $get_single->row_array();

    }
    else
    {
    $get_ads = $this->db->query('SELECT * FROM nowayo_ads');
    return $get_ads->result_array();
    // var_dump($get_ads);
}
    }


    public function store_biz($data = NULL)
    {
        $table = 'nowayo_business_listing';
        if($data != NULL)
        {
        $update_biz = $this->db->insert($table, $data);

        return $update_biz;
        }

        $loadAll = $this->db->query('SELECT * FROM '.$table);
        return $loadAll->result_array();

    }

    //adding more category to the business list and getting all categories
    //*@param1  post request
    //@param2[] array value containing new category to be added
    public function add_biz_cat( $saveDa = NULL, $value = NULL, $limit = NULL)
    {
        $table_cat = 'nowayo_biz_cat';
        if($value === NULL)
        {

            $load_cate = $this->db->get($table_cat, $limit===NULL ? '' : $limit);
            return $load_cate->result_array();
        }
        elseif($value ==='edit')
        {
            if($saveDa != NULL)
            {
            $save_cat = $this->db->insert($table_cat, $saveDa);
            return $save_cat;
            
            }
        }

    }
    public function ConvertMatch($loca = NULL, $id = NULL)
    {
        if($loca != NULL AND $id === NULL)
        {
            // All the Business Categories
            $categories = $this->db->query('SELECT * FROM '.$loca);
            return $categories->result_array();

        }
        //Get a single business category with the id and Table loaction;
        $get_single = $this->db->get_where($loca, array('id' => $id));
        return $get_single->row_array();



    }
private $table_listing = 'nowayo_business_listing';
// private ;
    public function limitView()
        {
            $this->db->select('*');
            // $this->db->order_by('server_created','DESC');
            $this->db->limit('5');
            $this->db->from($this->table_listing);
            return $this->db->get()->result_array();
        }
     
        function countAll() {
            $query = $this->db->
                select('COUNT(*) AS count')->
                get($this->table_listing);

            return ($query->num_rows() == 1) ? $query->row()->count : false;
        }
//List of Business with choice of view
    //@param1 - id of the new category
    public function get_business_list($showList = NULL)
    {
                
      $table = 'nowayo_business_listing';

        if($showList === NULL)
        {
            // $all_list = $this->db->query('SELECT * FROM '.$table);
            // return $all_list->result_array();
             $this->db->select('*');
            $this->db->order_by('id','ASC');
            $this->db->limit('5');
            $this->db->from($this->table_listing);
            return $this->db->get()->result_array();


        }elseif($showList != NULL )
        {  
            // $cate['bus_cat'] = $this->ConvertMatch('nowayo_biz_cat', $showList);

            $prefered_list = $this->db->get_where($table, array('business_category' => $showList));
            return $prefered_list->result_array();
        }


    }

    public function get_business($data= NULL, $data2 = NULL)
    {

// var_dump($data2);
        if($data != NULL)
        {
        
        $business = $this->db->get_where($this->table_listing, array('id'=>$data));
        return $business->row_array();
    }else{
        $business_state = $this->db->get_where($this->table_listing, array('state_id' => $data2));
        return $business_state->result_array();
}
    

    }
    public function delete($delet_dbs = null, $data= null, $image= null)
    {
        if($this->uri->segment(3) ==="confirm") {



            $datum = (int)$data;
            $allInfo['delete'] = $this->getId($datum);
            $data = $allInfo['delete']['id'];
            $image = $allInfo['delete']['image_id'];
            $uploads['upload'] = $this->getImageById($image);
            $date = $uploads['upload']['server_created'];
        }




        $this->db->trans_start();
        $this->db->query('DELETE FROM '.$delet_dbs.' WHERE id = '.$data. ' AND image_id = '. $image);

        $this->uri->segment(3) ==='delete'? $this->db->query('DELETE FROM nowayo_uploads WHERE server_created = '.$date): '';
        $this->uri->segment(3) ==='delete'? $this->db->query('DELETE FROM blog_post WHERE field_id = '.$data): '';

        return $this->db->trans_complete();

    }
    public function delete_category($category_dbs, $category)
    {
        $this->db->trans_start();
        $this->db->query('DELETE FROM '.$category_dbs.' WHERE id = '.$category);
        return $this->db->trans_complete();
    }
    public function publish_business($id, $request)
    {
        $value = $request ==="Publish" ? '1' : 'NULL';
        $update = $this->db->query('UPDATE '.$this->table_listing.' SET status = '.$value.' WHERE id = '.$id);
        return $update;
        // }elseif($request ==="")
    }

    //Search business Listing by state
    public function getBusinessByState($state_id = NULL)
    {
        if($state_id != Null)
        {
            $stateBusiness = $this->db->get_where($this->table_listing, array('state_id'=>$state_id));
            return $stateBusiness->result_array();

        }
        // redirect_url('')

    }
    public function get_uploadID($imgName)
    {
        if($imgName != NULL)
        {
            $get_name = $this->db->get_where('nowayo_uploads', array('link' => $imgName));
            return $get_name->row_array();
        }
    }
    public function getImageById($id)
    {
        if($id != NULL)
        {
            $img = $this->db->get_where('nowayo_uploads', array('upload_id' => $id));
            return $img->row_array();
        }
    }
    //ISee Isay Functions

    public function get_presenters($id = NULL)
    {
        $present_table = "nowayo_blog";
        if($id ===NULL)
        {
            $getInfo = $this->db->query("SELECT * FROM ".$present_table);
            return $getInfo->result_array();

        }
    }
    public function create_blog($newBlog = array(), $limit = NULL,$value = NULL, $id = NULL)
    {
        if(isset($newBlog))
        {
        $msg = '0';
        $create = $this->db->insert('nowayo_blog', $newBlog);
        $msg = '1';
        return $create;
        } elseif(empty($value))
        {
        
         $this->db->select('*');
         $this->db->order_by('presenter_id', 'DESC');
         $this->db->limit(!empty($limit) ? $limit : '');
         $this->db->from('nowayo_blog');
         $all = $this->db->get()->result_array();
         return $all;
        }  
         elseif(isset($value))
         {
            $presnter = $this->db->get_where('nowayo_blog', array('presenter_id' => $value));
            return $presnter->row_array();

         }


    }
    public function getId($blog)
    {
          $presnt = $this->db->get_where('nowayo_blog', array('id' => $blog));
            return $presnt->row_array();

    }


    public function update_b($va_blog = array(), $action)
    {
        // var_dump($arr);

        $update_blo = $this->db->query("UPDATE nowayo_blog SET ".$va_blog[0]." where id = '".$action."'");
        return $update_blo;
    }
    public function edit_blog($presenter, $id)
         {
            $table_blog = "nowayo_blog";
            $value = empty($presenter) ? '1' : 'NULL';
            
            $update =  $this->db->query("UPDATE $table_blog SET status = $value WHERE id = $id");
        // $this->db->query("UPDATE '$table_blog' SET status = '$value' WHERE presenter_id ='$id'");
            return $update;
          
         }
         public function countAllTable($table)
         {
            $count = $this->db->query("SELECT * FROM ".$table);
            return $count->num_rows();
         }

    public function blog_comment($comment_info = array(), $id = NULL, $limit =NULL)
    {
        if(!empty($comment_info))
        {
        $comment = $this->db->insert('comments', $comment_info);
        return $comment;
        }
        $fetchComment =  $this->db->query('SELECT * FROM comments WHERE post_id = '.$id .(!empty($limit) ? ' limit '.$limit: ''));
        // $this->db->get_where('comments', array('post_id'=>$id));
        return $fetchComment->result_array();

    }
    public function countComment()
    {
        $count = $this->db->select('COUNT (*) AS count')->get('comments');
        return ($count->num_rows() == 1) ? $count->num_rows() : false;
    }

    public function opinion($value = array(), $get_id = NULL, $limit = NULL)
    {
        if(isset($value))
        {
            $opinion_create = $this->db->insert('nowayo_opinion', $value);
            return $opinion_create;
        }
        if($get_id != NULL AND empty($value))
        {
            $get_opinion = $this->db->get_where('nowayo_opinion', array('id' => $get_id));
            return $get_opinion->row_array();

        }
        if($get_id ===NULL AND empty($value))
        {
            $opinion_all = $this->db->query("SELECT * FROM nowayo_opinion ".(!empty($limit) ? "limit ".$limit: " "));
            return $opinion_all->result_array();
        }



    }

    public function opinion_status($id = NULL , $opinion_key = NULL, $update = NULL)
    {
        $table = "nowayo_opinion";

        if($update != NULL )
        {

            // $this->db->where('id', $id);
            // $result = $this->db->update($table, $update);
        // {UPDATE `demo-app`.`nowayo_opinion` SET `content` = '<p>Get to learn more from us. </p>' WHERE `nowayo_opinion`.`id` = 1;
            // query('UPDATE '.$this->table_listing.' SET status = '.$value.' WHERE id = '.$id);
            $update_opinion = $this->db->query("UPDATE `".$table."` SET `content` = `".$update."` WHERE `id` = `".$id."`");
            return $update_opinion;

        }
        if($update === NULL)
        {

        // var_dump($opinion_key);
        $value = empty($opinion_key) ? '1' : 'NULL';
        // var_dump($value);
        $update = $this->db->query('UPDATE '.$table.' SET reviewed = '.$value.' WHERE id = '.$id);
        return $update;
    }

    }

    public function views_inc($id, $num = NULL)
    {
        if(empty($num))
        {
        $count = $this->db->get_where('nowayo_blog', array("presenter_id" => $id));
        return $count->row_array();
        }
        $counter = $num + 1;
        $increase = $this->db->query("UPDATE nowayo_blog SET views = ".$counter." WHERE id = ".$id) ;
        return $increase;

    }
    public function countCommentId($id)
    {
        $counterComm = $this->db->query("SELECT * From comments WHERE post_id = ".$id);
        return $counterComm->num_rows();
    }


//update of NOWAYO.COM

//blog post mangemant

    public function post_manager($id = array(), $value = NULL)
    {
        //Update new Post into the database
        if(!empty($id))
        {
            $save_post = $this->db->insert('blog_post', $id);
            return $save_post;
        }elseif(!empty($value))
        {
          //  var_dump($value);
//          Load ALl blog posts using the blogger id
            $get_post = $this->db->query("SELECT * FROM blog_post WHERE field_id ='$value'");
            return $get_post->result_array();

        }elseif(empty($id) AND empty($value))
        {
            $loadBloggs = $this->db->query("SELECT * FROM blog_post");
            return $loadBloggs->result_array();
        }

    }

    //GEt presenter Display Image using @param Id
    public function presenter_img($id = NULL)
    {
        
        $get = $this->db->get_where('nowayo_uploads', array('upload_id'=>$id));
        return $get->row_array();

    }








}

?>
