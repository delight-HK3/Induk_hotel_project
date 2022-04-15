<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mypage extends CI_Controller {               // 클래스이름 첫 글자는 대문자
	function __construct(){
		parent::__construct();
		$this->load->database();                     // 데이터베이스 연결
		$this->load->model("mypage_m");    // 모델 a_member_m 연결
		$this->load->model("Clientmember_m");
		$this->load->helper(array("url", "date"));   
	}
	public function index(){
		$uid = $this->session->userdata("uid");
		$no = $this->session->userdata("no");
		$data["row"] = $this->mypage_m->getrow($uid);
		$data["jangburoom"] = $this->mypage_m->getjangburoom($no);
		$data["jangbumeal"] = $this->mypage_m->getjangbumeal($no);

		$headerdata['list1'] = $this->Clientmember_m->getroom(); //header에 표시할 room 데이터
		$headerdata['list2'] = $this->Clientmember_m->getrestaurant(); //header에 표시할 레스토랑 데이터
		$headerdata['list3'] = $this->Clientmember_m->getservice(); //header에 표시할 서비스 데이터
			
		$this->load->view("main_header",$headerdata);   // view폴더의 main_header.php 와
		$this->load->view("mypage_view",$data);
		$this->load->view("main_footer");     // main_footer.php 호출
	}
	public function edit(){
		$uri_array = $this->uri->uri_to_assoc(3);
		$no = array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		
		$headerdata['list1'] = $this->Clientmember_m->getroom(); //header에 표시할 room 데이터
		$headerdata['list2'] = $this->Clientmember_m->getrestaurant(); //header에 표시할 레스토랑 데이터
		$headerdata['list3'] = $this->Clientmember_m->getservice(); //header에 표시할 서비스 데이터

		$data["row"] = $this->mypage_m->geteditrow($no);
		$this->load->view("main_header",$headerdata);   // view폴더의 main_header.php 와
		$this->load->view("mypage_edit",$data);
		$this->load->view("main_footer");     // main_footer.php 호출
	}
	public function goedit(){
		$uri_array = $this->uri->uri_to_assoc(3);
		$no = array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;

		$tel1 = $this->input->post("myphone1",true);
		$tel2 = $this->input->post("myphone2",true);
		$tel3 = $this->input->post("myphone3",true);
		$tel = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);
		$juso1 = $this->input->post("myinjuso",true); //주소
		$juso2 = $this->input->post("myinmojuso",true); //참고주소
		$juso3 = $this->input->post("myindejuso",true); //상세주소
		$juso = $juso1."!".$juso2."!".$juso3;
		$data = array(
			'uid' => $this->input->post("myuid",true),
			'pwd' => $this->input->post("mypwd",true),
			'name' => $this->input->post("myname",true),
			'email'	=> $this->input->post("myemail",true),
			'phone' => $tel,
			'birthday' => $this->input->post("mybirthday",true),
			'rank' => $this->input->post("myrank",true),
			'zip_number' => $this->input->post("myzip",true),
			'juso' => $juso
		);
		$this->mypage_m->updaterow($data,$no);
		redirect("/mypage");//mypage 이동.
	}
	public function detailroom(){
		$uri_array=$this->uri->uri_to_assoc(3);
		$no = array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		$room_no = array_key_exists("room",$uri_array) ? $uri_array["room"] : "" ;

		$data["row"] = $this->mypage_m->getjangburoom_nostate($no);
		$data["room"] = $this->mypage_m->getroom_detail_room($room_no);
			
		$this->load->view("mypage_header");   // view폴더의 main_header.php 와
		$this->load->view("mypage_detail_room",$data);
		$this->load->view("mypage_footer");     // main_footer.php 호출
	}
	public function deletestateroom(){
		$uri_array=$this->uri->uri_to_assoc(3);
		$no = array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		$data = array(
			'adult_num' => $this->input->post("up1",true),
			'child_num' => $this->input->post("up2",true),
			'checkinday' => $this->input->post("up3",true),
			'checkoutday' => $this->input->post("up4",true),
			'room_no' => $this->input->post("up5",true),
			'adult_morning_count' => $this->input->post("up6",true),
			'child_morning_count' => $this->input->post("up7",true),
			'adult_morning' => $this->input->post("up8",true),
			'child_morning' => $this->input->post("up9",true),
			'member_no' => $this->input->post("up10",true),
			'price' => $this->input->post("up11",true),
			'pay_method' => $this->input->post("up12",true),
			'state' => $this->input->post("up13",true),
			'carpickup' => $this->input->post("up14",true),
			'bigo' => $this->input->post("up15",true)
		);
		$this->mypage_m->jangbu_room_update($data,$no);
		redirect("/mypage");
	}
	public function detailmeal(){
		$uri_array=$this->uri->uri_to_assoc(3);
		$no = array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		$meal_no = array_key_exists("meal",$uri_array) ? $uri_array["meal"] : "" ;

		$data["row"] = $this->mypage_m->getjangbumeal_nostate($no);
			
		$this->load->view("mypage_header");   // view폴더의 main_header.php 와
		$this->load->view("mypage_detail_meal",$data);
		$this->load->view("mypage_footer");     // main_footer.php 호출
	}
	public function deletestatemeal(){
		$uri_array=$this->uri->uri_to_assoc(3);
		$no = array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		$data = array(
			'adult_num' => $this->input->post("up1",true),
			'child_num' => $this->input->post("up2",true),
			'member_no' => $this->input->post("up3",true),
			'restaurant_no' => $this->input->post("up4",true),
			'meal_time' => $this->input->post("up5",true),
			'meal_day' => $this->input->post("up6",true),
			'bigo' => $this->input->post("up7",true),
			'state' => $this->input->post("up8",true),
			'reservation_no' => $this->input->post("up9",true),
			'reservation_date' => $this->input->post("up10",true)
		);
		$this->mypage_m->jangbu_meal_update($data,$no);
		redirect("/mypage#myrestaurant");
		}
	}
?>
