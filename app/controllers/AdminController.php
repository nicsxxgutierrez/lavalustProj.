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

        public function venues(){
            $data['venues'] = $this->Venue_model->get_venues();
            $this->call->view('/admin/venues', $data);
        }

        public function updatebooking()
        {
            if($this->form_validation->submitted())
            {
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
                    if($this->Venue_model->editbooking($this->io->post('id'), $this->io->post('venue'), $this->io->post('fullname'), $this->io->post('address'), $this->io->post('email'), $this->io->post('contact'), $this->io->post('datetime'), $this->io->post('status')))
                    {
                        redirect('/adminvenue_book');
                    } 
                    else
                    {
                        $this->form_validation->errors();
                    }
                }
            }
        }

        public function editbooking($id)
        {
            $data['updata'] = $this->Venue_model->getbooklist($id);
            $data['venue_booking'] = $this->Venue_model->get_booking();
            $this->call->view('admin/edit_venue', $data);
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

        public function audience_report(){
            $this->call->view('/admin/audience_report');
        }

        public function venue_report(){
            $this->call->view('/admin/venue_report');
        }

        public function users(){
            $data['user'] = $this->Venue_model->users();
            $this->call->view('/admin/users', $data);
        }

        public function edit_users(){
            $this->call->view('/admin/edit_users');
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

        public function updatevenues()
        {
            if($this->form_validation->submitted())
            {
                $this->form_validation
                ->name('venue')->required()
                ->name('address')->required()
                ->name('description')->required()
                ->name('rate')->required()
                ->name('file_image')->required();
                if($this->form_validation->run())
                {
                    if($this->Venue_model->edit_venues($this->io->post('id'), $this->io->post('venue'), $this->io->post('address'), $this->io->post('description'), $this->io->post('rate'), $this->io->post('file_image')))
                    {
                        redirect('/adminvenues');
                    } 
                    else
                    {
                        $this->form_validation->errors();
                    }
                }
            }
        }

        public function editvenues($id)
        {
            $data['edata'] = $this->Venue_model->getvenuelist($id);
            $data['venues'] = $this->Venue_model->get_venues();
            $this->call->view('admin/edit_venue(s)', $data);
        }

        public function deletevenues($id)
        {
            if($this->Venue_model->deletevenues($id))
            {
                redirect('/adminvenues');
            }
        }

        public function updateusers()
        {
            if($this->form_validation->submitted())
            {
                $this->form_validation
                ->name('name')->required()
                ->name('username')->required()
                ->name('password')->required()
                ->name('type')->required();
                if($this->form_validation->run())
                {
                    if($this->Venue_model->edit_users($this->io->post('id'), $this->io->post('name'), $this->io->post('username'), password_hash($this->io->post('password'), PASSWORD_DEFAULT), $this->io->post('type')))
                    {
                        redirect('/adminusers');
                    } 
                    else
                    {
                        $this->form_validation->errors();
                    }
                }
            }
        }

        public function editusers($id)
        {
            $data['euser'] = $this->Venue_model->getuserslist($id);
            $data['users'] = $this->Venue_model->get_users();
            $this->call->view('admin/edit_users', $data);
        }

        public function deleteusers($id)
        {
            if($this->Venue_model->deleteusers($id))
            {
                redirect('/adminusers');
            }
        }
}
?>