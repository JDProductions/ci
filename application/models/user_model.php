<?php

/**
* 
*/
class User_model extends CI_Model
{
	

	public function get_users() {

		// Give all user information
		$query = $this->db->get('users');

		// going to return the query in an array of objects
		return $query->result();





	}





}





?>