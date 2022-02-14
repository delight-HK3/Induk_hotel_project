		<!--================Banner Area =================-->
		<!--레스토랑 사진 줄이기-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center" >
						<img src="/my/img/Hotel_name.png" class="animated fadeInDown" style="width:580px; height:266px"><br>
                        <p style="color:white;" class="animated fadeInUp">We provide services worthy of our long history and reputation.</p>
						<a href="/about" class="btn theme_btn button_hover animated fadeInUp">Introduce Hotel</a>
					</div>
				</div>
            </div> 
            <div class="hotel_booking_area position">
                <div class="container">
                    <div class="hotel_booking_table justify-content-md-center">
						<div class="boking_table">
							<form  method="post" action="/reservation" onsubmit="return reservationcheck()" >
								<div class="row">
									<div class="col-lg-3" style="margin-top: 10px; margin-bottom: 10px;">
										<h2 style="padding-top:20px; padding-bottom:20px">reservation Your Room</h2>
									</div>
									<div class="col-lg-3" style="margin-top: 10px; margin-bottom: 10px;">
										<div class="book_tabel_item">
											<div class="form-group">
												<div class="input-group date">
													<input type="text" name="fromDate" style="height:40px" class="form-control" placeholder="CheckIn Date" id="fromDate" readonly="readonly" required>
												</div>
											</div>
											<div class="form-group">
												<div class="input-group date">              
													<input type="text" name="toDate" style="height:40px" class="form-control" placeholder="CheckOut Date" id="toDate" readonly="readonly" required>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3" style="margin-top: 10px; margin-bottom: 10px;">
										<div class="book_tabel_item">
											<div class="form-group">
												<div class="input-group">
													<div class="check">adult(어른)</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<div class="pro-qty row" style="margin-left:10px"><input type="text" name="adultnum" id="adult" value="1" readonly="readonly"></div>
												</div>
											</div>
											<div class="form-group">
												<div class="input-group">
													<div class="check">child(어린이)</div>&nbsp;&nbsp;
													<div class="pro-qty row" style="margin-left:10px"><input type="text" name="childnum" id="child" value="0" readonly="readonly"></div>
												</div>
											</div>    
										</div>
									</div>
									<div class="col-lg-3" style="margin-top: 10px; margin-bottom: 10px;">
										<div class="book_tabel_item">
											<?php
												if($this->session->userdata("rank")){
													echo("<input type='submit' class='btn checkin_now_btn button_hover' id='reserve' style='height:60px; margin-top:20px;' value='Room 예약하기'>");
												}
												else{
													echo("<input type='submit' class='btn checkin_now_btn' id='reserve' style='height:60px; margin-top:20px;' value='로그인 후 가능합니다.' disabled>");
												}
											?>		
										</div>
									</div>
								</div>
							</form>
						</div>
                    </div>
                </div>
            </div>
            
        </section>
        <!--================Banner Area =================-->

        <!--================ 객실 소개  =================-->
        <section class="accomodation_area section_gap">
            <div class="container" style="height:2500px">
				<!--메인 설명-->
                <div class="section_title text-center" data-aos="fade-up">
                    <h2 class="title_color">INDUK Hotel Accomodation</h2><br>
                    <font style="font-size: 15px; font-family: 'Noto Sans KR', sans-serif;">월계역 근처에 위치한 인덕 호텔은 인덕대학교의 아름다움을 현대적인 감각으로 풀어낸 객실에서 서울시의 야경을 조망할 수 있으며 일몰과 일출을 한 자리에서 감상할 수 있는 하이엔드 서비스 호텔입니다. 여유로운 공간을 제공하는 디럭스룸과 좋은 전망의 스위트룸을 제공하고 있습니다.</font>
                    <hr><br>
                </div>
				<!--메인 설명-->

				<!--디럭스스위트룸 소개 !-->
				<div style="margin-bottom:100px; height:414.63px">
					<div style="float:left; width:50%" >
						<div data-aos="zoom-in" data-aos-duration="2000" class="text-center" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
							<div style="background: rgb(179, 131, 0);">
								<h3 style="color:black; padding-top:10px;">Deluxe Suite Room</h3>	
								<p style="font-size:15px; font-family: 'Noto Sans KR', sans-serif; color:white; padding-bottom:5px">내부 이미지</p>     
								<div id="grandDeluxe" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#grandDeluxe" data-slide-to="0" class="active"></li>
										<li data-target="#grandDeluxe" data-slide-to="1"></li>
										<li data-target="#grandDeluxe" data-slide-to="2"></li>
									</ol>

									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="/my/img/indukroom/deluxe_room1.jpg" class="d-block w-100" >
										</div>

										<div class="carousel-item">
											<img src="/my/img/indukroom/deluxe_room2.jpg" class="d-block w-100" >
										</div>

										<div class="carousel-item">
											<img src="/my/img/indukroom/deluxe_room3.jpg" class="d-block w-100">
										</div>                       
									</div>
								
									<a class="carousel-control-prev" href="#grandDeluxe" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#grandDeluxe" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div data-aos="fade-left" data-aos-duration="2000" style="float:right; height:414.63px; width:50%; padding:15px; word-break:break-all;">
						<h4 style="text-align:center;  border-bottom: 3px solid rgb(179, 131, 0);">Deluxe Suite Room</h4>
						<font style="font-size:14px; font-family: 'Noto Sans KR', sans-serif;">
							<li>인덕호텔의 디럭스 스위트 룸은 다른 객실보다 더욱 넓은 공간을 제공하는 객실입니다.</li><br>
							<li>침실과 응접실이 공간이 분리되어 있어 편안함과 안정된 휴식을 누리실 수 있는 객실입니다.</li>
						</font>
						<br><br><br><br><br><br>
						<div align="center">
						<a href="/room/detail/no/4" class="button_hover theme_btn_two">Deluxe Suite Room 상세페이지</a></div>
					</div>
				</div>
				<!--디럭스스위트룸 소개 !-->
			
                <!--코리안스위트룸 소개-->
				<div style="margin-bottom:100px; height:414.63px">
					<div data-aos="fade-right" data-aos-duration="2000" style="float:left; height:414.63px; width:50%; padding:15px; word-break:break-all;">
						<h4 style="text-align:center; border-bottom: 3px solid rgb(230, 168, 0);">Korean Suite Room</h4>
						<font style="font-size:15px; font-family: 'Noto Sans KR', sans-serif;">
                        <li>인덕호텔의 코리안 스위트 룸은 최고의 전망을 자랑하는 객실입니다.</li><br>
                        <li>한국 전통미와 현대적인 시설의 조화가 이루어진 최고급 온돌로 구성되어 있으며 한국의 궁을 테마로 한 온돌, 객실 곳곳에 배치된 전통가구와 편백나무로 구성된 욕실은 한국적인 멋을 더욱 돋보이게 합니다.</li>
                        </font>
                        <br><br><br><br><br><br>
                        <div align="center">
						<a href="/room/detail/no/5" class="button_hover theme_btn_two">Korean Suite Room 상세페이지</a></div>
					</div>
					<div style="float:right; width:50%">
						<div data-aos="zoom-in" data-aos-duration="2000" class="text-center" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"> 
							<div style=" background: rgb(230, 168, 0);">
								<h3 style="color:black; padding-top:10px;">Korean Suite Room</h3>
								<p style="font-size:15px; font-family: 'Noto Sans KR', sans-serif; color:white; padding-bottom:5px">내부 이미지</p>              
								<div id="korean" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#korean" data-slide-to="0" class="active"></li>
										<li data-target="#korean" data-slide-to="1"></li>
										<li data-target="#korean" data-slide-to="2"></li>                
									</ol>

									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="/my/img/indukroom/korean_room1.jpg" class="d-block w-100" >
										</div>
										<div class="carousel-item">
											<img src="/my/img/indukroom/korean_room2.jpg" class="d-block w-100" >
										</div>
										<div class="carousel-item">
											<img src="/my/img/indukroom/korean_room3.jpg" class="d-block w-100" >
										</div>
									</div>                       
								</div>
							
								<a class="carousel-control-prev" href="#korean" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#korean" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>                  
						</div>
					</div>
				</div>
                <!--코리안스위트룸 소개 !-->
                    
                <!--=======로얄 스위트룸 소개 시작=======-->
                <div style="margin-bottom:100px; height:414.63px">
					<div style="float:left; width:50%" >
						<div data-aos="zoom-in" data-aos-duration="2000" class="text-center" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
							<div style="background: rgb(255, 194, 26);">
								<h3 style="color:black; padding-top:10px;">Royal Suite Room</h3>	
								<p style="font-size:15px; font-family: 'Noto Sans KR', sans-serif; color:white; padding-bottom:5px">내부 이미지</p>
								<div id="RoyalSuite" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#RoyalSuite" data-slide-to="0" class="active"></li>
										<li data-target="#RoyalSuite" data-slide-to="1"></li>
										<li data-target="#RoyalSuite" data-slide-to="2"></li>
									</ol>

									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="/my/img/indukroom/royal_room1.jpg" class="d-block w-100">
										</div>

										<div class="carousel-item">
											<img src="/my/img/indukroom/royal_room2.jpg" class="d-block w-100">
										</div>

										<div class="carousel-item">
											<img src="/my/img/indukroom/royal_room3.jpg" class="d-block w-100">
										</div>                       
									</div>
								
									<a class="carousel-control-prev" href="#RoyalSuite" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#RoyalSuite" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div data-aos="fade-left" data-aos-duration="2000" style="float:right; height:414.63px; width:50%; padding:15px; word-break:break-all;">
						<h4 style="text-align:center; border-bottom: 3px solid rgb(255, 194, 26); ">Royal Suite Room</h4>
						<font style="font-size:15px; font-family: 'Noto Sans KR', sans-serif;">
                        <li>인덕호텔의 로얄 스위트 룸은 세련미와 우아함을 더한 고급스러운 인테리어로 구성되어 있으며, 대형 창문을 통해 서울의 화려한 장관을 감상할 수 있는 고품격 객실입니다.</li><br>
                        <li>인덕호텔 로얄 스위트룸의 욕실은 이탈리아 북부 알프스 천연 대리석으로 제작되어 고품격 휴식을 즐기기에 충분합니다.</li><br>
                        </font>
                        <br><br><br><br><br><br>
                        <div align="center">
						<a href="/room/detail/no/6" class="button_hover theme_btn_two">Royal Suite Room 상세페이지</a></div>
					</div>
				</div>
				<!--======= 로얄 스위트룸 끝 =======-->
				
				<br><br><br><br>
				<div data-aos="zoom-in" data-aos-duration="2000" class="text-center" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
						<div style="background: rgb(255, 194, 26);">
						<h3 style="color:black; padding-top:10px;">Premier Induk Room</h3>	
						<p style="font-size:15px; font-family: 'Noto Sans KR', sans-serif; color:white; padding-bottom:5px">내부 이미지</p>     
					
						<div id="Indukroom" class="carousel slide carousel-fade" data-ride="carousel"> 
						
						<ol class="carousel-indicators">
							<li data-target="#Indukroom" data-slide-to="0" class="active"></li>
							<li data-target="#Indukroom" data-slide-to="1"></li>
							<li data-target="#Indukroom" data-slide-to="2"></li>                
						</ol>

						<div class="carousel-inner"> 
							<div class="carousel-item active">
								<img src="/my/img/indukroom/premier_room1.jpg" class="d-block w-100">
							</div>

							<div class="carousel-item">
								<img src="/my/img/indukroom/premier_room2.jpg" class="d-block w-100">
							</div>

							<div class="carousel-item">
								<img src="/my/img/indukroom/premier_room3.jpg" class="d-block w-100">
							</div>                       
						</div> 
					
						<a class="carousel-control-prev" href="#Indukroom" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#Indukroom" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
						</div>  
					</div>                 
				</div>
				<div class="text-center">
					<font style="font-size:15px; font-family: 'Noto Sans KR', sans-serif;"><br><br>
						<li>인덕호텔의 프리미어 인덕 룸은 넓고 여유로운 공간에서 고품격 휴식을 만끽할 수 있는 고급형 프리미어 룸입니다.</li>
						<li>여유로운 공간과 고급스러운 인테리어는 고객의 안락함을 최우선으로 고려하여 설계되어 고객님에게 더욱 더 최고의 투숙 경험을 선사합니다.</li><br>
					</font>
				</div>
                <div align="center">
				<a href="/room/detail/no/3" class="button_hover theme_btn_two">Primer induk room 상세페이지</a></div>       
			</div><br><br><br><br><br><br><br><br>
        </section>
		 <!--================ 객실 소개  =================-->			
        <br><br><br>
        <!--================ 레스토랑 소개  =================-->
        <section class="restaurant_area section_gap" data-aos="fade-up">
        	<div class = "container">

		    <div class="section_title text-center">
			<h2 class="title_color">INDUK Hotel Restaurant</h2><br>
			<font style="font-size:15px; font-family: 'Noto Sans KR', sans-serif;">인덕호텔의 레스토랑들은 지금껏 경험해보지 못했던 창의적인 요리를 선보입니다. 하계역 부근이 한눈에 들어오는 환상적인 전망을 바라보며 미쉐린 3스타 셰프 '헬로월드'가 선사하는<br> 잊지 못할 다이닝을 경험해 보시기 바랍니다.인덕호텔의 강점인 탁트인 도심의 전경을 바라보며 세계 최고 수준의 다양한 요리를 즐기실 수 있습니다.</font>
			<hr>
		    </div>

            <div data-aos="zoom-in" data-aos-duration="2000" class = "text-center"> 
            <div id="indukRestaurant" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#indukRestaurant" data-slide-to="0" class="active"></li>
                    <li data-target="#indukRestaurant" data-slide-to="1"></li>
                    <li data-target="#indukRestaurant" data-slide-to="2"></li>
                    <li data-target="#indukRestaurant" data-slide-to="3"></li>
                    <li data-target="#indukRestaurant" data-slide-to="4"></li>
                    <li data-target="#indukRestaurant" data-slide-to="5"></li>
					<li data-target="#indukRestaurant" data-slide-to="6"></li>   
                </ol>

            	<div class="carousel-inner" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
			<div class="carousel-item active">
			    <img src="/my/img/gallery/res1.jpg" class="d-block w-100" alt="1">
			<div class="carousel-caption d-none d-md-block">	
                	</div>
                	</div>

                <div class="carousel-item">
                    <img src="/my/img/gallery/res2.jpg" class="d-block w-100" alt="2">
                <div class="carousel-caption d-none d-md-block">
				
                </div>
                </div>

                <div class="carousel-item">
                    <img src="/my/img/gallery/res3.jpg" class="d-block w-100" alt="3">
                <div class="carousel-caption d-none d-md-block">

                </div>
                </div>

                <div class="carousel-item">
                    <img src="/my/img/gallery/res4.jpg" class="d-block w-100" alt="3">
                <div class="carousel-caption d-none d-md-block">

                </div>
                </div>
                
                <div class="carousel-item">
                    <img src="/my/img/gallery/res5.jpg" class="d-block w-100" alt="3">
                <div class="carousel-caption d-none d-md-block">

                </div>
                </div>                

                <div class="carousel-item">
                    <img src="/my/img/gallery/res6.jpg" class="d-block w-100" alt="3">
                <div class="carousel-caption d-none d-md-block">

                </div>
                </div>

                <div class="carousel-item">
                    <img src="/my/img/gallery/res7.jpg" class="d-block w-100" alt="3">
                <div class="carousel-caption d-none d-md-block">

                </div>
		</div>

            </div>
            <a class="carousel-control-prev" href="#indukRestaurant" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#indukRestaurant" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div> <!--스크롤효과 닫는태그!-->
        </div>        
        </section>
        <!--================ 레스토랑 소개  =================-->
        

        <!--================ 편의시설 소개  =================-->
        <section class="restaurant_area section_gap">
		<div class = "container">
		    <div class="section_title text-center" data-aos="fade-up">
			<h2 class="title_color">INDUK Hotel Facilities</h2><br>
			<font style="font-size:15px; font-family: 'Noto Sans KR', sans-serif;">고객의 라이프 스타일과 1:1 맞춤 카운셀링 결과를 토대로, 각 개인에 적합한 프로그램 및 트리트먼트를 제공합니다.</font>
			<hr>
		    </div>

		    <div data-aos="zoom-in" data-aos-duration="3000" class = "text-center"> 
		    	<div id="indukFacilities" class="carousel slide carousel-fade" data-ride="carousel">
				<ol class="carousel-indicators">
				    <li data-target="#indukFacilities" data-slide-to="0" class="active"></li>
				    <li data-target="#indukFacilities" data-slide-to="1"></li>
				    <li data-target="#indukFacilities" data-slide-to="2"></li>
				    <li data-target="#indukFacilities" data-slide-to="3"></li>
				    <li data-target="#indukFacilities" data-slide-to="4"></li>
				    <li data-target="#indukFacilities" data-slide-to="5"></li>
				    <li data-target="#indukFacilities" data-slide-to="6"></li>                  
				</ol>
			    <div class="carousel-inner" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
				<div class="carousel-item active">
				    <img src="/my/img/service/gym1.png" class="d-block w-100" alt="1">
				    <div class="carousel-caption d-none d-md-block"></div>
				</div>

				<div class="carousel-item">
				    <img src="/my/img/service/gym3.jpg" class="d-block w-100" alt="2">
				    <div class="carousel-caption d-none d-md-block"></div>
				</div>

				<div class="carousel-item">
				    <img src="/my/img/service/gym5.jpg" class="d-block w-100" alt="3">
				    <div class="carousel-caption d-none d-md-block"></div>
				</div>

				<div class="carousel-item">
				    <img src="/my/img/service/pool1.jpg" class="d-block w-100" alt="3">
				    <div class="carousel-caption d-none d-md-block"></div>
				</div>

				<div class="carousel-item">
				    <img src="/my/img/service/spa1.jpg" class="d-block w-100" alt="3">
				    <div class="carousel-caption d-none d-md-block"></div>
				</div>

				<div class="carousel-item">
				    <img src="/my/img/service/spa2.jpg" class="d-block w-100" alt="3">
				    <div class="carousel-caption d-none d-md-block"></div>
				</div>

				<div class="carousel-item">
				    <img src="/my/img/service/lounge3.jpg" class="d-block w-100" alt="3">
				    <div class="carousel-caption d-none d-md-block"></div>
				</div>                                
			    </div>
			    <a class="carousel-control-prev" href="#indukFacilities" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			    </a>
			    <a class="carousel-control-next" href="#indukFacilities" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			    </a>
		    </div><!--스크롤효과 닫는태그!-->
		</div>        
        </section>
        <!--================ 편의시설 소개  =================-->

        <!--================ 인덕그룹 소개 =================-->
        <section class="about_history_area section_gap">
            <div data-aos="fade-right">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d_flex align-items-center">
                            <div class="about_content">
                                <h2 class="title title_color">About Us : INDUK Group</h2>
                                <p style="font-size:15px; font-family: 'Noto Sans KR', sans-serif;">인덕대학교(仁德大學校, Induk University)는 대한민국의 전문대학으로 박인덕이 설립하였습니다. 1971년 12월, 학교법인 인덕학원이 서울특별시 노원구에 설립한 인덕예술공과전문학교가 모태입니다.<br> 
                                "손과 머리로 無에서 有로" 라는 건학이념을 기반으로 최고의 서비스를 제공하고 있습니다. 인덕 호텔에서 평생 잊을 수 없는 추억을 남겨보세요.</p>
                                <a href="/about/#member" class="button_hover theme_btn_two">Developers | 개발자 소개</a>
                            </div>
                        </div>
                        <div class="col-lg-6" ><br><br>
                            <img class="img-fluid" style="background: rgb(255, 241, 204); width:500px; height:500px; border-radius:100px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" src="/my/img/Hotel_name_black.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
	<script src="/my/js/jquery-3.5.1.min.js"></script>
	<script src="/my/js/reservation.js"></script><!--예약 스크립트-->
