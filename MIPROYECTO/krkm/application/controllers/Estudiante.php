<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('tipo')=='admin')
		{ 
			$lista=$this->estudiante_model->listaestudiantes();
			$data['estudiantes']=$lista;
			
			$this->load->view('inc/header');
			$this->load->view('lista',$data);
			$this->load->view('inc/footer');
		}
		else
		{
			redirect('usuarios/panel','refresh');
		}
	}

	public function guest()
	{
		if($this->session->userdata('tipo')=='guest')
		{ 
			$this->load->view('inc/header');
			$this->load->view('panelguest');
			$this->load->view('inc/footer');
		}
		
	}

	public function agregar()
	{
		$this->load->view('inc/header');
		$this->load->view('formulario');
		$this->load->view('inc/footer');
	}


	public function agregarbd()
	{
		$data['nombre']=$_POST['nombre'];
		$data['primerApellido']=$_POST['primerapellido'];
		$data['segundoApellido']=$_POST['segundoapellido'];


		$lista=$this->estudiante_model->agregarestudiante($data);
		redirect('estudiante/index','refresh');
	}

	public function eliminarbd()
	{
		$idestudiante=$_POST['idestudiante'];
		$this->estudiante_model->eliminarestudiante($idestudiante);
		redirect('estudiante/index','refresh');
	}

	public function modificar()
	{
		$idestudiante=$_POST['idestudiante'];
		$data['infoestudiante']=$this->estudiante_model->recuperarestudiante($idestudiante);

		$this->load->view('inc/header');
		$this->load->view('formulariomodificar',$data);
		$this->load->view('inc/footer');
	}

	public function modificarbd() {
		$idestudiante = $_POST['idestudiante'];
		$data['nombre'] = $_POST['nombre'];
		$data['primerApellido'] = $_POST['primerapellido'];
		$data['segundoApellido'] = $_POST['segundoapellido'];
		$nombrearchivo = $idestudiante . ".jpg";
	
		$config['upload_path'] = './uploads/';
		$config['file_name'] = $nombrearchivo;
	
		// Elimina el archivo si ya existe
		$direccion = "./uploads/" . $nombrearchivo;
		if (file_exists($direccion)) {
			unlink($direccion);
		}
	
		$config['allowed_types'] = 'jpg';
		$this->load->library('upload', $config);
	
		if (!$this->upload->do_upload('userfile')) {
			// Si hay un error de carga, no lo agregamos al array $data
			$error = $this->upload->display_errors();
			$this->session->set_flashdata('error', $error);  // Puedes usar este error en la vista si es necesario
		} else {
			$data['foto'] = $nombrearchivo;  // Solo agregar 'foto' si la carga fue exitosa
		}
	
		$this->estudiante_model->modificarestudiante($idestudiante, $data);
	
		// Redireccionar con un mensaje de éxito
		$this->session->set_flashdata('success', 'Estudiante modificado correctamente.');
		redirect('estudiante/index', 'refresh');
	}
	

	public function deshabilitarbd()
	{
		$idestudiante=$_POST['idestudiante'];
		$data['habilitado']='0';

		$this->estudiante_model->modificarestudiante($idestudiante,$data);
		redirect('estudiante/index','refresh');
	}

	public function deshabilitados()
	{
		$lista=$this->estudiante_model->listaestudiantesdeshabilitados();
		$data['estudiantes']=$lista;
		

		$this->load->view('inc/header');
		$this->load->view('listadeshabilitados',$data);
		$this->load->view('inc/footer');
	}

	public function habilitarbd()
	{
		$idestudiante=$_POST['idestudiante'];
		$data['habilitado']='1';

		$this->estudiante_model->modificarestudiante($idestudiante,$data);
		redirect('estudiante/deshabilitados','refresh');
	}

	public function listapdf()
	{
		if($this->session->userdata('tipo')=='admin')
		{ 
			$lista=$this->estudiante_model->listaestudiantes();
			$lista=$lista->result();

			$this->pdf=new Pdf();
			$this->pdf->AddPage();
			$this->pdf->AliasNbPages();
			$this->pdf->SetTitle("Lista de estudiantes");
			$this->pdf->SetLeftMargin(15);
			$this->pdf->SetRightMargin(15);
			$this->pdf->SetFillColor(210,210,210);
			$this->pdf->SetFont('Arial','B',11);

			$this->pdf->Cell(30);

			$this->pdf->Cell(120,10,'LISTA DE ESTUDIANTES',0,0,'C',1);
			$this->pdf->Ln(10);

			$this->pdf->Cell(9,5,'No.','TBLR',0,'L',0);
			$this->pdf->Cell(50,5,'NOMBRE','TBLR',0,'L',0);
			$this->pdf->Cell(50,5,'PRIMER APELLIDO','TBLR',0,'L',0);
			$this->pdf->Cell(50,5,'SEGUNDO APELLIDO','TBLR',0,'L',0);
			$this->pdf->Cell(15,5,'NOTA','TBLR',0,'L',0);
			
			$this->pdf->Ln(5);

			$this->pdf->SetFont('Arial','',9);
			$num=1;
			foreach ($lista as $row) {
				$nombre=$row->nombre;
				$primerapellido=$row->primerApellido;
				$segundoapellido=$row->segundoApellido;
				$nota=$row->nota;
				$this->pdf->Cell(9,5,$num,'TBLR',0,'L',0);
				$this->pdf->Cell(50,5,$nombre,'TBLR',0,'L',0);
				$this->pdf->Cell(50,5,$primerapellido,'TBLR',0,'L',0);
				$this->pdf->Cell(50,5,$segundoapellido,'TBLR',0,'L',0);
				$this->pdf->Cell(15,5,$nota,'TBLR',0,'L',0);
				$this->pdf->Ln(5);
				$num++;
			}

			$this->pdf->Output("listaestudiantes.pdf","I");

		}
		else
		{
			redirect('usuarios/panel','refresh');
		}
	}
}
