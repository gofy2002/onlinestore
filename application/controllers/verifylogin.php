<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 public function __construct()
 {
     parent::__construct();
     $this->load->model('usuarioslogin','',TRUE);
     $this->load->model('tipousuario');
 }

 public function index()
 {
     //This method will have the credentials validation
     $this->load->library('form_validation');
     $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
     $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

     if($this->form_validation->run() == FALSE)
     {
       //Field validation failed.  User redirected to login page
        $this->load->view('autorizar/index');
     }
     else
     {
       //Go to private area
       redirect('Invitado', 'refresh');
     }

 }

 public function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $email = $this->input->post('email');
   //query the database
   $result = $this->usuarioslogin->login($email, $password);


   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'password' => $row->password,
         'email' => $row->email
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'email or password Incorrecto');
     return false;
   }
 }



}
?>