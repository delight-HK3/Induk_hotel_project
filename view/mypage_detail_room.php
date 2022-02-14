<br>
<div class="container">
	<div style="padding:30px; background: rgb(255, 241, 204); border:4px solid #e6ac00">
		<!--투숙기간 계산-->
			<input type="hidden" name="fromDate" id="checkinhidden" value="<?php echo($row->checkinday)?>">
			<input type="hidden" name="toDate" id="checkouthidden" value="<?php echo($row->checkoutday)?>">
			<input type="hidden" id="room_id" value="<?php echo($room->no)?>">
			<input type="hidden" value="<?php echo($row->adult_num);?>" name="adultnum" id="adult">
			<input type="hidden" value="<?php echo($row->child_num);?>" name="childnum" id="child">
			<input type="hidden" value="<?php echo($room->price);?>" name="dayresult" id="dayresult">
			<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">영수증</font>
			<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; color:black; float:right">예약번호 : <?php echo($row->reservation_no)?></font><br>
			<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; color:black; float:right">결제일자 : <?php echo($row->pay_day)?></font><br>
			<?php
				if($row->state == 0){
					echo("<font style='font-size:16px; font-family: \"Noto Sans KR\", sans-serif; color:black; float:right'>결제수단 : 카드결재</font>");
				}
				else{
					echo("<font style='font-size:16px; font-family: \"Noto Sans KR\", sans-serif; color:black; float:right'>결제수단 : 계좌이체</font>");
				}
			?>
			<br><br>
			<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">Room 이름&nbsp : </font>
			<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:5px"><?php echo($room->name)?></font>
			<br><br>
			<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">투숙인원&nbsp : </font>
			<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:5px">성인 <?php echo($row->adult_num);?> 인 / 어린이 <?php echo($row->child_num);?> 인</font><br><br>
			
			<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">투숙 기간</font><br><br>
			<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px"><?php echo($row->checkinday);?></font>
			<br><font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:55px">-</font>
			<input style="text-align:right; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:60px; background: rgb(255, 241, 204);" id="inday1" name="daybyday" readonly="readonly">
			<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">&nbsp X &nbsp</font>
			<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;"> <?php echo(number_format($room->price));?></font>
			<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:180px; text-align:right; background: rgb(255, 241, 204);" value="" readonly="readonly" id="allprice">
			<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font>
			<br>
			<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px"><?php echo($row->checkoutday)?></font>&nbsp&nbsp&nbsp
			<br><br>
		<!--투숙기간 계산-->
		<!--추가옵션 계산-->
		<?php
			if($room->no == 1){
		?>
			<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">추가 옵션</font><br><br>
			<!--성인 조식-->
			<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">성인 조식</font>
			<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: rgb(255, 241, 204);" name="adult_mor_num" value="<?php echo($row->adult_num);?>" id="morning1" readonly="readonly">
			<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">X &nbsp 50,000</font>
			<font style="font-size:19px; font-family: 'Noto Sans KR', sans-serif; float:right" id="morningpay1"> VIP 특별혜택</font><br>
			<!--성인 조식-->
			<?php
				if($row->child_num != 0)
				{
			?>
					<!--어린이 조식-->
					<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">어린이 조식</font>
					<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: rgb(255, 241, 204);" name="child_mor_num" value="<?php echo($row->child_num);?>" id="morning2" readonly="readonly">
					<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">X &nbsp 40,000</font>
					<font style="font-size:19px; font-family: 'Noto Sans KR', sans-serif; float:right" id="morningpay2"> VIP 특별혜택</font><br>
					<!--어린이 조식-->
			<?php
				}
			?>
			<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">차량 픽업 서비스</font>
			<font style="font-size:19px; font-family: 'Noto Sans KR', sans-serif; float:right"> VIP 특별혜택</font><br><br>
			<div class="row">
				<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:30px">추가사항 :</font>
				<textarea style="margin-left:15px; font-family: 'Noto Sans KR', sans-serif; padding:10px;" cols="46" rows="3" name="bigo"><?php echo($row->bigo);?></textarea>
			</div><br>
			<?php
				}
				else if($room->no != 1){
			?>
				<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">추가 옵션</font><br><br>
				<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">성인 조식</font>
				<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: rgb(255, 241, 204);" name="adult_mor_num" value="<?php echo($row->adult_morning_count);?>" id="morning1" readonly="readonly">
				<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">X &nbsp 50,000</font>
				
				<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:210px; text-align:right; background: rgb(255, 241, 204);" id="morningpay1" value="<?php echo(number_format($row->adult_morning));?>" name="morningadult" readonly="readonly">
				<font style="font-size:20px; float:right; font-family: 'Noto Sans KR', sans-serif;"> KRW</font><br>
				
				<?php
					if($row->child_num != 0)
					{
				?>
					<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">어린이 조식</font>
					<input style="text-align:center; font-size:16px; font-family: 'Noto Sans KR', sans-serif; border:0; width:30px; background: rgb(255, 241, 204);" name="child_mor_num" value="<?php echo($row->child_morning_count);?>" id="morning2" readonly="readonly">
					<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif;">X &nbsp 40,000</font>
					<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:195px; text-align:right; background: rgb(255, 241, 204);" id="morningpay2" value="<?php echo(number_format($row->child_morning));?>" name="morningchild" readonly="readonly">
					<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font><br>
				<?php
					}
				?>
				<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">차량 픽업 서비스</font>
				<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:269px; text-align:right; background: rgb(255, 241, 204);" id="carpic" value="<?php echo(number_format($row->carpickup));?>" name="carpickup" readonly="readonly">
				<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font><br><br>
				<div class="row">
					<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:30px">추가사항 :</font>
					<textarea style="margin-left:15px; font-family: 'Noto Sans KR', sans-serif; padding:10px;" cols="46" rows="3" name="bigo" readonly="readonly"><?php echo($row->bigo);?></textarea>
				</div><br>
			<?php
				}	
			?>
		
		<!--추가옵션 계산-->
		
		<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">세금 및 유지비</font><br><br>
		<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">세금</font>
			
		<input type="hidden" id="maintain" value="50000">
		<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:350px; text-align:right; background: rgb(255, 241, 204);" id="tax" value="" readonly="readonly">
		<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font><br>

		<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">유지비</font>

		<input style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; border:0; width:335px; text-align:right; background: rgb(255, 241, 204);" name="maintain" id="maintain1" value="<?php echo(number_format(50000))?>" readonly="readonly">
		<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; float:right"> KRW</font><br>
		<hr style="border-top: 1px solid black">
		
		<input style="font-size:25px; font-family: 'Noto Sans KR', sans-serif; border:0; width:390px; text-align:right; background: rgb(255, 241, 204);" name="allprice" id="allprice" value="<?php echo(number_format($row->price));?>" readonly="readonly">
		<font style="font-size:25px; font-family: 'Noto Sans KR', sans-serif; float:right; height:38px; padding-top:7px"> KRW</font><br>
	</div>				
</div>
<script src="/my/js/jquery-3.5.1.min.js"></script>
<script>
	$(document).ready(function(){
		var checkin = new Date(document.getElementById("checkinhidden").value);//체크인 날짜 
		//처음에 값이 없다고 에러가 나오는 것은 reservation.js를 페이지 전체에 적용시켰기에 예약페이지가 아닌이상 나오지 않는다.
		var checkout = new Date(document.getElementById("checkouthidden").value);//체크 아웃 날짜
		var dateDiff = Math.ceil((checkout.getTime()-checkin.getTime())/(1000*3600*24));//시간계산 식
		var child = document.getElementById("child").value; //어린이 인원수
		var price = document.getElementById("dayresult").value; //투숙기간 총 가격
		var resultprice = price * dateDiff; //방가격 * 숙박기간
		var tax = resultprice / 10;
		document.getElementById("inday1").value = dateDiff; //머무는 일 수 1
		document.getElementById("tax").value = priceToString(tax);
		document.getElementById("allprice").value = priceToString(resultprice);
	});
	function priceToString(price) {
		price = String(price);
		return price.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1,');
	}
	function priceUnString(price) {
		price = String(price);
		return price.replace(/[^\d]+/g, '');
	}
</script>
