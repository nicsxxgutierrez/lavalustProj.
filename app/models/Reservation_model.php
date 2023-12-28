<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Reservation_model extends Model {
	public function findAll(){
        $this->db->table('venue_booking')->get_all();
    }

    public function booksave($fullname, $address, $email, $contact, $duration)
    {
        $data = array(
                'fullname'=> $fullname,
                'address' => $address,
                'email' => $email,
                'contact' => $contact,
                'duration' => $duration
        );
       return $this->db->table('venue_booking')->insert($data);
    }

    

}
?>
