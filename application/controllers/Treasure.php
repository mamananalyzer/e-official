<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Treasure extends CI_Controller {

    function __construct() {
        
		parent::__construct();
		$this->load->model('treasure_model');
        $this->load->library('form_validation');

	}

    public function index() {

        $treasure['treasure_data'] = $this->treasure_model->get_treasure('treasure'); //treasure pertama -> model, treasure kedua -> fungsi model, treasure ketiga -> tabel
        // echo '<pre>';
        // var_dump($treasure);
        // echo '</pre>';
        // die();
        $this->load->view('navbar/header');
        $this->load->view('navbar/sidebar');
        $this->load->view('navbar/sidebar/treasure', $treasure);
        $this->load->view('navbar/footer');

    }

    public function add_treasure() {

        $month = date('l, d-M-Y');
        $permata = str_replace('.', '', $this->input->post('permata'));
        $bca = str_replace('.', '', $this->input->post('bca'));
        $cash = str_replace('.', '', $this->input->post('cash'));
        $out = str_replace('.', '', $this->input->post('out'));
        $total = (int)$permata + (int)$bca + (int)$cash;
        $possibility = str_replace('.', '', $this->input->post('possibility'));
        $target = str_replace('.', '', $this->input->post('target'));
        $space = (int)$possibility - (int)$target;
        $data = Array(
            'month' => $month,
            'target' => $target,
            'permata' => $permata,
            'bca' => $bca,
            'cash' => $cash,
            'total' => $total,
            'out' => $out,
            'possibility' => $possibility,
            'space' => $space
        );
        // var_dump($data);
        $this->treasure_model->InsertDataTreasure($data);
        return redirect('treasure');
    }

    public function delete_treasure($id) {
        // Load the model
        $this->load->model('Treasure_model');
        
        // Call the delete_record method in the model
        if ($this->Treasure_model->delete_record($id)) {
            // Record deleted successfully
            $this->session->set_flashdata('success_message', 'Record deleted successfully.');
        } else {
            // Unable to delete the record
            $this->session->set_flashdata('error_message', 'Unable to delete the record.');
        }
        return redirect('treasure');
    }
}