

<?php
Class UsuariosLogin extends CI_Model
{
 function login($email, $password)
 {
   $this->db->select('u.id, u.email, u.password');
   $this->db->from('usuarios u');
   //$this->db->join('relacion_usuarios_tipos r', 'u.id=r.usuarios_tipos_id');   
   $this->db->where('u.email', $email);
   $this->db->where('u.password', MD5($password));

   $this->db->limit(1);


   $query = $this->db->get();

   if($query->num_rows() == 1)
   {
     return $query->result();

   }
   else
   {
     return false;
   }
 }
}
?>
