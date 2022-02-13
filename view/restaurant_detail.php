<section class="banner_area">
	<div class="reservation_table d_flex align-items-center">
        <div class="overlay" style="background: url('/~team1/my/img/restaurant/<?php echo($restaurant->image_res1);?>') no-repeat scroll center 0/cover; opacity: 0.5; " data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
		<div class="container">
			<div class="banner_content text-center"><br><br><br><br><br><br><br><br>
				<img src="/~team1/my/img/Hotel_name.png" class="animated fadeInDown" style="width:580px; height:266px"><br><br><br>
				<div class="animated fadeInUp">
					<center><font style="font-family: 'Noto Sans KR', sans-serif; font-size:40px; color:white;">Restarurant</font>
					<br><br><br>
					<font style="font-family: 'Noto Sans KR', sans-serif; font-size:20px; color:white">인덕호텔의 강점인 탁트인 도심의 전경을 바라보며 세계 최고 수준의 셰프들이 직접 선보이는 다양한 요리를 즐기실 수 있습니다.</font></center>
				</div>
			</div>
		</div>
    </div> 
	<section class="accomodation_area section_gap">
        <div class="container">
			<div style="text-align:center">
                <font style="font-family: 'Noto Sans KR', sans-serif; font-size:35px; color:black; font-weight: 500; "><?php echo($restaurant->name);?></font>
				<br><br><hr>
            </div>
				<!--===== 레스토랑 사진 슬라이드 =====-->
                    <div data-aos="zoom-in" data-aos-duration="3000" class = "text-center">       
                        <div id="<?php echo($restaurant->no);?>" class="carousel slide carousel-fade" data-interval = "false">
                            <ol class="carousel-indicators">
                                <li data-target="#<?php echo($restaurant->no);?>" data-slide-to="0" class="active"></li>
                                <li data-target="#<?php echo($restaurant->no);?>" data-slide-to="1"></li>
                                <li data-target="#<?php echo($restaurant->no);?>" data-slide-to="2"></li>                
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/~team1/my/img/restaurant/<?php echo($restaurant->image_res1);?>" class="d-block w-100"  height="700" alt="1">
                                </div>
                                <div class="carousel-item">
                                    <img src="/~team1/my/img/restaurant/<?php echo($restaurant->image_res2);?>" class="d-block w-100"  height="700" alt="2">
                                </div>
                                <div class="carousel-item">
                                    <img src="/~team1/my/img/restaurant/<?php echo($restaurant->image_res3);?>" class="d-block w-100"  height="700" alt="3">
                                </div>                       
                            </div>
                            <a class="carousel-control-prev" href="#<?php echo($restaurant->no);?>" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#<?php echo($restaurant->no);?>" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>                  
                    </div><hr><br>
                <!--===== 레스토랑 사진 슬라이드 =====-->

				<!--===== 레스토랑 설명 =====-->
					<div style="text-align:center" >
						<span style="color:black">
							<h3>레스토랑 소개</h3>
						</span>
						<font style="font-family: 'Noto Sans KR', sans-serif; font-size:16px"><?php echo($restaurant->Explanation);?></font>
					</div><br>
					<hr><br>
				<!--===== 레스토랑 설명 =====-->

				<!--===== 레스토랑 사용 설명 =====-->
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="single-footer-widget">
								<span style="color:black"><h3>기본정보</h3></span><br> 
							</div>
						</div>
						<div class="col-lg-3">
							<div class="single-footer-widget">
								<font style="font-family: 'Noto Sans KR', sans-serif; font-size:20px; font-weight: 500; color:black">운영시간</font><br><br>
								<font style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;">
								<?php echo date("H:i",strtotime($restaurant->opentime));?></font>-
								<font style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;">
								<?php echo date("H:i",strtotime($restaurant->closetime));?></font><br>
							</div><br>
						</div>
						<div class="col-lg-6">
							<div class="single-footer-widget">
								<font style="font-family: 'Noto Sans KR', sans-serif; font-size:20px; font-weight: 500; color:black">예약인원</font><br><br>
								<font style="font-family: 'Noto Sans KR', sans-serif; font-size:15px">성인 및 어린이 최대 8명 동시 예약가능</font><br><br>
							</div>
						</div>
					</div>
				</div>
			<!--===== 객실개요 =====-->
			<br><hr><br>
			<!--===== 특별서비스 =====-->
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="single-footer-widget">
								<span style="color:black"><h3>추가정보</h3> </span>
							</div>
						</div>
						<ul>
							<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px; color:blue">정부의 사회적 거리두기 지침에 따라 영업 시간이 변동될 수 있습니다.</li>
							<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px">예약 시 성인 1명은 필수로 있어야 합니다.</li>
							<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px">최대 8인 까지 예약 및 입장이 가능합니다.</li>
							<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px">6인 이상의 고객은 완전 예약제로 운영됩니다.</li>
							<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px">케이크는 방문 1일전까지 사전 주문제로 운영됩니다.<br> 
							(케이크 가격 : medium size 50,000 KRW , small size 30,000 KRW)</li>
							<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px">주류 반입 금액은 한도 100,000원으로 일괄 적용됩니다.</li>
							<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px">재료 수급 상황에 따라 메뉴 변동이 있을 수 있습니다.</li>
						</ul>
					</div>
				</div>	
			<!--===== 특별서비스 =====-->
			<br><hr><br>
			<!--===== 환불정보 =====-->
			<div class="container">
				<div class="row" id="reple">
					<div class="col-lg-3">
						<div class="single-footer-widget">
							<span style="color:black"><h3>추가규정</h3> </span>
						</div>
					</div>
					<ul>
						<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px">PDR : 예약일 기준 1일 이내 취소 시 인당 5만원 산정 부과합니다.</li>
						<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px">4인 이상 예약 : 예약 시간 1시간 전부터 취소 시 인당 5만원 산정 부과합니다.</li>
						<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px">No-Show : 1회 이상 No-Show 시 사전 안내 후 예약 거절이 될 수 있습니다.</li>
						<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px">케이크 당일 취소시 판매가 50% 부과해야 합니다.</li>
					</ul>
				</div>
			</div>	
			<!--===== 환불정보 =====-->
			<br><hr><br>
			<?php
				if($this->session->userdata("rank")){
					echo("<input href='#restarurantModal' class='genric-btn large info circle arrow' style='float:right; font-family: \"Noto Sans KR\", sans-serif; font-size:16px;' value='예 약 하 기' data-toggle='modal'>");
				}
				else{
					echo("<input href='#loginModal' class='genric-btn large info circle arrow' style='float:right; font-family: \"Noto Sans KR\", sans-serif; font-size:16px;' value='로그인 후 가능합니다.' data-toggle='modal'>");
				}
			?>
			<br><br><br><br><br><br>
			<div class="row">
				<div class="col-lg-3" style="padding-bottom:20px">
					<font style="font-family: 'Noto Sans KR', sans-serif; font-size:20px; padding-left:10px">이용후기 (<?php echo($replenum);?>)</font><br>
					<?php
						if($this->session->userdata("rank")){
							echo("<input href='#repleModal' class='genric-btn primary circle arrow' style='float:left; margin-top:10px; width:150px; font-family: \"Noto Sans KR\", sans-serif; font-size:16px;' value='후 기 작 성' data-toggle='modal'>");
						}
						else{
							echo("<input href='#loginModal' class='genric-btn primary circle arrow' style='float:left; margin-top:10px; width:200px; font-family: \"Noto Sans KR\", sans-serif; font-size:16px;' value='로그인 후 가능합니다.' data-toggle='modal'>");
						}
					?>
				</div>
				<div class="col-lg-7">
					<?php
						foreach($reple as $row)
						{
					?>		
							<form action="/~team1/restaurant/reple_delete/no/<?php echo($row->no)?>/restaurant_no/<?php echo($restaurant->no);?>" method="post" >
							<input type="hidden" value="<?php echo($row->reple_rank)?>">
							<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:25px;"><?php echo($row->reple_id);?></font>
							<?php
								if($this->session->userdata("rank")){
							?>
									<?php
										if($this->session->userdata("uid") == $row->reple_id){
									?>
											<input type="submit" onclick="return confirm('삭제 하시겠습니까 ?')" class="delete_button btn btn-outline-danger" value="X" style="border-radius:40px; margin:0px; margin-bottom:9px; margin-left:20px">
									<?php
										}
									?>
							<?php
								}
							?>
							<br>
							<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">작성일 : <?php echo($row->reple_date);?></font><br>
							<div style="padding-top:10px;" >
								<?php
									if($row->reple_rank == 5){
								?>
										<img src="/~team1/my/img/star-on.png">
										<img src="/~team1/my/img/star-on.png">
										<img src="/~team1/my/img/star-on.png">
										<img src="/~team1/my/img/star-on.png">
										<img src="/~team1/my/img/star-on.png">
								<?php
									}
								?>
								<?php
									if($row->reple_rank == 4){
								?>
										<img src="/~team1/my/img/star-on.png">
										<img src="/~team1/my/img/star-on.png">
										<img src="/~team1/my/img/star-on.png">
										<img src="/~team1/my/img/star-on.png">
										<img src="/~team1/my/img/star-off.png">
								<?php
									}
								?>
								<?php
									if($row->reple_rank == 3){
								?>
										<img src="/~team1/my/img/star-on.png">
										<img src="/~team1/my/img/star-on.png">
										<img src="/~team1/my/img/star-on.png">
										<img src="/~team1/my/img/star-off.png">
										<img src="/~team1/my/img/star-off.png">
								<?php
									}
								?>
								<?php
									if($row->reple_rank == 2){
								?>
										<img src="/~team1/my/img/star-on.png">
										<img src="/~team1/my/img/star-on.png">
										<img src="/~team1/my/img/star-off.png">
										<img src="/~team1/my/img/star-off.png">
										<img src="/~team1/my/img/star-off.png">
								<?php
									}
								?>
								<?php
									if($row->reple_rank == 1){
								?>
										<img src="/~team1/my/img/star-on.png">
										<img src="/~team1/my/img/star-off.png">
										<img src="/~team1/my/img/star-off.png">
										<img src="/~team1/my/img/star-off.png">
										<img src="/~team1/my/img/star-off.png">
								<?php
									}
								?><br><br>
								<font style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; padding-left:20px"><?php echo($row->reple_text);?></font>
							</div>
							</form>
							<hr>
							<br>
					<?php
						}
					?>
				</div>
			</div>
		</div><br><br><br><br><br>
	</section>
</section>


<div class="modal fade" id="restarurantModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModelLabel" >
	<form action="/~team1/restaurant/add" method="post" onsubmit="return res_check()">
	<div class="modal-dialog" role="document" style="width:600px">
		<div class="modal-content" style="width:602px">
			<div class="modal-header" style="width:600px; background: rgb(255, 190, 11);">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" onClick="javascript:res_reset()">&times;</span>
				</button>
			</div><br>
			<h4 class="modal-title" style="text-align: center; margin-top:10px; margin-bottom:10px" id="exampleModelLabel">Restarurant 예약</h4><br>
				<div class="modal-body bg-light" style="width:600px;">
					<div style="padding:15px">
						<!--레스토랑 예약자 이름-->
						<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif;">(현재 로그인 되어있는 정보로 예약됩니다.)</font><br>				
						<!--레스토랑 예약자 이름-->
						<br>
						<!--레스토랑 이름-->
						<input type="hidden" name="res_no" value="<?php echo($restaurant->no);?>">
						<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:20px;">예약 정보입력</font><br><br>
						<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">이름 : &nbsp<?php echo($restaurant->name);?></font><br><br>
						<!--레스토랑 이름-->
						
						<!--레스토랑 예약일자-->
						<div class="row" style="padding-left:15px; padding-bottom:15px">
							<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">예약일자 : &nbsp</font>
							<div class="form-inline">
								<input style="z-index:10000;" type="text" name="inDate" class="form-control" placeholder="reservation Date" id="inDate" readonly="readonly">
							</div>&nbsp&nbsp&nbsp
							<font style="font-family: 'Noto Sans KR', sans-serif; padding-top:9px; padding-bottom:9px">시간선택 : &nbsp</font>
							<select id="res_time" name="res_time">
								<option value="0" selected>선택하세요</option>
								<option value="12:00">12:00</option>
								<option value="12:30">12:30</option>
								<option value="13:00">13:00</option>
								<option value="18:00">18:00</option>
								<option value="18:30">18:30</option>
								<option value="19:00">19:00</option>
							</select>
						</div><br>
						<!--레스토랑 예약 및 시간일자-->
						<!--레스토랑 인원 정하기-->
						<div class="row" style="padding-left:15px; padding-bottom:15px">
							<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">adult (어른)</font>&nbsp&nbsp
							<div class="restarurant-qty row" style="margin-left:10px">
								<input style="color:black" type="text" name="adult_meal_num" id="adult_meal" value="1" readonly="readonly">
							</div>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">child (어린이)</font>
							<div class="restarurant-qty row" style="margin-left:10px">
								<input style="color:black" type="text" name="child_meal_num" id="child_meal" value="0" readonly="readonly">
							</div>
						</div><br>
						<!--레스토랑 예약일자-->
						<!--레스토랑 비고사항-->
						<font style="font-family: 'Noto Sans KR', sans-serif; font-size:20px; margin-bottom:15px">참고 및 추가사항</font><br><br>
						<textarea style="font-family: 'Noto Sans KR', sans-serif; padding:10px;" cols="60" rows="2" id="bigo" name="bigo" max="250"></textarea>
						<div style="font-size:15px; font-family: 'Noto Sans KR', sans-serif; margin-left:15px;" id="bigo_cnt">(0 / 200)</div>
						<!--레스토랑 비고사항-->
						
					</div>
				</div>
				<div class="modal-footer alert-secondary" style="width:600px; text-align:center; padding:15px">
					<div class="row ">
						<div style="width:270px; margin-right:20px">
							<input type="button" style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;" class="btn btn-block btn-warning" onClick="javascript:res_reset();" value="닫기" data-dismiss="modal">
						</div>
						<div style="width:270px">
							<input type="submit" style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;" id="insert" class="btn btn-block btn-success" value="예약하기">
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

<div class="modal fade" id="repleModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModelLabel" >
	<div class="modal-dialog" role="document" style="width:400px">
		<div class="modal-content" style="width:402px">
			<div class="modal-header" style="width:400px; background: rgb(255, 190, 11);">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div><br>
			<form method="post" action="/~team1/restaurant/reple/no/<?php echo($restaurant->no)?>" onsubmit="return replecheck()">
			<h4 class="modal-title" style="text-align: center; margin-top:10px; margin-bottom:10px" id="exampleModelLabel">이용후기</h4><br>
				<div class="modal-body bg-light" style="width:400px;">
					<div style="padding:15px">
						<!--restaurant 이름-->
						<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:17px;">레스토랑 이름 : <?php echo($restaurant->name);?>
						</font><br><br>
						<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:17px;">작성자 ID : <?php echo($this->session->userdata("uid"));?></font><br><br>
						<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:17px;">평점</font><br><br>
						<div class="row" style="padding-left:15px">
							<div>
								<font style="padding-top:9px; padding-bottom:9px; margin-right:20px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">매우 불만족</font><br>
								<input type="radio" value="1" style="margin-left:30px;" name="reple_rank">
							</div>
							<div>
								<font style="padding-top:9px; padding-bottom:9px; margin-right:20px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">불만족</font><br>
								<input type="radio" value="2" style="margin-left:15px;" name="reple_rank">
							</div>
							<div>
								<font style="padding-top:9px; padding-bottom:9px; margin-right:20px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">보통</font><br>
								<input type="radio" value="3" style="margin-left:7px;" name="reple_rank" checked>
							</div>
							<div>
								<font style="padding-top:9px; padding-bottom:9px; margin-right:20px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">만족</font><br>
								<input type="radio" value="4" style="margin-left:10px;" name="reple_rank">
							</div>
							<div>
								<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">매우 만족</font><br>
								<input type="radio" value="5" style="margin-left:20px;" name="reple_rank">
							</div>
						</div>
						<br>
						<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">후기내용</font>
						<br>
						<textarea id="reple_text" style="margin-left:15px; padding:10px" cols="40" rows="3" name="reple_text"></textarea>
						<div style="font-size:15px; font-family: 'Noto Sans KR', sans-serif; margin-left:15px;" id="reple_cnt">(0 / 500)</div>
					</div>
				</div>
				<div class="modal-footer alert-secondary" style="width:400px; text-align:center; padding:15px">
					<div class="row">
						<div style="width:170px; margin-right:20px">
							<input type="button" style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;" class="btn btn-block btn-warning" value="닫기" data-dismiss="modal">
						</div>
						<div style="width:170px">
							<input type="submit" style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;" id="repleinsert" class="btn btn-block btn-success" value="저장하기">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script src="/~team1/my/js/jquery-3.5.1.min.js"></script>

<script>
	$(document).ready(function(){
		$('#reple_text').on('keyup', function() {
			$('#reple_cnt').html("("+$(this).val().length+" / 500)");
	 
			if($(this).val().length > 500) {
				$(this).val($(this).val().substring(0, 500));
				$('#reple_cnt').html("(500 / 500)");
			}
		});
	});
	function replecheck(){
		var reple_text = $("#reple_text").val();

		if(reple_text == ""){
			alert("내용을 입력해 주십시오");
			$("#reple_text").focus;
			return false;
		}
	}
</script>