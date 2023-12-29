<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Venue_model extends Model {
    
    public $id;
	public $venue;
	public $address;
    public $description;
	public $rate;

    public function get_venue()
    {
        $data = $this->db->table('venue')->get_all();
        return $data;
    }

    public function venue($venue, $address, $description, $rate)
    {
        $data = array(
            'venue' => $venue,
            'address' => $address,
            'descrption' => $description,
            'rate' => $rate
        );
        $this->db->table('venue')->select($data)->get_all();
    }

    public function get_venueBooking()
    {
        $data= $this->db->table('venue_booking')->get_all();
        
        return $data;
    }

    public function updateBooking($id, $venue, $fullname, $address, $email, $contact, $datetime, $status){
        $data = array(
        'Id' => $id,
        'venue' => $venue,
        'fullname' => $fullname,
        'address'=>$address,
        'email'=>$email,
        'contact'=>$contact,
        'datetime'=>$datetime,
        'status' =>$status);
         
        return $this->db->table('venue_booking')->where(array('id' => $id))->update($data);
         
        }
         
        public function get_booking($id)
        {
        return $this->db->table('venue_booking')->where('id', $id)->get();
        }
}
?>