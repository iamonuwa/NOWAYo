<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
* Images Class to help the administrators manage CAM-TALES member images
*/
class Images
{
	public $CI;
	public $config_vars;
	public $errors = array();
    public $images_db;

	
	function __construct()
	{
	$this->CI = & get_instance();
	if(CI_VERSION >= 2.2){
	$this->CI->load->library('driver');
	}
	$this->CI->config->load('images');
	$this->config_vars = $this->CI->config->item('images');
	$this->images_db = $this->CI->load->database($this->config_vars['db_profile'], TRUE); 
	}

	//From Uploads Table

	// Get Image ID From The Uploads Table Using the Type Param
	//Tested
	public function get_image_id ( $type ) {

		if( is_numeric($type) ) { return $type; }

		$query = $this->images_db->where('type', $type);
		$query = $this->images_db->get($this->config_vars['table']);

		if ($query->num_rows() == 0)
			return FALSE;

		$row = $query->row();
		return $row->id;
	}

	//Create Album For Images
	public function create_album($album_name, $definition) {

		$query = $this->images_db->get_where($this->config_vars['album'], array('name' => $album_name));

		if ($query->num_rows() < 1) {

			$data = array(
				'name' => $album_name,
				'definition'=> $definition
			);
			$this->images_db->insert($this->config_vars['album'], $data);
			return $this->images_db->insert_id();
		}
		//Already Exists
		return FALSE;
	}

	//Delete Album
	public function remove_album($album_id) {

		$this->images_db->where('album_id', $album_id);
		return $this->images_db->delete($this->config_vars['album']);
	}

	//Update Image(s) in Album
	public function update_album_image($image_par, $image_name = FALSE, $definition = FALSE) {

		$image_id = $this->get_image_id($image_par);

		if ($image_name != FALSE) {
			$data['name'] = $image_name;
		}

		if ($definition != FALSE) {
			$data['definition'] = $definition;
		}


		$this->images_db->where('image_id', $image_id);
		return $this->images_db->update($this->config_vars['album'], $data);
	} 

	//Add Image(s) to Album
	public function add_image_to_album($image_id) {

		if( ! $image_id ) {

			//Print Error No Group
			return FALSE;
		}

		$query = $this->images_db->where('image_id',$image_id);
		$query = $this->images_db->get($this->config_vars['album']);

		if ($query->num_rows() < 1) {
			$data = array(
				'image_id' => $image_id
			);

			return $this->images_db->insert($this->config_vars['album'], $data);
		}
		//Print Already Exists
		return TRUE;
	}

	//Delete Image From Album
	public function remove_image_from_album($image_id) {

		$this->images_db->where('image_id', $image_id);
		return $this->images_db->delete($this->config_vars['album']);
	}

}