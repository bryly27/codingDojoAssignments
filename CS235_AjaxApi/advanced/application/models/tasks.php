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

    function update($tasks, $id)
    {
        $query = "UPDATE tasks SET task=? WHERE id = $id";
        $values = array($tasks['task']);
        return $this->db->query($query, $values);
    }

    function delete($note)
    {
        return $this->db->query("DELETE FROM tasks where id = $note");
    }

}
