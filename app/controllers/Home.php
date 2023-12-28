<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Home extends Controller {

    public function __construct(){
        parent::__construct();
        $this->call->model('Book_model');
    }

    public function venue_booklist(){
        $data['venuebooked'] = $this->Book_model->getusers();
        return $this->call->view('admin/venue_booklist', $data);
    }
	
}
?>
