<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Reportes_model');
    }

    public function index() {
        $data['reportes'] = $this->Reportes_model->get_all_reportes();
        $this->load->view('reportes/index', $data);
    }

    public function crear() {
        $this->load->view('reportes/crear');
    }

    public function almacenar() {
        $data = [
            'fecha_inicio' => $this->input->post('fecha_inicio'),
            'fecha_fin' => $this->input->post('fecha_fin'),
            'total_ventas' => $this->input->post('total_ventas'),
            'total_pedidos' => $this->input->post('total_pedidos'),
        ];
        $this->Reportes_model->insertar($data);
        redirect('reportes');
    }

    public function eliminar($id) {
        $this->Reportes_model->eliminar($id);
        redirect('reportes');
    }
}
?>
