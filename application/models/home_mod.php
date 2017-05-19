<?php
class home_mod extends CI_Model
{
	
   
  
    public function createdb($data)
   {
     $this->db->insert('database', $data);

   }
   
}
?>
