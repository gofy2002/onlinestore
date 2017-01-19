<?php

require_once "modelobasicocrud.php";

class UsuariosDao extends ModeloBasicoCRUD{

	public function obtenerTodosRegistros(){
		$this->db->select('*');
		$this->db->from($this::DB_TABLA);
		$busqueda = $this->db->get();
		return $busqueda;

	}

	public function getTipoUsuario($usuarios_id){
		$this->db->select('*');
		$this->db->from($this::DB_TABLA);
		$this->db->where('usuarios_id', $usuarios_id);
		$query = $this->db->get();
		return $query;
	}
	
}