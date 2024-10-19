<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Empleado_model');
        $this->load->model('Usuario_model'); // Si tienes un modelo para los usuarios
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session'); // Para manejar mensajes flash
    }

    // Mostrar la lista de empleados
    public function index() 
    {
        $data['empleados'] = $this->Empleado_model->get_empleados();
        $this->load->view('vistasP/header');
        $this->load->view('vistasP/sidebar');
        $this->load->view('empleados/lista', $data);
        $this->load->view('vistasP/footer');
    }

    // Crear un nuevo empleado
    public function crear() {
        if ($this->input->post()) {
            // Reglas de validación
            $this->form_validation->set_rules('nombre', 'Nombre', 'required');
            $this->form_validation->set_rules('apellido', 'Apellido', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('idUsuario', 'Usuario', 'required');
            $this->form_validation->set_rules('puesto', 'Puesto', 'required');
            $this->form_validation->set_rules('telefono', 'Teléfono', 'required|min_length[8]|max_length[15]');
            $this->form_validation->set_rules('direccion', 'Dirección', 'required');

            if ($this->form_validation->run() === TRUE) {
                $empleadoData = array(
                    'idUsuario' => $this->input->post('idUsuario'),
                    'nombre' => $this->input->post('nombre'),
                    'apellido' => $this->input->post('apellido'),
                    'email' => $this->input->post('email'),
                    'telefono' => $this->input->post('telefono'),
                    'direccion' => $this->input->post('direccion'),
                    'puesto' => $this->input->post('puesto'),
                    'estado' => $this->input->post('estado')
                );

                if ($this->Empleado_model->insert_empleado($empleadoData)) {
                    $this->session->set_flashdata('success', 'Empleado creado exitosamente.');
                } else {
                    $this->session->set_flashdata('error', 'Hubo un problema al crear el empleado.');
                }

                redirect('empleados');
            }
        }

        $data['usuarios'] = $this->Empleado_model->get_usuarios();
        $this->load->view('vistasP/header');
        $this->load->view('vistasP/sidebar');
        $this->load->view('empleados/crear', $data);
        $this->load->view('vistasP/footer');
    }

    // Editar empleado
    public function editar($idEmpleado) {
        if ($this->input->post()) {
            // Reglas de validación
            $this->form_validation->set_rules('nombre', 'Nombre', 'required');
            $this->form_validation->set_rules('apellido', 'Apellido', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('idUsuario', 'Usuario', 'required');
            $this->form_validation->set_rules('puesto', 'Puesto', 'required');
            $this->form_validation->set_rules('telefono', 'Teléfono', 'required|min_length[8]|max_length[15]');
            $this->form_validation->set_rules('direccion', 'Dirección', 'required');

            if ($this->form_validation->run() === TRUE) {
                $empleadoData = array(
                    'idUsuario' => $this->input->post('idUsuario'),
                    'nombre' => $this->input->post('nombre'),
                    'apellido' => $this->input->post('apellido'),
                    'email' => $this->input->post('email'),
                    'telefono' => $this->input->post('telefono'),
                    'direccion' => $this->input->post('direccion'),
                    'puesto' => $this->input->post('puesto'),
                    'estado' => $this->input->post('estado')
                );

                if ($this->Empleado_model->update_empleado($idEmpleado, $empleadoData)) {
                    $this->session->set_flashdata('success', 'Empleado actualizado exitosamente.');
                } else {
                    $this->session->set_flashdata('error', 'Hubo un problema al actualizar el empleado.');
                }

                redirect('empleados');
            }
        }

        $data['empleado'] = $this->Empleado_model->get_empleado($idEmpleado);
        $data['usuarios'] = $this->Empleado_model->get_usuarios();
        $this->load->view('vistasP/header');
        $this->load->view('vistasP/sidebar');
        $this->load->view('empleados/editar', $data);
        $this->load->view('vistasP/footer');
    }

    // Eliminar empleado
    public function eliminar($idEmpleado) {
        if ($this->Empleado_model->delete_empleado($idEmpleado)) {
            $this->session->set_flashdata('success', 'Empleado eliminado exitosamente.');
        } else {
            $this->session->set_flashdata('error', 'Hubo un problema al eliminar el empleado.');
        }
        redirect('empleados');
    }
}
