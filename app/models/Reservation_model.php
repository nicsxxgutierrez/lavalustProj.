<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Reservation_model extends Model {
	public function findAll(){
        $this->db->table('venue_booking')->get_all();
    }

    public function booksave($name, $address, $email, $contact, $venue_id, $duration, $status)
    {
        $data = array(
                'name'=> $name,
                'address' => $address,
                'email' => $email,
                'contact' => $contact,
                'venue_id' => $venue_id,
                'duration' => $duration,
                'status' => $status
        );
       return $this->db->table('venue_booking')->insert($data);
    }

    

}
?>
