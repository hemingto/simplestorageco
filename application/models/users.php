<?php 
class Users extends CI_Model
{
	function add_user($user)
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, phone_number, street, city, state, zip, country, created_at, updated_at)
				  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
		$values = array($user['first_name'], $user['last_name'], $user['email'], $user['password'], $user['phone_number'], $user['street'], $user['city'], $user['state'], $user['zip'], $user['country']);
		$user_id = $this->db->insert_id();
		$this->session->set_userdata($user_id);
		return $this->db->query($query, $values);
	}
}
?>