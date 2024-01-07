<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Reservation_model extends Model {
	public function findAll(){
        $this->db->table('venue_booking')->get_all();
    }

    public function booksave($venue, $fullname, $address, $email, $contact, $datetime, $status)
    {
        $data = array(
            'venue'=> $venue,
            'fullname'=> $fullname,
            'address' => $address,
            'email' => $email,
            'contact' => $contact,
            'datetime' => $datetime,
            'status' => $status
        );
       return $this->db->table('venue_booking')->insert($data);
    }

    public function get_venue($id)
    {
        return $this->db->table('venue')->where('id', $id)->get();
    }

}
?>
