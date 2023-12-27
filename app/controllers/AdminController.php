<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

require 'app/config/autoload.php';

class AdminController extends Controller {

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
            $this->call->view('/admin/venue_booklist');
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