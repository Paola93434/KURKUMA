<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pedido_Model');
        $this->load->model('Cliente_Model');
        $this->load->model('Plato_Model');
        
        // Verificar si el usuario está autenticado
      /*  if (!$this->session->userdata('idUsuario')) {
            redirect('login'); // Redirigir al login si no está autenticado
        }*/
    }

    // Mostrar todos los pedidos
    public function index() {
        $data['pedidos'] = $this->Pedido_Model->getPedidos();
        $this->load->view('pedidos/listar', $data);
    }

    // Mostrar formulario para crear un pedido
    public function crear() {
        $data['clientes'] = $this->Cliente_Model->getClientes();
        // Cambiar getPedidos() por getPlatos() para obtener la lista de platos
        $data['platos'] = $this->Plato_Model->getPlatos(); // Asegúrate de que este método exista en Plato_Model
        $this->load->view('pedidos/crear', $data);
    }

    // Guardar el pedido
    public function guardar() {
        // Obtener idUsuario desde la sesión
        $usuario_id = $this->session->userdata('idUsuario');

        // Verificar que el usuario_id no sea NULL
        if ($usuario_id === NULL) {
            // Manejo de error: el usuario no está autenticado
            $this->session->set_flashdata('error', 'Debes estar autenticado para realizar un pedido.');
            redirect('login'); // Redirigir al login o a donde desees
            return; // Terminar la ejecución del método
        }

        $pedidoData = [
            'cliente_id' => $this->input->post('cliente_id'),
            'usuario_id' => $usuario_id, // Usuario logueado
            'fecha_pedido' => date('Y-m-d H:i:s'), // Fecha actual
            'total' => $this->input->post('total'),
            'estado' => 1 // Estado inicial "Pendiente"
        ];

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

        $this->Pedido_Model->insertDetallePedido($detalles);

        redirect('pedidos'); // Redirigir a la lista de pedidos
    }

    // Ver detalles de un pedido
    public function ver($idPedido) {
        $data['pedido'] = $this->Pedido_Model->getPedidoById($idPedido);
        $this->load->view('pedidos/ver', $data);
    }
}
