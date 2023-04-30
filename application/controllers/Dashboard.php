<?php 
class Dashboard extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		
		// Check if the user is logged in by checking the "status" session variable
		// If not logged in, redirect to login page
		if($this->session->userdata('status') != "AezakmiHesoyamWhosyourdaddy"){
			redirect(base_url("Login"));
		}
	}
 
	function index(){
		$this->load->view('__header');
		
		// Check if the user is a "mahasiswa" or "admin" and load the appropriate dashboard view
		if ($this->session->userdata('role') == "mahasiswa") 
		{
			$this->load->view('dashboard_u'); // Load dashboard view for "mahasiswa"
		} else {
			$this->load->view('dashboard_a'); // Load dashboard view for "admin"
		}
		
		$this->load->view('__footer');
	}

}
