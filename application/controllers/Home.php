<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// echo "a";
		$template = array(
			'lokasi' => 'dashboard/index',
			'menu'=>'dashboard', 
		);

		/* $request_name = "order";
		$data = [
			"header" => [
				"reference_no1"		=> "201602250001",
				"express_type"		=> "101",
				"parcel_quantity"	=> "1",
				"pay_method"		=> "1",
				"currency"			=> "USD",
				"j_company"			=> "hafa",
			],
			"detail" => [
				[
					"goods_code"		=> "JAL01031",
					"product_record_no"	=> "JAL01031",
					"name"				=> "Just a Leaf Organic Tea; 有机草本茶; 芙蓉柠檬 2 oz (56 g)",
					"count"				=> "2",
					"brand"				=> "VISA",
					"currency"			=> "USD",
					"unit"				=> "件",
					"amount"			=> "5.88",
					"specifications"	=> "1",
					"good_prepard_no"	=> '123445',
					"source_area" 		=> 'USA'
				],
				[
					"goods_code"		=> "JAL01032",
					"product_record_no"	=> "JAL01032",
					"name"				=> "Just a Leaf Organic Coffe; 有机草本茶; 芙蓉柠檬 2 oz (56 g)",
					"count"				=> "5",
					"brand"				=> "MASTER CARD",
					"currency"			=> "USD",
					"unit"				=> "件",
					"amount"			=> "7.50",
					"specifications"	=> "1",
					"good_prepard_no"	=> '123445',
					"source_area" 		=> 'USA'
				],
			]
		];

		$xml = generate_xml($request_name, $data); */

		return $this->load->view('test');

		$this->load->view('template/header',$template);
	}

	public function read_upload_file()
	{
		$file = $_FILES["file"];

		$fo = fopen($file["tmp_name"], "r");
		$fr = fread($fo, $file["size"]);
		fclose($fo);

		print_r(read_xml($fr));
	}

	public function order_list(){
		$template = array(
			'lokasi' => 'order/list',
			'menu'=>'order',
		 );
		$this->load->view('template/header',$template);
	}
	public function json_data(){
		$this->load->view('order/data.json');
	}
	public function create_order(){
		$template = array(
			'lokasi' => 'order/form', 
			'menu'=>'order',
		);
		$this->load->view('template/header',$template);
	}
	public function  import_order(){
		$template = array(
			'lokasi' => 'import/import', 
			'menu'=>'import_order',
		);
		$this->load->view('template/header',$template);
	}
	public function address_book(){
		$template = array(
			'lokasi' => 'address_book/list', 
			'menu'=>'address_book',
		);
		$this->load->view('template/header',$template);
	}
	public function get_currency(){
		$this->db->select('currency');
		$this->db->from('ms_currency');
		$this->db->where('is_deleted', 0);
		$data=$this->db->get()->result();
		echo json_encode($data);
	}
}
