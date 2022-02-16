<section class="banner_area">
	<div class="reservation_table d_flex align-items-center">
        	<div class="overlay bg-room" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
		<div class="container">
			<div class="banner_content text-center"><br><br><br><br><br><br><br><br>
				<img src="/my/img/Hotel_name.png" class="animated fadeInDown" style="width:580px; height:266px"><br><br><br>
				<div class="animated fadeInUp">
					<center><font class="animated fadeInUp" style="font-family: 'Noto Sans KR', sans-serif; font-size:40px; color:white;">Room</font>
					<br><br><br>
					<font class="animated fadeInUp" style="font-family: 'Noto Sans KR', sans-serif; font-size:20px; color:white">인덕호텔의 강점인 탁트인 도심의 전경을 한눈에 볼 수 있습니다.</font></center>
				</div>
			</div>
		</div>
    	</div> 
	<!--============== 배너 =================-->
	<section class="accomodation_area section_gap">
		 <div class="container">
			<div class="row">
				<?php
					foreach($room as $row)
					{
				?>
						<div class="col-lg-6">
							<div id="<?php echo($row->no)?>" class="carousel slide" data-interval = "false">
								<ol class="carousel-indicators">
									<li data-target="#<?php echo($row->no)?>" data-slide-to="0" class="active"></li>
									<li data-target="#<?php echo($row->no)?>" data-slide-to="1"></li>
									<li data-target="#<?php echo($row->no)?>" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
									  <img src="/my/img/indukroom/<?php echo($row->image_room1);?>" class="d-block w-100" height="350" alt="First slide">
									</div>
									<div class="carousel-item">
									  <img src="/my/img/indukroom/<?php echo($row->image_room2);?>" class="d-block w-100" height="350" alt="Second slide">
									</div>
									<div class="carousel-item">
									  <img src="/my/img/indukroom/<?php echo($row->image_room3);?>" class="d-block w-100" height="350" alt="Third slide">
									</div>
								</div>
								<a class="carousel-control-prev" href="#<?php echo($row->no)?>" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#<?php echo($row->no)?>" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div style="border:1px solid rgb(179, 131, 0); padding:15px; margin-bottom:60px; overflow : hidden;">
								<font style="font-family: 'Noto Sans KR', sans-serif; font-size:20px;"><?php echo($row->name);?></font><br><br>
								<font style="font-family: 'Noto Sans KR', sans-serif; font-size:13px;"><?php echo($row->Explanation);?></font><br><br>
								<hr>
								<font style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;">최저 : <?php echo(number_format($row->price));?> KRW</font>
								<input type="button" onclick="location.href='/room/detail/no/<?php echo($row->no);?>'" class="btn theme_btn button_hover float-right" value="상세정보">
							</div>
						</div>
				<?php
					}
				?>
			</div>
		</div>
	</section>
</section>
<script src="/my/js/jquery-3.5.1.min.js"></script>
