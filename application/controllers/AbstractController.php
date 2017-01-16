<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


abstract class AbstractController extends CI_Controller 
{
	protected $arregloPost;

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('html');


	}

	protected function is_post(){
		$tempArray = $this->input->post();

		if(empty($tempArray)){
			$this->arregloPost=array();
			return FALSE;
		}
		$this->arregloPost = $tempArray;
		return TRUE;
	}


	protected function formularioUsuarios(array $datosPost){
		$arregloCampoFormulario = array(
											'nombre' => array('name' => 'nombre',
																'id' => 'nombre',
																'class' => 'form-control input-lg',
																'required' => 'required',
																'data-error' => 'Dato requerido',
																'value' => isset($datosPost['nombre']) ? $datosPost['nombre'] : null,

															),
											'apellidos' => array('name' => 'apellidos',
																'id' => 'apellidos',
																'class' => 'form-control input-lg',
																'required' => 'required',
																'data-error' => 'Dato requerido',
																'value' => isset($datosPost['apellidos']) ? $datosPost['apellidos'] : null,

															),			
											'email' => array('name' => 'email',
																'id' => 'email',
																'type'=>'email',
																'placeholder'=>'Campo Email',
																'class' => 'form-control input-lg',
																'required' => 'required',
																'data-error' => 'Dato requerido',
																'value' => isset($datosPost['email']) ? $datosPost['email'] : null,

															),																							
											'telefono' => array('name' => 'telefono',
																'id' => 'telefono',
																'class' => 'form-control input-lg',
																'data-error' => 'Dato requerido',
																'value' => isset($datosPost['telefono']) ? $datosPost['telefono'] : null,

															),	
											'password' => array('name' => 'password',
																'id' => 'password',
																'type'=>'password',
																'placeholder'=>'Password',
																'class' => 'form-control input-lg',
																'required' => 'required',				
																'data-error' => 'Dato requerido',
																'value' => isset($datosPost['password']) ? $datosPost['password'] : null,

															),	

											'cumpleanios' => array('name' => 'cumpleanios',
																'id' => 'cumpleanios',
																'class' => 'form-control input-lg',
																'required' => 'required',
																'data-error' => 'Dato requerido',
																'value' => isset($datosPost['cumpleanios']) ? $datosPost['cumpleanios'] : null,

															),	

/**											'id' => array('name' => 'id',
																'id' => 'id',
																'class' => 'form-control input-lg',
																'required' => 'required',
																'data-error' => 'Dato requerido',
																'value' => isset($datosPost['id']) ? $datosPost['id'] : null,

															),	

**/
											'id' => isset($datosPost['id']) ? $datosPost['id']	: 0,																								

			);
		return $arregloCampoFormulario;
	}

}