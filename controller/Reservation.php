<?
class Reservation extends CI_Controller {               
	function __construct(){
		parent::__construct();
		$this->load->database();                     
		$this->load->model("Reservation_m");    
		$this->load->model("Clientmember_m");
		$this->load->helper(array("url", "date"));   
	}
	public function index(){
		$data['checkin'] = $this->input->post('fromDate',true);
		$data['checkout'] = $this->input->post('toDate',true);
		$data['adult_num'] = $this->input->post('adultnum',true);
		$data['child_num'] = $this->input->post('childnum',true);
		$data['room'] = $this->Reservation_m->getroom();

		$headerdata['list1'] = $this->Clientmember_m->getroom();
		$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
		$headerdata['list3'] = $this->Clientmember_m->getservice();
			
		$this->load->view("main_header",$headerdata);   // view폴더의 main_header.php 와
		$this->load->view("reservation_view_room",$data);
		$this->load->view("main_footer");     // main_footer.php 호출
	}
	public function deoption(){
		$room = $this->input->post('selectroom',true);
		$data['checkin'] = $this->input->post('fromDate',true);
		$data['checkout'] = $this->input->post('toDate',true);
		$data['adult_num'] = $this->input->post('adultnum',true);
		$data['child_num'] = $this->input->post('childnum',true);
		$data['room'] = $this->Reservation_m->getselectroom($room);
			
		$headerdata['list1'] = $this->Clientmember_m->getroom();
		$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
		$headerdata['list3'] = $this->Clientmember_m->getservice();

		$this->load->view("main_header",$headerdata);   // view폴더의 main_header.php 와
		$this->load->view("reservation_de_option",$data);
		$this->load->view("main_footer");     // main_footer.php 호출
	}
	public function option() //방 전체에서 선택한 경우
	{	
		$room = $this->input->post('selectroom',true);
		$data['checkin'] = $this->input->post('fromDate',true);
		$data['checkout'] = $this->input->post('toDate',true);
		$data['adult_num'] = $this->input->post('adultnum',true);
		$data['child_num'] = $this->input->post('childnum',true);
		$data['room'] = $this->Reservation_m->getselectroom($room);
			
		$headerdata['list1'] = $this->Clientmember_m->getroom();
		$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
		$headerdata['list3'] = $this->Clientmember_m->getservice();

		$this->load->view("main_header",$headerdata);   // view폴더의 main_header.php 와
		$this->load->view("reservation_option",$data);
		$this->load->view("main_footer");     // main_footer.php 호출
	}
	public function depay(){
		$no = $this->session->userdata("no");
		$room = $this->input->post('selectroom',true);
			
		$data['member'] = $this->Reservation_m->getmember($no);//예약한 고객정보
		$data['room'] = $this->Reservation_m->getselectroom($room); //선택한 방 정보
		$data['adult_num'] = $this->input->post('adultnum',true); // 어른 인원 수
		$data['child_num'] = $this->input->post('childnum',true); //어린이 인원 수
		$data['adult_mor_num'] = $this->input->post('adult_mor_num',true); // 어른 조식 수
		$data['child_mor_num'] = $this->input->post('child_mor_num',true); //어린이 조식 수
		$data['checkin'] = $this->input->post('fromDate',true); //체크인 날짜
		$data['checkout'] = $this->input->post('toDate',true); //체크아웃 날짜
		$data['adult_morning'] = $this->input->post('morningadult',true); //어른 조식 총가격
		$data['child_morning'] = $this->input->post('morningchild',true); //어린이 조식 총가격
		$data['carpickup'] = $this->input->post('carpickup',true); //차량 서비스 비용
		$data['bigo'] = $this->input->post('bigo',true); //비고 
			
		$headerdata['list1'] = $this->Clientmember_m->getroom();
		$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
		$headerdata['list3'] = $this->Clientmember_m->getservice();

		$this->load->view("main_header",$headerdata);   // view폴더의 main_header.php 와
		$this->load->view("reservation_de_pay",$data);
		$this->load->view("main_footer");     // main_footer.php 호출
	}
	public function pay(){
		$no = $this->session->userdata("no");
		$room = $this->input->post('selectroom',true);
			
		$data['member'] = $this->Reservation_m->getmember($no);//예약한 고객정보
		$data['room'] = $this->Reservation_m->getselectroom($room); //선택한 방 정보
		$data['adult_num'] = $this->input->post('adultnum',true); // 어른 인원 수
		$data['child_num'] = $this->input->post('childnum',true); //어린이 인원 수
		$data['adult_mor_num'] = $this->input->post('adult_mor_num',true); // 어른 조식 수
		$data['child_mor_num'] = $this->input->post('child_mor_num',true); //어린이 조식 수
		$data['checkin'] = $this->input->post('fromDate',true); //체크인 날짜
		$data['checkout'] = $this->input->post('toDate',true); //체크아웃 날짜
		$data['adult_morning'] = $this->input->post('morningadult',true); //어른 조식 총가격
		$data['child_morning'] = $this->input->post('morningchild',true); //어린이 조식 총가격
		$data['carpickup'] = $this->input->post('carpickup',true); //차량 서비스 비용
		$data['bigo'] = $this->input->post('bigo',true); //비고 
			
		$headerdata['list1'] = $this->Clientmember_m->getroom();
		$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
		$headerdata['list3'] = $this->Clientmember_m->getservice();

		$this->load->view("main_header",$headerdata);   // view폴더의 main_header.php 와
		$this->load->view("reservation_pay",$data);
		$this->load->view("main_footer");     // main_footer.php 호출
	}	
	public function insertroom(){
		$morningadult = $this->input->post('morningadult',true);
		$morningchild = $this->input->post('morningchild',true);
		$allprice = $this->input->post('allprice',true);
		$carpickup = $this->input->post('carpickup',true);
		$adult_mor_num = $this->input->post('adult_mor_num',true);
		$child_mor_num = $this->input->post('child_mor_num',true);
		$daybyday = $this->input->post('daybyday',true);

		$in_adult_mor_num = $adult_mor_num * $daybyday;
		$in_child_mor_num = $child_mor_num * $daybyday;

		$return_morningadult = str_replace(",","",$morningadult);
		$return_morningchild = str_replace(",","",$morningchild);
		$return_allprice = str_replace(",","",$allprice);
		$return_carpickup = str_replace(",","",$carpickup);
			
		$randnum = mt_rand(1000,5999);
		$reservation_number = date("Ym").$randnum;

		$data = array(
			'adult_num'=> $this->input->post('adultnum',true),
			'child_num'=> $this->input->post('childnum',true),
			'pay_day' => date("Y-m-d"),
			'checkinday'=> $this->input->post('fromDate',true),
			'checkoutday'=> $this->input->post('toDate',true),
			'room_no'=> $this->input->post('room_no',true),
			'reservation_no' => $reservation_number,
			'adult_morning_count'=> $in_adult_mor_num,
			'child_morning_count'=> $in_child_mor_num,
			'adult_morning'=> $return_morningadult,
			'child_morning'=> $return_morningchild,
			'member_no'=> $this->input->post('member_no',true),
			'price'=> $return_allprice,
			'pay_method'=> $this->input->post('pay_method',true),
			'state' => 1,
			'carpickup'=> $return_carpickup,
			'bigo'=> $this->input->post('bigo',true)
		);
		$this->Reservation_m->insertrow($data);
		redirect("/reservation/ok");
	}
	public function ok(){
		$headerdata['list1'] = $this->Clientmember_m->getroom();
		$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
		$headerdata['list3'] = $this->Clientmember_m->getservice();

		$this->load->view("main_header",$headerdata);   // view폴더의 main_header.php 와
		$this->load->view("reservation_ok");
		$this->load->view("main_footer");     // main_footer.php 호출
	}
	public function select(){
		if(isset($_POST["employee_id"])){  
			$output = '';  
			$connect = mysqli_connect("localhost", "<username>", "<DB Password>", "<DB name>");  
			$query = "SELECT * FROM room WHERE no = '".$_POST["employee_id"]."'";  
			$result = mysqli_query($connect, $query);  
			$output .= ' ';  
			while($row = mysqli_fetch_array($result))  
			{  
				$output .= '  
					<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="/my/img/indukroom/'.$row["image_room1"].'" style="width:600px; height:300px;">
							</div>
							<div class="carousel-item">
								<img src="/my/img/indukroom/'.$row["image_room2"].'" style="width:600px; height:300px;">
							</div>
							<div class="carousel-item">
								<img src="/my/img/indukroom/'.$row["image_room3"].'" style="width:600px; height:300px;">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>				
					</div>
					<div class="container"><br>
						<div style="text-align:center" > 
							<h2 class="title_color">'.$row["name"].'</h2>
						</div>
						<hr><br>
						<p style="text-align:center; font-size:15px; font-family: Noto Sans KR, sans-serif;">'.$row["Explanation"].'</p><br>
						<div style="text-align:center">
							<div class="single-footer-widget">
								<span style="color:black"><h3>객실개요</h3></span>
							</div>
						</div><br>
						<div class="row">
							<div class="col-4">
								<div class="single-footer-widget" style="text-align:center">
									<span style="color:black"><h5>침대타입</h5> </span>
									<p style="font-family: Noto Sans KR, sans-serif;">더블 2개</p>
									<br>
								</div>
							</div>
							<div class="col-4">
								<div class="single-footer-widget" style="text-align:center">
									<span style="color:black"><h5>최대 투숙인원</h5> </span>
									<p style="font-family: Noto Sans KR, sans-serif;">4명</p>
									<br>
								</div>
							</div>
							<div class="col-4">
								<div class="single-footer-widget" style="text-align:center">
									<span style="color:black"><h5>전망</h5> </span>
									<p style="font-family: Noto Sans KR, sans-serif;">시티뷰/리버뷰/전망욕실</p>
								</div>
							</div>
						</div>
						<div style="text-align:center">
							<div class="single-footer-widget">
								<span style="color:black"><h3>특별서비스</h3></span>
							</div>
						</div>
						<div style="padding-left:50px">
							<ul>
								<li style="font-family: Noto Sans KR, sans-serif;">전 객실에서 서울의 경관을 조망할 수 있는 파노라믹뷰</li>
								<li style="font-family: Noto Sans KR, sans-serif;">슈퍼프리미엄 베딩 시스템 : 최상의 숙면을 위한 침대 및 침구류</li>
								<li style="font-family: Noto Sans KR, sans-serif;">호텔 헬스장(수영장 포함)무료 이용</li>
								<li style="font-family: Noto Sans KR, sans-serif;">투숙객 전용라운지 "Salon de Induk" 무료 입장</li>
								<span style="font:bold; color:blue">
									<li style="font-family: Noto Sans KR, sans-serif;">만 12세(초등학교 6학년) 이하의 어린이는 라운지 입장이 제한됩니다.</li> 
								</span>	
							</ul>
						</div><br><hr><br>
						<div style="text-align:center">
							<div class="single-footer-widget">
								<span style="color:black"><h3>어메니티</h3></span>
							</div>
						</div><br>
						<div class="row">
							<div class="col-4">
								<div class="single-footer-widget">
									<span style="color:black; text-align:center"><h5>일반</h5> </span>
									<p style="font-family: Noto Sans KR, sans-serif;">'.$row["normal"].'</p><br>
								</div>
							</div>
							<div class="col-4">
								<div class="single-footer-widget">
									<span style="color:black; text-align:center"><h5>욕실</h5> </span>
									<p style="font-family: Noto Sans KR, sans-serif;">'.$row["bathroom"].'</p><br>
								</div>
							</div>
							<div class="col-4">
								<div class="single-footer-widget">
									<span style="color:black; text-align:center"><h5>기타</h5> </span>
									<p style="font-family: Noto Sans KR, sans-serif;">'.$row["other"].'</p><br>
								</div>
							</div>
						</div><br><hr>
						<div style="text-align:center">
							<div class="single-footer-widget">
								<span style="color:black"><h3>추가정보</h3></span>
							</div>
						</div>
						<div style="padding-left:30px">
							<ul>
								<li style="font-family: Noto Sans KR, sans-serif;">River View(한강전망) 및 Scenic Bath(전망 욕실) 객실은 각각 ￦50,000 요금이 추가 부과됩니다.</li>
								<li style="font-family: Noto Sans KR, sans-serif;">모든 요금에 세금 10% 및 봉사료 10% (합계 21%)가 부과됩니다.</li>
								<li style="font-family: Noto Sans KR, sans-serif;">모든 객실은 금연입니다.</li>
								<li style="font-family: Noto Sans KR, sans-serif;">객실 구조 및 인테리어는 객실 위치에 따라 이미지와 다를 수 있습니다.</li>
								<li style="font-family: Noto Sans KR, sans-serif;">호텔내 반려동물 동반 입장은 불가합니다.</li>
								<li style="font-family: Noto Sans KR, sans-serif;">객실 내 장식물 부착 관련 문의 사항은 시그니엘서비스로 연락부탁드립니다. (02-1234-5678)</li>
								<li style="font-family: Noto Sans KR, sans-serif;">화재의 위험이 있는 양초류의 사용은 불가합니다.</li>
								<li style="font-family: Noto Sans KR, sans-serif;">데코레이션 업체를 통한 객실 내 장식물 부착은 불가합니다.</li>
							</ul>
						</div><br>
					</div>
					';  
				  }  
				  $output .= ' ';  
				  echo $output;  
			 }  	
		}
		public function showimg()
		{	
			$output = '';  
			$connect = mysqli_connect("localhost", "<username>", "<DB password>", "<DB name>");  
			$query = "SELECT * FROM room WHERE no = '".$_POST["image_id"]."'";  
			$result = mysqli_query($connect, $query);  
			$output .= '<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">';  
			while($row = mysqli_fetch_array($result))  
			{  
				$output .= '  	
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
					</ol>
					<center>
						<div class="carousel-inner">
							<div class="carousel-item active">
							  <img src="/my/img/indukroom/'.$row["image_room1"].'" style="width:95%; height:95%; padding-top:20px">
							</div>
							<div class="carousel-item">
							  <img src="/my/img/indukroom/'.$row["image_room2"].'" style="width:95%; height:95%; padding-top:20px">
							</div>
							<div class="carousel-item">
							  <img src="/my/img/indukroom/'.$row["image_room3"].'" style="width:95%; height:95%; padding-top:20px">
							</div>
						</div>
					</center>
					<a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev" style="padding-top:20px;">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next" style="padding-top:20px;">
						<span class="carousel-control-next-icon" aria-hidden="true"></span> 
						<span class="sr-only">Next</span>
					</a>				
				';  
			}  
			$output .= '</div>';  
			echo $output;  				
		}
	}	
?>
