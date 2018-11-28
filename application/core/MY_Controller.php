<?php
use Coolpraz\PhpBlade\PhpBlade;

class MY_Controller extends CI_Controller {
    protected $views = APPPATH . 'views';
    protected $cache = APPPATH . 'cache';
    protected $blade;

    public function __construct() {
        parent::__construct();
        $this->blade = new PhpBlade($this->views, $this->cache);
    }

    public function view( $page = '', $data = [] ) {
        $data['app_name'] = $this->config->item('app_name');
        echo $this->blade->view()->make($page, $data);
    }

    public function session( $function_name = '', $function ) {
        $this->blade->compiler()->directive('get', function($key) {
            return $this->session->userdata($key);
        });
    }

    public function register( $function_name = '', $function ) {
        $this->blade->compiler()->directive($function_name, $function);
    }
}