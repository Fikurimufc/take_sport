<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Dashboard_product extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$this->load->view('dashboard/asset');
		$this->load->view('dashboard/vw_side');
		$this->load->view('dashboard/vw_manage_product');
	}
}
?>