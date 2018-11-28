<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Default_controller extends MY_Controller {

	public function __construct() {
		parent::__construct();

		/**
		 * check if user is authenticated
		 */
		if( ! $this->aauth->is_loggedin() ) {
			redirect( base_url('backend/auth') );
		} else {
			/**
			 * check if is allowed to access in this section
			 */
		}
	}
	
	public function index()
	{		
		$data = null;
		$this->view('backend.index', $data);
	}
}
