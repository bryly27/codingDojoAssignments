<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {
     
    function get_post()
    {

      return $this->db->query("SELECT * FROM posts ORDER BY created_at ASC")->result_array();
    }

    function get_notes()
    {
      return $this->db->query("SELECT * FROM notes ORDER BY created_at ASC")->result_array();
    }

    function create($notes)
    {
        $query = "INSERT INTO notes (title, created_at) VALUES (?,?)";
        $values = array($notes['title'], date("Y-m-d, H:i:s")); 
        return $this->db->query($query, $values);
    }

    function add_content($notes, $id)
    {
        $query = "UPDATE notes (description, updated_at) VALUES (?,?) WHERE id = $id";
        $values = array($notes['description'], date("Y-m-d, H:i:s")); 
        return $this->db->query($query, $values);
    }

    function delete($note)
    {
        return $this->db->query("DELETE FROM notes where id = $note");
    }

}
