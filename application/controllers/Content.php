<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('content_main');

	}
	
	public function index()
	{
		
		$this->load->view('dashboard/asset.php');
		$this->load->view('dashboard/vw_side.php');
		$this->load->view('dashboard/vw_content.php');
	}

	public function save_content()
	{
		$about 				= $this->input->post('about');
		$content_product 	= $this->input->post('content_product');
		$content_contact 	= $this->input->post('content_contact');
		$this->content_main->posting($about, $content_product, $content_contact);
		redirect('Content');
	}

	
}
