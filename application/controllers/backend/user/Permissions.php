<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permissions extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		$data['permissions'] = Permission::take(10)->get();
		
		$this->view('backend.user.permission.index', $data);
	}

	public function create() {
		$data['groups'] = Group::orderBy('id', 'asc')->get();
		$this->view('backend.user.permission.create', $data);
	}

	public function insert() {
		$name = $this->input->post('name');
		$definition = $this->input->post('definition');
		$groups = $this->input->post('groups');

		/** 
		 * create new permission 
		 * @return permission_id int
		 */
		$this->aauth->create_perm($name, $definition);
		$permission_id = Permission::where('name', $name)->first()->id;

		/**
		 * set permission groups
		 * @param group_id int
		 * @param permission_id int
		 */
		foreach($groups as $group_id) {
			$this->aauth->allow_group($group_id, $permission_id);
		}
		
		redirect( base_url('/backend/user/permissions') );
	}
}
