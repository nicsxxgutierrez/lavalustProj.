<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Book_model extends Model {
    public function getusers(){
        return $this->db->table('venue_booking')->get_all();
    }
}
?>