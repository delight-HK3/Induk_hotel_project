<?
	class About extends CI_Controller {          // 클래스이름 첫 글자는 대문자
		function __construct(){
			parent::__construct();
			$this->load->database();                     // 데이터베이스 연결
			// 모델 a_member_m 연결
			$this->load->model("Clientmember_m");
			$this->load->helper(array("url", "date"));   
		}
   public function index()                     // 제일 먼저 실행되는 함수
		{
		
		$headerdata['list1'] = $this->Clientmember_m->getroom();
		$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
		$headerdata['list3'] = $this->Clientmember_m->getservice();
		
        $this->load->view("main_header",$headerdata);		// view폴더의 main_header.php 
		$this->load->view("about_view");
        $this->load->view("main_footer");		// main_footer.php 호출
		}


	 public function faqindex() //자주 찾는 질문(FAQ) 페이지
		{
		
		$headerdata['list1'] = $this->Clientmember_m->getroom();
		$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
		$headerdata['list3'] = $this->Clientmember_m->getservice();
		
        $this->load->view("main_header",$headerdata);		// view폴더의 main_header.php 
		$this->load->view("faq_view");
        $this->load->view("main_footer");		// main_footer.php 호출
		}

	public function infoindex() // 연락처 페이지
		{
		$headerdata['list1'] = $this->Clientmember_m->getroom();
		$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
		$headerdata['list3'] = $this->Clientmember_m->getservice();

        $this->load->view("main_header",$headerdata);		// view폴더의 main_header.php 
		$this->load->view("info_view");
        $this->load->view("main_footer");		// main_footer.php 호출
		}

	 public function contactindex() // 문의하기 페이지
		{
		$headerdata['list1'] = $this->Clientmember_m->getroom();
		$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
		$headerdata['list3'] = $this->Clientmember_m->getservice();

        $this->load->view("main_header",$headerdata);		// view폴더의 main_header.php 
		$this->load->view("contact_view");
        $this->load->view("main_footer");		// main_footer.php 호출
		}




}