<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {
     
    // function get_email($email)
    // {
    //     return $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();
    // }

    function get_user($email)
    {
        return $this->db->query("SELECT id, first_name, last_name, email, password FROM users WHERE email = ?", $email)->row_array();
    }

    function add_user($user)
    {
        $query = "INSERT INTO users (first_name, last_name, email, password, created_at) VALUES (?,?,?,?,?)";
        $values = array($user['first_name'], $user['last_name'], $user['email'], $user['password'], date("Y-m-d, H:i:s")); 
        return $this->db->query($query, $values);
    }

    function get_quotes()
    {
        return $this->db->query("SELECT quotes.*, users.first_name, users.last_name FROM quotes LEFT JOIN users ON users.id = quotes.user_id ORDER BY id DESC")->result_array();
    }

    function add_quote($message)
    {
        $query = "INSERT INTO quotes (author, user_id, message, created_at) VALUES (?,?,?,?)";
        $values = array($message['author'], $message['user_id'], $message['message'], date("Y-m-d, H:i:s"));
        return $this->db->query($query, $values);
    }

    function remove($id)
    {
        return $this->db->query("DELETE FROM favorites WHERE favorites.id = $id");
    }

    function get_favorites($id)
    {
        return $this->db->query("SELECT quotes.*, favorites.*, users.first_name, users.last_name FROM favorites LEFT JOIN quotes ON quotes_id  = quotes.id LEFT JOIN users ON quotes.user_id = users.id WHERE favorites.user_id = $id ORDER by quotes.created_at DESC")->result_array();
    }

    function add_favorite($add)
    {
        $query = "INSERT INTO favorites (user_id, quotes_id) VALUES (?,?)";
        $values = array($add['user_id'], $add['quotes_id']);
        return $this->db->query($query, $values);
    }

    // function add_comment($comment)
    // {
    //     $query = "INSERT INTO comments (messages_id, user_id, comment, created_at) VALUES (?,?,?,?)";
    //     $values = array($comment['messages_id'], $comment['user_id'], $comment['comment'], date("Y-m-d, H:i:s"));
    //     return $this->db->query($query, $values);
    // }

}
