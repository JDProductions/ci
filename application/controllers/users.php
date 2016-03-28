<?php
 class Users extends CI_Controller {

 	public function show($user_id) {
 		// Use user model manually
 		//$this->load->model('user_model');

 		// get model function -> results is going to have an array of objects inside of it.
 		$data['results'] =  $this->user_model->get_users($user_id, 'test1');



 			// load that view
		$this->load->view('user_view', $data);

 	}

 		public function insert(){
		// Insert some information
		$this->user_model->create_users([
			
			]);
	}


 }
