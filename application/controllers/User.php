<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in')){redirect('main','refresh');}
		$this->load->model('User_model','',TRUE);
			}
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
	public function index()
	{
		
		$this->load->view('dashboard/asset');
		$this->load->view('dashboard/vw_side');
		$this->load->view('dashboard/vw_register');
		
	}

	public function manage_user(){
		$this->load->view('dashboard/asset');
		$this->load->view('dashboard/vw_side');
		$this->load->view('dashboard/vw_category');
	}

	public function register()
	{
		
		$username 	= $this->input->post('username',TRUE);
		$password 	= $this->input->post('password',TRUE);
		$name 		= $this->input->post('name',TRUE);
		$email		= $this->input->post('email',TRUE);
		$gender 	= $this->input->post('gender',TRUE);
		$status 	= $this->input->post('status',TRUE);
		
		//upload image
		$config['upload_path'] 		= './asset/img/user/';
		$config['allowed_types'] 	= 'gif|jpg|png';
        $config['max_size']			= '2024';
        $config['max_width']  		= '0';
        $config['max_height']  		= '0';
        $config['encrypt_name']  	= 'TRUE';
        $this->load->library('upload', $config);
        	
		$this->form_validation->set_rules('username','Username','required|min_length[5]');
		$this->form_validation->set_rules('password','Password','required|min_length[5]');
		$this->form_validation->set_rules('name','Name','required|min_length[4]');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('status','Status','required');
		
		//form validation 	
		if ($this->form_validation->run() == FALSE)
		{
			//redirect to dashboard
				$this->load->view('dashboard/asset');
				$this->load->view('dashboard/vw_side');
				$this->load->view('dashboard/vw_register');
		}else{
			if (!$this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
			}else{
				$data = array('upload_data' => $this->upload->data());
			}
			 	$data = $this->upload->data();
              	$uploadedFiles[1] = $data;

              foreach ($uploadedFiles as $value) {
              	$image = $value['file_name'];}
              	$this->User_model->insert_user($username,$password,$name,$email,$gender,$status,$image);
              	//$str = $this->db->last_query();
              	//echo $str
          } 

	}

			public function profile(){
				$arr_user = $this->session->userdata('logged_in');
				$uid = array_shift($arr_user);
				$data['profile'] = $this->User_model->get_user($uid);
				$this->load->view('dashboard/asset');
				$this->load->view('dashboard/vw_side');
				$this->load->view('dashboard/vw_profil',$data);
			}
}
