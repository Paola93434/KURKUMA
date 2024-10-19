<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pedido_Model');
        $this->load->model('Cliente_Model');
        $this->load->model('Plato_Model');
        
        // Verificar si el usuario está autenticado
        if (!$this->session->userdata('idUsuario')) {
            redirect('login'); // Redirigir al login si no está autenticado
        }
    }

    // Listar todos los pedidos
    public function index() {
        $data['pedidos'] = $this->Pedido_Model->getPedidos();
        $this->load->view('vistasP/header');
        $this->load->view('vistasP/sidebar');
        $this->load->view('pedidos/listar', $data);
        $this->load->view('vistasP/footer');
    }

    // Mostrar formulario para crear un pedido
    public function crear() {
        $data['clientes'] = $this->Cliente_Model->getClientes();
        $data['platos'] = $this->Plato_Model->getPlatos(); // Obtener lista de platos
        $this->load->view('pedidos/crear', $data);
    }

    // Guardar el pedido
    public function guardar() {
        // Obtener idUsuario desde la sesión
        $usuario_id = $this->session->userdata('idUsuario');

        // Verificar si el usuario está autenticado
        if ($usuario_id === NULL) {
            $this->session->set_flashdata('error', 'Debes estar autenticado para realizar un pedido.');
            redirect('login');
            return;
        }

        // Guardar datos del pedido
        $pedidoData = [
            'cliente_id' => $this->input->post('cliente_id'),
            'usuario_id' => $usuario_id,
            'fecha_pedido' => date('Y-m-d H:i:s'),
            'total' => $this->input->post('total'),
            'estado' => 1 // Estado inicial "Pendiente"
        ];

        // Insertar el pedido
        $idPedido = $this->Pedido_Model->insertPedido($pedidoData);

        // Insertar detalles del pedido
        $platos = $this->input->post('platos');
        $cantidades = $this->input->post('cantidades');
        $detalles = [];

        foreach ($platos as $index => $idPlato) {
            $detalles[] = [
                'idPedido' => $idPedido,
                'idPlato' => $idPlato,
                'cantidad' => $cantidades[$index]
            ];
        }

        // Guardar detalles del pedido
        $this->Pedido_Model->insertDetallePedido($detalles);

        // Redirigir a la lista de pedidos
        redirect('pedidos');
    }

    // Ver detalles de un pedido
    public function ver($idPedido) {
        $data['pedido'] = $this->Pedido_Model->getPedidoById($idPedido);
        $this->load->view('pedidos/ver', $data);
    }
}
