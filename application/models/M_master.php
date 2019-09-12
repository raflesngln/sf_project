<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->db=$this->load->database('dbusers', true);
		date_default_timezone_set('Asia/Jakarta');
	}
	public function getCodeCode($table,$kode_table,$kolom){

		$date_now=date("Ymdhi");
			$query = $this->db->query("select RIGHT(id,3) as kd_max from ms_companies WHERE MID($kolom,8,12)='$date_now'");
			
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
			$kd_time=date("Ymdhi");
			// return $kode_table.$kd;
			return $kode_table.$kd_time.$kd;
		}

// ======================================THIS FOR SIMPE JOIN=========================================
private function _get_datatables_query($nm_coloum,$orderby,$where){
	$i = 0;
	foreach ($nm_coloum as $item) 
	{
		if($_POST['search']['value'])
			($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
		$column[$i] = $item;
		$i++;
	}
	
	if(isset($_POST['order']))
	{
			$n=0;
		$sort=$_POST['order'];
		foreach($sort as $i =>$val){
		 $this->db->order_by($column[$_POST['order'][$n]['column']], $_POST['order'][$n]['dir']);   
		 $n++;
		}
		//$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
	}
	else if(isset($orderby))
	{
		$order = $orderby;
		$this->db->order_by(key($order), $order[key($order)]);
	}
	if($where != ''){
	$this->db->where($where); 
	}
}

function get_datatables($selected,$nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2){
	$this->db->select($selected);
	$this->db->from($nm_tabel);
	$this->db->join($nm_tabel2,$kolom1.'='.$kolom2,'LEFT');
	$this->_get_datatables_query($nm_coloum,$orderby,$where);

	if($_POST['length'] != -1)
	$this->db->limit($_POST['length'], $_POST['start']);
	$query = $this->db->get();
	return $query->result();
}

public function count_all($nm_tabel,$nm_coloum,$nm_tabel2,$kolom1,$kolom2){
	$this->db->from($nm_tabel);
	$this->db->join($nm_tabel2,$kolom1.'='.$kolom2,'LEFT');
	$this->db->where("a.is_active='1'");
	return $this->db->count_all_results();
}

public function count_filtered($nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2){
	$this->_get_datatables_query($nm_coloum,$orderby,$where);
	$this->db->from($nm_tabel);
	$this->db->join($nm_tabel2,$kolom1.'='.$kolom2,'LEFT');
	return $this->db->count_all_results();
}
	

//================FOR DATATABLES MULTI JOIN =====================
private function _get_datatables_query2($nm_coloum,$orderby,$where){
		$i = 0;
		foreach ($nm_coloum as $item) 
		{
			if($_POST['search']['value'])
				($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
			$column[$i] = $item;
			$i++;
		}
		
		if(isset($_POST['order']))
		{
				$n=0;
            $sort=$_POST['order'];
            foreach($sort as $i =>$val){
             $this->db->order_by($column[$_POST['order'][$n]['column']], $_POST['order'][$n]['dir']);   
             $n++;
            }
			//$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else if(isset($orderby))
		{
			$order = $orderby;
			$this->db->order_by(key($order), $order[key($order)]);
		}
		if($where != ''){
        $this->db->where($where); 
		}
}
// ============================company===============================
function get_data_company($selected,$nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2){
		$this->db->select($selected);
	    $this->db->from($nm_tabel);
		$this->db->join($nm_tabel2,$kolom1.'='.$kolom2,'LEFT');
		$this->_get_datatables_query2($nm_coloum,$orderby,$where);

		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
}

public function count_all_company($nm_tabel,$nm_coloum,$nm_tabel2,$kolom1,$kolom2){
		$this->db->from($nm_tabel);
		$this->db->join($nm_tabel2,$kolom1.'='.$kolom2,'LEFT');
		return $this->db->count_all_results();
}

public function count_filter_company($nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2){
		$this->_get_datatables_query2($nm_coloum,$orderby,$where);
        $this->db->from($nm_tabel);
		$this->db->join($nm_tabel2,$kolom1.'='.$kolom2,'LEFT');
		return $this->db->count_all_results();
}
// ============================accounts===============================
function get_data_accounts($selected,$nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2){
	$this->db->select($selected);
	$this->db->from($nm_tabel);
	$this->db->join($nm_tabel2,$kolom1.'='.$kolom2,'');
	$this->db->join('ms_group_account c','a.idgroup_user=c.pid','');

	$this->_get_datatables_query2($nm_coloum,$orderby,$where);

	if($_POST['length'] != -1)
	$this->db->limit($_POST['length'], $_POST['start']);
	$query = $this->db->get();
	return $query->result();
}

public function count_all_accounts($nm_tabel,$nm_coloum,$nm_tabel2,$kolom1,$kolom2){
	$this->db->from($nm_tabel);
	$this->db->join($nm_tabel2,$kolom1.'='.$kolom2,'');
	$this->db->join('ms_group_account c','a.idgroup_user=c.pid','');
	return $this->db->count_all_results();
}

public function count_filter_accounts($nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2){
	$this->_get_datatables_query2($nm_coloum,$orderby,$where);
	$this->db->from($nm_tabel);
	$this->db->join($nm_tabel2,$kolom1.'='.$kolom2,'');
	$this->db->join('ms_group_account c','a.idgroup_user=c.pid','');
	return $this->db->count_all_results();
}
//========================Others Query==================================
public function get_by_id($id,$nmtabel,$key)
	{
		$this->db->from($nmtabel);
		$this->db->where($key,$id);
		$query = $this->db->get();
		return $query->row();
	}
    function getCustom($kolom,$table,$where) 
	{
	$query=$this->db->query("select ".$kolom." from ".$table." $where");		
	return $query->result();
 	}
	public function save($nmtabel,$data) {
		$this->db->insert($nmtabel, $data);
		return $this->db->insert_id();
	}

	    function update($table,$kolom,$id,$data)
	    {
	      $this->db->where($kolom,$id);
	       $ubah= $this->db->update($table,$data);
			return $ubah;
	    }
function delete_data($table,$kolom,$id)
	{
		$this->db->where($kolom,$id);
		$this->db->delete($table);
	}
	function delete_multi_condition($table,$kolom_arr)
	{
		$this->db->where($kolom_arr);
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


	function get_by_date($date='')
    {
        // SELECT right(nik, 3) as nourut, nik, SUBSTR(nik,6,4) FROM `hrd_employee` WHERE SUBSTR(nik,6,4)='1809' order by nourut desc 
        $this->db->select('right(e.nik, 3) as nourut, e.nik, SUBSTR(e.nik,6,4) as date');
        $this->db->from('hrd_employee e');
        $this->db->where("SUBSTR(e.nik,6,4)=$date");
        $this->db->order_by("right(e.nik, 3) desc");
        $get = $this->db->get();

        return $get->row();
    }
  

}
