<?php
require_once "usuariosdao.php";

class Usuarios extends UsuariosDao{
	const DB_TABLA = "usuarios";
	const DB_TABLA_INDICE = "id";


	public $id;
	public $nombre;
	public $apellidos;
	public $fotografia;
	public $cumpleanios;
	public $telefono;
	public $password;	
	public $email;

	public function poblarPropiedades(array $datos){
		$this->id = isset($datos['id']) ? trim($datos['id']) : 0;
		$this->password = isset($datos['password']) ? MD5(trim($datos['password'])) : null;		
		$this->nombre = isset($datos['nombre']) ? trim($datos['nombre']) : null;
		$this->apellidos = isset($datos['apellidos']) ? trim($datos['apellidos']) : null;
		$this->fotografia = isset($datos['fotografia']) ? trim($datos['fotografia']) : null;
		$this->cumpleanios = isset($datos['cumpleanios']) ? trim($datos['cumpleanios']) : date('Y-m-d G:i:s');
		$this->telefono = isset($datos['telefono']) ? trim($datos['telefono']) : null;
		$this->email = isset($datos['email']) ? trim($datos['email']) : null;		
		$this->creado_en = isset($datos['creado_en']) ? trim($datos['creado_en']) : date('Y-m-d G:i:s');
	}


	public function getArregloPropiedades(){
		$arregloTemporal = array();
		
		foreach ($this as $indice => $valor) {
				$arregloTemporal[$indice] = $valor;
		}	
		
		return $arregloTemporal;
			
	}


}