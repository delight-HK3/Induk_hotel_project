<section class="banner_area">
	<div class="serveervation_table d_flex align-items-center">
        	<div class="overlay" style="background: url('/my/img/service/<?php echo($service->image_serve1);?>') no-repeat scroll center 0/cover; opacity: 0.5; " data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
		<div class="container">
			<div class="banner_content text-center"><br><br><br><br><br><br><br><br>
				<img src="/my/img/Hotel_name.png" class="animated fadeInDown" style="width:580px; height:266px"><br><br><br>
				<div class="animated fadeInUp">
					<center><font class="animated fadeInUp" style="font-family: 'Noto Sans KR', sans-serif; font-size:40px; color:white;">Service</font>
					<br><br><br>
					<font class="animated fadeInUp" style="font-family: 'Noto Sans KR', sans-serif; font-size:20px; color:white">"건강한 정신은 건강한 육체에서 나온다." 라는 말 처럼 인덕호텔에서는 휴식뿐만 아니라 차원이 다른 고급 서비스를 즐기실 수 있습니다.</font></center>
				</div>
			</div>
		</div>
    	</div> 
</section>

<section class="banner_area">
	<section class="accomodation_area section_gap">
        	<div class="container">
			<div style="text-align:center">
                		<font style="font-family: 'Noto Sans KR', sans-serif; font-size:35px; color:black; font-weight: 600; "><?php echo($service->name);?></font>
				<br><br><hr>
            		</div>
			<!--===== 부대시설 사진 슬라이드 =====-->
                    	<div data-aos="zoom-in" data-aos-duration="3000" class = "text-center">       
                        	<div id="<?php echo($service->no);?>" class="carousel slide carousel-fade" data-interval = "false">
				    	<ol class="carousel-indicators">
						<li data-target="#<?php echo($service->no);?>" data-slide-to="0" class="active"></li>
						<li data-target="#<?php echo($service->no);?>" data-slide-to="1"></li>
						<li data-target="#<?php echo($service->no);?>" data-slide-to="2"></li>
						<li data-target="#<?php echo($service->no);?>" data-slide-to="3"></li> 
						<li data-target="#<?php echo($service->no);?>" data-slide-to="4"></li> 								
				    	</ol>
                            		<div class="carousel-inner">
						<div class="carousel-item active">
						    <img src="/my/img/service/<?php echo($service->image_serve1);?>" class="d-block w-100"  height="700" alt="1">
						</div>
						<div class="carousel-item">
						    <img src="/my/img/service/<?php echo($service->image_serve2);?>" class="d-block w-100"  height="700" alt="2">
						</div>
						<div class="carousel-item">
						    <img src="/my/img/service/<?php echo($service->image_serve3);?>" class="d-block w-100"  height="700" alt="3">
						</div>
						<div class="carousel-item">
						    <img src="/my/img/service/<?php echo($service->image_serve4);?>" class="d-block w-100"  height="700" alt="3">
						</div>
						<div class="carousel-item">
						    <img src="/my/img/service/<?php echo($service->image_serve5);?>" class="d-block w-100"  height="700" alt="3">
						</div>								
                            		</div>
				    <a class="carousel-control-prev" href="#<?php echo($service->no);?>" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				    </a>
				    <a class="carousel-control-next" href="#<?php echo($service->no);?>" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				    </a>
			</div>                  
		</div><hr><br>
                <!--===== 부대시설 사진 슬라이드 =====-->
				<!--===== 부대시설 설명 =====-->
				<div style="text-align:center" >
					<span style="color:black">
						<h3>시설 소개</h3>
					</span>
					<font style="font-family: 'Noto Sans KR', sans-serif; font-size:16px"><?php echo($service->Explanation);?></font>
				</div><br>
				<hr><br>
				<!--===== 부대시설 설명 =====-->

				<!--===== 부대시설 사용 설명 =====-->				
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
								<?php echo date("H:i",strtotime($service->opentime));?></font>&nbsp-
								<font style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;">
								<?php echo date("H:i",strtotime($service->closetime));?></font><br>
							</div><br>
						</div>
						<div class="col-lg-6">
							<div class="single-footer-widget">
								<font style="font-family: 'Noto Sans KR', sans-serif; font-size:20px; font-weight: 500; color:black">이용가격</font><br><br>
								<font style="font-family: 'Noto Sans KR', sans-serif; font-size:15px"><?php echo(number_format($service->price));?> KRW / 1일</font><br><br>
							</div>
						</div>
					</div>
				</div>
			<!--===== 객실개요 =====-->
			<br><hr><br>
			<!--===== 특별서비스 =====-->
			<div class="container">
				<div class="row" id="reple">
					<div class="col-lg-3">
						<div class="single-footer-widget">
							<span style="color:black"><h3>추가정보</h3> </span>
							<br>
						</div>
					</div>
					<div class = "col-lg-9">
						<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px; color:blue">정부의 사회적 거리두기 지침에 따라 영업 시간이 변동될 수 있습니다.</li>
						<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px"><?php echo($service->bego);?></li>
						<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px"><?php echo($service->insertbigo);?></li>
						<br>
						<li style="font-family: 'Noto Sans KR', sans-serif; font-size:17px; margin-top:5px">백신패스제 운영</li>
						<ul style="list-style-type: none;">
							<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px">- 시행 일자: 2021.11.15 부터</li>
							<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px">- 19세 이상은 백신2차 접종 후 15일차부터 이용이 가능합니다.</li>
							<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px">- 미접종자이신 분은 48시간 이내 PCR 음성확인서를 필수로 지참해 주시길 바랍니다.</li>
							<li style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; margin-top:5px">- 완치자 또는 백신 접종 예외로 인정되는 경우 보건소 확인증을 필수로 지참해 주시길 바랍니다.</li>
						</ul>
					</div>
				</div>
			</div>	
			<!--===== 특별서비스 =====-->
			<hr>
			<br><br><br><br>
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
							<form action="/service/reple_delete/no/<?php echo($row->no)?>/service_no/<?php echo($service->no);?>" method="post" >
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
										<img src="/my/img/star-on.png">
										<img src="/my/img/star-on.png">
										<img src="/my/img/star-on.png">
										<img src="/my/img/star-on.png">
										<img src="/my/img/star-on.png">
								<?php
									}
								?>
								<?php
									if($row->reple_rank == 4){
								?>
										<img src="/my/img/star-on.png">
										<img src="/my/img/star-on.png">
										<img src="/my/img/star-on.png">
										<img src="/my/img/star-on.png">
										<img src="/my/img/star-off.png">
								<?php
									}
								?>
								<?php
									if($row->reple_rank == 3){
								?>
										<img src="/my/img/star-on.png">
										<img src="/my/img/star-on.png">
										<img src="/my/img/star-on.png">
										<img src="/my/img/star-off.png">
										<img src="/my/img/star-off.png">
								<?php
									}
								?>
								<?php
									if($row->reple_rank == 2){
								?>
										<img src="/my/img/star-on.png">
										<img src="/my/img/star-on.png">
										<img src="/my/img/star-off.png">
										<img src="/my/img/star-off.png">
										<img src="/my/img/star-off.png">
								<?php
									}
								?>
								<?php
									if($row->reple_rank == 1){
								?>
										<img src="/my/img/star-on.png">
										<img src="/my/img/star-off.png">
										<img src="/my/img/star-off.png">
										<img src="/my/img/star-off.png">
										<img src="/my/img/star-off.png">
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
<div class="modal fade" id="repleModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModelLabel" >
	<div class="modal-dialog" role="document" style="width:400px">
		<div class="modal-content" style="width:402px">
			<div class="modal-header" style="width:400px; background: rgb(255, 190, 11);">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div><br>
			<form method="post" action="/service/reple/no/<?php echo($service->no)?>?>" onsubmit="return replecheck()">
			<h4 class="modal-title" style="text-align: center; margin-top:10px; margin-bottom:10px" id="exampleModelLabel">이용후기</h4><br>
				<div class="modal-body bg-light" style="width:400px;">
					<div style="padding:15px">
						<!--service 이름-->
						<font style="padding-top:9px; padding-bottom:9px; font-family: 'Noto Sans KR', sans-serif; font-size:17px;">부대시설 이름 : <?php echo($service->name);?>
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

<script src="/my/js/jquery-3.5.1.min.js"></script>

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
