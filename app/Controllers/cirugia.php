<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Mexico_City'); 
class cirugia extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('modelcirugias');

    }
    
    
    public function index(){
        
        $this->Seguridad();
        $this->load->view('header');
        $data['alumno'] = $this->model_alumnos->ListarAlumnos();         
        $this->load->view('view_alumnos', $data);
        $this->load->view('footer');
	}
    
    public function nuevo(){	      
    
        $this->Seguridad();
		$hoy = date("Y-m-d H:i:s");
				
		$this->ValidaCampos();
		if($this->form_validation->run() == TRUE){

			$VerifyExist = $this->model_alumnos->ExisteAlumno($this->input->post("dni"));
			if($VerifyExist == 0){
			
				$AlumnoInsertar = array(
					'nombre' => $this->input->post('nombre'),
					'direccion' => $this->input->post('direccion'),
					'dni' => $this->input->post('dni'),
					'mail' => $this->input->post('mail'),
                    'telefono' => $this->input->post('telefono')
				);
				$this->model_alumnos->SaveAlumno($AlumnoInsertar);
				redirect("alumnos?save=true");
			}else{

				$this->session->set_flashdata('msg', '<div class="alert alert-error text-center">Alumno Duplicad</div>');
				$this->load->view('header');
				$this->load->view('view_nuevo_alumno');
				$this->load->view('footer');
			}
		}else{

			$this->load->view('header');
			$this->load->view('view_nuevo_alumno');
			$this->load->view('footer');
		}
    }
	
	function ValidaCampos(){
	
		$this->form_validation->set_rules("nombre", "Nombre", "trim|required");
		$this->form_validation->set_rules("direccion", "Direccion", "trim|required");
		$this->form_validation->set_rules("dni", "DNI", "trim|required|integer");
		$this->form_validation->set_rules("mail", "Mail", "trim|required");
        $this->form_validation->set_rules("telefono", "Telefono", "trim|required|integer");
	}

    public function editar($id = NULL){
		
		if ($id == NULL OR !is_numeric($id)){
			$data['Modulo']  = "Alumno";
			$data['Error']   = "Error: El ID <strong>".$id."</strong> No es Valido, Verifica tu Busqueda !!!!!!!";
			$this->load->view('header');
			$this->load->view('view_errors',$data);
			$this->load->view('footer');
			return;
		}
		if ($this->input->post()) {
			
			$this->ValidaCampos();
				
			if ($this->form_validation->run() == TRUE){
				$datos_update = $this->input->post();
				$id_insertado = $this->model_alumnos->edit($datos_update,$id);
				redirect('alumnos?update=true');
				
			}else{
				$this->Nuevo();
			}
			
		}else{
			$data['datos_alumnos'] = $this->model_alumnos->BuscarID($id);
			if (empty($data['datos_alumnos'])){
				$data['Modulo']  = "Alumno";
				$data['Error']   = "Error: El ID <strong>".$id."</strong> No es Valido, Verifica tu Busqueda !!!!!!!";
				$this->load->view('header');
				$this->load->view('view_errors',$data);
				$this->load->view('footer');
			}else{
				$this->load->view('header');
				$this->load->view('view_editar_alumno',$data);
				$this->load->view('footer');
			}
		}
		
	}

	public function eliminar($id = NULL){
		if ($id == NULL OR !is_numeric($id)){
			$data['Modulo']  = "Alumno";
			$data['Error']   = "Error: El ID <strong>".$id."</strong> No es Valido, Verifica tu Busqueda !!!!!!!";
			$this->load->view('header');
			$this->load->view('view_errors',$data);
			$this->load->view('footer');
			return;
		}
		if ($this->input->post()) {
			$id_eliminar = $this->input->post('id_alumno');
			$boton       = strtoupper($this->input->post('btn_guardar'));
			if($boton=="NO"){
				redirect("alumnos");
			}else{
                $this->model_alumnos->Eliminar($id_eliminar);
				redirect("alumnos?delete=true");
			}
		}else{
			$data['datos_alumnos'] = $this->model_alumnos->BuscarID($id);
			if (empty($data['datos_alumnos'])){
				$data['Modulo']  = "Alumno";
				$data['Error']   = "Error: El ID <strong>".$id."</strong> No es Valido, Verifica tu Busqueda !!!!!!!";
				$this->load->view('header');
				$this->load->view('view_errors',$data);
				$this->load->view('footer');
			}else{
				$this->load->view('header');
				$this->load->view('view_delete_alumno',$data);
				$this->load->view('footer');
			}
		}
	}
}
?>