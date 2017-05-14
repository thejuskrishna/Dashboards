<?php
class signup_mod extends CI_Model
{
	public function login($username,$password)
	{
        $res=$this->db->query('SELECT username, password FROM login');
        foreach($res->result() as $row) 
        {
        	
        	if($row->username==$username)
        		if($row->password==$password)
        			return true;
        }
        return false;
	}

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
    public function update_flag($username)
   {

   	  $this->db->query('UPDATE login SET flogin= \'0\' WHERE username =\''.$username.'\'');
   	  
   }
}

