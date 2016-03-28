<?php
 class Users extends CI_Controller {

 	public function show() {
 		// Use user model manually
 		//$this->load->model('user_model');

 		// get model function -> results is going to have an array of objects inside of it.
 		$result = $this->user_model->get_users();

 			// load that view
		$this->load->view('user_view');

 	}

 }
