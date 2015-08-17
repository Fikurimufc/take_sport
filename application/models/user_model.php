<?php
/**
* 
*/
class User_model extends CI_Model
{
	


 function insert_user($username,$password,$name,$email,$gender,$status,$image)
	{
		$password = md5($password);
		$this->db->set('username',$username);
		$this->db->set('password',$password);
		$this->db->set('name',$name);
		$this->db->set('email',$email);
		$this->db->set('gender',$gender);
		$this->db->set('status',$status);
		$this->db->set('img',$image);
		//$this->db->set('about',$about);
		$this->db->insert('tbl_user');
		//$query = $this->db->query('UPDATE tbl_content SET about='$about', content_product='$content_product', 
				 //content_contact='$contact'');
	}

	function get_user($uid){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('uid',$uid);
		return $this->db->get();
	}

	function update_profil(){
		
	}

 	
}
?>