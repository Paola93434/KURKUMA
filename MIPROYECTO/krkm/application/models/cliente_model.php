<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

    public function obtener_todos() {
        $this->db->select('*'); // Seleccionamos todos los campos de la tabla clientes
        $this->db->from('clientes'); // Usamos solo la tabla clientes
        return $this->db->get()->result_array(); // Obtener todos los clientes
    }

    public function guardar($data) {
        $this->db->insert('clientes', $data); // Insertar un nuevo cliente
        return $this->db->insert_id(); // Retornar el ID del cliente recién creado
    }

    public function obtener_por_id($id) {
        $this->db->select('*'); // Seleccionamos todos los campos de la tabla clientes
        $this->db->from('clientes');
        $this->db->where('idCliente', $id); // Buscar por ID
        return $this->db->get()->row_array(); // Obtener cliente por ID
    }

    public function actualizar($id, $data) {
        $this->db->where('idCliente', $id);
        return $this->db->update('clientes', $data); // Actualizar cliente
    }

    public function eliminar($id) {
        return $this->db->delete('clientes', array('idCliente' => $id)); // Eliminar cliente
    }

    public function getClientes() {
        $this->db->select('*');
        $this->db->from('clientes');
        $query = $this->db->get();
        return $query->result(); // Devuelve la lista de clientes
    }
}
