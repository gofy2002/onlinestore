<?php
require_once "modelobasicocrud.php";

class RelacionUsuariosTipos extends ModeloBasicoCRUD{
	const DB_TABLA = "relacion_usuarios_tipos";
	const DB_TABLA_INDICE = "id";
	public $id;
	public $usuarios_id;
	public $usuarios_tipos_id;

	public function poblarPropiedades($id = 0){
		$this->usuarios_id = $id;
		$this->usuarios_tipos_id = 2;		
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