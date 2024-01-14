<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

    function __construct() {

		parent::__construct();
		// $this->load->model('treasure');
		// $this->load->model('persona');
        $this->load->library('form_validation');

	}

    public function index() {

        $this->load->view('navbar/header');
        $this->load->view('navbar/sidebar');
        $this->load->view('navbar/sidebar/testing');
        $this->load->view('navbar/footer');
    }

    public function calendar() {
        $this->load->view('architecture/above');
        $this->load->view('architecture/middle');
        $this->load->view('sneat/app-calendar');
        $this->load->view('architecture/zone');
    }

    public function user() {
        $this->load->view('architecture/above');
        $this->load->view('architecture/middle');
        $this->load->view('sneat/app-user-list');
        $this->load->view('architecture/zone');
    }
    
    public function crm() {
        $this->load->view('sneat/dashboards-crm');
    }
}