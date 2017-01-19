<?php
require_once "usuariosdao.php";

class TipoUsuario extends UsuariosDao{
	const DB_TABLA = "relacion_usuarios_tipos";
	const DB_TABLA_INDICE = "usuarios_id";
	public $id;
	public $usuarios_id;
	public $usuarios_tipos_id;

	public function poblarPropiedades(array $datos){
		$this->id = isset($datos['id']) ? trim($datos['id']) : 0;
		$this->usuarios_id = isset($datos['usuarios_id']) ? MD5(trim($datos['usuarios_id'])) : 0;		
		$this->usuarios_tipos_id = isset($datos['usuarios_tipos_id']) ? trim($datos['usuarios_tipos_id']) : 0;
		//$this->creado_en = isset($datos['creado_en']) ? trim($datos['creado_en']) : date('Y-m-d G:i:s');
	}


	public function getArregloPropiedades(){
		$arregloTemporal = array();
		foreach ($this as $indice => $valor) {
				$arregloTemporal[$indice] = $valor;
		}	
		return $arregloTemporal;
	}
}