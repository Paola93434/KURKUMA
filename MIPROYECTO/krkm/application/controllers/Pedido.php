<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller {
   
        public function __construct() {
            parent::__construct();
            $this->load->model('Pedido_model'); // Asegúrate de que el nombre es correcto
        }
    
        public function listar() {
            $data['pedidos'] = $this->Pedido_model->obtenerPedidos();
            $this->load->view('pedido/pedido_listar', $data);
        }
    
        public function ver($idPedido) {
            $data['pedido'] = $this->Pedido_model->obtenerPedido($idPedido);
            $data['detalle'] = $this->Pedido_model->obtenerDetallePedido($idPedido);
            $this->load->view('pedido/pedido_ver', $data);
        }
    }
    
    ?>
    