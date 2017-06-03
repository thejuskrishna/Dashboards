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
	public function template()
	{
			$this->load->view('template');
	}
	public function homeview()
	{
		if($this->session->has_userdata('username'))
		{
			$username = $this->session->userdata('username');
			$dbs = $this->home_mod->viewdb($username);
			$this->session->set_flashdata('dbs',$dbs);
			$this->load->view('basic_form');
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
			redirect(base_url().'index.php/home_cont/homeview');
		}
		else
		{
			$username = $this->session->userdata('username');
			$dbs = $this->home_mod->viewdb($username);
			$this->session->set_flashdata('dbs',$dbs);
			$this->load->view('connectdb');
		}

	}
	public function viewdatabase()
	{
		if($this->session->has_userdata('username'))
		{
			$username = $this->session->userdata('username');
			$dbs = $this->home_mod->viewdb($username);
			$this->session->set_userdata('dbs',$dbs);
			$this->load->view('viewdb');
		}
		else
		{
			redirect(base_url().'index.php/login_cont/loginview');
		}
		
		
		/*
		$config['hostname'] = 'localhost';
		$config['username'] = 'myusername';
		$config['password'] = 'mypassword';
		$config['database'] = 'mydatabase';
		$config['dbdriver'] = 'mysqli';
		$config['dbprefix'] = '';
		$config['pconnect'] = FALSE;
		$config['db_debug'] = TRUE;
		$config['cache_on'] = FALSE;
		$config['cachedir'] = '';
		$config['char_set'] = 'utf8';
		$config['dbcollat'] = 'utf8_general_ci';
		$this->load->database($config);
		*/
	}
	public function deletedb($id)
	{
		if($this->session->has_userdata('username'))
		{
			$username = $this->session->userdata('username');
			$this->home_mod->deletedb($id,$username);
			$dbs = $this->home_mod->viewdb($username);
			$this->session->set_flashdata('dbs',$dbs);
			$this->load->view('viewdb');
			
		}
		else
		{
			redirect(base_url().'index.php/login_cont/loginview');
		}
		
	}
	public function diplaydb($id)
	{
		if($this->session->has_userdata('username'))
		{
			$username = $this->session->userdata('username');
			

		      $dbinfo = $this->home_mod->getentry($id);
		      $this->load->library('encryption');
		      $pwd = $this->encryption->decrypt($dbinfo->password);
		      $this->dynamicDB = array(
								   'hostname' => $dbinfo->host,
						            'username' => $dbinfo->username,
						            'password' => $pwd,
						            'database' => $dbinfo->data_base,
						            'dbdriver' => 'mysqli',
						            'dbprefix' => '',
						            'pconnect' => FALSE,
						            'db_debug' => TRUE
								  
								  );
		    $this->session->set_userdata('dynamicDB',$this->dynamicDB);
		    $this->load->model('home_mod');
 			$table_data = $this->home_mod->select($this->dynamicDB,123);
 			$this->session->set_flashdata('table_data',$table_data);
			$this->load->view('yourdb');
			
		}
		else
		{
			redirect(base_url().'index.php/login_cont/loginview');
		}
		
	}
	public function checkconnect()
	{
		$this->form_validation->set_rules('host','DB host','required');
		$this->form_validation->set_rules('username','DB username','required');
		//$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('database','DB database','required');
		if($this->form_validation->run()==false)
		{
			$username = $this->session->userdata('username');
			$dbs = $this->home_mod->viewdb($username);
			$this->session->set_flashdata('dbs',$dbs);
			$this->load->view('connectdb');
		}
		else
		{
			$dbusername=$this->input->post('username');
			$host=$this->input->post('host');
			$password=$this->input->post('password');
			$database=$this->input->post('database');
			$username=$this->session->userdata('username');
			$this->load->library('encryption');
			$epassword=$this->encryption->encrypt($password);
			
			$data = array(
				'user'=>$username,
				'username' => $dbusername,				
				'password' => $epassword,
				'host' => $host,
				'data_base' => $database
				);
			
			$this->home_mod->createdb($data);
			redirect(base_url().'index.php/home_cont/homeview');
		}
	}
	public function database_delete($data_base)
	{
		$this->dynamicDB = $this->session->userdata('dynamicDB');
		$this->home_mod->database_delete($this->dynamicDB,$data_base);
	}
	public function table_delete($table)
	{
		$this->dynamicDB = $this->session->userdata('dynamicDB');
		$this->home_mod->table_delete($this->dynamicDB,$table);
	}
	public function field_delete($table,$field)
	{
		$this->dynamicDB = $this->session->userdata('dynamicDB');
		$this->home_mod->field_delete($this->dynamicDB,$table,$field);
	}
	public function field_add($table)
	{
		$field = array(
        'fnme' => array('type' => 'INT','constraint' => 5,'unsigned' => TRUE),
        'blog_title' => array('type' => 'VARCHAR','constraint' => '100','unique' => TRUE),
        'blog_author' => array('type' =>'VARCHAR','constraint' => '100','default' => 'King of Town'),
        'blog_description' => array('type' => 'TEXT','null' => TRUE)
        );
		$this->dynamicDB = $this->session->userdata('dynamicDB');
		$this->home_mod->field_add($this->dynamicDB,$table,$field);
	}

}
?>
