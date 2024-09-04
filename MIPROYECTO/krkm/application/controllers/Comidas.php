<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comidas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Comida_model');
        $this->load->helper('url');
        $this->load->library('upload');
    }

    public function index() {
        $data['comidas'] = $this->Comida_model->obtener_comidas();
        $this->load->view('comidas/listar', $data);
    }

    public function crear() {
        $this->load->view('comidas/crear');
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

        $this->Comida_model->crear_comida($data);
        redirect('comidas');
    }

    public function editar($idComida) {
        $data['comida'] = $this->Comida_model->obtener_comida($idComida);
        $this->load->view('comidas/editar', $data);
    }

    public function actualizar() {
        $idComida = $this->input->post('idComida');
        
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

        $this->Comida_model->actualizar_comida($idComida, $data);
        redirect('comidas');
    }

    public function eliminar($idComida) {
        $this->Comida_model->eliminar_comida($idComida);
        redirect('comidas');
    }
}
