<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

    function __construct() {

		parent::__construct();
        $this->load->library('form_validation');

	}

    // public function index() {

    //     $persona['persona_data'] = $this->persona_model->get_persona('user'); //treasure pertama -> model, treasure kedua -> fungsi model, treasure ketiga -> tabel

    //     $this->load->view('navbar/header');
    //     $this->load->view('navbar/sidebar');
    //     $this->load->view('navbar/sidebar/persona', $persona);
    //     $this->load->view('navbar/footer');

    //     // echo '<pre>';
    //     // var_dump($persona);
    //     // echo '</pre>';
    //     // die();
    // }

    public function index() {

        $this->load->view('architecture/above');
        $this->load->view('architecture/middle');
        $this->load->view('sneat/app-calendar');
        $this->load->view('architecture/zone');
    }

}