<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin_model extends Model {
    
    public function get_user_by_username($username) {
        return $this->db->table('users')->where('username', $username)->get();
    }	
}
?>