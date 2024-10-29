<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Cliente_model'); // Cargar el modelo de cliente
        $this->load->model('Usuario_model'); // Cargar el modelo de usuario
        $this->load->library('form_validation'); // Cargar la librería de validación
    }

    public function index() {
        $data['clientes'] = $this->Cliente_model->obtener_todos(); // Obtener todos los clientes
        $this->load->view('vistasP/header');
        $this->load->view('vistasP/sidebar');
        $this->load->view('clientes/listar', $data); // Cargar la vista para listar clientes
        $this->load->view('vistasP/footer');
    }

    public function crear() {
        $data['usuarios'] = $this->Usuario_model->obtener_todos(); // Obtener usuarios para el select
        $this->load->view('vistasP/header');
        $this->load->view('vistasP/sidebar');
        $this->load->view('clientes/crear', $data); // Cargar la vista para crear cliente
        $this->load->view('vistasP/footer');
    }

    public function guardar() {
        // Establecer reglas de validación
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellidoPaterno', 'Apellido Paterno', 'required');
        $this->form_validation->set_rules('apellidoMaterno', 'Apellido Materno', 'required');
        $this->form_validation->set_rules('celular', 'Celular', 'required');
        $this->form_validation->set_rules('login', 'Login', 'required|is_unique[clientes.login]'); // Verificar unicidad del login

        if ($this->form_validation->run() === FALSE) {
            // Si la validación falla, volver a la vista de creación
            $this->crear();
        } else {
            // Guardar el cliente en la base de datos
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'apellidoPaterno' => $this->input->post('apellidoPaterno'),
                'apellidoMaterno' => $this->input->post('apellidoMaterno'),
                'celular' => $this->input->post('celular'),
                'login' => $this->input->post('login'),
                'direccion' => $this->input->post('direccion')
            );

            if ($this->Cliente_model->guardar($data)) {
                $this->session->set_flashdata('success', 'Cliente guardado exitosamente.');
            } else {
                $this->session->set_flashdata('error', 'Hubo un error al guardar el cliente.');
            }
            redirect('clientes'); // Redirigir a la lista de clientes
        }
    }

    public function editar($id) {
        $data['cliente'] = $this->Cliente_model->obtener_por_id($id); // Obtener cliente por ID
        $data['usuarios'] = $this->Usuario_model->obtener_todos(); // Obtener usuarios para el select

        if (empty($data['cliente'])) {
            $this->session->set_flashdata('error', 'Cliente no encontrado.');
            redirect('clientes');
        }

        $this->load->view('vistasP/header');
        $this->load->view('vistasP/sidebar');
        $this->load->view('clientes/editar', $data); // Cargar la vista para editar cliente
        $this->load->view('vistasP/footer');
    }

    public function actualizar($id) {
        // Establecer reglas de validación
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellidoPaterno', 'Apellido Paterno', 'required');
        $this->form_validation->set_rules('apellidoMaterno', 'Apellido Materno');
        $this->form_validation->set_rules('celular', 'Celular', 'required');

        if ($this->form_validation->run() === FALSE) {
            // Si la validación falla, volver a la vista de edición
            $this->editar($id);
        } else {
            // Actualizar el cliente en la base de datos
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'apellidoPaterno' => $this->input->post('apellidoPaterno'),
                'apellidoMaterno' => $this->input->post('apellidoMaterno'),
                'celular' => $this->input->post('celular'),
                'login' => $this->input->post('login'),
                'direccion' => $this->input->post('direccion')
            );

            if ($this->Cliente_model->actualizar($id, $data)) {
                $this->session->set_flashdata('success', 'Cliente actualizado exitosamente.');
            } else {
                $this->session->set_flashdata('error', 'Hubo un error al actualizar el cliente.');
            }
            redirect('clientes'); // Redirigir a la lista de clientes
        }
    }

    public function eliminar($id) {
        // Eliminar el cliente
        if ($this->Cliente_model->eliminar($id)) {
            $this->session->set_flashdata('success', 'Cliente eliminado exitosamente.');
        } else {
            $this->session->set_flashdata('error', 'Hubo un error al eliminar el cliente.');
        }
        redirect('clientes'); // Redirigir a la lista de clientes
    }
}
?>
