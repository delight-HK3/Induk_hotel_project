<section class="banner_area">
	<div class="reservation_table d_flex align-items-center">
        <div class="overlay" style="background: url('/~team1/my/img/indukroom/<?php echo($room->image_room1);?>') no-repeat scroll center 0/cover; opacity: 0.5; " data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
		<div class="container">
			<div class="banner_content text-center"><br><br><br><br><br><br><br><br>
				<img src="/~team1/my/img/Hotel_name.png" class="animated fadeInDown" style="width:580px; height:266px"><br><br><br>
				<div class="animated fadeInUp">
					<center><font class="animated fadeInUp" style="font-family: 'Noto Sans KR', sans-serif; font-size:40px; color:white;">Room</font>
					<br><br><br>
					<font class="animated fadeInUp" style="font-family: 'Noto Sans KR', sans-serif; font-size:20px; color:white">인덕호텔의 강점인 탁트인 도심의 전경을 한눈에 볼 수 있습니다.</font></center>
				</div>
			</div>
		</div>
    </div> 
	<section class="accomodation_area section_gap">
		<div class="container">
			<div style="text-align:center">
				<font style="font-family: 'Noto Sans KR', sans-serif; font-size:35px; color:black; font-weight: 500; "><? echo($room->name);?></font>
				<br><br><hr>
			</div>
			<!--===== 사진 슬라이드 =====-->
			<div data-aos="zoom-in" data-aos-duration="3000" class = "text-center"> 							   
				<div id="<? echo($room->no);?>" class="carousel slide carousel-fade" data-ride="carousel">
				   <ol class="carousel-indicators">
						<li data-target="#<? echo($room->no);?>" data-slide-to="0" class="active"></li>
						<li data-target="#<? echo($room->no);?>" data-slide-to="1"></li>
						<li data-target="#<? echo($room->no);?>" data-slide-to="2"></li>                
					</ol>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="/~team1/my/img/indukroom/<? echo($room->image_room1);?>" class="d-block w-100" alt="1">
					</div>
					<div class="carousel-item">
						<img src="/~team1/my/img/indukroom/<? echo($room->image_room2);?>" class="d-block w-100" alt="2">
					</div>
					<div class="carousel-item">
						<img src="/~team1/my/img/indukroom/<? echo($room->image_room3);?>" class="d-block w-100" alt="3">
					</div>  
				</div>
				
				<a class="carousel-control-prev" href="#<? echo($room->no);?>" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#<? echo($room->no);?>" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>

				</div>
				
			</div>
			<!--===== 사진 슬라이드 =====-->
			<hr><br>
			<!--======= 설명 =======-->
			<div style="text-align:center" >
				<span style="color:black">
					<h3>객실소개</h3>
				</span>
				<p style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;"><? echo($room->Explanation);?></p>
			</div><br>
			<!--======= 설명 =======-->
			<hr><br>
			<!--===== 객실개요 =====-->
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<span style="color:black"><h3>객실개요</h3> </span>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6">
					   <div class="single-footer-widget">
							<span style="color:black"><h5>침대타입</h5> </span>
							<p style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;">더블</p>
							<br>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<span style="color:black"><h5>최대 투숙인원</h5> </span>
							<p style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;">4명</p>
							<br>
						</div>
					</div>

					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<span style="color:black"><h5>전망</h5> </span>
							<p style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;">시티뷰/리버뷰/전망욕실</p>
						</div>
					</div>
				</div>
			</div>
			<!--===== 객실개요 =====-->
			<hr><br>
			<!--===== 특별서비스 =====-->
			<div class="container">
				<div class="row">
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">	
							<span style="color:black"><h3>특별서비스</h3> </span>
						</div>
					</div>

					<ul style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;">
						<li style="margin-top:5px">초고층 타워의 전 객실에서 서울의 경관을 조망할 수 있는 파노라믹뷰</li>
						<li style="margin-top:5px">슈퍼프리미엄 베딩 시스템 : 최상의 숙면을 위한 침대 및 침구류</li>
						<li style="margin-top:5px">호텔 헬스장(수영장 포함)무료 이용</li>
						<li style="margin-top:5px">투숙객 전용라운지 무료 입장</li>
						<span style="color:black"><li style="margin-top:5px">만 12세(초등학교 6학년) 이하의 어린이는 라운지 입장이 제한됩니다.</li> </span>
						<li style="margin-top:5px">맞춤형 베개 제공</li>
						<li style="margin-top:5px">전 객실 초고속 무료 인터넷(유선, 와이파이)</li>
						<li style="margin-top:5px">턴다운 서비스 제공</li>
					</ul>
				</div>
			</div><br>
			<!--===== 특별서비스 =====-->
			<hr><br>
			<!--===== 어메니티 =====-->
			<div class="container">
				<div class="row">
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<span style="color:black"><h3>어메니티</h3> </span>               
						</div>
					</div>
						
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<span style="color:black"><h5>일반</h5> </span>
							<p style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;"><? echo($room->normal);?></p>
							<br>
						</div>
							<br>
					</div>

					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<span style="color:black"><h5>욕실</h5> </span>
							<p style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;"><? echo($room->bathroom);?></p>
							<br>
						</div>
					</div>

					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<span style="color:black"><h5>기타</h5> </span>
							<p style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;"><? echo($room->other);?></p>
							<br>
						</div>
					</div>
				</div>
			</div>
			<!--===== 어메니티 =====-->
			<hr><br>
			<!--===== 추가정보 =====-->
			<div class="container">
				<div class="row">
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<span style="color:black"><h3>추가정보</h3></span>
						</div>
					</div>

					<ul style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;">
						<li style="margin-top:5px">고객들에게 최상의 서비스를 제공하기위해 ￦50,000 요금이 추가 부과됩니다.</li>
						<li style="margin-top:5px">모든 객실요금에 세금 10% 가 부과됩니다.</li>
						<li style="margin-top:5px">모든 객실은 금연입니다.</li>
						<li style="margin-top:5px">객실 구조 및 인테리어는 객실 위치에 따라 이미지와 다를 수 있습니다.</li>
						<li style="margin-top:5px">호텔내 반려동물 동반 입장은 불가합니다.</li>
						<li style="margin-top:5px">객실 내 장식물 부착 관련 문의 사항은 인덕호텔 객실문의 로 연락부탁드립니다. (82-2-2951-7100)</li>
						<li style="margin-top:5px">화재의 위험이 있는 양초류의 사용은 불가합니다.</li>
						<li style="margin-top:5px">데코레이션 업체를 통한 객실 내 장식물 부착은 불가합니다.</li>
					</ul>
				</div>
			</div><br>
			<!--===== 추가정보 =====-->
			<hr><br>
			<!--===== 예약문의 =====-->
			<div class="container">
				<div class="row" id="reple">
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<span style="color:black"><h3>객실예약문의</h3></span>
						</div>
					</div>
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<span style="color:black"><h5>TEL</h5></span>
							<p style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;">82-2-2951-7100</p>
						</div>
					</div>
				</div>
			</div>
			<br><hr><br>
			<!--===== 예약문의 =====-->
			<?php
				if($this->session->userdata("rank")){
					echo("<input href='#roomModal' class='genric-btn large info circle arrow' style='float:right; font-family: \"Noto Sans KR\", sans-serif; font-size:16px;' value='예 약 하 기' data-toggle='modal'>");
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
							<form action="/~team1/room/reple_delete/no/<?php echo($row->no)?>/room_no/<?php echo($room->no);?>" method="post" >
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

<div class="modal fade" id="roomModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModelLabel" >
	<div class="modal-dialog" role="document" style="width:600px">
		<div class="modal-content" style="width:602px">
			<div class="modal-header" style="width:600px; background: rgb(255, 190, 11);">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" onClick="javascript:detailreset()">&times;</span>
				</button>
			</div><br>
			<form method="post" action="/~team1/reservation/deoption" onsubmit="return detailcheck()">
				<h4 class="modal-title" style="text-align: center; margin-top:10px; margin-bottom:10px" id="exampleModelLabel">Room 예약</h4><br>
				<div class="modal-body bg-light" style="width:600px;">
					<div style="padding:15px">
						<br>
						<!--room 이름-->
						<input type="hidden" name="selectroom" value="<?php echo($room->name);?>">
						<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:20px;">예약 정보입력</font><br><br>
						<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">이름 : <?php echo($room->name);?>
						</font>&nbsp&nbsp&nbsp&nbsp&nbsp
						<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">가격 : <?php echo(number_format($room->price)); ?> KRW</font>
						
						<br><br>
						<!--room 이름-->
						
						<!--room 예약일자-->
						<div class="row" style="padding-left:15px; padding-bottom:15px">
							<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">예약일자 : &nbsp</font>
							<div class="form-inline">
								<input style="z-index:10000;" type="text" name="fromDate" class="form-control" placeholder="CheckIn Date" id="de_fromDate" readonly="readonly">
							</div>&nbsp&nbsp&nbsp
							<div class="form-inline">
								<input style="z-index:10000;" type="text" name="toDate" class="form-control" placeholder="CheckOut Date" id="de_toDate" readonly="readonly">
							</div>&nbsp&nbsp&nbsp
						</div><br>
						<!--room 예약 및 시간일자-->
						<!--room 인원 정하기-->
						<div class="row" style="padding-left:15px; padding-bottom:15px">
							<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">adult (어른)</font>&nbsp&nbsp
							<div class="deroom-qty row" style="margin-left:10px">
								<input style="color:black" type="text" name="adultnum" id="adult" value="1" readonly="readonly">
							</div>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:15px;">child (어린이)</font>
							<div class="deroom-qty row" style="margin-left:10px">
								<input style="color:black" type="text" name="childnum" id="child" value="0" readonly="readonly">
							</div>
						</div><br>
						<!--room 예약일자-->
					</div>
				</div>
				<div class="modal-footer alert-secondary" style="width:600px; text-align:center; padding:15px">
					<div class="row">
						<div style="width:270px; margin-right:20px">
							<input type="button" style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;" class="btn btn-block btn-warning" value="닫기" data-dismiss="modal">
						</div>
						<div style="width:270px">
							<input type="submit" style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;" id="insert" class="btn btn-block btn-success" value="예약하기">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="repleModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModelLabel" >
	<div class="modal-dialog" role="document" style="width:400px">
		<div class="modal-content" style="width:402px">
			<div class="modal-header" style="width:400px; background: rgb(255, 190, 11);">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div><br>
			<form method="post" action="/~team1/room/reple/no/<?php echo($room->no)?>?>" onsubmit="return replecheck()">
			<h4 class="modal-title" style="text-align: center; margin-top:10px; margin-bottom:10px" id="exampleModelLabel">이용후기</h4><br>
				<div class="modal-body bg-light" style="width:400px;">
					<div style="padding:15px">
						<!--room 이름-->
						<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:17px;">Room 이름 : <?php echo($room->name);?>
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