<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('content_main');
	}
	public function index()
	{
		$data['content'] = $this->content_main->get_content();	
		$this->load->view('vw_header');
		$this->load->view('vw_body');
		$this->load->view('body',$data);
		$this->load->view('vw_footer');
	}
}
