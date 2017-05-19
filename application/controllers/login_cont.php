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
			$this->session->set_userdata('username',$username);
			$this->session->set_userdata('password',$password);
			
			if($ret->flogin==1)
			{
				
				
				$this->load->view('firstlogin');
			}
			

			redirect(base_url().'index.php/home_cont/homeview/');	
		}
		
	}
	public function resetpassword()
	{
		$username = $this->session->userdata('username');
		$password = $this->session->userdata('password');

		$newpass=$this->input->post('password');
		$this->form_validation->set_rules('password','password','callback_checkpass|required');
		
		
		if($this->form_validation->run()==false)
		{

			$this->load->view('firstlogin');
	    }
		else
		{

		$salt = hash('sha256', uniqid(mt_rand(), true) . "somesalt" . strtolower($username));
		$hash = $salt . $newpass;
		$hash = hash('sha256', $hash);
		$newpass=$salt.$hash;

		$this->login_mod->updatepassword($username,$newpass);
		$this->login_mod->update_flag($username);
		$this->session->set_userdata('password',$newpass);
		//redirect()
	    }
	}
	public function checkpass()
	{

		$newpass=$this->input->post('password');
		$confirm=$this->input->post('confirm');
		if($confirm==$newpass)
			return true;
		else
		{
			return false;
			$this->form_validation->set_message('checkpass','password dont match');
		}	

	
	}
	public function verifyuser()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$ret=$this->login_mod->check($username);
		$dbpassword=$ret->password;
		$salt = substr($dbpassword, 0, 64);

		$hash = $salt . $password;
		$hash = hash('sha256', $hash);
		$hash = $salt . $hash;
		
		if($dbpassword==$hash)
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