<?php
class login_mod extends CI_Model
{
	public function login($username,$password)
	{

        $res=$this->db->query('SELECT username, password FROM login');
        foreach($res->result() as $row) 
        {
        	
        	if($row->username==$username)
          { 
            //$depass=$this->encrypt->decode($row->password);
        		if($row->password==$password)
        			return true;
          }
        }
        return false;
	}

    public function check($username)
   {
   	  $res=$this->db->query('SELECT username, password,flogin FROM login WHERE username =\''.$username.'\'');
   	  return $res->row();

   }
    public function update_flag($username)
   {

   	  $this->db->query('UPDATE login SET flogin= 0 WHERE username =\''.$username.'\'');
   	  
   }
   public function updatepassword($username,$newpass)
   {
    //$newpass = $this->encrypt->encode($newpass);
    $this->db->query('UPDATE login SET password=\''.$newpass.'\' WHERE username =\''.$username.'\'');
   }

}

?>

