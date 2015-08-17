<?php

/**
* 
*/
class Tipe_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function insert_type($type){
		$this->db->set('name_type',$type);
		$this->db->insert('tbl_type_product');
	}
	function get_type(){
		$this->db->select('*');
		$this->db->from('tbl_type_product');
		return $this->db->get();
	}

	function list_type(){
		$result = array();
		$this->db->select('*');
		$this->db->from('tbl_type_product');
		$this->db->order_by('name_type','ASC');
		$array_keys_value = $this->db->get();

		foreach ($array_keys_value->result() as $value) {
			$result[0] = '-Pilih kategori-';
			$result[$value->id_type] = $value->name_type;
		}
		return $result;
		

	}
}


?>