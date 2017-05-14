<?php
class signup_cont extends CI_Controller {
	 function __construct() 
    {
        parent::__construct();
        
        $this->load->model('signup_mod');
    }
public function index()
	{
		
		//$this->load->view('login');
	}
	public function loadview()
	{
		$this->load->view('signup');
	}
	public function checksignup()
	{
		
		
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('username','username','callback_checkusername|required');
		
		$this->form_validation->set_rules('pass1','password','required');
		$this->form_validation->set_rules('pass2','retype password','matches[pass1]|required');
		$this->form_validation->set_rules('email','email id','valid_email|required');
		if($this->form_validation->run()==false)
		{
			$this->load->view('signup');
		}
		
		else
		{	
			
			$data = array(
				'username' => $this->input->post('username'),				
				'password' => $this->input->post('pass1'),
				'email' => $this->input->post('email'),
				'flogin' => 1
				);
			
			echo "succ";
			$this->signup_mod->createuser($data);
			redirect(base_url().'index.php/login_cont/loginview');	
		}
		
	}
	public function checkusername()
	{
		$username=$this->input->post('username');
		
		if($this->signup_mod->check($username))
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('checkusername','the username is not available');
			return false;
		}

	}
}
