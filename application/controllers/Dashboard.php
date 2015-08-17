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
			$this->load->model('Product_model');
			$this->load->model('User_model');
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
	//halaman kategori
	

	//Halaman produk
	public function createProduct(){
		//$data['option_kategori'] = $this->category_model->list_category();
		$arr_user = $this->session->userdata('logged_in');
        $uid = array_shift($arr_user);
        $data['get_uid'] = $this->User_model->get_user($uid);
		$data['type'] = $this->tipe_model->list_type();
		$this->load->view('dashboard/asset');
		$this->load->view('dashboard/vw_side');
		$this->load->view('dashboard/vw_product',$data);
	}

	function save_product(){

		$code_product = $this->input->post('kode_produk',TRUE);
		$type_id 	  = $this->input->post('type',TRUE);
		$label 		  = $this->input->post('label',TRUE);
		$uid 	  	  = $this->input->post('uid',TRUE);
		$product_name = $this->input->post('product_name',TRUE);
		$price 		  = $this->input->post('harga',TRUE);
		$stock 		  = $this->input->post('stock',TRUE);
		$desc 		  = $this->input->post('desc',TRUE);

		$config['upload_path'] 		= './asset/img/product';
		$config['allowed_types'] 	= 'gif|jpg|png';
		$config['max_size'] 		= '2024';
		$config['max_width']  		= '0';
        $config['max_height']  		= '0';
        $config['encrypt_name']  	= 'TRUE';
        $this->load->library('upload', $config);

        $this->form_validation->set_rules('kode_produk','Kode Produk','required|min_length[5]|max_length[6]|is_unique[tbl_product.product_code]');
        $this->form_validation->set_rules('label','Label','required');
        $this->form_validation->set_rules('product_name','Nama produk','required');
        $this->form_validation->set_rules('harga','Harga','required');
        $this->form_validation->set_rules('desc','Deskripsi','required');
        
        if ($this->form_validation->run() == FALSE){
        	
        	$this->load->view('dashboard/asset');
        	$this->load->view('dashboard/vw_side');
        	$this->load->view('dashboard/vw_product',$data);
        }else{
        	if (!$this->upload->do_upload()) {
        		$error = array('error'=>$this->upload->display_errors());
        	}else{
        		$data = array('upload_data'=> $this->upload->data());
        	}
        		$data = $this->upload->data();
        		$uploadedFiles[1] = $data;

        		foreach ($uploadedFiles as $row ) {
        			$image = $row['file_name'];
        		}
        		$arr_user = $this->session->userdata('logged_in');
        		$uid = array_shift($arr_user);
        		
        		$this->Product_model->insert_product($code_product,$type_id,$label,$uid,$product_name,$price,$stock,$image,$desc);
        }
		
	}

	function manage_product(){
		$user = $this->session->userdata('logged_in');
		$uid  = array_shift($user);
		$data['get_product'] = $this->Product_model->list_product($uid);
		
		$this->load->view('dashboard/vw_manageProduct',$data);
	}


	public function logout(){
		$this->session->unset_userdata('logged_in');
		redirect('main');
	}
	
}
