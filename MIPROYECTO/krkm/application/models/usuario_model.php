<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // Obtener un usuario por su login
    public function get_usuario($login) {
        $this->db->where('login', $login);
        $query = $this->db->get('usuarios');
        return $query->row(); // Devuelve el primer resultado encontrado como un objeto
    }

  // Cambia el nombre del método para ser consistente
public function listar_usuarios() {
    $this->db->where('fechaEliminacion', NULL); // Solo usuarios activos
    $query = $this->db->get('usuarios');
    return $query->result(); // Devuelve un array de objetos
}


    // Obtener un usuario por su ID
    public function obtener_usuario($id) {
        $query = $this->db->get_where('usuarios', array('idUsuario' => $id));
        return $query->row_array(); // Devuelve un array con los datos del usuario
    }

    // Insertar un nuevo usuario
    public function insertar_usuario($data) {
        return $this->db->insert('usuarios', $data);
    }

    // Actualizar un usuario
    public function actualizar_usuario($idUsuario, $data) {
        $this->db->where('idUsuario', $idUsuario);
        return $this->db->update('usuarios', $data);
    }

    // Eliminar usuario lógicamente
    public function eliminar_usuario($id) {
        $this->db->set('fechaEliminacion', date('Y-m-d H:i:s')); // Marcar como eliminado
        $this->db->where('idUsuario', $id);
        return $this->db->update('usuarios');
    }

    // Verificar si un usuario existe
    public function verificarUsuario($login) {
        $this->db->where('login', $login);
        $query = $this->db->get('usuarios');
        return $query->row_array(); // Devuelve un array con los datos del usuario
    }

    // Obtener todos los usuarios
    public function obtener_todos() {
        $this->db->where('fechaEliminacion', NULL); // Solo usuarios activos
        $query = $this->db->get('usuarios');
        return $query->result_array(); // Devuelve el resultado como un array
    }

    // Método para recuperar o cambiar la contraseña
    public function cambiar_contrasena($login, $nueva_contrasena) {
        $this->db->where('login', $login);
        $data = array('password' => password_hash($nueva_contrasena, PASSWORD_BCRYPT));
        return $this->db->update('usuarios', $data);
    }
}
?>
