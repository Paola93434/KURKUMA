<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Venta_model');
        $this->load->model('Cliente_model');
        $this->load->model('Plato_model');
    }

    // Mostrar todas las ventas

    public function index() {
        $data['ventas'] = $this->Venta_model->obtenerVentas();// Llama al método correcto
        $this->load->view('vistasP/header');
        $this->load->view('vistasP/sidebar');
        $this->load->view('ventas/listar', $data);
        $this->load->view('vistasP/footer');
    }
    // Crear una venta nueva
    public function crear() {
        $data['clientes'] = $this->Cliente_model->getClientes();
        $data['platos'] = $this->Plato_model->getPlatos();

        if ($this->input->post()) {
            $dataVenta = [
                'cliente_id' => $this->input->post('cliente_id'),
                'total' => $this->input->post('total'),
            ];

            $detalles = [];
            $platos = $this->input->post('plato');
            $cantidades = $this->input->post('cantidad');
            $precios = $this->input->post('precio');

            for ($i = 0; $i < count($platos); $i++) {
                $detalles[] = [
                    'idPlato' => $platos[$i],
                    'cantidad' => $cantidades[$i],
                    'precio' => $precios[$i]
                ];
            }

            $this->Venta_model->crearVenta($dataVenta, $detalles);
            redirect('ventas');
        }

        $this->load->view('ventas/crear', $data);
    }

    // Ver detalles de una venta
    public function ver($idVenta) {
        $data['venta'] = $this->Venta_model->obtenerDetallesVenta($idVenta);
        $this->load->view('ventas/detalles', $data);
    }

    // Eliminar una venta
    public function eliminar($idVenta) {
        $this->Venta_model->eliminarVenta($idVenta);
        redirect('ventas');
    }
}
