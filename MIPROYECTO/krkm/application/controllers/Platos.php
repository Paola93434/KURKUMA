<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Platos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Plato_model');
        $this->load->helper('url');
        $this->load->library('upload');
    }

    // Listar todos los platos
    public function index() {
        $data['platos'] = $this->Plato_model->getPlatos(); // Llama al método correcto
        $this->load->view('vistasP/header');
        $this->load->view('vistasP/sidebar');
        $this->load->view('platos/listar', $data);
        $this->load->view('vistasP/footer');
    }

    // Mostrar formulario para crear un plato
    public function crear() {
        $this->load->view('platos/crear');
    }

    // Guardar un nuevo plato
    public function guardar() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->upload->initialize($config);

        // Subir imagen si se proporciona
        if ($this->upload->do_upload('imagen')) {
            $imagen = $this->upload->data('file_name');
        } else {
            $imagen = ''; // Si no se sube imagen, dejar vacío
        }

        $data = array(
            'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion'),
            'precio' => $this->input->post('precio'),
            'categoria' => $this->input->post('categoria'),
            'imagen' => $imagen
        );

        // Guardar el plato en la base de datos
        $this->Plato_model->crear_plato($data);
        redirect('platos'); // Redirigir a la lista de platos
    }

    // Mostrar formulario para editar un plato existente
    public function editar($idPlato) {
        // Obtener el plato a editar
        $data['plato'] = $this->Plato_model->obtener_plato($idPlato);

        if (!$data['plato']) {
            show_404(); // Si no se encuentra el plato, muestra un error 404
        }

        // Cargar la vista para editar el plato
        $this->load->view('platos/editar', $data);
    }

    // Actualizar los datos de un plato existente
    public function actualizar() {
        $idPlato = $this->input->post('idPlato');
        
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->upload->initialize($config);

        // Subir nueva imagen si se proporciona, si no usar la actual
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

        // Actualizar el plato en la base de datos
        $this->Plato_model->actualizar_plato($idPlato, $data);
        redirect('platos'); // Redirigir a la lista de platos
    }

    // Eliminar un plato
    public function eliminar($idPlato) {
        $this->Plato_model->eliminar_plato($idPlato);
        redirect('platos'); // Redirigir a la lista de platos
    }

    // Mostrar el menú de platos
    public function menu() {
        $data['platos'] = $this->Plato_model->get_platos(); // Llama al método que devuelve los platos
        $this->load->view('platos/menu', $data);
    }
}
