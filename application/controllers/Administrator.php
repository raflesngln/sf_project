<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_master');
		if($this->sesi_login->log_session() !=TRUE)redirect('Login');
	}
	
	public function index(){
		$template = array(
			'lokasi' => 'administrator/dashboard',
			'menu'=>'order',
		 );
		$this->load->view('template/header',$template);
	}
	public function dashboard(){
		$template = array(
			'lokasi' => 'administrator/dashboard',
			'menu'=>'dashboard',
		 );
		$this->load->view('template/header',$template);
	}
	
	public function account(){
		$template = array(
			'lokasi' => 'administrator/v_account',
			'menu'=>'account',
		 );
		$this->load->view('template/header',$template);
	}
	public function manage_role(){
		$template = array(
			'lokasi' => 'administrator/v_role_group',
			'group_name'=>$this->M_master->getCustom('*',"ms_group_account",""),
			'menu'=>'account',
		 );
		$this->load->view('template/header',$template);
	}

	public function menu_user(){
		$template = array(
			'lokasi' => 'administrator/menu_user',
			'menu'=>'account',
		 );
		$this->load->view('template/header',$template);
	}
	public function group_user(){
		$template = array(
			'lokasi' => 'administrator/list_group_user',
			'menu'=>'account',
		 );
		$this->load->view('template/header',$template);
	}
	
	public function company(){
		$template = array(
			'lokasi' => 'administrator/v_company',
			'menu'=>'order',
		 );
		$this->load->view('template/header',$template);
	}
	public function role_group(){
		$template = array(
			'lokasi' => 'administrator/role_group',
			'menu'=>'role_group',
		 );
		$this->load->view('template/header',$template);
	}
	
public function list_accounts($search_name='',$date1='',$date2=''){
	$nm_tabel='ms_accounts a';
	$nm_tabel2='ms_companies b';
	$kolom1='a.id_company';
	$kolom2='b.id';
	// $kondisi=($where=='')?'':$where;

	if($search_name !=''){
		// $whername=" AND a.position_title like '%".$search_name."%' ";
		$kondisi=array('a.username LIKE'=>'%'.$search_name.'%','a.is_active >='=>'0');
	} else {
		$kondisi=array('a.is_active >='=>'0');
	}

	$selected='a.*,b.id as id_company,b.name as nm_company,c.GroupName';
	$nm_coloum= array('','a.pid','a.id','a.username','a.password','a.is_active','a.is_deleted','a.remarks','');
	$orderby= array('a.username' => 'ASC');
	// $where=  array('a.is_active'=>'1');
	$where=  $kondisi;
	$list = $this->M_master->get_data_accounts($selected,$nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2);
	$data = array();
	$no = $_POST['start'];
	foreach ($list as $datalist){
		$no++;
		$row = array(
		'no' => $no,
		'pid'=>$datalist->pid,
		'id'=>$datalist->id,
		'id'=>$datalist->id,
		'username'=>$datalist->username,
		'password'=>$datalist->password,
		'email'=>$datalist->email,
		'id_company'=>$datalist->id_company,
		'nm_company'=>$datalist->nm_company,
		'is_active'=>$datalist->is_active,
		'is_deleted'=>$datalist->is_deleted,
		'remarks'=>$datalist->remarks,
		'GroupName'=>$datalist->GroupName,
		'is_active'=>($datalist->is_active=='1')?'<span class="m-badge m-badge--primary m-badge--wide">Yes</span>':'<span class="m-badge m-badge--danger m-badge--wide">No</span>',
		'action' =>'<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn btn-success" onclick="edit_data(\''.$datalist->pid.'\')">
						<i class="m-menu__link-icon flaticon-edit" ></i>
					</label>
					<label class="btn btn-success" onclick="hapus_data(\''.$datalist->pid.'\')">
						<i class="m-menu__link-icon flaticon-delete" ></i>
					</label>
				</div>',
		);
		$data[] = $row;
	}
	$output = array(
					"draw" => $_POST['draw'],
					"recordsTotal" => $this->M_master->count_all_accounts($nm_tabel,$nm_coloum,$nm_tabel2,$kolom1,$kolom2),
					"recordsFiltered" => $this->M_master->count_filter_accounts($nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2),
					"data" => $data,
			);
	echo json_encode($output);
}
public function list_group_account($search_name='',$date1='',$date2=''){
	$nm_tabel='ms_group_account a';
	$nm_tabel2='ms_group_account b';
	$kolom1='a.pid';
	$kolom2='b.pid';
	// $kondisi=($where=='')?'':$where;

	if($search_name !=''){
		// $whername=" AND a.position_title like '%".$search_name."%' ";
		$kondisi=array('a.GroupName LIKE'=>'%'.$search_name.'%','a.is_active >='=>'0');
	} else {
		$kondisi=array('a.is_active >='=>'0');
	}

	$selected='*';
	$nm_coloum= array('','a.pid','a.GroupName','');
	$orderby= array('a.GroupName' => 'ASC');
	// $where=  array('a.is_active'=>'1');
	$where=  $kondisi;
	$list = $this->M_master->get_data_company($selected,$nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2);
	$data = array();
	$no = $_POST['start'];
	foreach ($list as $datalist){
		$no++;
		$row = array(
		'no' => $no,
		'pid'=>$datalist->pid,
		'GroupName'=>$datalist->GroupName,
		'CreatedBy'=>$datalist->CreatedBy,
		'remarks'=>$datalist->remarks,
		'is_active'=>($datalist->is_active=='1')?'<span class="m-badge m-badge--primary m-badge--wide">Yes</span>':'<span class="m-badge m-badge--danger m-badge--wide">No</span>',
		'action' =>'<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn btn-success" onclick="edit_data(\''.$datalist->pid.'\')">
						<i class="m-menu__link-icon flaticon-edit" ></i>
					</label>
					<label alt="is active" class="btn btn-success" onclick="nonactive_data(\''.$datalist->pid.'\',\''.$datalist->is_active.'\')">
						<i class="m-menu__link-icon flaticon-refresh" ></i>
					</label>
				</div>',
		);
		// \''.$datalist->pid.'\'
		$data[] = $row;
	}
	$output = array(
					"draw" => $_POST['draw'],
					"recordsTotal" => $this->M_master->count_all_company($nm_tabel,$nm_coloum,$nm_tabel2,$kolom1,$kolom2),
					"recordsFiltered" => $this->M_master->count_filter_company($nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2),
					"data" => $data,
			);
	echo json_encode($output);
}

public function list_menu($search_name='',$date1='',$date2=''){
	$nm_tabel='dyn_menu a';
	$nm_tabel2='dyn_menu b';
	$kolom1='a.id_menu';
	$kolom2='b.id_menu';
	// $kondisi=($where=='')?'':$where;

	if($search_name !=''){
		// $whername=" AND a.position_title like '%".$search_name."%' ";
		$kondisi=array('a.title LIKE'=>'%'.$search_name.'%','a.is_active >='=>'0');
	} else {
		$kondisi=array('a.is_active >='=>'0');
	}

	$selected='a.*';
	$nm_coloum= array('','a.id_menu','a.title','a.url','a.icon','a.parent','a.has_child','a.is_parent','');
	$orderby= array('a.title' => 'ASC');
	// $where=  array('a.is_active'=>'1');
	$where=  $kondisi;
	$list = $this->M_master->get_data_company($selected,$nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2);
	$data = array();
	$no = $_POST['start'];
	foreach ($list as $datalist){
		$no++;
		$row = array(
		'no' => $no,
		'id_menu'=>$datalist->id_menu,
		'title'=>$datalist->title,
		'url'=>$datalist->url,
		'icon'=>$datalist->icon,
		'parent'=>$datalist->parent,
		'has_child'=>$datalist->has_child,
		'is_parent'=>$datalist->is_parent,
		'is_active'=>$datalist->is_active,
		'is_deleted'=>$datalist->is_deleted,
		'description'=>$datalist->description,
		'action' =>'<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn btn-success" onclick="edit_data(\''.$datalist->id_menu.'\')">
						<i class="m-menu__link-icon flaticon-edit" ></i>
					</label>
					<label class="btn btn-success" onclick="hapus_data(\''.$datalist->id_menu.'\')">
						<i class="m-menu__link-icon flaticon-delete" ></i>
					</label>
				</div>',
		);
		$data[] = $row;
	}
	$output = array(
					"draw" => $_POST['draw'],
					"recordsTotal" => $this->M_master->count_all_company($nm_tabel,$nm_coloum,$nm_tabel2,$kolom1,$kolom2),
					"recordsFiltered" => $this->M_master->count_filter_company($nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2),
					"data" => $data,
			);
	echo json_encode($output);
}

// =========================================================
public function save_menu(){
	$id_menu=$this->input->post('id_menu');
	$query = $this->db->query("SELECT * FROM dyn_menu WHERE id_menu='$id_menu'");
	if($query->num_rows() <= 0){
		$rows = array(
					'id_menu'=>$this->input->post('id_menu'),
					'title'=>$this->input->post('title'),
					'url'=>$this->input->post('url'),
					'icon'=>$this->input->post('icon'),
					'parent'=>$this->input->post('parent'),
					'has_child'=>$this->input->post('has_child'),
					'is_parent'=>$this->input->post('is_parent'),
					'is_active'=>$this->input->post('is_active'),
					'is_deleted'=>$this->input->post('is_deleted'),
					'description'=>$this->input->post('description')
		);
			$simpan = $this->M_master->save('dyn_menu',$rows);
			echo json_encode(array('status'=>'success','code'=>'1','message'=>'Sukses simpan data baru !'));
		} else {
			echo json_encode(array('status'=>'failed','code'=>'0','message'=>'Kode ini sudah ada  !'));
		}
}
public function save_group_name(){
	$txt_group_name=$this->input->post('txt_group_name');
	$query = $this->db->query("SELECT * FROM ms_group_account WHERE GroupName='$txt_group_name'");
	if($query->num_rows() <= 0){
		$rows = array(
					'GroupName'=>$this->input->post('txt_group_name'),
					'remarks'=>$this->input->post('remarks'),
					'CreatedBy'=>$this->session->userdata('email')
		);
			$simpan = $this->M_master->save('ms_group_account',$rows);
			echo json_encode(array('status'=>'success','code'=>'1','message'=>'Success save data !'));
		} else {
			echo json_encode(array('status'=>'failed','code'=>'0','message'=>'This name has exists  !'));
		}
}
public function detail_group_account(){
	$pid=$this->input->post('pid');
	$result=$this->M_master->getCustom('*',"ms_group_account a",
		"WHERE a.pid='$pid'");
	$row=[];
	foreach($result as $list){
		$list=array(
			'pid'=>$list->pid,
			'GroupName'=>$list->GroupName,
			'remarks'=>$list->remarks,
			'is_active'=>$list->is_active,
		);
		$row[]=$list;
	} 
	echo json_encode(array('status'=>'success','code'=>'1','listdata'=>$row));
}

public function detail_menu(){
		$id_menu=$this->input->post('id_menu');
		$result=$this->M_master->getCustom('*',"dyn_menu a",
			"WHERE a.id_menu='$id_menu'");
		$row=[];
		foreach($result as $list){
			$list=array(
				'id_menu'=>$list->id_menu,
				'title'=>$list->title,
				'url'=>$list->url,
				'icon'=>$list->icon,
				'parent'=>$list->parent,
				'has_child'=>$list->has_child,
				'is_parent'=>$list->is_parent,
				'is_active'=>$list->is_active,
				'is_deleted'=>$list->is_deleted,
				'description'=>$list->description
			);
			$row[]=$list;
	} 
		echo json_encode(array('status'=>'success','code'=>'1','listdata'=>$row));
}
function update_menu(){
	$id_menu=$this->input->post('id_menu');
	// $id=$this->session->userdata('id_session');
	// $username=$this->session->userdata('username');

	$result=$this->M_master->getCustom('*',"dyn_menu",
		"WHERE id_menu='$id_menu'");
	if($result){
		$ubah = array(
			'id_menu'=>$this->input->post('id_menu'),
			'title'=>$this->input->post('title'),
			'url'=>$this->input->post('url'),
			'icon'=>$this->input->post('icon'),
			'parent'=>$this->input->post('parent'),
			'has_child'=>$this->input->post('has_child'),
			'is_parent'=>$this->input->post('is_parent'),
			'is_active'=>$this->input->post('is_active'),
			'is_deleted'=>$this->input->post('is_deleted'),
			'description'=>$this->input->post('description')
		);
		$updatedata = $this->M_master->update('dyn_menu','id_menu',$id_menu,$ubah);
		echo json_encode(array("status" => TRUE,"code"=>'1',"message"=>'Sukses update data!'));   
	}
}
function update_group_account(){
	$pid=$this->input->post('pid');

	$result=$this->M_master->getCustom('*',"ms_group_account",
		"WHERE pid='$pid'");
	if($result){
		$ubah = array(
			'GroupName'=>$this->input->post('txt_group_name'),
			'remarks'=>$this->input->post('remarks'),
		);
		$updatedata = $this->M_master->update('ms_group_account','pid',$pid,$ubah);
		echo json_encode(array("status" => TRUE,"code"=>'1',"message"=>'Sukses update data!'));   
	}
}
function nonactive_group_account(){
	$pid=$this->input->post('pid');
	$is_active=($this->input->post('is_active')=='1')?'0':'1';

	$result=$this->M_master->getCustom('*',"ms_group_account",
		"WHERE pid='$pid'");
	if($result){
		$ubah = array(
			'is_active'=>$is_active
		);
		$updatedata = $this->M_master->update('ms_group_account','pid',$pid,$ubah);
		echo json_encode(array("status" => TRUE,"code"=>'1',"message"=>'Sukses update data!'));   
	}
}

// =========================================================
public function save_accounts(){
	$kode_unik=$this->M_master->getCodeCode('ms_accounts','MSCOMP-','id');
	// echo $kodeTable;

	// $mirotime = round(microtime(true) * 10);
	// $kode='MSCOMP'.date('Ymd').$mirotime;
	$username=$this->input->post('username');
	$query = $this->db->query("SELECT * FROM ms_accounts WHERE username='$username'");
	if($query->num_rows() <= 0){
		$rows = array(
					'pid'=>$kode_unik,
					'id'=>$kode_unik,
					'username'=>$this->input->post('username'),
					'password'=>md5($this->input->post('password')),
					'email'=>$this->input->post('email'),
					'id_company'=>$this->input->post('company'),
					'is_active'=>$this->input->post('is_active'),
					'idgroup_user'=>$this->input->post('role_menu'),
					'remarks'=>$this->input->post('remarks')
		);
			$simpan = $this->M_master->save('ms_accounts',$rows);
			$this->send_email_activation($username);
			echo json_encode(array('status'=>'success','code'=>'1','message'=>'Sukses simpan account baru !, Segera aktivasi lewat email yang dikirim ke email terdaftar'));
		} else {
			echo json_encode(array('status'=>'failed','code'=>'0','message'=>'Nama ini sudah ada  !'));
		}
}

public function detail_accounts(){
		$pid=$this->input->post('pid');
		$result=$this->M_master->getCustom('*',"ms_accounts a",
			"WHERE a.pid='$pid'");
		$row=[];
		foreach($result as $list){
			$list=array(
				'pid'=>$list->pid,
				'id'=>$list->id,
				'username'=>$list->username,
				'password'=>$list->password,
				'id_company'=>$list->id_company,
				'email'=>$list->email,
				'is_active'=>$list->is_active,
				'remarks'=>$list->remarks,
			);
			$row[]=$list;
	} 
		echo json_encode(array('status'=>'success','code'=>'1','listdata'=>$row));
}
function update_accounts(){
	$pid=$this->input->post('pid');
	// $id=$this->session->userdata('id_session');
	// $username=$this->session->userdata('username');

	$result=$this->M_master->getCustom('*',"ms_accounts",
		"WHERE pid='$pid'");
	if($result){
		$ubah = array(
			'username'=>$this->input->post('username'),
			// 'password'=>$this->input->post('password'),
			'id_company'=>$this->input->post('company'),
			'is_active'=>$this->input->post('is_active'),
			'email'=>$this->input->post('email'),
			'remarks'=>$this->input->post('remarks')
		);
		$updatedata = $this->M_master->update('ms_accounts','pid',$pid,$ubah);
		echo json_encode(array("status" => TRUE,"code"=>'1',"message"=>'Sukses update data!'));   
	}
}

public function list_company($search_name='',$date1='',$date2=''){
	$nm_tabel='ms_companies a';
	$nm_tabel2='ms_companies b';
	$kolom1='a.pid';
	$kolom2='b.pid';
	// $kondisi=($where=='')?'':$where;

	if($search_name !=''){
		// $whername=" AND a.position_title like '%".$search_name."%' ";
		$kondisi=array('a.name LIKE'=>'%'.$search_name.'%','a.is_active'=>'1');
	} else {
		$kondisi=array('a.is_active'=>'1');
	}

	$selected='a.*';
	$nm_coloum= array('','a.pid,a.id','a.name','a.code','c.address','b.city','d.email','');
	$orderby= array('a.name' => 'ASC');
	// $where=  array('a.is_active'=>'1');
	$where=  $kondisi;
	$list = $this->M_master->get_data_company($selected,$nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2);
	$data = array();
	$no = $_POST['start'];
	foreach ($list as $datalist){
		$gbr=($datalist->image =='')?'user.png':$datalist->image;
		$no++;
		$row = array(
		'no' => $no,
		'pid'=>$datalist->pid,
		'id'=>$datalist->id,
		'name'=>$datalist->name,
		'code'=>$datalist->code,
		'address'=>$datalist->address,
		'city'=>$datalist->city,
		'email'=>$datalist->email,
		'phone'=>$datalist->phone,
		'image'=>$datalist->image,
		'is_active'=>$datalist->is_active,
		'is_deleted'=>$datalist->is_deleted,
		'remarks'=>$datalist->remarks,
		'created_by'=>$datalist->created_by,
		'created_at'=>$datalist->created_at,
		'created_ip'=>$datalist->created_ip,
		'created_device'=>$datalist->created_device,
		'modified_by'=>$datalist->modified_by,
		'modified_at'=>$datalist->modified_at,
		'modified_ip'=>$datalist->modified_ip,
		'modified_device'=>$datalist->modified_device,
		'action' =>'<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn btn-success" onclick="edit_data(\''.$datalist->pid.'\')">
						<i class="m-menu__link-icon flaticon-edit" ></i>
					</label>
					<label class="btn btn-success" onclick="hapus_data(\''.$datalist->pid.'\')">
						<i class="m-menu__link-icon flaticon-delete" ></i>
					</label>
				</div>',
		);
		$data[] = $row;
	}
	$output = array(
					"draw" => $_POST['draw'],
					"recordsTotal" => $this->M_master->count_all_company($nm_tabel,$nm_coloum,$nm_tabel2,$kolom1,$kolom2),
					"recordsFiltered" => $this->M_master->count_filter_company($nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2),
					"data" => $data,
			);
	echo json_encode($output);
}

public function save_company(){
	$kode_unik=$this->M_master->getCodeCode('ms_companies','MSCOMP-','id');
	// echo $kodeTable;

	// $mirotime = round(microtime(true) * 10);
	// $kode='MSCOMP'.date('Ymd').$mirotime;
	$company_name=$this->input->post('name');
	$query = $this->db->query("SELECT * FROM ms_companies WHERE name='$company_name'");
	if($query->num_rows() <= 0){
		$rows = array(
					'pid'=>$kode_unik,
					'id'=>$kode_unik,
					'name'=>$this->input->post('name'),
					'address'=>$this->input->post('address'),
					'city'=>$this->input->post('city'),
					'email'=>$this->input->post('email'),
					'phone'=>$this->input->post('phone'),
					'image'=>$this->input->post('phone'),
					'remarks'=>$this->input->post('remarks')
		);
			$simpan = $this->M_master->save('ms_companies',$rows);
			echo json_encode(array('status'=>'success','code'=>'1','message'=>'Sukses simpan data baru !'));
		} else {
			echo json_encode(array('status'=>'failed','code'=>'0','message'=>'Nama ini sudah ada  !'));
		}
}

public function detail_company(){
		$pid=$this->input->post('pid');
		$result=$this->M_master->getCustom('*',"ms_companies a",
			"WHERE a.pid='$pid'");
		$row=[];
		foreach($result as $list){
			$list=array(
				'pid'=>$list->pid,
				'id'=>$list->id,
				'name'=>$list->name,
				'address'=>$list->address,
				'city'=>$list->city,
				'email'=>$list->email,
				'phone'=>$list->phone,
				'image'=>$list->image,
				'remarks'=>$list->remarks
			);
			$row[]=$list;
	} 
		echo json_encode(array('status'=>'success','code'=>'1','listdata'=>$row));
}
function update_company(){
	$pid=$this->input->post('pid');
	// $id=$this->session->userdata('id_session');
	// $username=$this->session->userdata('username');

	$result=$this->M_master->getCustom('*',"ms_companies",
		"WHERE pid='$pid'");
	if($result){
		$ubah = array(
			'name'=>$this->input->post('name'),
			'address'=>$this->input->post('address'),
			'city'=>$this->input->post('city'),
			'email'=>$this->input->post('email'),
			'phone'=>$this->input->post('phone'),
			'image'=>$this->input->post('phone'),
			'remarks'=>$this->input->post('remarks')
		);
		$updatedata = $this->M_master->update('ms_companies','pid',$pid,$ubah);
		echo json_encode(array("status" => TRUE,"code"=>'1',"message"=>'Sukses update data!'));   
	}
}
function load_company(){
	$where=$this->criteria_search('name');

    $result=$this->M_master->getCustom('*',"ms_companies"," $where");
    $row=[];
    foreach($result as $list){
        $list=array(
            'id'=>$list->pid,
            'text'=>$list->name
        );
        $row[]=$list;
  } 
    echo json_encode($row);
}
function load_group_menu(){
    $result=$this->M_master->getCustom('*',"ms_group_account","");
    $row=[];
    foreach($result as $list){
        $list=array(
            'id'=>$list->pid,
            'text'=>$list->GroupName
        );
        $row[]=$list;
  } 
    echo json_encode($row);
}

function load_role_menu(){
	$where=$this->criteria_search('name');

    $result=$this->M_master->getCustom('*',"ms_group_account"," $where");
    $row=[];
    foreach($result as $list){
        $list=array(
            'id'=>$list->pid,
            'text'=>$list->GroupName
        );
        $row[]=$list;
  } 
    echo json_encode($row);
}
function load_menu_role(){
    $result=$this->M_master->getCustom('*',"dyn_menu","");
    $row=[];
    foreach($result as $list){
        $list=array(
            'id_menu'=>$list->id_menu,
            'title'=>$list->title
        );
        $row[]=$list;
  } 
	echo json_encode(array('status'=>'success','code'=>'1','message'=>'Sukses simpan data baru !','list'=>$row));
}

function load_menu_active(){
	$id_menu=$this->input->post('id_menu');
	$result=$this->M_master->getCustom('a.*,b.title',"tr_role_account a",
			"inner join dyn_menu b on a.id_menu=b.id_menu where a.id_group='$id_menu'");
    $row=[];
    foreach($result as $list){
        $list=array(
            'id_menu'=>$list->id_menu,
            'title'=>$list->title
        );
        $row[]=$list;
  } 
	echo json_encode(array('status'=>'success','code'=>'1','message'=>'Sukses simpan data baru !','list'=>$row));
}

public function add_menu_group(){
	$id_menu=$this->input->post('id_menu');
	$id_group=$this->input->post('id_group');
if($id_menu !='' && $id_group !=''){
			$query = $this->db->query("SELECT * FROM tr_role_account WHERE id_menu='$id_menu' AND id_group='$id_group'");
			if($query->num_rows() <= 0){
				$rows = array(
							'id_group'=>$this->input->post('id_group'),
							'id_menu'=>$this->input->post('id_menu'),
				);
					$simpan = $this->M_master->save('tr_role_account',$rows);
					echo json_encode(array('status'=>'success','code'=>'1','message'=>'Success adding menu !'));
				} else {
					echo json_encode(array('status'=>'failed','code'=>'0','message'=>'This Menu has exists  !'));
				}
	} else{
		echo json_encode(array('status'=>'failed','code'=>'0','message'=>'Please select Group  !'));
	}
}

public function delete_menu_group(){
	$id_menu=$this->input->post('id_menu');
	$id_group=$this->input->post('id_group');
if($id_menu !='' && $id_group !=''){
			$query = $this->db->query("SELECT * FROM tr_role_account WHERE id_menu='$id_menu' AND id_group='$id_group'");
			if($query->num_rows() >= 0){
				
				$delete=$this->M_master->delete_multi_condition('tr_role_account',array('id_menu'=>$id_menu,'id_group'=>$id_group));
					echo json_encode(array('status'=>'success','code'=>'1','message'=>'Success Delete menu !'));
				} else {
					echo json_encode(array('status'=>'failed','code'=>'0','message'=>'This Menu has exists  !'));
				}
	} else{
		echo json_encode(array('status'=>'failed','code'=>'0','message'=>'Please select Group  !'));
	}
}



function criteria_search($nm_column=''){
	$where='';
    $input=isset($_GET['search'])?$_GET['search']:'';
    $search = $this->db->escape_like_str($input);
	if($input !=''){
		return $where=" WHERE $nm_column LIKE '%".$search."%'";
	} else{
		return $where;
	}
}
public function send_email_activation($to_email=''){
	$this->load->library('email');
	// $this->load->library('email');
	// $to_email = 'raflesngln@gmail.com'; 
	$hash_email=md5($to_email);
	$token_datetime=md5(date("Y-m-d H:i:s"));
	$gabung_token=$hash_email.'_'.$token_datetime;

		$rows = array(
			'email_md5'=>$hash_email,
			'token_md5'=>$gabung_token,
			'create_date'=>date('Y-m-d : H:i:s'),
		);
		$simpan = $this->M_master->save('tr_email_activation',$rows);

    $from_email = 'xsysintl.verify@gmail.com';

	$message ='<div>
				<p>click this llink for activation your account</p>
				<h3><a href="'.base_url().'Login/activate_user/'.$gabung_token.'">Activate now</a></h3>
				
				</div>';
    $subject='Activation User';

            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => '465',
                'smtp_user' => 'xsysintl.verify@gmail.com',
                'smtp_pass' => 'Xsys1234%',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1',
                // 'smtp_crypto' => 'tls',
                'wordwrap'  => TRUE,
                'newline'   => "\r\n",
                'crlf'   => "\r\n",
                "validation"=>FALSE,
                "smtp_timeout"=>'7'
			);
            
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");

            $this->email->from($from_email,$subject);
            $this->email->to($to_email); 
            $this->email->subject("Contact Us - ".$subject);

           $this->email->message($message);  
            $send = $this->email->send();
            if($send) {
				return true;
				// echo json_encode("send");
				// echo json_encode(array('status'=>'success','code'=>'1','message'=>'Sukses simpan data baru !'));
            } else {
                $error = $this->email->print_debugger(array('headers'));
                echo json_encode($error);
            }
}






	
}
