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
    date_default_timezone_set('Asia/Jakarta');
	$token=$this->uri->segment('3');
	$pecah=explode('_',$token);
	$email_md5=$pecah[0];

	$result=$this->M_master->getCustom('*',"tr_email_activation",
        "WHERE email_md5='$email_md5' AND token_md5='$token'");
        $in_use=$result[0]->in_use;
        $create_date=$result[0]->create_date; 

        $waktuawal  = date_create($create_date); //waktu di db
        $waktuakhir = date_create();  //waktu sekarang
        $diff  = date_diff($waktuawal, $waktuakhir);

        if($in_use=='1'){
            echo 'Link expired or this link has use !';
        } else{
            $resp=array('in_use'=>$in_use,'code'=>'1','message'=>'Success activated','email_md5'=>$email_md5,'token'=>$token);
            // $update_user_active = $this->M_master->update('ms_accounts','md5(username)',$email_md5,['is_active'=>'1']);
            // $update_activate = $this->M_master->update('tr_email_activation','email_md5',$email_md5,['in_use'=>'1']);

            $this->load->view('user_accounts/create_user_password',$resp);
        }
        // echo $diff->y . ' tahun, ';
        // echo $diff->m . ' bulan, ';
        // echo $diff->d . ' hari, ';
        // echo $diff->h . ' jam, ';
        // echo $diff->i . ' menit, ';
        // echo $diff->s . ' detik, ';

}
function activate_user2222(){
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

function update_password(){
    date_default_timezone_set('Asia/Jakarta');
	$emailmd5=$this->input->post('emailmd5');
    $token=$this->input->post('token');
    $pass=$this->input->post('pass');
    $pass2=$this->input->post('pass2');
	$result=$this->M_master->getCustom('*',"tr_email_activation",
        "WHERE email_md5='$emailmd5' AND token_md5='$token'");
        if($result){
            if(strlen($pass) < 5 || $pass != $pass2){
                echo json_encode(array('status'=>'failed','code'=>'0','message'=>'Please input password and its 5 character minimal required'));
            } else{
                $update_user_active = $this->M_master->update('ms_accounts','md5(username)',$emailmd5,['is_active'=>'1']);
                $update_activate = $this->M_master->update('tr_email_activation','email_md5',$emailmd5,['in_use'=>'1']);
                echo json_encode(array('status'=>'success','code'=>'1','message'=>'Success create new password. Go to login page'));
            }
        } else{
            echo json_encode(array('status'=>'failed','code'=>'0','message'=>'You not authorized'));
        }
}

function resend_email_activation(){
    $this->load->library('email');
    date_default_timezone_set('Asia/Jakarta');
    $to_email=$this->input->post('email');
    // $this->load->library('../controllers/Administrator');
    
	$hash_email=md5($to_email);
	$token_datetime=md5(date("Y-m-d H:i:s"));
	$gabung_token=$hash_email.'_'.$token_datetime;

		$rows = array(
			'email_md5'=>$hash_email,
			'token_md5'=>$gabung_token,
			'create_date'=>date('Y-m-d H:i:s'),
		);
		$simpan = $this->M_master->save('tr_email_activation',$rows);

    $from_email = 'xsysintl.verify@gmail.com';
    $message ='';
    $message .='<html>
                <head>
                <style>

                h1 {
                color: #00bcd4;
                text-align: center;
                }
                p {
                font-family: verdana;
                font-size: 20px;
                }
                .btn_action{
                    background: red;
                    height: 30px;
                    padding: 7px 90px 7px 90px;
                    color: #f8f8f8 !important;
                    text-decoration: none;
                    border-radius: 8px;
                }
                .body_email{
                    text-align: center;
                    border: 1px #ccc solid;
                    border-radius: 7px;
                    padding: 10px 10px 80px 10px;
                }
                </style>
                </head>
                <body>
                <div style="text-align:center" class="body_email">
                <h1>Thank you for signing up</h1>
                <p>Verify your user account by click button below</p>
                <hr style="background:#607d8b; width:85%;height:1px">
                <p>To use our feature system. you must activate your account registered and then login to our system</p>
                <p>
                <a href="'.base_url().'Login/activate_user/'.$gabung_token.'" class="btn_action">Activate account</a>
                </p>
                </style>
                </body>
                </html>';

    $subject='Activation user';

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
            $this->email->subject("User register - ".$subject);

           $this->email->message($message);  
            $send = $this->email->send();
            if($send) {
				// return true;
				// echo json_encode("send");
				echo json_encode(array('status'=>'success','code'=>'1','message'=>'Email activation has send to user !'));
            } else {
                $error = $this->email->print_debugger(array('headers'));
                echo json_encode($error);
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
