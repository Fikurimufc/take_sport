<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


		function __construct()	{
	parent::__construct();
	$this->load->model('Login_model','',TRUE);
	$this->load->helper('url');
	$this->load->library('session');
	}

	public function index()
	{
	   $this->load->library('form_validation');
	   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[5]');
	   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
	
		if ($this->form_validation->run() == FALSE){
			redirect('Login');
		}
		else{
			redirect('Content','refresh');
		}
		
	}//close function index


	public function check_database($password){
		$username 	= $this->input->post('username');
		$result 	= $this->Login_model->login($username, $password); 

		if ($result)
		{  //Create session
			$session = array();
			foreach ($result as $row) 

			{
				$session = array(
				
				'uid' 		=> $row->uid,
				'username' 	=> $row->username,
				'password'	=> $row->password,
				'name'		=> $row->name,
				'email'		=> $row->email,
				'register' 	=> $row->register,
				'gender'	=> $row->gender,
				'status'	=> $row->status,
				'img' 		=> $row->img);
				$this->session->set_userdata('logged_in', $session);
			}
			return TRUE;
		}
		else{
			 $this->form_validation->set_message('check_database', 'Invalid username or password');
	     	return FALSE;
		}
	
	}//close function
}//class auth
