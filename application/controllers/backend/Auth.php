<?php
class Auth extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = NULL;
		$this->view('backend.auth.index', $data);
    }

    public function authenticate() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if( $this->aauth->login($email, $password) ) {
            redirect( base_url() );
        }

        redirect( base_url('backend/auth') );
    }

}