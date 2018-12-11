<?php 
 
class M_register extends CI_Model{	

	function inputdata($data){
		$this->db->insert('tb_user', $data);
		
	}
	
}
?>
