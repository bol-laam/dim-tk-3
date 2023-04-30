<?php 

/**
 * M_login class is responsible for retrieving user status from a given table 
 * based on a specific set of conditions.
 */
class M_login extends CI_Model{	
	function status($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}
