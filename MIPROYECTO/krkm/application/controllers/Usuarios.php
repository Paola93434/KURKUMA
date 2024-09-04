<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function login() {
        $this->load->view('usuarios/login');
    }

    public function index() {
        $data['usuarios'] = $this->usuario_model->listar_usuarios();
        $this->load->view('usuarios/listar', $data); // Asegúrate de que la vista 'listar.php' existe
    }

    public function crear() {
        $this->load->view('usuarios/formulario'); // Asegúrate de que la vista 'formulario.php' existe
    }

    public function guardarbd() {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'primerApellido' => $this->input->post('primerApellido'),
            'segundoApellido' => $this->input->post('segundoApellido'),
            'login' => $this->input->post('login'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'tipo' => $this->input->post('tipo'),
            'estado' => $this->input->post('estado'),
            'fechaCreacion' => date('Y-m-d H:i:s'),
            'ultimaActualizacion' => date('Y-m-d H:i:s')
        );
        $this->usuario_model->insertar_usuario($data);
        redirect('usuarios/index');
    }

    public function editar($id) {
        $data['usuario'] = $this->usuario_model->obtener_usuario($id);
        $this->load->view('usuarios/formulario', $data);
    }

    public function modificarbd() {
        $idUsuario = $this->input->post('idUsuario');
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'primerApellido' => $this->input->post('primerApellido'),
            'segundoApellido' => $this->input->post('segundoApellido'),
            'login' => $this->input->post('login'),
            'password' => !empty($this->input->post('password')) ? password_hash($this->input->post('password'), PASSWORD_BCRYPT) : $this->input->post('current_password'),
            'tipo' => $this->input->post('tipo'),
            'estado' => $this->input->post('estado'),
            'ultimaActualizacion' => date('Y-m-d H:i:s')
        );
        $this->usuario_model->actualizar_usuario($idUsuario, $data);
        redirect('usuarios/index');
    }

    public function eliminar($id) {
        $this->usuario_model->eliminar_usuario($id);
        redirect('usuarios/index');
    }

    public function autenticar() {
        $login = $this->input->post('login');
        $password = $this->input->post('password');

        $usuario = $this->usuario_model->verificarUsuario($login);

        if ($usuario && password_verify($password, $usuario['password'])) {
            $this->session->set_userdata('login', $usuario['login']);
            $this->session->set_userdata('tipo', $usuario['tipo']);
            $this->session->set_userdata('idusuario', $usuario['idUsuario']);
            
            switch ($usuario['tipo']) {
                case 'Administrador':
                    redirect('usuarios/index'); //usuarios index
                    break;
                case 'Empleado':
                    redirect('comidas'); // DE EMPLEADOS/COMIDAS
                    break;
                case 'Cliente':
                    redirect('cliente/menu'); //cliente/menu
                    break;
                default:
                    redirect('usuarios/login'); 
                    break;
            }
        } else {
            $this->session->set_flashdata('error', 'Usuario o contraseña incorrectos');
            redirect('usuarios/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('usuarios/login');
    }
}
?>
