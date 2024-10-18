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
        $data['platos'] = $this->Plato_model->getPlatos(); // Llama al método correcto
        $this->load->view('vistasP/header');
        $this->load->view('vistasP/sidebar');
        $this->load->view('platos/listar', $data);
        $this->load->view('vistasP/footer');
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
            $imagen = ''; // Manejo de errores
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

   /* public function editar($idPlato) {
        $data['plato'] = $this->Plato_model->getPlatos($idPlato);
        $this->load->view('platos/editar', $data);
    }*/
    public function editar($idPlato) {
        // Obtener el plato a editar
        $data['plato'] = $this->Plato_model->obtener_plato($idPlato);

        if (!$data['plato']) {
            show_404(); // Si no se encuentra el plato, muestra un error 404
        }

        $this->load->view('platos/editar', $data); // Cargar la vista para editar
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

    public function menu() { // Menú de los platos
        $data['platos'] = $this->Plato_model->get_platos(); // Llama al método que devuelve los platos
        $this->load->view('platos/menu', $data);
    }
}
