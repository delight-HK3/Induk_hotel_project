<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {
	function __construct(){
        	parent::__construct();
        	$this->load->database();                     
       	 	$this->load->model("Service_m");    
		$this->load->model("Clientmember_m");
		$this->load->helper(array("url", "date"));   
    	}
    	public function index(){
        	$data['service'] = $this->Service_m->getservice();

		$headerdata['list1'] = $this->Clientmember_m->getroom(); //header에 표시할 room 데이터
		$headerdata['list2'] = $this->Clientmember_m->getrestaurant(); //header에 표시할 레스토랑 데이터
		$headerdata['list3'] = $this->Clientmember_m->getservice(); //header에 표시할 서비스 데이터

		$this->load->view("main_header",$headerdata);// view폴더의 main_header.php 
		$this->load->view("service_list",$data);
		$this->load->view("main_footer");// main_footer.php 호출	
	}
	public function detail(){
		$uri_array=$this->uri->uri_to_assoc(3);
		$no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		$data['service'] = $this->Service_m->getrow($no);
		$data['replenum'] = $this->Service_m->getreplenum($no);
		$data['reple'] = $this->Service_m->getreple($no);

		$headerdata['list1'] = $this->Clientmember_m->getroom(); //header에 표시할 room 데이터
		$headerdata['list2'] = $this->Clientmember_m->getrestaurant(); //header에 표시할 레스토랑 데이터
		$headerdata['list3'] = $this->Clientmember_m->getservice(); //header에 표시할 서비스 데이터

		$this->load->view("main_header",$headerdata);// view폴더의 main_header.php 
		$this->load->view("service_detail",$data); 
		$this->load->view("main_footer");// main_footer.php 호출	
	}
	public function reple(){
		$uri_array=$this->uri->uri_to_assoc(3);
		$no = array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;

		$data = array(
			'reple_id' => $this->session->userdata("uid"),
			'reple_rank' => $this->input->post('reple_rank',true),
			'reple_text' => $this->input->post('reple_text',true),
			'reple_date' => date("Y-m-d"),
			'service_no' => $no
		);
		
		$this->Service_m->insertreple($data);
		redirect("/service/detail/no/$no#reple");
	}
	public function reple_delete(){
		$uri_array=$this->uri->uri_to_assoc(3);
		$no = array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		$service_no = array_key_exists("service_no",$uri_array) ? $uri_array["service_no"] : "" ;

		$this->Service_m->deletereple($no);
		redirect("/service/detail/no/$service_no#reple");
	}
}
?>
