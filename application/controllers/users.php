<?php
 class Users extends CI_Controller {

 // 	public function show($user_id) {
 // 		// Use user model manually
 // 		//$this->load->model('user_model');

 // 		// get model function -> results is going to have an array of objects inside of it.
 // 		$data['results'] =  $this->user_model->get_users($user_id, 'test1');



 // 			// load that view
	// 	$this->load->view('user_view', $data);

 // 	}

 // 		public function update(){
	// 	// Insert some information
 // 			$id = 3;
 // 			$username = 'Robert';
 // 			$password = 'updatedPasswrod';

	// 	$this->user_model->update_users([
	// 		'username' => $username,
	// 		'password' => $password
	// 		], $id);
	// }

	// 	public function delete() {
	// 	$id = 3;
	// 	$this->user_model->delete_users($id);
	// 	}

 	public function login() {
 		// Form Validation
 		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');

 		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');

 		if ($this->form_validation->run() == FALSE) {
 			$data = array(
 				'errors' => validation_errors()
 				);

 			$this->session->set_flashdata($data);
 			redirect('home');
 		}
 		else {
 			$username = $this->input->post('username');
 			$password = $this->input->post('password');

 			// Pass Username and password to the user_model
 			$user_id = $this->user_model->login_user($username, $password);


 		}



 		//echo $this->input->post('username');

 		if ($user_id) {
 			$user_data= array(
 				'user_id' => $user_id,
 				'username' => $username,
 				'logged_in' => true

 				);

 			$this->session->set_userdata($user_data);
 			$this->session->set_flashdata('login_success', 'You are now logged in');
 			redirect('home/index');
 		}

 	}


 }
