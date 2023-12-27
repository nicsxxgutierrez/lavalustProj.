<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
    public function get_user()
    {
        return $this->db->table('user')->get_all();
    }

    public function get_user_by_email($email) {
        return $this->db->table('user')->where('email', $email)->get();
    }
    public function register($LastName, $FirstName, $ContactNo, $username, $email, $password){
        $data = array(
            'LastName' => $LastName,
            'FirstName' => $FirstName,
            'ContactNo' => $ContactNo,
            'username' => $username,
            'email' => $email,
            'password' => $password,

        );
        return $this->db->table('user')->insert($data);
    }	
}
?>