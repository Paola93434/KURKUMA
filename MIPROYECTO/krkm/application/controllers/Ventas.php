<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Carga de los modelos necesarios para manejar ventas, clientes y platos
        $this->load->model('Venta_model');
        $this->load->model('Cliente_model');
        $this->load->model('Plato_model');
    }

    // Mostrar todas las ventas
    public function index() {
        $data['ventas'] = $this->Venta_model->obtenerVentas(); // Llama al método que obtiene todas las ventas
        $this->load->view('vistasP/header'); // Carga la cabecera de la vista
        $this->load->view('vistasP/sidebar'); // Carga el menú lateral
        $this->load->view('ventas/listar', $data); // Carga la vista que lista las ventas
        $this->load->view('vistasP/footer'); // Carga el pie de página
    }

    // Crear una venta nueva
    public function crear() {
        // Obtiene la lista de clientes y platos
        $data['clientes'] = $this->Cliente_model->getClientes();
        $data['platos'] = $this->Plato_model->getPlatos();

        // Verifica si se ha enviado el formulario
        if ($this->input->post()) {
            // Recolecta la información de la venta
            $dataVenta = [
                'cliente_id' => $this->input->post('cliente_id'),
                'total' => $this->input->post('total'),
            ];

            // Prepara los detalles de la venta
            $detalles = [];
            $platos = $this->input->post('plato');
            $cantidades = $this->input->post('cantidad');
            $precios = $this->input->post('precio');

            // Rellena el array de detalles con información de cada plato vendido
            for ($i = 0; $i < count($platos); $i++) {
                $detalles[] = [
                    'idPlato' => $platos[$i],
                    'cantidad' => $cantidades[$i],
                    'precio' => $precios[$i]
                ];
            }

            // Crea la venta llamando al modelo
            $this->Venta_model->crearVenta($dataVenta, $detalles);
            redirect('ventas'); // Redirige a la lista de ventas
        }

        // Carga la vista para crear una nueva venta
        $this->load->view('ventas/crear', $data);
    }

    // Ver detalles de una venta
    public function ver($idVenta) {
        // Obtiene los detalles de la venta específica
        $data['venta'] = $this->Venta_model->obtenerDetallesVenta($idVenta);
        $this->load->view('ventas/detalles', $data); // Carga la vista que muestra los detalles
    }

    // Eliminar una venta
    public function eliminar($idVenta) {
        $this->Venta_model->eliminarVenta($idVenta); // Llama al modelo para eliminar la venta
        redirect('ventas'); // Redirige a la lista de ventas
    }
}
?>
