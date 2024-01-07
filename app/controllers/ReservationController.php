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
    public function booksave(){
		if($this->form_validation->submitted()){
            $this->form_validation
                ->name('venue')->required()
                ->name('fullname')->required()
                ->name('address')->required()
                ->name('email')->required()
                ->name('contact')->required()
                ->name('datetime')->required()
                ->name('status')->required();
            if($this->form_validation->run())
            {
                if($this->Reservation_model->booksave(
                    $this->io->post('venue'),
                    $this->io->post('fullname'),
                    $this->io->post('address'),
                    $this->io->post('email'),
                    $this->io->post('contact'),
                    $this->io->post('datetime'),
                    $this->io->post('status')))
                {
                    redirect('venue');
                } 
                else
                {
                    $this->form_validation->errors();
                }
            }
        } 
        $data['home'] = $this->Dashboard_model->getbooks();
        $this->call->view('admin/allbooks', $data); 
	}

    public function get_venue($id)
    {
        $data['get'] = $this->Reservation_model->get_venue($id);
        return $this->call->view('venue_booking', $data);
    }

    public function get_data()
    {
        $data['venue'] = $this->Venue_model->get_venue();
        $data['venuebk'] =$this->Venue_model->get_venue();
        return $this->call->view('venue', $data);
    }
}
?>
