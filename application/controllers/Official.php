<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Official extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('treasure');
		$this->load->model('persona');
        $this->load->library('form_validation');

	}
    
    public function index() {

        $this->load->view('navbar/header');
        $this->load->view('navbar/sidebar');
        $this->load->view('navbar/sidebar/dashboard');
        $this->load->view('navbar/footer');
    }

    public function treasure() {

        $treasure['treasure'] = $this->treasure->get_treasure('treasure'); //treasure pertama -> model, treasure kedua -> fungsi model, treasure ketiga -> tabel
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
        $total = $permata + $bca + $cash;
        $possibility = str_replace('.', '', $this->input->post('possibility'));
        $target = str_replace('.', '', $this->input->post('target'));
        $space = $possibility - $target;
        $data = Array(
            'month' => $month,
            'target' => $target,
            'permata' => $permata,
            'bca' => $bca,
            'cash' => $cash,
            'total' => $total,
            'possibility' => $possibility,
            'space' => $space
        );
        var_dump($data);
        $this->treasure->InsertDataTreasure($data);
        return redirect('official/treasure');
    }

    public function testing() {

        $this->load->view('navbar/header');
        $this->load->view('navbar/sidebar');
        $this->load->view('navbar/sidebar/testing');
        $this->load->view('navbar/footer');
    }
    
    public function persona() {

        $persona['persona'] = $this->persona->get_persona('user'); //treasure pertama -> model, treasure kedua -> fungsi model, treasure ketiga -> tabel

        $this->load->view('navbar/header');
        $this->load->view('navbar/sidebar');
        $this->load->view('navbar/sidebar/persona', $persona);
        $this->load->view('navbar/footer');
        
        // echo '<pre>';
        // var_dump($persona);
        // echo '</pre>';
        // die();
    }

    public function register() {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email already used'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        
        $data['title'] = 'Login and Register Page';

        if( $this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been created. Please login</div>');
            redirect('auth');
        }
    }
}