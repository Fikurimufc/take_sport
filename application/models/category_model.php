<?php

/**
* 
*/
class Category_model extends CI_Model
{
	
	function __construct()
	{
		
	}

	function insert_category($type_id, $category_name){
		$this->db->set('type_id',$type_id);
		$this->db->set('category_name',$category_name);
		$this->db->insert('tbl_category');
	}

	function get_category(){
		$this->db->select('a.id_category, a.type_id, a.category_name, c.type_name');
		$this->db->from('tbl_category as a, tbl_type_product as c');
		$this->db->where('c.id_type = a.type_id');
		$this->db->where('type_id',$type_id);
		return $this->db->get();	
	}


}

?>