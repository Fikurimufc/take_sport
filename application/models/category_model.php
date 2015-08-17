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


	function list_category(){
		$id_type = $this->input->post('id_type');
		$result = array();
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('type_id', $id_type);
		$this->db->order_by('category_name');
		$array = $this->db->get();
		foreach ($array->result() as $row){
			$result[0] = 'pilih kategori';
			$result[$row->id_category] = $row->category_name;
		}
		return $result;
	}


}

?>