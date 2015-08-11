<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


		function __construct()
		{
			parent::__construct();
			if (!$this->session->userdata('logged_in')){redirect('main','refresh');}
			$this->load->model('content_main');	
			$this->load->model('tipe_model');
			$this->load->model('category_model');
			$this->load->database();
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
		$this->load->view('dashboard/vw_category');
	}

	public function content()
	{

		$this->load->view('dashboard/asset');
		$this->load->view('dashboard/vw_side');
		$this->load->view('dashboard/vw_content');
	}

	public function save_content()
	{
		$about 				= $_POST['about'];
		$content_product 	= $_POST['content_product'];
		$content_contact 	= $_POST['content_contact'];
		$this->content_main->update_content($about, $content_product, $content_contact);
		redirect('Content');
	}




	public function type(){
		$data['list_type'] = $this->tipe_model->get_type();
		$this->load->view('dashboard/asset');
		$this->load->view('dashboard/vw_side');
		$this->load->view('dashboard/vw_type_product',$data);
	}

	public function insert_type(){
		$type = $_POST['tipe'];
		$this->tipe_model->insert_type($type);
		redirect('Dashboard/type');
	}

	public function category(){
		//For pagination
		/*$config['base_url'] 	= 'http://localhost/take_sport/Dashboard/type';
		$config['total_rows'] 	=  */
		$data['list_category'] =
		$data['list_type'] = $this->tipe_model->list_type();
		$this->load->view('dashboard/asset');
		$this->load->view('dashboard/vw_side');
		$this->load->view('dashboard/vw_category',$data);
	}

	public function insert_category(){
		$type_id = $this->input->post('type_id');
		$category_name = $this->input->post('category');
		$this->category_model->insert_category($type_id,$category_name);
		redirect('Dashboard/category');
	}

	public function createProduct(){
		$this->load->view('dashboard/asset');
		$this->load->view('dashboard/vw_side');
		$this->load->view('dashboard/vw_product');
	}

	function save_product(){

	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		redirect('main');
	}
	
}
