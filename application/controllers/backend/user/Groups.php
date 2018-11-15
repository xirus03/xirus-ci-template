<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groups extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		$data['groups'] = Group::take(10)->get();
		$this->view('backend.user.group.index', $data);
	}

	public function create() {
		$this->view('backend.user.group.create');
	}

	public function insert() {
        $name = $this->input->post('name');
        $definition = $this->input->post('definition');
		/** create new permission */
		$status = $this->aauth->create_group($name, $definition);

		redirect( base_url('/backend/user/groups') );
	}

	public function edit($id) {
		$data['group'] = Group::find($id);
		$data['permissions'] = Permission::orderBy('id', 'desc')->get();
		$this->view('backend.user.group.edit', $data);
	}

	public function update($id) {
		$group = Group::find($id);
		$group->update( $this->input->post() );
		$permissions = $this->input->post('permissions');

		/**
		 * get current user groups
		 */
		$current_permission = [];
		for( $i=0; $i<count($group->permissions); $i++ ) {
			$current_permission[$i] = $group->permissions[$i]->id;
		}

		/**
		 *	add new group from current groups
		 */
		$new_permissions = array_diff($permissions, $current_permission);
		foreach($new_permissions as $permission_id) {
			$this->aauth->allow_group($group->id, $permission_id);
		}

		/**
		 * check group id that will be remove.
		 */
		$remove_permission = array_diff($current_permission, $permissions);
		foreach($remove_permission as $permission_id) {
			echo $permission_id;
			$this->aauth->deny_group($group->id, $permission_id);
		}
		
		redirect( base_url('backend/user/groups') ) ;
	}
}
