<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes_model extends CI_Model {

    public function get_all_reportes() {
        $query = $this->db->get('reportes');
        return $query->result_array();
    }

    public function insertar($data) {
        return $this->db->insert('reportes', $data);
    }

    public function eliminar($id) {
        return $this->db->delete('reportes', array('idReporte' => $id));
    }
}
?>
