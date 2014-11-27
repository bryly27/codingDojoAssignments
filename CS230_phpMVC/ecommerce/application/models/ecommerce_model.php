<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ecommerce_model extends CI_Model {
     
    function get_item($id)
    {
        return $this->db->query("SELECT * FROM items WHERE id = ?", array($id))->row_array();
    }
    function get_all_items()
    {
        return $this->db->query("SELECT * FROM items ORDER BY description ASC")->result_array();
    }
    function add_student($student)
    {
        $query = "INSERT INTO students (first_name, last_name, email, password, created_at) VALUES (?,?,?,?,?)";
        $values = array($student['first_name'], $student['last_name'], $student['email'], $student['password'], date("Y-m-d, H:i:s")); 
        return $this->db->query($query, $values);
    }
    function destroy($number)
    {
        return $this->db->query("DELETE FROM courses where id = $number");
    }
}
