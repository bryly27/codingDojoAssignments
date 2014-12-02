<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {
     
    function get_user($email)
    {

      return $this->db->query("SELECT * FROM users WHERE email LIKE ? ORDER BY email ASC", $email.'%')->result_array();
    }

}
