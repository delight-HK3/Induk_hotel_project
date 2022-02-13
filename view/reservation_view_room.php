<section class="banner_area">
	<div class="reservation_table d_flex align-items-center">
        <div class="overlay bg-reserve" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
		<div class="container">
			<div class="banner_content" >
				<br><br><br><br>
				<div class="row">
					<div class="col-lg-4">
						<div class="row" >
							<img class="animated fadeInDown" src="/~team1/my/img/now.png" style="margin-left:60px">
							<div class="next" style="margin-left:10px"></div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row">
							<img src="/~team1/my/img/next.png">
							<div class="next" style="margin-left:10px; margin-right:10px; width:65%;"></div>
							<img src="/~team1/my/img/next.png">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row">
							<div class="next" style="margin-left:15px; margin-right:15px"></div>
							<img src="/~team1/my/img/next.png">
						</div>
					</div>
					<div class="row">
						<font class="animated fadeInUp" style="font-family: 'Noto Sans KR', sans-serif; margin-left:45px; font-size:20px; color:#e6ac00">Select room</font>
						<font style="font-family: 'Noto Sans KR', sans-serif; margin-left:220px; font-size:20px; ">Select option</font>
						<font style="font-family: 'Noto Sans KR', sans-serif; margin-left:190px; font-size:20px; ">Payment room</font>
						<font style="font-family: 'Noto Sans KR', sans-serif; margin-left:180px; font-size:20px; ">Payment completed</font>
					</div>
				</div>
			</div>
		</div>
    </div> 
	<section class="accomodation_area section_gap">
	
		<div class="container">  
			<center><h1>Select Room</h1></center>
			<hr><br><br>
			<h2>환불규정</h2>
			<blockquote class="generic-blockquote" style="font-size:15px; font-family: 'Noto Sans KR', sans-serif;">
			상기 홈페이지 요금은 정상가에서 할인된 금액으로 중복 할인은 불가능합니다.<br>
			예약 취소 및 변경은 체크인 하루 전 18:00(한국시간)까지 가능합니다.<br> 예약하신 일자에 체크인 되지 않거나 또는 위의 지정 시간 이후에 예약을 취소했을 경우에는 예약 사항에 대해 노-쇼 (No Show) 처리 되며, 이에 따른 위약금으로 예약 첫날에 해당하는 1박 객실요금이 청구되오니 유의하시기 바랍니다.<br>
			일부 프로모션 특가상품은 별도의 취소규정이 적용되며, 취소 시 첫날 1박 요금의 100%가 위약금으로 부과됩니다.<br>
			예약관련 문의사항은 (82)-2-2951-7100으로 연락해주시기 바랍니다.<br>
			예약 후 옵션 및 인원 조식등 변경이 가능하나 선택하신 room은 예약 후 변경이 불가능합니다.
			</blockquote>
		</div><br><br>

    <div class="container">	
		<div class="row">
<?php
	foreach($room as $row)
	{
?>
	<!--room 목록-->
			<div class="col-lg-6" data-aos="fade-up">
				<div style="padding:0px">
					<a class="image_data" id="<?php echo($row->no);?>">
						<img class="single-gallery-image" src="/~team1/my/img/indukroom/<?php echo($row->image_room1);?>" style="height:100%; width:100%;">
					</a>
				</div>
				<div class="col-lg-12" style="border:1px solid rgb(179, 131, 0); padding:0px; margin-bottom:60px"><br>
					<font style="font-family: 'Noto Sans KR', sans-serif; font-size:25px; font-weight:900; margin-left:15px"><?php echo($row->name);?></font><br><br>
					<font style="font-weight: 600; font-size:20px; margin-left:15px">구분 : <?php echo($row->gubun_name); ?></font><br><br>
					<font style="font-weight: 600; font-size:15px; margin-left:15px"><?php echo(number_format($row->price));?> KRW</font><br>
					<font style="font-weight: 600; font-size:13px; margin-left:15px">(tax not included) </font>	
					<br><br>
					<input type="hidden" name="name" id="roomID" value="<?php echo($row->no); ?>">
					<div class="col-lg-12 row" style="padding-right:0px;padding-left:0px; margin:0px">
						<button class="genric-btn primary view_data" id="<?php echo($row->no); ?>"  style="font-family: 'Noto Sans KR', sans-serif; font-size:16px; width:50%; height:60px">상&nbsp세&nbsp보&nbsp기</button>
						<button class="genric-btn info room_data" name="room" id="<?php echo($row->name);?>" style="font-family: 'Noto Sans KR', sans-serif; font-size:16px; width:50%; height:60px">선&nbsp택&nbsp하&nbsp기</button>
					</div>
				</div>
			</div>
		
		<!--room 목록-->
		<br><br><br>
<?php
	}	
?>
		</div>
	</div>
		<!--예약정보 확인하는 navbar 및 확인 -->
		<div class="reserveinsert"><!--아래에 navbar 붙이기-->
			<div class="container" style="background: rgb(155, 128, 75);" >
				<form action="/~team1/reservation/option" method="post" onsubmit="return reservationroom()" > <!--예외처리 확인-->
					<div class="row">
						<div class="col-lg-3 ">
							<input type="hidden" name="carpicupbutton" value="1">
							<div style="padding-top:25px; padding-left:15px">
								<div class="form-group">
									<div class="input-group date">
										<h4 style="color:white; margin:0">CheckIn  </h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
										<input class="reserve" type="text" name="fromDate" id="1checkin" value="<?php echo($checkin)?>" readonly="readonly">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group date">       
										<h4 style="color:white; margin:0">CheckOut  </h4>&nbsp&nbsp
										<input class="reserve" type="text" name="toDate" id="1checkout" value="<?php echo($checkout)?>" readonly="readonly">
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-2">
							<div class="row justify-content-md-center" style="padding-top:30px;">
								<div style="text-align:center">
									<h4 style="color:white; margin:0">성인 </h4>
									<input class="reserve" type="text" style="width:70px; border:0; font-size:20px" name="adultnum" id="1adult" value="<?php echo($adult_num)?>" readonly="readonly">
								</div>
								<div style="text-align:center">
									<h4 style="color:white; margin:0">어린이 </h4>
									<input class="reserve" type="text" style="width:70px; border:0; font-size:20px" name="childnum" id="1child" value="<?php echo($child_num)?>" readonly="readonly">
								</div>	
							</div><br>
						</div>
						<div class="col-lg-4">
							<div class="row justify-content-md-center" style="padding-top:30px;">
								<h4 style="color:white; margin:0; padding-top:10px">Room 선택 </h4>&nbsp&nbsp&nbsp&nbsp
								<input class="reserve" type="text" name="selectroom" id="1selectroom2" style="font-size:20px; height:50px; width:70%" value="" readonly="readonly" >
							</div><br>
						</div>
						<div class="col-lg-3">
							<div class="row justify-content-md-center" style="padding-top:30px;">
								<a href="/~team1/main" style="font-size:15px;" class="genric-btn large primary circle arrow">처음으로</a>&nbsp&nbsp&nbsp
								<input type="submit" style="font-size:15px;" class="genric-btn large info circle arrow" value="옵션선택">
							</div><br><br><br>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>	
</section>

<div id="dataModal" tabindex="-1" class="modal fade" role="dialog" aria-labelledby="exampleModelLabel">  
      <div class="modal-dialog " role="document" style="width:600px; max-width:600px; padding-top:55px;">  
           <div class="modal-content target" style="width:600px; height:800px; overflow:auto; ">  
                <div class="modal-body" id="employee_detail" style="padding:0; height:750px">
				
                </div>  
           </div>  
      </div>  
 </div>  
	<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModelLabel" >
	 <div class="modal-dialog" role="document" style="width:1050px; max-width:1050px; padding-top:100px">
           <div class="modal-content" style="width:950px; height:550px;">  
                <div class="modal-body" id="image_detail" style="padding:0; height:700px">  

                </div>  
           </div>  
     </div>  
 </div> 
 <script src="/~team1/my/js/jquery-3.5.1.min.js"></script>
 <script src="/~team1/my/js/reservation.js"></script><!--예약 스크립트-->
