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
	public function dummy()
	{
			$this->load->view('dummy');
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
			$this->session->set_userdata('id',$id);
			
		}
		else
		{
			redirect(base_url().'index.php/login_cont/loginview');
		}
		
	}
	public function displaydb($id)
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
			$this->session->set_userdata('id',$id);
			$this->load->view('dashboarddb');
			
			
		}
		else
		{
			redirect(base_url().'index.php/login_cont/loginview');
		}
	}
	public function show_graph($table,$id)
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
 			$field_data = $this->home_mod->select_int_tables($this->dynamicDB,$table);
 			$contents = $this->home_mod->select_all($this->dynamicDB,$table);
 			$this->session->set_flashdata('field_data',$field_data);
 			$this->session->set_flashdata('table',$table);
 			$this->session->set_flashdata('contents',$contents);
			$this->session->set_userdata('id',$id);
			$this->load->view('graphplot');
			
		}
		else
		{
			redirect(base_url().'index.php/login_cont/loginview');
		}
	}
	public function insertfield($table)
	{
		$this->session->set_flashdata('table',$table);
		$this->load->view('insert');
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
	public function table_delete($table,$id)
	{
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
		//$this->dynamicDB = $this->session->userdata('dynamicDB');
		$this->home_mod->table_delete($this->dynamicDB,$table);
		redirect(base_url().'index.php/home_cont/diplaydb/'.$id);
	}
	public function field_delete($id,$table,$field)
	{	
	$dbinfo = $this->home_mod->getentry($id);
    $this->load->library('encryption');
    $pwd = $this->encryption->decrypt($dbinfo->password);
    //echo $dbinfo->data_base;
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
		$this->home_mod->field_delete($this->dynamicDB,$table,$field);
		redirect(base_url().'index.php/home_cont/diplaydb/'.$id);
	}
	public function field_add($table,$id)
	{
	   
        $name=$this->input->post('name');
        $length=$this->input->post('length');
        $type=$this->input->post('type');
        echo $name.$type;
        $field = array(
        	$name => array('type' => $type,'constraint'=>$length)
        	);
       /*'blog_title' => array('type' => 'VARCHAR','constraint' => '100','unique' => TRUE),
        'blog_author' => array('type' =>'VARCHAR','constraint' => '100','default' => 'King of Town'),
        'blog_description' => array('type' => 'TEXT','null' => TRUE)*/
        

        

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
		//$this->dynamicDB = $this->session->userdata('dynamicDB');
		$this->home_mod->field_add($this->dynamicDB,$table,$field);
		redirect(base_url().'index.php/home_cont/diplaydb/'.$id);

	}

}
?>
