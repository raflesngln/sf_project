<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_master');
		$this->load->model('Admin_model');
		date_default_timezone_set('Asia/Jakarta');
	}

	
	
	// public function index(){
	// 	$template = array(
	// 		'lokasi' => 'administrator/dashboard',
	// 		'menu'=>'order',
	// 	 );
	// 	$this->load->view('template/header',$template);
	// }

	public function index(){
        $data=array(
            'title'=>'Dashboard',
            'scrumb_name'=>'Data part_full_loads',
            'scrumb'=>'admin/view_user',
            'active'=>'dashboard',
        );
        $this->load->view('administrator/v_login',$data);
	}
	
	public function dashboard(){
        $data=array(
            'title'=>'Dashboard',
            'scrumb_name'=>'Data part_full_loads',
            'scrumb'=>'admin/view_user',
            'active'=>'dashboard',
        );
        $this->load->view('v_login',$data);
    }


    public function check_login(){
        $us=$this->input->post('username');
        $pass=$this->input->post('password');

        $where="WHERE email=? AND password=? AND is_active=?";
        $variable=array(
            'email'=>$us,
			'password'=>md5($pass),
			'is_active'=>'1'
        );
        $result=$this->Admin_model->cek_login("*","ms_accounts a",$where,$variable);
            if(!$result) {
                echo json_encode(array('status'=>'Failed','message'=>'Your email and password not match !','data'=>'error'));
            } else {
                        $row=array();
                    foreach($result as $list){
                            $sess_array = array(
                                'id_session' => $list->pid,
                                'email' => $list->email,
                                'login_date'=>date('d-m-Y H:i:s'),
								'idgroup_user'=>$list->idgroup_user,
								'id_company'=>$list->id_company,
								'is_active'=>$list->is_active,
                                'login_auth'=>TRUE,
                            );
                            $this->session->set_userdata($sess_array);
                    }
                    echo json_encode(array('status'=>'success','message'=>'Success login','data'=>'success'));
            }
}

function activate_user(){
	$token=$this->uri->segment('3');
	$pecah=explode('_',$token);
	$email_md5=$pecah[0];

	$result=$this->M_master->getCustom('*',"tr_email_activation",
		"WHERE email_md5='$email_md5' AND token_md5='$token'");
	if($result){
		// echo 'berhasil';
		$ubah = array(
			'is_active'=>'1',
		);
		$updatedata = $this->M_master->update('ms_accounts','md5(username)',$email_md5,$ubah);
		// echo json_encode(array("status" => TRUE,"code"=>'1',"message"=>'Sukses update data!'));   
		echo '<h4>Your Aaccount has activation ! , Please login to your account<h4>
		       <h3><a href="http://localhost/sf_international/Login">Login Now</a></h3>';
	} else{
		echo 'Your Link is not valid';
	}
}


function logout(){
    $this->session->unset_userdata('id_session');
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('login_date');
    $this->session->unset_userdata('idgroup_user');
	$this->session->unset_userdata('login_auth');
	$this->session->unset_userdata('id_company');
	$this->session->unset_userdata('is_active');
	redirect('Login');
}

	
}
