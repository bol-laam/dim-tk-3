<?php
// Define that the script can only be accessed via the CodeIgniter framework
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	// Constructor function that loads the M_login model
	function __construct()
	{
		parent::__construct();		
		$this->load->model('M_login');
	}

	// Function that loads the login view
	function index(){
		$this->load->view('login');
	}
 
	// Function that checks user's credentials and logs them in
	function masuk(){
		// Get the inputted username and password from the form
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// Create an array to use in the database query to check if the user exists
		$where = array(
			'username' => $username,
			'password' => md5($password) // Hash the password using md5 algorithm
			);

		// Call the M_login model's status() function to check if the user exists
		$lihat = $this->M_login->status("user",$where);

		// If user exists, set session data and redirect to dashboard
		if($lihat->num_rows() > 0){
			foreach ($lihat->result() as $xx) {
                    $sess_data['username'] = $xx->username;
                    $sess_data['role'] = $xx->role;
					$sess_data['status'] = "AezakmiHesoyamWhosyourdaddy"; // Set a session variable for security purposes
                    $this->session->set_userdata($sess_data); // Set the session data
                }
			redirect(base_url("dashboard")); // Redirect to dashboard
		}
		// If user does not exist, display an alert message and redirect back to login
		else{
			echo "<script type='text/javascript'>alert('Unregistered Username or Password');window.location = './';</script>";
		}
	}
 
	// Function that logs out the user by destroying the session data
	function logout(){
		$this->session->sess_destroy(); // Destroy the session data
		redirect(base_url('Login')); // Redirect to login
	}
}
