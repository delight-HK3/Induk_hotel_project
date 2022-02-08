<?php
	class Restaurant extends CI_Controller {          // 클래스이름 첫 글자는 대문자
		function __construct(){
			parent::__construct();
			$this->load->database();                     // 데이터베이스 연결
			$this->load->model("Restaurant_m");    // 모델 a_member_m 연결
			$this->load->model("Clientmember_m");
			$this->load->helper(array("url", "date"));   
		}
		public function index()                     // 제일 먼저 실행되는 함수
		{
			$data['restaurant'] = $this->Restaurant_m->getrestaurant();

			$headerdata['list1'] = $this->Clientmember_m->getroom();
			$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
			$headerdata['list3'] = $this->Clientmember_m->getservice();

			$this->load->view("main_header",$headerdata);		// view폴더의 main_header.php 
			$this->load->view("restaurant_list",$data);
			$this->load->view("main_footer");		// main_footer.php 호출	
		}
		public function detail()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$data['restaurant'] = $this->Restaurant_m->getresult($no);
			$data['member'] = $this->Restaurant_m->getmember();
			$data['replenum'] = $this->Restaurant_m->getreplenum($no);
			$data['reple'] = $this->Restaurant_m->getreple($no);
			
			$headerdata['list1'] = $this->Clientmember_m->getroom();
			$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
			$headerdata['list3'] = $this->Clientmember_m->getservice();

			$this->load->view("main_header",$headerdata);// view폴더의 main_header.php 
			$this->load->view("restaurant_detail",$data);
			$this->load->view("main_footer");// main_footer.php 호출	
		}
		public function add()
		{
			$randnum = mt_rand(6000,9999);
			$reservation_number = date("Ym").$randnum;

			$data = array(
				'adult_num' => $this->input->post('adult_meal_num',true),
				'child_num' => $this->input->post('child_meal_num',true),
				'member_no' => $this->session->userdata("no"),
				'reservation_no' => $reservation_number,
				'restaurant_no' => $this->input->post('res_no',true),
				'reservation_date' => date("Y-m-d"),
				'meal_time' => $this->input->post('res_time',true),
				'meal_day' => $this->input->post('inDate',true),
				'bigo' => $this->input->post('bigo',true),
				'state' => 1
			);
			$this->Restaurant_m->insertrow($data);
			redirect("/~team1/restaurant/ok");
		}
		public function ok(){
			$headerdata['list1'] = $this->Clientmember_m->getroom();
			$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
			$headerdata['list3'] = $this->Clientmember_m->getservice();

			$this->load->view("main_header",$headerdata);// view폴더의 main_header.php 
			$this->load->view("restaurant_ok");
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
				'restaurant_no' => $no
			);

			$this->Restaurant_m->insertreple($data);
			redirect("/~team1/restaurant/detail/no/$no#reple");
		}
		public function reple_delete(){
			$uri_array=$this->uri->uri_to_assoc(3);
			$no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$restaurant_no = array_key_exists("restaurant_no",$uri_array) ? $uri_array["restaurant_no"] : "" ;

			$this->Restaurant_m->deletereple($no);
			redirect("/~team1/restaurant/detail/no/$restaurant_no#reple");
		}
	}
?>
