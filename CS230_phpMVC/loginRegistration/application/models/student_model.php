<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_model extends CI_Model {
     
    function get_email($email)
    {
        return $this->db->query("SELECT * FROM students WHERE email = ?", array($email))->row_array();
    }
    function get_student($email)
    {
        return $this->db->query("SELECT id, first_name, last_name, email, password FROM students WHERE email = ?", $email)->row_array();
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
