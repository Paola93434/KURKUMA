<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comida_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function obtener_comidas() {
        $query = $this->db->get('comidas');
        return $query->result_array();
    }

    public function obtener_comida($idComida) {
        $query = $this->db->get_where('comidas', array('idComida' => $idComida));
        return $query->row_array();
    }

    public function crear_comida($data) {
        return $this->db->insert('comidas', $data);
    }

    public function actualizar_comida($idComida, $data) {
        $this->db->where('idComida', $idComida);
        return $this->db->update('comidas', $data);
    }

    public function eliminar_comida($idComida) {
        $this->db->where('idComida', $idComida);
        return $this->db->delete('comidas');
    }
}
