<?php
class login_cont extends CI_Controller {
	 function __construct() 
    {
        parent::__construct();
        
        $this->load->model('login_mod');
    }
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
			
			if($ret->flogin==1)
			{
				$ret=$this->login_mod->update_flag($username);
				$this->session->set_userdata('username',$username);
				$this->session->set_userdata('password',$password);
				$this->load->view('firstlogin');
			}
			

			//redirect(base_url().'index.php/login_cont/checklogin/');	
		}
		
	}
	public function resetpassword()
	{
		$username = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		echo $username;
		echo $password;
		//$this->login_mod->updatepassword($username,$password);
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