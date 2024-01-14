<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRM extends CI_Controller {

    function __construct() {

		parent::__construct();
        $this->load->model('CRM_model');
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

    public function contact() {

        $contact['contact_data'] = $this->CRM_model->get_contact('crm_contact'); //treasure pertama -> model, treasure kedua -> fungsi model, treasure ketiga -> tabel

        $this->load->view('architecture/above');
        $this->load->view('architecture/middle');
        $this->load->view('sneat/contact-management', $contact);
        $this->load->view('architecture/zone');
    }

    public function register() {

            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'area' => htmlspecialchars($this->input->post('area', true)),
                'address' => htmlspecialchars($this->input->post('address', true)),
                'phone_number' => htmlspecialchars($this->input->post('phone_number', true)),
                'mobilephone' => htmlspecialchars($this->input->post('mobilephone', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'company' => htmlspecialchars($this->input->post('company', true)),
                'position' => htmlspecialchars($this->input->post('position', true)),
                'status' => 1,
                'created_at' => time(),
                'updated_at' => time()
            ];

            $this->db->insert('crm_contact', $data);
            redirect('CRM/contact');
    }

}