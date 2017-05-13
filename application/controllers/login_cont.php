<?php
class login_cont extends CI_Controller {
public function index()
	{
		
		$this->load->view('login');
	}
	public function checklogin()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','callback_verifyuser|required');
		if($this->form_validation->run()==false)
		{
			$this->load->view('login');
		}
		
		else
		{	
			$ret=$this->login_mod->check($username);
			
			echo $ret->username;
			echo $ret->password;
			echo $ret->flogin;
			if($ret->flogin==1)
			{
				$ret=$this->login_mod->update_flag($username);
			}
			

			//redirect(base_url().'index.php/studentsearch/asdfg/'.$usid);	
		}
		
	}
	public function verifyuser()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('login_mod');
		
		if($this->login_mod->login($username,$password)==true)
		{
			return true;
				
		}
		
		else
		{
			$this->form_validation->set_message('verifyuser','incorrect password or username');
			
			return false;
		}
	}
	public function loginview()
	{
		
		$this->load->view('login');
		
	}
}
?>