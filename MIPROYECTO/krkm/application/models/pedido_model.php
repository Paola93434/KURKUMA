<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido_model extends CI_Model {

    // Obtener todos los pedidos
    public function getPedidos() {
        $this->db->select('p.idPedido, c.nombre AS nombreCliente, p.fecha_pedido, p.total, p.estado');
        $this->db->from('pedidos p');
        $this->db->join('clientes c', 'p.cliente_id = c.idCliente');
        return $this->db->get()->result_array();
    }

    // Insertar un nuevo pedido
    public function insertPedido($data) {
        $this->db->insert('pedidos', $data);
        return $this->db->insert_id(); // Devuelve el id del nuevo pedido
    }

    // Insertar los detalles del pedido
    public function insertDetallePedido($data) {
        $this->db->insert_batch('pedido_platos', $data); // Insertar múltiples filas a la vez
    }

    // Obtener detalles de un pedido específico
    public function getPedidoById($idPedido) {
        $this->db->select('pp.*, pl.nombre, pl.precio');
        $this->db->from('pedido_platos pp');
        $this->db->join('platos pl', 'pp.idPlato = pl.idPlato');
        $this->db->where('pp.idPedido', $idPedido);
        return $this->db->get()->result_array();
    }
}