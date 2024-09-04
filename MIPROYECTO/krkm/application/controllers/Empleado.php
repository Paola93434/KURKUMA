<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Empleado extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Verifica que el usuario esté autenticado y sea un empleado
        if (!$this->session->userdata('user') || $this->session->userdata('user')->tipo != 'Empleado') {
            redirect('login');
        }
    }

    public function comidas() {
        $this->load->model('Comida_model');
        $data['comidas'] = $this->Comida_model->get_all_comidas();
        $this->load->view('empleado/comidas', $data);
    }

    public function agregar_comida() {
        if ($this->input->post()) {
            // Lógica para agregar una comida
            $this->load->model('Comida_model');
            $this->Comida_model->insert_comida($this->input->post());
            redirect('empleado/comidas');
        } else {
            $this->load->view('empleado/agregar_comida');
        }
    }
}



