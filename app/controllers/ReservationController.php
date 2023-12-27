<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ReservationController extends Controller {

    public function __construct(){
        parent::__construct();
        $this->call->model('Reservation_model');
        $this->call->model('Venue_model');
    }
	public function reservation(){
        $this->call->view('reservation/reservation');

    }

    public function save()
    {
        $this->Reservation_model
        ->save($this->io->post('name'),
        $this->io->post('address'),
        $this->io->post('email'), 
        $this->io->post('contact'), 
        $this->io->post('venue_id'), 
        $this->io->post('duration'), 
        $this->io->post('datetime'), 
        $this->io->post('status'));
       
    }

    public function getdata(){
       $data['venue'] = $this->Venue_model->getVenue();
        
       return $this->call->view('reservation/reservation', $data);
        
    }
}
?>
