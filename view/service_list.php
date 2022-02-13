<section class="banner_area">
	<div class="reservation_table d_flex align-items-center">
        <div class="overlay bg-service" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
		<div class="container">
			<div class="banner_content text-center"><br><br><br><br><br><br><br><br>
				<img src="/~team1/my/img/Hotel_name.png" class="animated fadeInDown" style="width:580px; height:266px"><br><br><br>
				<div class="animated fadeInUp">
					<center><font class="animated fadeInUp" style="font-family: 'Noto Sans KR', sans-serif; font-size:40px; color:white;">Service</font>
					<br><br><br>
					<font class="animated fadeInUp" style="font-family: 'Noto Sans KR', sans-serif; font-size:20px; color:white">"건강한 정신은 건강한 육체에서 나온다." 라는 말 처럼 인덕호텔에서는 휴식뿐만 아니라 차원이 다른 고급 서비스를 즐기실 수 있습니다.</font></center>
				</div>
			</div>
		</div>
    </div> 
</section>


<section class="accomodation_area section_gap">
		 <div class="container">
			<div class="row">
				<?php
					foreach($service as $row)
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
									  <img src="/~team1/my/img/service/<?php echo($row->image_serve1);?>" class="d-block w-100" height="350" alt="First slide">
									</div>
									<div class="carousel-item">
									  <img src="/~team1/my/img/service/<?php echo($row->image_serve2);?>" class="d-block w-100" height="350" alt="Second slide">
									</div>
									<div class="carousel-item">
									  <img src="/~team1/my/img/service/<?php echo($row->image_serve3);?>" class="d-block w-100" height="350" alt="Third slide">
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
							<div class="col-lg-12" style="border:1px solid rgb(179, 131, 0); padding:15px; margin-bottom:60px">

								<font style="font-family: 'Noto Sans KR', sans-serif; font-size:20px;"><?php echo($row->name);?></font><br><br>
								<div style="overflow : hidden;">
									<font style="font-family: 'Noto Sans KR', sans-serif; font-size:15px; padding-top:10px; padding-bottom:10px">영업시간 : <?php echo date("H:i",strtotime($row->opentime));?>&nbsp-&nbsp<?php echo date("H:i",strtotime($row->closetime));?></font>
									<a href="/~team1/service/detail/no/<?php echo($row->no);?>" style="width:150px" class="btn theme_btn button_hover float-right">상세정보</a>
								</div>
							</div>
						</div>
				<?php
					}
				?>
			</div>
		</div>
	</section>
	<script src="/~team1/my/js/jquery-3.5.1.min.js"></script>