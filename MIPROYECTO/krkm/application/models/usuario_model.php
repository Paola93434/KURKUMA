<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    
    public function get_usuario($login) {
        // Establece el criterio de búsqueda: login del usuario
        $this->db->where('login', $login);
        // Ejecuta la consulta sobre la tabla 'usuarios'
        $query = $this->db->get('usuarios');
        // Devuelve el primer resultado encontrado como un objeto
        return $query->row();
    }


    public function __construct() {
        $this->load->database();
    }

    public function listar_usuarios() {
        $query = $this->db->get('usuarios'); // Asegúrate de que el nombre de la tabla es correcto
        return $query; // Devuelve el objeto de resultados
    }

    public function obtener_usuario($id) {
        $query = $this->db->get_where('usuarios', array('idUsuario' => $id));
        return $query->row_array(); // Devuelve un array con los datos del usuario
    }

    public function insertar_usuario($data) {
        return $this->db->insert('usuarios', $data);
    }

    public function actualizar_usuario($idUsuario, $data) {
        $this->db->where('idUsuario', $idUsuario);
        return $this->db->update('usuarios', $data);
    }

    public function eliminar_usuario($id) {
        $this->db->where('idUsuario', $id);
        return $this->db->delete('usuarios');
    }

    public function verificarUsuario($login) {
        $this->db->where('login', $login);
        $query = $this->db->get('usuarios');
        return $query->row_array(); // Devuelve un array con los datos del usuario
    }

      // Método para obtener todos los usuarios
      public function obtener_todos() {
        $query = $this->db->get('usuarios'); // Cambia 'usuarios' por el nombre de tu tabla de usuarios
        return $query->result_array(); // Devuelve el resultado como un array
    }
}
?>
