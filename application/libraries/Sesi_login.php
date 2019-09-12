<?php 

class Sesi_login{

public function __construct()
{
		// Assign the CodeIgniter super-object
		$this->CI =& get_instance();
}

public function log_session(){
		$login_status=$this->CI->session->userdata('login_auth');
		if($login_status == TRUE){
			return true;
		} else {
			return false;
		}
}

public function usr_log_session(){
	$login_status_usr=$this->CI->session->userdata('usr_sesi_login');
	if($login_status_usr == TRUE){
		return true;
	} else {
		return false;
	}
}

public function hitung_nonaktivasi(){
		$query = $this->CI->db->query("SELECT pid FROM hrd_employee WHERE is_active='0'");
       $jum=$query->num_rows();
	    return $jum;
}

}

