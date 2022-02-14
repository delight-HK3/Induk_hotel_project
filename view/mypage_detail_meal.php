<br>
<div class="container">
	<div style="padding:30px; background: rgb(255, 241, 204); border:4px solid #e6ac00">
		<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">영수증</font>
		<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; color:black; float:right">예약번호 : <?php echo($row->reservation_no)?></font><br>
		<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; color:black; float:right">예약일자 : <?php echo($row->reservation_date)?></font>
		<br><br>
		<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">레스토랑 이름</font><br><br>
		<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px"><?php echo($row->meal_name)?></font>
		<br><br>
		<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">예약인원</font><br><br>
		<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">성인 <?php echo($row->adult_num);?> 인 / 어린이 <?php echo($row->child_num);?> 인</font>
		<br><br>
		<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">방문일 및 시간</font><br><br>
		<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">방문일 : <?php echo ($row->meal_day);?> </font><br>
		<font style="font-size:16px; font-family: 'Noto Sans KR', sans-serif; padding-left:15px">방문시간 : <?php echo date("H:i",strtotime($row->meal_time))?></font>
		<br><br>
		<font style="font-size:20px; font-family: 'Noto Sans KR', sans-serif; color:black">추가사항</font><br><br>
		<textarea style="margin-left:15px; font-family: 'Noto Sans KR', sans-serif; padding:10px;" cols="45" rows="3" name="bigo" readonly="readonly"><?php echo($row->bigo);?></textarea>
	</div>	
</div>
<script src="/my/js/jquery-3.5.1.min.js"></script>
