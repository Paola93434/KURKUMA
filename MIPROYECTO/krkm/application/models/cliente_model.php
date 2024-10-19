<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

    public function obtener_todos() {
        $this->db->select('clientes.*, usuarios.login');
        $this->db->from('clientes');
        $this->db->join('usuarios', 'clientes.idUsuario = usuarios.idUsuario'); // Unir clientes con usuarios
        return $this->db->get()->result_array(); // Obtener todos los clientes
    }

    public function guardar($data) {
        $this->db->insert('clientes', $data); // Insertar un nuevo cliente
    }

    public function obtener_por_id($id) {
        $this->db->select('clientes.*, usuarios.login');
        $this->db->from('clientes');
        $this->db->join('usuarios', 'clientes.idUsuario = usuarios.idUsuario'); // Unir clientes con usuarios
        $this->db->where('clientes.idCliente', $id);
        return $this->db->get()->row_array(); // Obtener cliente por ID
    }

    public function actualizar($id, $data) {
        $this->db->where('idCliente', $id);
        $this->db->update('clientes', $data); // Actualizar cliente
    }

    public function eliminar($id) {
        $this->db->delete('clientes', array('idCliente' => $id)); // Eliminar cliente
    }
/*
    public function getClientes() {
        $query = $this->db->get('clientes'); // Asumiendo que la tabla se llama 'clientes'
        return $query->result(); // Retorna un array de objetos
    }*/
    
    public function getClientes() {
        $this->db->select('*');
        $this->db->from('clientes');
        $query = $this->db->get();
        return $query->result(); // Devuelve la lista de clientes
    }

}
