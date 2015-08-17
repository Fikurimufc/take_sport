<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	function insert_product($code_product,$type_id,$label,$uid,$product_name,$price,$stock,$image,$desc){
		$this->db->set('product_code',$code_product);
		$this->db->set('type_id',$type_id);
		$this->db->set('label',$label);
		$this->db->set('user_id',$uid);
		$this->db->set('product_name',$product_name);
		$this->db->set('price',$price);
		$this->db->set('stock',$stock);
		$this->db->set('img',$image);
		$this->db->set('description',$desc);
		$this->db->insert('tbl_product');
	}

	function detail() {
		$this->db->select('product_code');
		$this->db->from('tbl_product');
		$this->db->where('product_code');
		return $this->db->get();
	}
	

	function list_product($uid){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('user_id',$uid);
		return $this->db->get();
	}

	function get_product($code_product){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('product_code',$code_product);
		return $this->db->get();
	}

}