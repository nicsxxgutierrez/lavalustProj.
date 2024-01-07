<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Venue_model extends Model 
{
    public function venue($venue, $address, $description, $rate, $file)
    {
        $data = array(
            'venue' => $venue,
            'address' => $address,
            'description' => $description,
            'rate' => $rate,
            'file_image' => $file
        );
        $this->db->table('venue')->select($data)->get_all();
    }

    public function get_venue()
    {
        return $this->db->table('venue_booking')->get_all();
    }

    public function get_venueBooking()
    {
        $data= $this->db->table('venue_booking')->get_all();
        return $data;
    }

    public function editbooking($id, $venue, $fullname, $address, $email, $contact, $datetime, $status)
    {
        $data = array(
            'venue' => $venue,
            'fullname' => $fullname,
            'address'=>$address,
            'email'=>$email,
            'contact'=>$contact,
            'datetime'=>$datetime,
            'status' =>$status
        );
         
        return $this->db->table('venue_booking')->where(array('id' => $id))->update($data);
     
    }

    public function getbooklist($id)
    {
        return $this->db->table('venue_booking')->where('id', $id)->get();
    }
         
    public function get_booking()
    {
        return $this->db->table('venue_booking')->get_all();
    }

    public function deleteBooking($id)
    {
        return $this->db->table('venue_booking')->where(array('id' => $id))->delete();
    }

    public function users()
    {
        return $this->db->table('users')->get_all();
    }

    public function edit_venues($id, $venue, $address, $description, $rate, $file)
    {
        $data = array(
            'venue' => $venue,
            'address'=> $address,
            'description'=> $description,
            'rate' => $rate,
            'file_image' => $file
        );
         
        return $this->db->table('venue')->where(array('id' => $id))->update($data);
    }

    public function getvenuelist($id)
    {
        return $this->db->table('venue')->where('id', $id)->get();
    }

    public function get_venues()
    {
        return $this->db->table('venue')->get_all();
    }

    public function deletevenues($id)
    {
        return $this->db->table('venue')->where(array('id' => $id))->delete();
    }

    public function edit_users($id, $name, $username, $password, $type)
    {
        $data = array(
            'name' => $name,
            'username'=> $username,
            'password'=> $password,
            'type' => $type
        );
         
        return $this->db->table('users')->where(array('id' => $id))->update($data);
    }

    public function getuserslist($id)
    {
        return $this->db->table('users')->where('id', $id)->get();
    }

    public function get_users()
    {
        return $this->db->table('users')->get_all();
    }

    public function deleteusers($id)
    {
        return $this->db->table('users')->where(array('id' => $id))->delete();
    }
}
?>