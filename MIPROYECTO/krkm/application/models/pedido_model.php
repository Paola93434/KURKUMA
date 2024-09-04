<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido_model extends CI_Model {

    public function crearPedido($data) {
        $this->db->insert('pedidos', $data);
        return $this->db->insert_id();
    }

    public function agregarDetallePedido($detalle) {
        $this->db->insert_batch('detalle_pedido', $detalle);
    }

    public function obtenerPedidos() {
        $this->db->select('pedidos.*, usuarios.nombre as cliente');
        $this->db->from('pedidos');
        $this->db->join('usuarios', 'usuarios.idUsuario = pedidos.idCliente');
        return $this->db->get()->result();
    }

    public function obtenerDetallePedido($idPedido) {
        $this->db->select('detalle_pedido.*, comidas.nombre as comida');
        $this->db->from('detalle_pedido');
        $this->db->join('comidas', 'comidas.idComida = detalle_pedido.idComida');
        $this->db->where('detalle_pedido.idPedido', $idPedido);
        return $this->db->get()->result();
    }
}
?>
