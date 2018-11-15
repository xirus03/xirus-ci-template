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
		redirect( base_url('/backend/user/permissions') );
	}

	public function edit($id) {
		$data['permission'] = Permission::find($id);
		$data['groups'] = Group::orderBy('id', 'asc')->get();
		$this->view('backend.user.permission.edit', $data);
	}

	public function update($id) {
		$permission = Permission::find($id);
		$permission->update( $this->input->post() );
		redirect( base_url('/backend/user/permissions') );
	}
}
