<?php
class signup_cont extends CI_Controller {
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
		
		$password=$this->input->post('password');
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('username','username','callback_checkusername|required');
		
		$this->form_validation->set_rules('pass1','password','required');
		$this->form_validation->set_rules('pass1','password','matches[pass1]|required');
		$this->form_validation->set_rules('email','email id','valid_email|required');
		if($this->form_validation->run()==false)
		{
			$this->load->view('signup');
		}
		
		else
		{	
			//$ret=$this->signup_mod->check($username);
			
			
			echo "succ";
			//redirect(base_url().'index.php/studentsearch/asdfg/'.$usid);	
		}
		
	}
	public function checkusername()
	{
		$username=$this->input->post('username');
		$this->load->model('signup_mod');
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
