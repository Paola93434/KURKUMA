<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Platos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Plato_model');
        $this->load->helper('url');
        $this->load->library('upload');
    }

    public function index() {
        $data['platos'] = $this->Plato_model->obtener_platos();
        $this->load->view('platos/listar', $data);
    }

    public function crear() {
        $this->load->view('platos/crear');
    }

    public function guardar() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->upload->initialize($config);

        if ($this->upload->do_upload('imagen')) {
            $imagen = $this->upload->data('file_name');
        } else {
            $imagen = '';
        }

        $data = array(
            'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion'),
            'precio' => $this->input->post('precio'),
            'categoria' => $this->input->post('categoria'),
            'imagen' => $imagen
        );

        $this->Plato_model->crear_plato($data);
        redirect('platos');
    }

    public function editar($idPlato) {
        $data['plato'] = $this->Plato_model->obtener_plato($idPlato);
        $this->load->view('platos/editar', $data);
    }

    public function actualizar() {
        $idPlato = $this->input->post('idPlato');
        
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->upload->initialize($config);

        if ($this->upload->do_upload('imagen')) {
            $imagen = $this->upload->data('file_name');
        } else {
            $imagen = $this->input->post('imagen_actual');
        }

        $data = array(
            'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion'),
            'precio' => $this->input->post('precio'),
            'categoria' => $this->input->post('categoria'),
            'imagen' => $imagen
        );

        $this->Plato_model->actualizar_plato($idPlato, $data);
        redirect('platos');
    }

    public function eliminar($idPlato) {
        $this->Plato_model->eliminar_plato($idPlato);
        redirect('platos');
    }

    public function menu() { //Menú de los platos
        // Obtener los platos de la base de datos
        $data['platos'] = $this->Plato_model->get_all_platos();
        
        // Cargar la vista del menú para el cliente
        $this->load->view('platos/menu', $data);
    }
}
