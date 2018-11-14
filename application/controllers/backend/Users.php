<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		$data['users'] = User::take(10)->get();
		
		$this->view('backend.user.index', $data);
	}

	public function create() {
		$this->view('backend.user.create');
	}

	public function insert() {
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		/** create user */
		$result = $this->aauth->create_user($email,$password,$username);//($email, $password, $username);
		
		redirect( base_url('backend/users') ) ;
	}
}
