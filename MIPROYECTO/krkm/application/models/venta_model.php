<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta_model extends CI_Model {

    // Crear una venta
    public function crearVenta($dataVenta, $detalles) {
        $this->db->trans_start(); // Iniciar transacción
        
        // Insertar en la tabla ventas
        $this->db->insert('ventas', $dataVenta);
        $idVenta = $this->db->insert_id(); // Obtener el ID de la venta recién creada
        
        // Insertar los detalles de la venta
        foreach ($detalles as $detalle) {
            $detalle['idVenta'] = $idVenta; // Asignar el idVenta
            $this->db->insert('detalle_ventas', $detalle);
        }
        
        $this->db->trans_complete(); // Completar la transacción
        return $this->db->trans_status(); // Retorna true si todo fue bien
    }

    // Obtener todas las ventas
    public function obtenerVentas() {
        $this->db->select('ventas.*, clientes.nombre as nombreCliente');
        $this->db->from('ventas');
        $this->db->join('clientes', 'ventas.cliente_id = clientes.idCliente');
        return $this->db->get()->result();
    }

    // Obtener detalles de una venta específica
    public function obtenerDetallesVenta($idVenta) {
        $this->db->select('detalle_ventas.*, platos.nombre as nombrePlato');
        $this->db->from('detalle_ventas');
        $this->db->join('platos', 'detalle_ventas.idPlato = platos.idPlato');
        $this->db->where('idVenta', $idVenta);
        return $this->db->get()->result();
    }

    // Eliminar una venta
    public function eliminarVenta($idVenta) {
        $this->db->trans_start();
        $this->db->delete('detalle_ventas', array('idVenta' => $idVenta)); // Eliminar detalles
        $this->db->delete('ventas', array('idVenta' => $idVenta)); // Eliminar venta
        $this->db->trans_complete();
        return $this->db->trans_status();
    }
}
