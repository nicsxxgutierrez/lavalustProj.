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
}
?>