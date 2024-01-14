<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {

		parent::__construct();
		$this->load->model('user_model');
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

        $persona['persona_data'] = $this->user_model->get_persona('user'); //treasure pertama -> model, treasure kedua -> fungsi model, treasure ketiga -> tabel

        $this->load->view('architecture/above');
        $this->load->view('architecture/middle');
        $this->load->view('sneat/app-user-list', $persona);
        $this->load->view('architecture/zone');
    }

    public function show($id_user) {

        $user = $this->persona_model->getUserById($id_user);

        if ($user) {
            // Do something with the user details, like passing them to a view
            $this->load->view('navbar/header');
            $this->load->view('navbar/sidebar/persona_show', $user);
            $this->load->view('navbar/footer');
        } else {
            // Handle the case where the user is not found
            echo "User not found!";
        }
    }

    public function register() {

        $this->load->library('ciqrcode');

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email already used'
        ]);
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[4]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');

        $data['title'] = 'Login and Register Page';

        if( $this->form_validation->run() == false) {

            return redirect('persona');
        } else {

            $upload_image = $_FILES['image']['name'];
            
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']      = 2048; // 2MB
                $config['upload_path']   = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_error();
                }
            }

            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => isset($new_image) ? $new_image : 'default.jpg', // Use the uploaded file name or a default value
                'qr' => 'qr_code_' . time() . '.png',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            
            // Generate QR code
            $config['cacheable'] = true;
            $config['cachedir'] = APPPATH . 'cache/';
            $config['errorlog'] = APPPATH . 'logs/';
            $config['imagedir'] = 'assets/qrcodes/';
            $config['quality'] = true;
            $config['size'] = '1024x1024';
            $config['black'] = array(255, 255, 255);
            $config['white'] = array(0, 0, 0);

            $this->ciqrcode->initialize($config);

            // Generate the QR code
            $name = $this->input->post('name');
            $params['data'] = $name;
            $params['level'] = 'H';
            $params['size'] = 10;

            $image_name = 'qr_code_' . time() . '.png';
            $params['savename'] = FCPATH . $config['imagedir'] . $image_name;

            $this->ciqrcode->generate($params);
            redirect('persona');
        }
    }

    public function delete_persona($id) {
        // Load the model
        $this->load->model('Persona_model');
        
        // Call the delete_record method in the model
        if ($this->Persona_model->delete_record($id)) {
            // Record deleted successfully
            $this->session->set_flashdata('success_message', 'Record deleted successfully.');
        } else {
            // Unable to delete the record
            $this->session->set_flashdata('error_message', 'Unable to delete the record.');
        }
        return redirect('persona');
    }
}