<?php
class Empleado_model extends CI_Model {

    // Obtener todos los empleados
    public function get_empleados() {
        $this->db->select('empleados.*, usuarios.login AS usuarioLogin');
        $this->db->from('empleados');
        $this->db->join('usuarios', 'empleados.idUsuario = usuarios.idUsuario');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Obtener empleado por ID
    public function get_empleado($idEmpleado) {
        $this->db->select('empleados.*, usuarios.login AS usuarioLogin');
        $this->db->from('empleados');
        $this->db->join('usuarios', 'empleados.idUsuario = usuarios.idUsuario');
        $this->db->where('empleados.idEmpleado', $idEmpleado);
        $query = $this->db->get();
        return $query->row_array();
    }

    // Insertar empleado
    public function insert_empleado($data) {
        $this->db->insert('empleados', $data);
    }

    // Actualizar empleado
    public function update_empleado($idEmpleado, $data) {
        $this->db->where('idEmpleado', $idEmpleado);
        $this->db->update('empleados', $data);
    }

    // Eliminar empleado
    public function delete_empleado($idEmpleado) {
        $this->db->where('idEmpleado', $idEmpleado);
        $this->db->delete('empleados');
    }

    // Obtener lista de usuarios para el combo de idUsuario
    public function get_usuarios() {
        $this->db->select('idUsuario, login');
        $query = $this->db->get('usuarios');
        return $query->result_array();
    }
}
