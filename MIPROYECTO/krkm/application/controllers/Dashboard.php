
<?php
// application/controllers/Dashboard.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->verificar_acceso();
    }

    private function verificar_acceso()
    {
        if ($this->session->userdata('rol') !== 'administrador') {
            redirect('login');
        }
    }

    public function index()
    {
        // Carga la vista del dashboard
        $this->load->view('dashboard');
    }
}
?>
