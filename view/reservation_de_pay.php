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
							<img src="/my/img/now.png">
							<div class="now" style="margin-left:10px; margin-right:10px; width:65%;"></div>
							<img class="animated fadeInDown" src="/my/img/now.png">
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
						<font style="font-family: 'Noto Sans KR', sans-serif; margin-left:220px; font-size:20px; color:#e6ac00">Select option</font>
						<font class="animated fadeInUp" style="font-family: 'Noto Sans KR', sans-serif; margin-left:190px; font-size:20px; color:#e6ac00">Payment room</font>
						<font style="font-family: 'Noto Sans KR', sans-serif; margin-left:180px; font-size:20px; ">Payment completed</font>
					</div>
				</div>
			</div>
		</div>
    	</div> 
	<section class="accomodation_area section_gap">
        <div class="container">
		<center><h1>Payment Room</h1></center>
			<hr><br><br>
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
								<input type="button" value="??? ??? ??? ???" id="<?php echo($room->no); ?>" class="genric-btn primary view_data" style="width:100%; height:150px; font-family: 'Noto Sans KR', sans-serif; font-size:20px; margin-top:20px;"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<br><br><br>
			<div class="container" style="width:1000px;">
				<h2>????????????</h2>
				<blockquote class="generic-blockquote" style="font-size:15px; font-family: 'Noto Sans KR', sans-serif;">
				?????? ???????????? ????????? ??????????????? ????????? ???????????? ?????? ????????? ??????????????????.<br>
				?????? ?????? ??? ????????? ????????? ?????? ??? 18:00(????????????)?????? ???????????????.<br> ???????????? ????????? ????????? ?????? ????????? ?????? ?????? ?????? ?????? ????????? ????????? ???????????? ???????????? ?????? ????????? ?????? ???-??? (No Show) ?????? ??????, ?????? ?????? ??????????????? ?????? ????????? ???????????? 1??? ??????????????? ??????????????? ??????????????? ????????????.<br>
				?????? ???????????? ??????????????? ????????? ??????????????? ????????????, ?????? ??? ?????? 1??? ????????? 100%??? ??????????????? ???????????????.<br>
				???????????? ??????????????? (82)-2-2951-7100?????? ?????????????????? ????????????.<br>
				?????? ??? ?????? ??? ?????? ????????? ????????? ???????????? ???????????? room??? ?????? ??? ????????? ??????????????????.</blockquote>
			</div>
			<br><br><br>

			<form name="pay" action="/reservation/insertroom" method="post">	
				<div id="option_sel">
					<div class="container">
					<input type="hidden" value="<?php echo($adult_num);?>" name="adultnum" id="adult">
					<input type="hidden" value="<?php echo($child_num);?>" name="childnum" id="child">
					<input type="hidden" name="fromDate" id="checkinhidden" value="<?php echo($checkin);?>">
					<input type="hidden" name="toDate" id="checkouthidden" value="<?php echo($checkout);?>">
					<input type="hidden" name="selectroom" id="room_name" value="<?php echo($room->name);?>"> <!--???????????? ?????? ??????-->
					<input type="hidden" name="room_name" id="room_id" value="<?php echo($room->no);?>"> <!--????????? ?????? ?????? ??????-->
					<input type="hidden" name="room_no" id="room" value="<?php echo($room->no);?>"> <!--?????? ?????? ??????-->
					<div class="row">
						<div class="col-lg-6" style="background: #F9F9F9;">
							<!--???????????? ???????????? ????????????-->
							<div style="padding:30px;">
								<input type="hidden" name="member_no" value="<?php echo($member->no);?>">
								<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">????????? ??????</font>
								<font style="font-size:15px; font-family: 'Noto Sans KR', sans-serif;">(?????? ????????? ???????????? ???????????????.)</font><br><br>
								<div class="row">
									<div class="col-lg-6" style="padding-left:15px; padding-top:10px">
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">?????????</font><br>
										<input class="form-control" type="text" style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; height:40px" value="<?php echo($member->uid);?>" readonly>
									</div>
									<div class="col-lg-6" style="padding-left:15px; padding-top:10px">
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">??????</font><br>
										<input class="form-control" type="text" style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; height:40px" value="<?php echo($member->name);?>" readonly>
									</div>
								</div><br>
								<div class="row">
									<div class="col-lg-6" style="padding-left:15px; padding-top:10px">
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">????????????</font><br>
										<input class="form-control" type="text" style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; height:40px" value="<?php echo($member->phone);?>" readonly>
									</div>
									<div class="col-lg-6" style="padding-left:15px; padding-top:10px">
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">?????????</font><br>
										<input class="form-control" type="text" style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; height:40px" value="<?php echo($member->email);?>" readonly>
									</div>
								</div>
								<br><br>
								<!--???????????? ???????????? ????????????-->
								<!--???????????? ??????-->
								<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">???????????? ??????</font><br><br>
								<div class="col-lg">
									<div class="row" style="padding-left:15px">										
										<div class="primary-checkbox">
											<input type="radio" name="pay_method" value="0" id="four-checkbox" oninput="disablepay()" checked>
											<label for="four-checkbox" style="border:1px solid black; margin:4px"></label>
										</div>
										<font style="margin-right:15px; font-family: 'Noto Sans KR', sans-serif;">&nbsp&nbsp : ????????????</font>
										<div class="primary-checkbox">
											<input type="radio" name="pay_method" value="1" id="five-checkbox" oninput="disablepay()" >
											<label for="five-checkbox" style="border:1px solid black; margin:4px"></label>
										</div>
										<font style="margin-right:15px; font-family: 'Noto Sans KR', sans-serif;">&nbsp&nbsp : ????????????</font>
									</div>
								</div><br><br>
								<div class="col-lg" name="card" id="card">
									<div class="row">
										<font style="margin-left:15px; font-family: 'Noto Sans KR', sans-serif; padding-top:9px; padding-bottom:9px">????????????</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
										<select id="serchcard" name="card">
											<option value="0" selected>???????????????</option>
											<option value="1">????????????</option>
											<option value="2">????????????</option>
											<option value="3">????????????</option>
											<option value="4">????????????</option>
											<option value="5">???????????????</option>
										</select>
									</div><br>
									<div class="row" style="padding-top:15px">
										<font style="margin-left:15px; font-family: 'Noto Sans KR', sans-serif; padding-top:9px; padding-bottom:9px">????????????</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
										<div class="form-inline">
											<input type="text" id="card_num1" class="form-control" maxlength="4" style="width:65px; text-align:center" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">&nbsp&nbsp-&nbsp&nbsp
											<input type="password" id="card_num2" class="form-control" maxlength="4" style="width:65px; text-align:center" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">&nbsp&nbsp-&nbsp&nbsp
											<input type="text" id="card_num3" class="form-control" maxlength="4" style="width:65px; text-align:center" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">&nbsp&nbsp-&nbsp&nbsp
											<input type="password" id="card_num4" class="form-control" maxlength="4" style="width:65px; text-align:center" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
										</div>
									</div><br>
									<div class="row" style="padding-top:15px">
										<font style="margin-left:15px; font-family: 'Noto Sans KR', sans-serif; padding-top:9px; padding-bottom:9px">????????????</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
										<div class="form-inline">
											<input type="text" id="card_day1" class="form-control" maxlength="2" style="width:65px; text-align:center" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="mm">&nbsp&nbsp/&nbsp&nbsp
											<input type="text" id="card_day2" class="form-control" maxlength="2" style="width:65px; text-align:center" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="YY">&nbsp&nbsp&nbsp
										</div>
									</div><br>
									<div class="row" style="padding-top:15px">
										<font style="margin-left:15px; font-family: 'Noto Sans KR', sans-serif; padding-top:9px; padding-bottom:9px">????????????</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
										<input type="password" id="protected" class="form-control" maxlength="3" style="width:100px;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="????????????">
										
									</div>
								</div>
								<div class="col-lg" name="account" id="account">
									<div class="row">
										<font style="margin-left:15px; font-family: 'Noto Sans KR', sans-serif; padding-top:9px; padding-bottom:9px">????????????</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
										<select id="selectaccount" name="account">
											<option value="0" selected>???????????????</option>
											<option value="1">???????????? 792013-02-321415</option>
											<option value="2">???????????? 321-451-876312</option>
											<option value="3">???????????? 182-914201-412031</option>
											<option value="4">???????????? 301-1123-9754-23</option>
											<option value="5">??????????????? 3125-01-340192</option>
										</select>
									</div>
								</div>
								<!--???????????? ??????-->
							</div>
						</div>
						<div class="col-lg-6">
							<div style="padding:30px; background: #F9F9F9;">
								<!--???????????? ??????-->
									<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">?????? ??? : 1 ???</font><br><br>
									<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">????????????</font><br><br>
									<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">?????? <?php echo($adult_num);?> ??? / ????????? <?php echo($child_num);?> ???</font><br><br>
									<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">?????? ??????</font><br><br>
									<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px"><?php echo($checkin);?></font>
									<br><font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:55px">-</font>
									<input style="text-align:right; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:60px; background: #F9F9F9;" id="inday1" name="daybyday" readonly>
									<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;"> ???</font>
									<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:270px; text-align:right; background: #F9F9F9;" id="dayresult" value="<?php echo($room->price);?>" readonly>
									<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font>
									<br>
									<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px"><?php echo($checkout)?></font>&nbsp&nbsp&nbsp
									<br><br>
								<!--???????????? ??????-->
								<!--???????????? ??????-->
									<?php
										if($room->no == 1){
									?>
										<input type="hidden" value="0" name="carpickup" id="carpic">
										<input type="hidden" value="0" name="morningadult">
										<input type="hidden" value="0" name="morningchild">
									
										<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">?????? ??????</font><br><br>
										<!--?????? ??????-->
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">?????? ??????</font>
										<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" name="adult_mor_num" value="<?php echo($adult_mor_num);?>" id="morning1" readonly>X
										<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" id="inday2" readonly>
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">???</font>
										<font style="font-size:19px; font-family: 'Noto Sans KR', sans-serif; float:right" id="morningpay1"> VIP ????????????</font><br>
										<!--?????? ??????-->
											<?php
												if($child_num != 0)
												{
											?>
												<!--????????? ??????-->
												<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">????????? ??????</font>
												<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" name="child_mor_num" value="<?php echo($child_mor_num);?>" id="morning2" readonly>X
												<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" id="inday3" readonly>
												<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">???</font>
												<font style="font-size:19px; font-family: 'Noto Sans KR', sans-serif; float:right" id="morningpay2"> VIP ????????????</font><br>
												<!--????????? ??????-->
											<?php
												}
											?>
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">?????? ?????? ?????????</font>
										<font style="font-size:19px; font-family: 'Noto Sans KR', sans-serif; float:right"> VIP ????????????</font><br><br>
										<div class="row">
											<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:30px">???????????? :</font>
											<textarea style="margin-left:15px; font-family: 'Noto Sans KR', sans-serif; padding:10px;" cols="45" rows="3" name="bigo" readonly><?php echo($bigo);?></textarea>
										</div><br><br>
									<?php
										}
										else if($room->no != 1){
									?>
									
										<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">?????? ??????</font><br><br>
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">?????? ??????</font>
										<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" name="adult_mor_num" value="<?php echo($adult_mor_num);?>" id="morning1" readonly>X
										<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" id="inday2" readonly>
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">???</font>
										<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:235px; text-align:right; background: #F9F9F9;" id="morningpay1" value="<?php echo($adult_morning);?>" name="morningadult" readonly>
										<font style="font-size:20px; float:right; font-family: 'Noto Sans KR', sans-serif;"> KRW</font><br>
										
										<?php
											if($child_num != 0)
											{
										?>
											<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">????????? ??????</font>
											<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" name="child_mor_num" value="<?php echo($child_mor_num);?>" id="morning2" readonly>X
											<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: #F9F9F9;" id="inday3" readonly>
											<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">???</font>
											<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:220px; text-align:right; background: #F9F9F9;" id="morningpay2" value="<?php echo($child_morning);?>" name="morningchild" readonly>
											<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font><br>
										<?php
											}
										?>
										<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">?????? ?????? ?????????</font>
										<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:282px; text-align:right; background: #F9F9F9;" id="carpic" value="<?php echo($carpickup);?>" name="carpickup" readonly>
										<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font><br><br>
										<div class="row">
											<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:30px">???????????? :</font>
											<textarea style="margin-left:15px; font-family: 'Noto Sans KR', sans-serif; padding:10px;" cols="45" rows="3" name="bigo" readonly><?php echo($bigo);?></textarea>
										</div><br><br>
									<?php
										}	
									?>
								
								<!--???????????? ??????-->
								<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">?????? ??? ?????????</font><br><br>
								<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">??????</font>
									
								<input type="hidden" id="maintain" value="50000">
								<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:364px; text-align:right; background: #F9F9F9;" id="tax" value="" readonly>
								<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font><br>

								<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">?????????</font>
								
								<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:350px; text-align:right; background: #F9F9F9;" name="maintain" id="maintain1" value="<?php echo(number_format(50000))?>" readonly>
								<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font><br><br>
								<hr style="border-top: 1px solid black">
								
								<input style="font-size:25px; font-family: 'Noto Sans KR', sans-serif; border:0; width:400px; text-align:right; background: #F9F9F9;" name="allprice" id="allprice" value="" readonly>
								<font style="font-size:25px; font-family: 'Noto Sans KR', sans-serif; float:right; height:38px; padding-top:7px"> KRW</font><br>
							</div>
						</div>
					</div>
				</div><br><br>
				<input type="submit" id="insert" style="font-size:15px; float:right; margin-right:15px" class="genric-btn large info circle arrow" value="????????????" onclick="return checkpay()">
				<input type="submit" style="font-size:15px; float:right; margin-right:10px" class="genric-btn large primary circle arrow" value="????????????" onclick="javascript: pay.action='/reservation/deoption'">
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
 <script src="/my/js/reservation.js"></script><!--?????? ????????????-->
