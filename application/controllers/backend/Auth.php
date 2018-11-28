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
            $this->session->set_userdata('success_message', 'You are successfully logged in.');
            redirect( base_url() );
        }

        $this->session->set_userdata('error_message', 'Invalid Credentials');
        redirect( base_url('backend/auth') );
    }

    public function logout() {
        $this->aauth->logout();
        redirect( base_url('backend/auth/back') );
    }

    public function back() {
        $this->session->set_userdata('success_message', 'You are successfully logged out.');
        redirect(base_url());
    }
}