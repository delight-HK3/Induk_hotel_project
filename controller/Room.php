<?php
	class Room extends CI_Controller {          // 클래스이름 첫 글자는 대문자
		function __construct(){
			parent::__construct();
			$this->load->database();                     // 데이터베이스 연결
			$this->load->model("Room_m");    // 모델 a_member_m 연결
			$this->load->model("Clientmember_m");
			$this->load->helper(array("url", "date"));   
		}
		public function index()                     // 제일 먼저 실행되는 함수
		{
			$data['room'] = $this->Room_m->getroom();

			$headerdata['list1'] = $this->Clientmember_m->getroom();
			$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
			$headerdata['list3'] = $this->Clientmember_m->getservice();

			$this->load->view("main_header",$headerdata);		// view폴더의 main_header.php 
			$this->load->view("room_list",$data);
			$this->load->view("main_footer");		// main_footer.php 호출	
		}
		public function detail()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$data['room'] = $this->Room_m->getresult($no);
			$data['replenum'] = $this->Room_m->getreplenum($no);
			$data['reple'] = $this->Room_m->getreple($no);
				
			$headerdata['list1'] = $this->Clientmember_m->getroom();
			$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
			$headerdata['list3'] = $this->Clientmember_m->getservice();
			
			$this->load->view("main_header",$headerdata);// view폴더의 main_header.php 
			$this->load->view("room_detail",$data);
			$this->load->view("main_footer");// main_footer.php 호출	
		}
		public function reple(){
			$uri_array=$this->uri->uri_to_assoc(3);
			$no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;

			$data = array(
				'reple_id' => $this->session->userdata("uid"),
				'reple_rank' => $this->input->post('reple_rank',true),
				'reple_text' => $this->input->post('reple_text',true),
				'reple_date' => date("Y-m-d"),
				'room_no' => $no
			);

			$this->Room_m->insertreple($data);
			redirect("/~team1/room/detail/no/$no#reple");
		}
		public function reple_delete(){
			$uri_array=$this->uri->uri_to_assoc(3);
			$no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$room_no = array_key_exists("room_no",$uri_array) ? $uri_array["room_no"] : "" ;

			$this->Room_m->deletereple($no);
			redirect("/~team1/room/detail/no/$room_no#reple");
		}
	}
?>
