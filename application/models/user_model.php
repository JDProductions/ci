<?php

/**
* 
*/
class User_model extends CI_Model
{
	

	public function get_users($user_id, $username) {

		/* READING FROM THE DATABASE

		// $query = $this->db->query("SELECT * FROM users");
		// return $query->num_fields();

		// Give all user information
		$query = $this->db->get('users');

		// going to return the query in an array of objects
		return $query->result();

		END READING FROM THE DATABASE*/


		// SELECTING on certain condition
		// add a parameter to get_users called user_id for the where to work
		$this->db->where([
			'id' => $user_id,
			'username' => $username

		]); // where id = user_id
		$query = $this->db->get('users'); // get users table
		return $query->result();


	} 


	// Insert information to the database -> code igniter syntax

	public function create_user($data)
	{
		$this->db->insert('users', $data);
	}




}





?>