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
		$this->form_validation->set_rules('email','email id','valid_email|required');
		if($this->form_validation->run()==false)
		{
			$this->load->view('signup');
		}
		
		else
		{	
			$username=$this->input->post('username');
			$password=random_string('alnum',10);
			$email=$this->input->post('email');
			require 'PHPMailer/PHPMailerAutoload.php';

			$mail = new PHPMailer;

			$mail->isSMTP();                                   // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                            // Enable SMTP authentication
			$mail->Username = 'test7mailer@gmail.com';          // SMTP username
			$mail->Password = 'qwertyuiop10'; // SMTP password
			$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                 // TCP port to connect to

			$mail->setFrom('test7mailer@gmail.com', 'ashik');
			$mail->addReplyTo('test7mailer@gmail.com', 'ashik');
			$mail->addAddress($email);   // Add a recipient
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');

			$mail->isHTML(true);  // Set email format to HTML

			$bodyContent = '<h1>Welcome to Dashboards</h1>';
			$bodyContent .= '<p>your login details are <br>username : <b>'.$username.'</b><br>password : <b>'.$password.'</b></p>';

			$mail->Subject = 'Sign up to Dashboards';
			$mail->Body    = $bodyContent;
			echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded');
			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			}


			$salt = hash('sha256', uniqid(mt_rand(), true) . "somesalt" . strtolower($username));
			$hash = $salt . $password;
			$hash = hash('sha256', $hash);
			$password=$salt.$hash;
			
			$data = array(
				'username' => $username,				
				'password' => $password,//$this->encrypt->encode($this->input->post('pass1'),'dilawz'),
				'email' => $email,
				'flogin' => 1
				);
			
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
