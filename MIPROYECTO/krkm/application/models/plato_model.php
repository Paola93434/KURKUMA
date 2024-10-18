<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plato_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getPlatos() {
        // Obtener todos los platos de la tabla "platos"
        $query = $this->db->get('platos');
        return $query->result_array(); // Devolver los resultados como un array asociativo
    }

    public function obtener_plato($idPlato) {
        // Obtener un plato por su ID
        $query = $this->db->get_where('platos', array('idPlato' => $idPlato));
        return $query->row_array(); // Devuelve un solo resultado como un array asociativo
    }

    public function getPedidos() {
        // Obtener todos los pedidos de la tabla "pedidos"
        $query = $this->db->get('pedidos'); // Suponiendo que 'pedidos' es el nombre de tu tabla
        return $query->result_array();
    }

    public function crear_plato($data) {
        return $this->db->insert('platos', $data);
    }

    public function actualizar_plato($idPlato, $data) {
        $this->db->where('idPlato', $idPlato);
        return $this->db->update('platos', $data);
    }

    public function eliminar_plato($idPlato) {
        $this->db->where('idPlato', $idPlato);
        return $this->db->delete('platos');
    }
}
