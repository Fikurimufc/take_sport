<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
	function __construct(){
		parent::__construct();
		$this->load->model('Shop/product_model');
	}
	public function index()
	{
		$type_id = $this->input->get('id_type');
		if (!$type_id){
		$data['product'] = $this->product_model->get_product();
		}else{
		$data['product'] = $this->product_model->product_category($type_id);
		}
		$data['list'] = $this->product_model->list_type();
		$this->load->view('shop/asset');
		$this->load->view('shop/vw_body',$data);
		$this->load->view('shop/vw_product');
		$this->load->view('shop/vw_footer');
	}

	public function detail_product(){
		$code_product = $this->input->get('product_code');
		$data['product'] 	  = $this->product_model->detail($code_product);
		$data['list'] = $this->product_model->list_type();
		$this->load->view('shop/vw_detail',$data);		
	}

}
