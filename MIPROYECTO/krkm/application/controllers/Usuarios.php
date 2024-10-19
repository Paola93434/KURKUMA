<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usuario_model'); // Asegúrate de que este modelo está cargado
    }

    // Método para mostrar el formulario de login
    public function login() {
        $this->load->view('usuarios/login');
    }

    // Método para listar todos los usuarios
    public function index() {
        $data['usuarios'] = $this->usuario_model->listar_usuarios();
        $this->load->view('vistasP/header');
        $this->load->view('vistasP/sidebar');
        $this->load->view('usuarios/listar', $data);
        $this->load->view('vistasP/footer');
    }

    // Método para mostrar el formulario de creación de usuarios
    public function crear() {
        $this->load->view('usuarios/formulario'); // Asegúrate de que la vista 'formulario.php' existe
    }

    // Método para guardar un nuevo usuario en la base de datos
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

    // Método para mostrar el formulario de edición de un usuario
    public function editar($id) {
        $data['usuario'] = $this->usuario_model->obtener_usuario($id);
        $this->load->view('usuarios/formulario', $data);
    }

    // Método para actualizar los datos de un usuario
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

    // Método para eliminar un usuario
    public function eliminar($id) {
        $this->usuario_model->eliminar_usuario($id);
        redirect('usuarios/index');
    }

    // Método para autenticar a un usuario
    public function autenticar() {
        $login = $this->input->post('login');
        $password = $this->input->post('password');

        $usuario = $this->usuario_model->verificarUsuario($login);

        if ($usuario && password_verify($password, $usuario['password'])) {
            // Almacena datos del usuario en la sesión
            $this->session->set_userdata('login', $usuario['login']);
            $this->session->set_userdata('tipo', $usuario['tipo']);
            $this->session->set_userdata('idusuario', $usuario['idUsuario']);
            
            // Redirige según el tipo de usuario
            switch ($usuario['tipo']) {
                case 'Administrador':
                    redirect('usuarios/index'); // Redirige a la vista de usuarios
                    break;
                case 'Empleado':
                    redirect('platos'); // Redirige a la vista de platos
                    break;
                case 'Cliente':
                    redirect('menu'); // Redirige a la vista del menú
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

    // Método para cerrar sesión
    public function logout() {
        $this->session->sess_destroy();
        redirect('usuarios/login');
    }

    // Método adicional para cerrar sesión (duplicado)
    public function cerrar_sesion() {
        $this->session->sess_destroy();
        redirect('usuarios/login'); // Redirige al login
    }
}
?>
