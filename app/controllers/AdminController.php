<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

require 'app/config/autoload.php';

class AdminController extends Controller 
{

        public function register(){
            if($this->form_validation->submitted()){
                $this->form_validation
                ->name('name')->required()
                ->min_length('2')
                ->name('username')->required()
                ->min_length('4')
                ->name('password')->required()
                ->min_length('6');
                if($this->form_validation->run())
                {
                    if($this->Admin_model->register($this->io->post('name'), $this->io->post('username'), password_hash($this->io->post('password'), PASSWORD_DEFAULT))){
                        $this->session->set_flashdata(array('type'=> 'Data was Successfully Added'));

                        $this->call->view('admin/login');
                    }   
                    else{
                        $this->form_validation->errors();
                    
                    }
                }
                else{
                    return redirect('admin/register');
                }
            }
        }	

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
            $venue = $this->io->post('venue');
            $fullname = $this->io->post('fullname');
            $address = $this->io->post('address');
            $email = $this->io->post('email');
            $contact = $this->io->post('contact');
            $duration = $this->io->post('duration');
            $datetime = $this->io->post('datetime');
            $status = $this->io->post('status');
            $this->Venue_model->updateBooking($venue, $fullname, $address, $email, $contact, $duration, $datetime, $status);
        }

        public function booking($id)
        {
            $data = $this->Venue_model->get_booking($id);
        }

        public function editvenue(){
            $this->call->view('/admin/edit_venue');
        }

        public function event(){
            $this->call->view('/admin/event_audiencelist');
        }

        public function venues(){
            $this->call->view('/admin/venues');
        }

        public function audience_report(){
            $this->call->view('/admin/audience_report');
        }

        public function venue_report(){
            $this->call->view('/admin/venue_report');
        }

        public function users(){
            $this->call->view('/admin/users');
        }

        public function site_set(){
            $this->call->view('/admin/site_settings');
        }

    }
?>