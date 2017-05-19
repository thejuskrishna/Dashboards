<?php
class home_cont extends CI_Controller
{
	 function __construct() 
    {
        parent::__construct();
        
        $this->load->model('home_mod');
    }
	public function index()
	{
		
	}
	public function homeview()
	{
		if($this->session->has_userdata('username'))
		{
			$this->load->view('home');
		}
		else
		{
			redirect(base_url().'index.php/login_cont/loginview');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'index.php/login_cont/loginview');
	}
	public function connectdatabase()
	{
		if(!$this->session->has_userdata('username'))
		{
			redirect(base_url().'index.php/login_cont/loginview');
		}
		else
		{
			$this->load->view('connectdb');
		}

	}
	public function checkconnect()
	{
		$this->form_validation->set_rules('host','DB host','required');
		$this->form_validation->set_rules('username','DB username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('database','DB database','required');
		if($this->form_validation->run()==false)
		{
			$this->load->view('connectdb');
		}
		else
		{
			$dbusername=$this->input->post('username');
			$host=$this->input->post('host');
			$password=$this->input->post('password');
			$database=$this->input->post('database');
			$username=$this->session->userdata('username');


			$salt = hash('sha256', uniqid(mt_rand(), true) . "somesalt" . strtolower($dbusername));
			$hash = $salt . $password;
			$hash = hash('sha256', $hash);
			$password=$salt.$hash;
			
			$data = array(
				'user'=>$username,
				'username' => $dbusername,				
				'password' => $password,
				'host' => $host,
				'database' => $database
				);
			
			$this->home_mod->createdb($data);
			echo "database created";
			$this->load->view('connectdb');
			sleep(3);
			redirect(base_url().'index.php/home_cont/homeview');
		}
	}
}
?>
