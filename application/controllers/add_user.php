<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_User extends CI_Controller {

	public function index()
	{
		// $this->load->helper('url');
		$this->load->view('add_user_form');
	}
	public function process() 
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required|numeric');
		$this->form_validation->set_rules('street', 'Street', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('zip', 'Zip', 'required|numeric');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
		if($this->form_validation->run() === FALSE) //not success
		{
			$this->view_data['errors'] = validation_errors();
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/add');


		}
		else //success
		{
			$this->session->set_flashdata('success', 'You have successfully registered!');
			$this->load->model('users');
			// encrypting password
			$password = md5($this->security->xss_clean($this->input->post('password')));
			$user_details = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'password' => $password,
				'phone_number' => $this->input->post('phone_number'),
				"street" => $this->input->post('street'),
				"city" => $this->input->post('city'),
				"state" => $this->input->post('state'),
				"zip" => $this->input->post('zip'),
				"country" => $this->input->post('country'),
				);
			$add_user = $this->users->add_user($user_details);


			redirect('/add');
		}
	}
}
