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

	public function edit($id) {
		$data['user'] = User::find($id);
		$data['groups'] = Group::orderBy('id', 'desc')->get();
		$this->view('backend.user.edit', $data);
	}

	public function update($id) {
		$user = User::find($id);
		$user->update( $this->input->post() );
		$groups = $this->input->post('groups');

		/**
		 * get current user groups
		 */
		$current_group = [];
		for( $i=0; $i<count($user->groups); $i++ ) {
			$current_group[$i] = $user->groups[$i]->id;
		}

		/**
		 *	add new group from current groups
		 */
		$new_groups = array_diff($groups, $current_group);
		
		foreach($new_groups as $group_id) {
			$this->aauth->add_member($user->id, $group_id);
		}

		/**
		 * check group id that will be remove.
		 */
		$remove_group = array_diff($current_group, $groups);

		foreach($remove_group as $group_id) {
			$this->aauth->remove_member($user->id, $group_id);
		}
		
		redirect( base_url('backend/users') ) ;
	}
}
