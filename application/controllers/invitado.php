<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Invitado extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
   $this->load->model('tipousuario');
   $this->load->helper(array('nuevo_helper','url'));
 }

 public function index()
 {
   //Verifica atraves de un Helper Si la Ssion no a Expirado o Esta Cerrada
   checkSession();

   if($this->session->userdata('logged_in'))
   {
       $session_data = $this->session->userdata('logged_in');
       $data['email'] = $session_data['email'];
       $id_usuario = $session_data['id'];

       $buscarTipoUsuario = $this->tipousuario->getTipoUsuario($id_usuario);
       $arregloTipoUsuario = $buscarTipoUsuario->result_array();
       $alumnosPorGrupo = $this->devuelveArregloSimple($arregloTipoUsuario);

      if($alumnosPorGrupo[0] == 1){
          $this->load->view('autorizar/administrador', $data);
      }
      else{
          $this->load->view('autorizar/invitado', $data);
      }
  }
    else{
           //If no session, redirect to login page
           redirect('autorizar/index', 'refresh');
  }
}  

 public function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('invitado', 'refresh');
 }


   private function devuelveArregloSimple(array $arreglo){
    $arregloResultado = array();
    foreach ($arreglo as $indice => $valor) {
      $arregloResultado[] = $valor['usuarios_tipos_id'];
    }

    return $arregloResultado;

  }

}

?>