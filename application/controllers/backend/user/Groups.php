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
}
