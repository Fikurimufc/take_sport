<?php
/**
* 
*/
class Content_main extends CI_Model
{
	


 function posting($about, $content_product, $content_contact)
	{
		
		$this->db->set('about',$about);
		$this->db->set('content_product',$content_product);
		$this->db->set('content_contact',$content_contact);
		$this->db->insert('tbl_content');
		//$query = $this->db->query('UPDATE tbl_content SET about='$about', content_product='$content_product', 
				 //content_contact='$contact'');
	}

 	function get_content(){
		$this->db->select('*');
		$this->db->from('tbl_content');
		return $this->db->get();
	}

	function content($about){
		$this->db->select('*');
		$this->db->from('tbl_content');
		$this->db->where('about',$about);
		return $this->db->get();
	}

	function update_content($about, $content_product, $content_contact){
		$this->about = $about;
		$this->content_product = $content_product;
		$this->content_contact = $content_contact;
		$this->db->update('tbl_content',$this, array('about'=>$about,
													'content_product'=>$content_product,
													'content_contact'=>$content_contact));
	}


}
?>