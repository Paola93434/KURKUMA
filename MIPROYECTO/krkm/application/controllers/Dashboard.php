<?php
// application/controllers/Dashboard.php    
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->verificar_acceso();
        $this->load->model('dashboard_model');  // Cargar el modelo si necesitas mostrar datos en el dashboard
    }

    // Método privado para verificar el acceso de usuario
    private function verificar_acceso()
    {
        // Verificar si el usuario está logueado y tiene el rol de administrador
        if (!$this->session->userdata('logged_in') || $this->session->userdata('rol') !== 'administrador') {
            $this->session->set_flashdata('error', 'No tienes acceso a esta área.');
            redirect('login');
        }
    }

    // Método que carga el dashboard
    
    public function index() {
        // Cargar datos adicionales desde el modelo, si es necesario
        $data['estadisticas'] = $this->dashboard_model->obtener_estadisticas();
        $data['usuarios_activos'] = $this->dashboard_model->obtener_usuarios_activos();

        $this->load->view('vistasP/header');
       // $this->load->view('vistasP/sidebar');
        $this->load->view('dashboard', $data);  // Pasar los datos a la vista
        $this->load->view('vistasP/footer');
    }
}
?>
