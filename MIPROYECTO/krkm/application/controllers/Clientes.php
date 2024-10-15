<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Cliente_model'); // Cargar el modelo de cliente
        $this->load->model('Usuario_model'); // Cargar el modelo de usuario
    }
    
    public function index() 
    {
        $data['clientes'] = $this->Cliente_model->obtener_todos(); // Obtener todos los clientes
            $this->load->view('vistasP/header');
            $this->load->view('vistasP/sidebar');
            $this->load->view('clientes/listar', $data); // Cargar la vista para listar clientes
            //$this->load->view('vistasP/content');
            $this->load->view('vistasP/footer');
    }

    public function crear() {
        $data['usuarios'] = $this->Usuario_model->obtener_todos(); // Obtener usuarios para el select
        $this->load->view('clientes/crear', $data); // Cargar la vista para crear cliente
    }

    public function guardar() {
        // Código para guardar un nuevo cliente
        $this->Cliente_model->guardar($this->input->post());
        redirect('clientes'); // Redirigir a la lista de clientes
    }

    public function editar($id) {
        $data['cliente'] = $this->Cliente_model->obtener_por_id($id); // Obtener cliente por ID
        $data['usuarios'] = $this->Usuario_model->obtener_todos(); // Obtener usuarios para el select
        $this->load->view('clientes/editar', $data); // Cargar la vista para editar cliente
    }

    public function actualizar($id) {
        // Código para actualizar un cliente existente
        $this->Cliente_model->actualizar($id, $this->input->post());
        redirect('clientes'); // Redirigir a la lista de clientes
    }

    public function eliminar($id) {
        // Código para eliminar un cliente
        $this->Cliente_model->eliminar($id);
        redirect('clientes'); // Redirigir a la lista de clientes
    }
}
