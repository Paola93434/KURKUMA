<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cliente extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('user') || $this->session->userdata('user')->tipo != 'Cliente') {
            redirect('login');
        }
    }

    public function menu() {
        $this->load->model('Comida_model');
        $data['comidas'] = $this->Comida_model->get_all_comidas();
        $this->load->view('cliente/menu', $data);
    }
}
