<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Default_controller extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{	
		$data = NULL;
		$this->view('backend.index', $data);
	}
}