<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'app/config/autoload.php';

class UserController extends Controller {

    public function register(){
        $this->call->view('register');
    }
    public function loginview(){
        $this->call->view('login');
    }
    public function event(){
        $this->call->view('event');
    }

    public function home(){
        $this->call->view('home');
    }
    
    public function venue(){
        $this->call->model('Venue_model');
        $data['venuebk'] =$this->Venue_model->get_venues();
        $data['venue'] = $this->Venue_model->get_venues();
        $this->call->view('venue', $data);
    }

    public function about(){
        $this->call->view('about');
    }

    public function logout(){
        $this->call->view('login');
    }

    public function registerauth(){
        if($this->form_validation->submitted()){
            $this->form_validation
            ->name('LastName')->required()
            ->min_length('2')
            ->name('FirstName')->required()
            ->min_length('3')
            ->name('ContactNo')->required()
            ->numeric()
            ->min_length(11)
            ->max_length(13)
            ->name('username')->required()
            ->min_length('4')
            ->name('email')->required()
            ->min_length('3')
            ->name('password')->required()
            ->min_length('6');
            if($this->form_validation->run())
            {
                if($this->User_model->register($this->io->post('LastName'), $this->io->post('FirstName'), $this->io->post('ContactNo'), $this->io->post('username'), $this->io->post('email'), password_hash($this->io->post('password'), PASSWORD_DEFAULT))){
                    $this->session->set_flashdata(array('status'=> 'Data was Successfully Added'));

                    $this->call->view('login');
                }   
                else{
                    $this->form_validation->errors();
                
                }
            }
            else{
                return redirect('register');
            }
        }
    }	

    public function userLogin(){
        // another simple code, wala tong validation
        $email = $this->io->post('email');
        $password = $this->io->post('password');

        $data = [
            'email' => $email,
            'password' => $password
        ];

        $user = $this->User_model->get_user_by_email($email);

        if(is_null($user)) {
            $this->call->view('login');
        }

        if($password !== $user['password']) {
            $this->call->view('event');
        }
        else{
            $this->call->view('reservation/reservation');
        }
       
    }
        
        }          
    
?>
