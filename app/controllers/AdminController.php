<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

require 'app/config/autoload.php';

class AdminController extends Controller 
{	
        public function registerview(){
            $this->call->view('admin/register');
        }

        public function login(){
            $username = $this->io->post('username');
            $password = $this->io->post('password');
    
            $data = [
                'username' => $username,
                'password' => $password
            ];
    
            $user = $this->Admin_model->get_user_by_username($username);
    
            if(is_null($user)) {
                $this->call->view('/admin/login');
            }
            if($password !== $user['password']) {
                $this->call->view('/admin/home');
            }
        }
        
        public function loginview(){
            $this->call->view('/admin/login');
        }

        public function home(){
            $this->call->view('/admin/home');
        }

        public function venue(){
            $data['venueBooking'] = $this->Venue_model->get_venueBooking();
            $this->call->view('/admin/venue_booklist', $data);
        }

        public function updatebooking(){
            $this->form_validation
            ->name('fullname')->required()
            ->name('address')->required()
            ->name('email')->required()
            ->name('contact')->required()
            ->name('duration')->required()
            ->name('datetime')->required()
            ->name('status')->required();
            $fullname = $this->io->post('fullname');
            $address = $this->io->post('address');
            $email = $this->io->post('email');
            $contact = $this->io->post('contact');
            $duration = $this->io->post('duration');
            $datetime = $this->io->post('datetime');
            $status = $this->io->post('status');
            if($this->form_validation->run()){

                if($this->Venue_model->updateBooking($fullname, $address, $email, $contact, $duration, $datetime, $status))
                {
                    redirect('/adminvenue_book');
                } 
                else
                {
                $this->form_validation->errors();
                }
            }
        }
        
        public function deleteBooking($id)
        {
            if($this->Venue_model->deleteBooking($id))
            {
                redirect('/adminvenue_book');
            }
        }

        public function booking($id)
        {
            $data['venue'] = $this->Venue_model->get_booking($id);
            $this->call->view('admin/edit_venue', $data);
        }

        public function editvenue(){
            $this->call->view('/admin/edit_venue');
        }

        public function venues(){
            $data['venues'] = $this->Venue_model->get_venues();
            $this->call->view('/admin/venues', $data);
        }

        public function audience_report(){
            $this->call->view('/admin/audience_report');
        }

        public function venue_report(){
            $this->call->view('/admin/venue_report');
        }

        public function users(){
            $data['user'] = $this->Venue_model->get_users();
            $this->call->view('/admin/users', $data);
        }

        public function adminregister(){
            $this->form_validation
            ->name('name')->required()
            ->name('username')->required()
            ->name('password')->required()
            ->name('type')->required();
            $name = $this->io->post('name');
            $username = $this->io->post('username');
            $password = $this->io->post('password');
            $type = $this->io->post('type');
            if($this->form_validation->run()){

                if($this->User_model->adminregister($name, $username, password_hash($this->io->post('password'), PASSWORD_DEFAULT), $type))
                {
                    redirect('/adminlogin');
                } 
                else
                {
                $this->form_validation->errors();
                }
            }
        }

        public function adminlogin(){
            $username = $this->io->post('username');
            $password = $this->io->post('password');
    
            $data = [
                'username' => $username,
                'password' => $password
            ];
    
            $user = $this->User_model->get_user_by_username($username);
    
            if(is_null($user)) {
                $this->call->view('admin/login');
            }
    
            if($password !== $user['password']) {
                $this->call->view('admin/home');
            }
            else{
                redirect('/adminhome');
            }
           
        }
    }
?>