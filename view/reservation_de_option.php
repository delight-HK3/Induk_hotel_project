<section class="banner_area">
	<div class="reservation_table d_flex align-items-center">
        	<div class="overlay bg-reserve" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
		<div class="container">
			<div class="banner_content">
				<br><br><br><br>
				<div class="row">
					<div class="col-lg-4">
						<div class="row" >
							<img src="/my/img/now.png" style="margin-left:60px">
							<div class="now" style="margin-left:10px"></div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row">
							<img class="animated fadeInDown" src="/my/img/now.png">
							<div class="next" style="margin-left:10px; margin-right:10px; width:65%;"></div>
							<img src="/my/img/next.png">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row">
							<div class="next" style="margin-left:15px; margin-right:15px"></div>
							<img src="/my/img/next.png">
						</div>
					</div>
					<div class="row">
						<font style="font-family: 'Noto Sans KR', sans-serif; margin-left:45px; font-size:20px; color:#e6ac00">Select room</font>
						<font class="animated fadeInUp" style="font-family: 'Noto Sans KR', sans-serif; margin-left:220px; font-size:20px; color:#e6ac00">Select option</font>
						<font style="font-family: 'Noto Sans KR', sans-serif; margin-left:190px; font-size:20px;">Payment room</font>
						<font style="font-family: 'Noto Sans KR', sans-serif; margin-left:180px; font-size:20px;">Payment completed</font>
					</div>
				</div>
			</div>
		</div>
    	</div> 
	<section class="accomodation_area section_gap">
        <div class="container">
		<center><h1>Select option</h1></center>
			<hr><br><br>
			<!--선택한 방 보여주기-->
			<div style="box-shadow: 5px 5px 29px 5px rgba(0,0,0,0.38);">
				<div class="row" style="padding:0px; margin: 0 auto;">
					<div class="col-lg-4" style="padding:0px">
						<a class="image_data" id="<?php echo($room->no);?>">
						<img class="single-gallery-image" src="/my/img/indukroom/<?php echo($room->image_room1);?>" style="height:100%; margin:0px; width:100%; padding-left:0px">
						</a>
					</div>
					<div class="col-lg-5" style="padding:15px">
						<font style="font-family: 'Noto Sans KR', sans-serif; font-size:35px; font-weight: 900;"><?php echo($room->name);?></font><br><br>
						<font style="font-weight: 600; font-size:20px"><?php echo(number_format($room->price));?> KRW</font><br>
						<font style="font-weight: 600; font-size:17px">(tax not included)</font>
					</div>
					<div class="col-lg-3" style="background: #e6ac00">
						<div style="padding:14px; margin:0; height:100%">
							<div class="input-group">
								<input type="button" value="상 세 보 기" id="<?php echo($room->no); ?>" class="genric-btn primary view_data" style="width:100%; height:150px; font-family: 'Noto Sans KR', sans-serif; font-size:20px; margin-top:20px;"/>
								<input type="hidden" name="name" id="roomID" value="<?php echo($room->no); ?>">
							</div>
						</div>
					</div>
				</div>
			</div>
			<br><br><br>
			<div class="container" style="width:1000px;">
				<h2>환불규정</h2>
				<blockquote class="generic-blockquote" style="font-size:15px; font-family: 'Noto Sans KR', sans-serif;">
				상기 홈페이지 요금은 정상가에서 할인된 금액으로 중복 할인은 불가능합니다.<br>
				예약 취소 및 변경은 체크인 하루 전 18:00(한국시간)까지 가능합니다.<br> 예약하신 일자에 체크인 되지 않거나 또는 위의 지정 시간 이후에 예약을 취소했을 경우에는 예약 사항에 대해 노-쇼 (No Show) 처리 되며, 이에 따른 위약금으로 예약 첫날에 해당하는 1박 객실요금이 청구되오니 유의하시기 바랍니다.<br>
				일부 프로모션 특가상품은 별도의 취소규정이 적용되며, 취소 시 첫날 1박 요금의 100%가 위약금으로 부과됩니다.<br>
				예약관련 문의사항은 (82)-2-2951-7100으로 연락해주시기 바랍니다.<br>
				예약 후 옵션 및 인원 조식등 변경이 가능하나 선택하신 room은 예약 후 변경이 불가능합니다.</blockquote>
			</div>
			<br><br><br>
			<!--선택한 방 보여주기-->
			<form name="option" method="post">	
				<div id="option_sel">
					<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div style="padding:30px; background: #F9F9F9;">
								<input type="hidden" value="<?php echo($room->name);?>" name="selectroom">
								<input type="hidden" value="<?php echo($adult_num);?>" name="adultnum" id="adult">
								<input type="hidden" value="<?php echo($child_num);?>" name="childnum" id="child">
								<?php
									if($room->no == 1){
								?>
									<div class="col-lg">
										<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">객실 수 : 1 개</font><br><br>
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">투숙인원&nbsp : &nbsp</font>
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; ">성인 <?php echo($adult_num);?> 인 / 어린이 <?php echo($child_num);?> 인</font><br><br>
										<font style="font-size:18px; font-family: 'Noto Sans KR', sans-serif; color:black">조식 (성인 및 어린이)</font>
										<font style="font-size:12px; font-family: 'Noto Sans KR', sans-serif; color:glay">투숙기간 전체 적용됩니다.</font>
									
										<br><br>
										<div class="row" style="padding-left:30px; margin-top:5px; margin-bottom:5px; height:42px">
											<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;  padding-top:7px">성인 조식&nbsp : &nbsp VIP 특별혜택&nbsp&nbsp&nbsp&nbsp</font>
											<div class="adult-qty row" style="margin-left:10px"><input type="text" name="adult_mor_num" id="morningadult" value="0" style="color:black; height:42px;" readonly></div>				
										</div><br>
										<?php
											if($child_num != 0)
											{
										?>
											<div class="row" style="padding-left:30px; margin-top:5px; margin-bottom:5px; height:42px">
												<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;  padding-top:7px">어린이 조식&nbsp : &nbsp VIP 특별혜택</font>
												<div class="child-qty row" style="margin-left:10px"><input type="text" name="child_mor_num" id="morningchild" value="0" style="color:black" readonly></div>				
											</div><br>
										<?php											
											}
										?>
										<font style="font-size:18px; font-family: 'Noto Sans KR', sans-serif; color:black">차량 픽업 서비스</font><br><br>
										<div class="row">
											<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:30px">차량 픽업 서비스&nbsp : &nbsp VIP 특별혜택</font><br>
											<font style="font-size:13px; font-family: 'Noto Sans KR', sans-serif; padding-left:30px; padding-top:10px">(필요 없는 경우 추가요청에 적어주시기 바랍니다.)</font>
										</div>
										<br><br>
										<font style="font-size:18px; font-family: 'Noto Sans KR', sans-serif; color:black">추가요청</font><br><br>
										<textarea id="bigo" style="margin-left:15px; padding:10px" cols="50" rows="3" name="bigo"></textarea>
										<div style="font-size:15px; font-family: 'Noto Sans KR', sans-serif; margin-left:15px;" id="bigo_cnt">(0 / 200)</div>
									</div>
								<?php
									}
								?>

								<?php
									if($room->no != 1)
									{
								?>
								<!--어린이가 있는 경우-->
									<div class="col-lg">
										<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">객실 수 : 1 개</font><br><br>
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">투숙인원&nbsp : &nbsp</font>
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; ">성인 <?php echo($adult_num);?> 인 / 어린이 <?php echo($child_num);?> 인</font><br><br>
										<font style="font-size:18px; font-family: 'Noto Sans KR', sans-serif; color:black">조식 (성인 및 어린이)</font>
										<font style="font-size:12px; font-family: 'Noto Sans KR', sans-serif; color:glay">투숙기간 전체 적용됩니다.</font><br><br>

										<div class="row" style="padding-left:30px; margin-top:5px; margin-bottom:5px; height:42px">
											<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;  padding-top:7px">성인 조식&nbsp : &nbsp <?php echo(number_format(50000));?> KRW</font>
											&nbsp&nbsp&nbsp<div class="adult-qty row" style="margin-left:10px"><input type="text" name="adult_mor_num" id="morningadult" value="0" style="color:black" readonly></div>	
										</div><br>
										<?php
											if($child_num != 0)
											{
										?>
											<div class="row" style="padding-left:30px; margin-top:5px; margin-bottom:5px; height:42px">
												<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;  padding-top:7px">어린이 조식&nbsp : &nbsp <?php echo(number_format(40000));?> KRW</font>
												<div class="child-qty row" style="margin-left:10px"><input type="text" name="child_mor_num" id="morningchild" value="0" style="color:black" readonly></div>				
											</div><br>
										<?php											
											}
										?>
										<font style="font-size:18px; font-family: 'Noto Sans KR', sans-serif; color:black">차량 픽업 서비스</font><br><br>
										<div class="row">
											<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:30px">차량 픽업 서비스 : <?php echo(number_format(150000))?> KRW</font>&nbsp&nbsp&nbsp  
											<div class="primary-switch" style="margin-top:3px">
												<input type="checkbox" onclick="checkcar()" name="carpicupbutton" id="carpicupbutton">
												<label for="carpicupbutton"></label>
											</div>
											<input type="hidden" name="carcheck" id="carcheck" value="0">
										</div>
										<br><br>
										<font style="font-size:18px; font-family: 'Noto Sans KR', sans-serif; color:black">추가요청</font><br><br>
										<textarea id="bigo" style="margin-left:15px; padding:10px" cols="50" rows="3" name="bigo"></textarea>
										<div style="font-size:15px; font-family: 'Noto Sans KR', sans-serif; margin-left:15px;" id="bigo_cnt">(0 / 200)</div>
									</div>
								<!--어린이가 있는 경우-->
								<?php
									}
								?>
							</div>
						</div>
						<div class="col-lg-6">
							<div style="padding:30px; background: #F9F9F9;">
								<!--투숙기간 계산-->
									<input type="hidden" name="fromDate" id="checkinhidden" value="<?php echo($checkin)?>">
									<input type="hidden" name="toDate" id="checkouthidden" value="<?php echo($checkout)?>">
									<input type="hidden" id="room_id" value="<?php echo($room->no)?>">
									<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">투숙 기간</font><br><br>
									<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px"><?php echo($checkin)?></font>
									<br><font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:55px">-</font>
									<input style="text-align:right; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:60px; background: #F9F9F9;" id="inday1" readonly>
									<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;"> 박</font>
									<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:270px; text-align:right; background: #F9F9F9;" id="dayresult" value="<?php echo($room->price)?>" readonly>
									<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font>
									<br>
									<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px"><?php echo($checkout)?></font>&nbsp&nbsp&nbsp
									<br><br>
								<!--투숙기간 계산-->
								<!--추가옵션 계산-->
									<?php
										if($room->no == 1){
									?>
										<input type="hidden" value="0" name="carpickup" id="carpic">
										<input type="hidden" value="0" name="morningadult">
										<input type="hidden" value="0" name="morningchild">
								
										<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">추가 옵션</font><br><br>
										<!--성인 조식-->
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">성인 조식</font>
										<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" value="0" id="morning1" readonly>X
										<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" id="inday2" readonly>
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">박</font>
										<font style="font-size:19px; font-family: 'Noto Sans KR', sans-serif; float:right" id="morningpay1"> VIP 특별혜택</font><br>
										<!--성인 조식-->
											<?php
												if($child_num != 0)
												{
											?>
												<!--어린이 조식-->
												<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">어린이 조식</font>
												<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" value="0" id="morning2" readonly>X
												<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" id="inday3" readonly>
												<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">박</font>
												<font style="font-size:19px; font-family: 'Noto Sans KR', sans-serif; float:right" id="morningpay2"> VIP 특별혜택</font><br>
												<!--어린이 조식-->
											<?php
												}
											?>
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">차량 픽업 서비스</font>
										<font style="font-size:19px; font-family: 'Noto Sans KR', sans-serif; float:right"> VIP 특별혜택</font><br><br>
									<?php
										}
										else if($room->no != 1){
									?>
									
										<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">추가 옵션</font><br><br>
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">성인 조식</font>
										<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" value="0" id="morning1" readonly>X
										<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" id="inday2" readonly>
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">박</font>
										<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:240px; text-align:right; background: #F9F9F9;" id="morningpay1" value="0" name="morningadult" readonly>
										<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font><br>
										
										<?php
											if($child_num != 0)
											{
										?>
											<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">어린이 조식</font>
											<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" value="0" id="morning2" readonly>X
											<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" id="inday3" readonly>
											<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">박</font>
											<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:225px; text-align:right; background: #F9F9F9;" id="morningpay2" value="0" name="morningchild" readonly>
											<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font><br>
										<?php
											}
										?>

										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">차량 픽업 서비스</font>
										<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:287px; text-align:right; background: #F9F9F9;" id="carpic" value="0" name="carpickup" readonly>
										<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font><br><br>

									<?php
										}
										
									?>
								
								<!--추가옵션 계산-->
								
									<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">세금 및 유지비</font><br><br>
									<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">세금</font>
									
									<input type="hidden" name="maintain" id="maintain" value="50000">
									<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:364px; text-align:right; background: #F9F9F9;" id="tax" value="" readonly>
									<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font><br>

									<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">유지비</font>

									<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:350px; text-align:right; background: #F9F9F9;" id="maintain1" value="<?php echo(number_format(50000))?>" readonly>
									<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font><br><br>
									<hr style="border-top: 1px solid black">
								
									<input style="font-size:25px; font-family: 'Noto Sans KR', sans-serif; border:0; width:400px; text-align:right; background: #F9F9F9;" name="allprice" id="allprice" value="" readonly>
									<font style="font-size:25px; font-family: 'Noto Sans KR', sans-serif; float:right; height:38px; padding-top:7px"> KRW</font><br>
								</div>
							</div>
						</div>
					</div><br><br>
					<input type="submit" style="font-size:15px; float:right" class="genric-btn large info circle arrow" value="결재하기" onclick="javascript: option.action='/reservation/depay'">
					<input type="submit" style="font-size:15px; float:right; margin-right:10px" class="genric-btn large primary circle arrow" value="뒤로가기" onclick="javascript: option.action='/room/detail/no/<?php echo($room->no)?>'">
				<br><br>
			</form>
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
	
 <script src="/my/js/jquery-3.5.1.min.js"></script>
 <script src="/my/js/reservation.js"></script><!--예약 스크립트-->
