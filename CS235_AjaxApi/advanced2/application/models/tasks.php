<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tasks extends CI_Model {
     

    function get_tasks()
    {
      return $this->db->query("SELECT * FROM tasks ORDER BY created_at DESC")->result_array();
    }

    function create($task)
    {
        $query = "INSERT INTO tasks (task, created_at) VALUES (?,?)";
        $values = array($task['task'], date("Y-m-d, H:i:s")); 
        return $this->db->query($query, $values);
    }

    // function add_content($notes, $id)
    // {
    // //     $query = "UPDATE notes SET description, updated_at) VALUES (?,?) WHERE id = $id";
    // //     $values = array($notes['description'], date("Y-m-d, H:i:s")); 
    //     $query = "UPDATE notes SET description=? WHERE id = $id";
    //     $values = array($notes['description']);
    //     return $this->db->query($query, $values);
    //     // return $this->db->set('description', $notes);
    //     // return $this->db->update('description');
    // }

    function delete($note)
    {
        return $this->db->query("DELETE FROM tasks where id = $note");
    }

}
