<?php
	
class Product_model extends CI_Model{

	function list_type(){
		$this->db->select('*');
		$this->db->from('tbl_type_product');
		return $this->db->get();
	}

	function get_product(){
		$this->db->select('*');
		$this->db->from('tbl_product');
		return $this->db->get();
	}

	function product_category($type_id){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('type_id',$type_id);
		return $this->db->get();
	}

	function detail($code_product){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('product_code',$code_product);
		return $this->db->get();
	}


}
?>