<?php
class signup_mod extends CI_Model
{
	
    public function check($username)
   {
   	  $query=$this->db->query('SELECT username FROM login WHERE username =\''.$username.'\'');
      if ($query->num_rows() != 0) 
      {
        return false;
      }
      else 
   	  return true;

   }
    public function createuser($data)
   {
     $this->db->insert('login', $data);

   }
   
}
?>
