<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Empleado_model');
        $this->load->model('Usuario_model');  // Si tienes un modelo para los usuarios
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    // Mostrar la lista de empleados
    public function index() 
    {
        $data['empleados'] = $this->Empleado_model->get_empleados();
            $this->load->view('vistasP/header');
            $this->load->view('vistasP/sidebar');
			$this->load->view('empleados/lista', $data);
            //$this->load->view('vistasP/content');
            $this->load->view('vistasP/footer');
    }

    // Crear un nuevo empleado
    public function crear() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('nombre', 'Nombre', 'required');
            $this->form_validation->set_rules('apellido', 'Apellido', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('idUsuario', 'Usuario', 'required');
            $this->form_validation->set_rules('puesto', 'Puesto', 'required');

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

                $this->Empleado_model->insert_empleado($empleadoData);
                redirect('empleados');
            }
        }

        $data['usuarios'] = $this->Empleado_model->get_usuarios();
        $this->load->view('empleados/crear', $data);
    }

    // Editar empleado
    public function editar($idEmpleado) {
        if ($this->input->post()) {
            $this->form_validation->set_rules('nombre', 'Nombre', 'required');
            $this->form_validation->set_rules('apellido', 'Apellido', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('idUsuario', 'Usuario', 'required');
            $this->form_validation->set_rules('puesto', 'Puesto', 'required');

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

                $this->Empleado_model->update_empleado($idEmpleado, $empleadoData);
                redirect('empleados');
            }
        }

        $data['empleado'] = $this->Empleado_model->get_empleado($idEmpleado);
        $data['usuarios'] = $this->Empleado_model->get_usuarios();
        $this->load->view('empleados/editar', $data);
    }

    // Eliminar empleado
    public function eliminar($idEmpleado) {
        $this->Empleado_model->delete_empleado($idEmpleado);
        redirect('empleados');
    }
}
