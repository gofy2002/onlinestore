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
																'tabindex' => '1',
																'placeholder' => 'Nombres',
																'value' => isset($datosPost['nombre']) ? $datosPost['nombre'] : null,

															),
											'apellidos' => array('name' => 'apellidos',
																'id' => 'apellidos',
																'class' => 'form-control input-lg',
																'required' => 'required',
																'data-error' => 'Dato requerido',
																'tabindex' => '2',
																'placeholder' => 'Apellidos',
																'value' => isset($datosPost['apellidos']) ? $datosPost['apellidos'] : null,

															),			
											'email' => array('name' => 'email',
																'id' => 'email',
																'type'=>'email',
																'placeholder'=>'Campo Email',
																'tabindex' => '3',
																'class' => 'form-control input-lg',
																'required' => 'required',
																'data-error' => 'Dato requerido',
																'value' => isset($datosPost['email']) ? $datosPost['email'] : null,

															),																							
											'telefono' => array('name' => 'telefono',
																'id' => 'telefono',
																'class' => 'form-control input-lg',
																'data-error' => 'Dato requerido',
																'tabindex' => '4',
																'placeholder' => 'Telefono',
																'value' => isset($datosPost['telefono']) ? $datosPost['telefono'] : null,

															),	

											'cumpleanios' => array('name' => 'cumpleanios',
																'id' => 'cumpleanios',
																'class' => 'form-control input-lg',
																'required' => 'required',
																'data-error' => 'Dato requerido',
																'tabindex' => '5',
																'placeholder' => 'Fecha Nacimiento',
																'value' => isset($datosPost['cumpleanios']) ? $datosPost['cumpleanios'] : null,

															),	

											'password' => array('name' => 'password',
																'id' => 'password',
																'type'=>'password',
																'placeholder'=>'Password',
																'tabindex' => '6',
																'class' => 'form-control input-lg',
																'required' => 'required',				
																'data-error' => 'Dato requerido',
																'value' => isset($datosPost['password']) ? $datosPost['password'] : null,

															),	


											'password_confirmation' => array('name' => 'password_confirmation',
																'id' => 'password_confirmation',
																'type'=>'password',
																'placeholder'=>'Confirme Password',
																'tabindex' => '7',
																'class' => 'form-control input-lg',
																'required' => 'required',				
																'data-error' => 'Dato requerido',
																'data-match-error' => 'Los passsword no coinciden',
																'data-match' => '#password',
																'value' => isset($datosPost['password']) ? $datosPost['password'] : null,

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