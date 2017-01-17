<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once "AbstractController.php";

class UsuariosController extends AbstractController {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('usuarios');
		$this->load->model('relacionusuariostipos');
	}


	/**
	 * Metodo para Crear Usuario para Login
	 */

	public function crear(){
		if($this->is_post()){
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
			$this->form_validation->set_rules('nombre', 'Nombre', 'trim|callback_name_check');
			$this->form_validation->set_rules('apellidos', 'Apellidos', 'trim|callback_apellidos_check');
			$this->form_validation->set_rules('email', 'Email', 'trim|callback_email_check');			
			$this->form_validation->set_rules('cumpleanios', 'Cumpleaños', 'trim|callback_cumpleanios_check');
			$this->form_validation->set_rules('telefono', 'Telefono', 'trim|callback_telefono_check');
			$this->form_validation->set_rules('password', 'Password', 'trim|callback_password_check');

			if ($this->form_validation->run() == TRUE){
				$this->usuarios->poblarPropiedades($this->arregloPost);
				$this->usuarios->grabar();

				$id_actual = $this->usuarios->getUltimoId();
				$this->relacionusuariostipos->poblarPropiedades($id_actual);

				$this->relacionusuariostipos->grabar();
				redirect('autorizar');
			}

		}

		$datos = $this->formularioUsuarios($this->arregloPost);
		$datos['titulo'] = "Crear Usuario";
		$datos['subtitulo'] = "Registrar Usurio";
		$this->load->view('usuarios/crear', $datos);
	}



	public function name_check($datosPost){
		if(empty($datosPost)){
			$this->form_validation->set_message("name_check", "El nombre es requerido", 'nombre');
			return FALSE;
		}
		return TRUE;
	}

	public function apellidos_check($datosPost){
		if(empty($datosPost)){
			$this->form_validation->set_message("apellidos_check", "Los Apellidos es requerido", 'apellidos');
			return FALSE;
		}
		return TRUE;
	}

	public function email_check($datosPost){
		if(empty($datosPost)){
			$this->form_validation->set_message("email_check", "El Email es requerido", 'email');
			return FALSE;
		}
		return TRUE;
	}

	public function cumpleanios_check($datosPost){
		if(empty($datosPost)){
			$this->form_validation->set_message("cumpleanios_check", "La Fecha de Nacimiento es requerido", 'cumpleanios');
			return FALSE;
		}
		return TRUE;
	}

	public function telefono_check($datosPost){
		if(empty($datosPost)){
			$this->form_validation->set_message("telefono_check", "El Telefono es requerido", 'telefono');
			return FALSE;
		}
		return TRUE;
	}

	public function password_check($datosPost){
		if(empty($datosPost)){
			$this->form_validation->set_message("password_check", "El Password es requerido", 'password');
			return FALSE;
		}
		return TRUE;
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */