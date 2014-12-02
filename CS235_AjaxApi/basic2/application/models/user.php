<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {
     
    function get_post()
    {

      return $this->db->query("SELECT * FROM posts ORDER BY created_at ASC")->result_array();
    }

    function create($post)
	{
		$query = "INSERT INTO posts (description, created_at) VALUES (?,?)";
        $values = array($post['description'], date("Y-m-d, H:i:s")); 
        return $this->db->query($query, $values);
	}

}
