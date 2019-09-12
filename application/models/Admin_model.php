<?php
class Admin_model extends CI_Model  {
			
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


public function getCodePid($table,$kode_table){

	$date_now='20190223110604';//date("YmdHis");
		$query = $this->db->query("select RIGHT(pid,3) as kd_max from $table WHERE MAX(MID(pid,6,14))=='$date_now'");
		$kd = "";
		if($query->num_rows()>0)
		{
			foreach($query->result() as $data)
			{
				$tmp = ((int)$data->kd_max)+1;
				$kd = sprintf("%03s", $tmp);
			}
		}
		else
		{
			$kd = "001";
		}
		$kd_time=substr(date("YmdHis"), 0, -3);
		return $kode_table.$kd.$kd_time;
	}


public function getCodetable($table,$kode_table,$increement){
		$query = $this->db->query("select MAX(RIGHT(pid,3)) as kd_max from $table");
		$kd = "";
		if($query->num_rows()>0)
		{
			foreach($query->result() as $data)
			{
				// $tmp = ((int)$data->kd_max)+1;
				$tmp = ((int)$data->kd_max)+$increement;
				$kd = sprintf("%03s", $tmp);
			}
		}
		else
		{
			$kd = "001";
		}
		$kd_time=date("YmdHis");
		return $kode_table.$kd_time.$kd;
	}
public function getCodetable2($table,$kode_table,$increement){
		$query = $this->db->query("select MAX(RIGHT(pid,3)) as kd_max from $table");
		$kd = "";
		if($query->num_rows()>0)
		{
			foreach($query->result() as $data)
			{
				// $tmp = ((int)$data->kd_max)+1;
				$tmp = ((int)$data->kd_max)+$increement;
				$kd = sprintf("%03s", $tmp);
			}
		}
		else
		{
			$kd = "001";
		}
		$kd_time=date("Ymd");
		return $kode_table.$kd_time.$kd;
	}
public function getCodetable_copy($table,$kode_table){
		$query = $this->db->query("select MAX(RIGHT(pid,3)) as kd_max from $table");
		$kd = "";
		if($query->num_rows()>0)
		{
			foreach($query->result() as $data)
			{
				$tmp = ((int)$data->kd_max)+2;
				$kd = sprintf("%03s", $tmp);
			}
		}
		else
		{
			$kd = "001";
		}
		$kd_time=date("YmdHis");
		return $kode_table.$kd_time.$kd;
	}
public function getCodetable_copy2($table,$kode_table){
		$query = $this->db->query("select MAX(RIGHT(pid,3)) as kd_max from $table");
		$kd = "";
		if($query->num_rows()>0)
		{
			foreach($query->result() as $data)
			{
				$tmp = ((int)$data->kd_max)+2;
				$kd = sprintf("%03s", $tmp);
			}
		}
		else
		{
			$kd = "001";
		}
		$kd_time=date("Ymd");
		return $kode_table.$kd_time.$kd;
	}


public function getCodeAccount(){
	$query = $this->db->query("select MAX(RIGHT(pid,5)) as kd_max from ms_account");
	$kd = "";
	if($query->num_rows()>0)
	{
		foreach($query->result() as $data)
		{
			$tmp = ((int)$data->kd_max)+1;
			$kd = sprintf("%05s", $tmp);
		}
	}
	else
	{
		$kd = "00001";
	}
	return "AC-".date('Hisdmy').'-'.$kd;
}
public function getCodeEmail(){
	$query = $this->db->query("select MAX(RIGHT(pid,5)) as kd_max from ms_account");
	$kd = "";
	if($query->num_rows()>0)
	{
		foreach($query->result() as $data)
		{
			$tmp = ((int)$data->kd_max)+1;
			$kd = sprintf("%05s", $tmp);
		}
	}
	else
	{
		$kd = "00001";
	}
	return "AD-".date('Hisdmy').'-'.$kd;
}

	public function get_by_id($id,$nmtabel,$key){
		$this->db->from($nmtabel);
		$this->db->where($key,$id);
		$query = $this->db->get();
		return $query->row();
	}

    function getCustom($kolom,$table,$where) {
		$query=$this->db->query("select ".$kolom." from ".$table." $where");		
		return $query->result();
 	}


	function getMaxId($table,$kolom) 
	{
		//$query=$this->db->query("select MAX(Id) AS maxi from ".$table." $where");	
		$maxid = $this->db->query('SELECT MAX('.$kolom.') AS maxid FROM '.$table.'')->row()->maxid;
		return $maxid;
 	}
	
	public function save($nmtabel,$data)
	{
		$this->db->insert($nmtabel, $data);
		return $this->db->insert_id();
	}

function update($table,$kolom,$id,$data)
	    {
	      $this->db->where($kolom,$id);
	       $ubah= $this->db->update($table,$data);
			return $ubah;
			}
	
		function query_customes($myquery)
	    {
				$query = $this->db->query($myquery);
				return $query;
			}
			
function update_views_count($id){
			$this->db->where('post_id', $id);
			$this->db->set('views', 'views+1', FALSE);
			$this->db->update('count_views');
}
function delete_data($table,$kolom,$id)
	{
		$this->db->where($kolom,$id);
		$this->db->delete($table);
	}

	



	//========================count record ========================
public function count_record($table,$where) {
      $query = $this->db->query("SELECT * FROM $table $where ");
	  return $query->num_rows(); 
    }
	//========================Get Header ========================
public function getDataCustom($kolom,$table,$where) {
      $query = $this->db->query("SELECT " .$kolom. " FROM $table $where ");
	 		return $query->result(); 
    }

  
 function update_user_online($table,$kolom,$id,$data)
	    {
	      $this->db->where($kolom,$id);
	       $ubah= $this->db->update($table,$data);
		   //$query = $this->db->query("update $table set last_active=date('Y-m-d H:i:s') where $kolom='$id'");
			return $ubah;
	    }
 function update_user_offline($table,$kolom,$id,$kolom2,$id2,$data)
	    {
	      $this->db->where($kolom,$id);
		  $this->db->where($kolom2,$id2);
	       $ubah= $this->db->update($table,$data);
		   //$query = $this->db->query("update $table set last_active=date('Y-m-d H:i:s') where $kolom='$id'");
			return $ubah;
	    }


function select_items($kolom,$table,$id){
	$this->db->select($kolom);
	$this->db->from($table);
	$this->db->where($id);
	// $this->db->like('name', $id);
	return $this->db->get()->result();
}

function testing_sql_injection($kolom,$table,$where,$variable) {
		$sql="select $kolom from $table $where";
		$query=$this->db->query($sql, $variable);	
		return $query->result();
 	}
 function testing_sql_injection2222($table,$name,$isocode) {
		$sql="select * from $table where name=? and iso_code=?";
		$query=$this->db->query($sql, array($name, $isocode));	
		return $query->result();
 	}

 function cek_login($kolom,$table,$where,$variable) {
		$sql="select $kolom from $table $where";
		$query=$this->db->query($sql, $variable);	
		return $query->result();

 	}


public function save_no_duplicat($englishName,$country,$code,$aliases,$latitude,$label,$value,$longitude)
	{
		$query=$this->db->query("insert into data_freightos (englishName,country,code,aliases,latitude,label,value,longitude) 
		values('$englishName','$country','$code','$aliases','$latitude','$label','$value','$longitude') on DUPLICATE KEY UPDATE code=code");		
		return $query;
    }
    



}