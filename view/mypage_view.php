        <?php
		$phone1=trim(substr($row->phone,0,3));
		$phone2=trim(substr($row->phone,3,4));
		$phone3=trim(substr($row->phone,7,4));
		$juso = explode("!", $row->juso);
		$no=$row->no;
	?>
	<section class="banner_area">
		<div class="overlay bg-mypage" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
			<br><br><br><br>
            		<div class="mypage_table align-items-center animated fadeIn"><br><br><br>
				<div class="container" style="height:900px">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item" style="background:rgb(73, 73, 73); border-top-left-radius: 10px; border-top-right-radius: 10px;" role="presentation">
							<a class="nav-link active" style="color:white" id="mypage-tab" data-toggle="tab" href="#mypage" role="tab" aria-controls="mypage" aria-selected="true">Mypage</a>
						</li>
						<li class="nav-item" style="background:rgb(204, 163, 0); border-top-left-radius: 10px; border-top-right-radius: 10px;" role="presentation">
							<a class="nav-link" id="myroom-tab" style="color:white" data-toggle="tab" href="#myroom" role="tab" aria-controls="myroom" aria-selected="false">Room 예약</a>
						</li>
						<li class="nav-item" style="background: rgb(255, 190, 11); border-top-left-radius: 10px; border-top-right-radius: 10px;" role="presentation">
							<a class="nav-link" id="myrestaurant-tab" style="color:white" data-toggle="tab" href="#myrestaurant" role="tab" aria-controls="myrestaurant" aria-selected="false">Restaurant 예약</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="mypage" role="tabpanel" aria-labelledby="mypage-tab">
							<div class="mypage_header">
								<h2 style="color:white; margin:0; padding-top:20px; padding-left:30px; padding-bottom:20px; background:rgb(73, 73, 73); border-top-right-radius: 10px;">Mypage</h2>
							</div>
							<div class="mypage_content alert-secondary" style="padding-left:25px; padding-right:25px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
								<br>
								<div class="form-group row">
									<div class="col-lg-6" style="padding-top:10px">
										<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp아이디</label> 
										<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
										<input style="width:150px" type="text" name="uid" id="uid" size="20" maxlength="20" value="<?php echo($row->uid)?>" oninput="check_id()" class="form-control" disabled>
									</div>
									<div class="col-lg-6" style="padding-top:10px">
										<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp비밀번호</label>
										<input style="width:150px" type="text" name="pwd" id="pwd" size="20" maxlength="20" value="<?php echo($row->pwd)?>" oninput="check_id()" class="form-control" disabled>
									</div>
									<div class="col-lg-6" style="padding-top:10px">
										<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp이름</label>
										<input style="width:150px" type="text" name="name" id="name" size="20" maxlength="20" value="<?php echo($row->name)?>" oninput="check_id()" class="form-control" disabled>
									</div>
									<div class="col-lg-6" style="padding-top:10px">
										<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp생년월일</label>
										<input style="width:150px" type="text" name="birthday" id="birthday" size="20" maxlength="20" value="<?php echo($row->birthday)?>" class="form-control" disabled>
									</div>
									<div class="col-lg-6" style="padding-top:10px">
										<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp전화번호</label>
										<div class="row form-inline" style="padding-left:15px">
											<input style="width:70px; text-align:center" type="text" name="myphone1" id="phone1" size="3" maxlength="3" value="<?php echo($phone1)?>" class="form-control" disabled>&nbsp-&nbsp
											<input style="width:70px; text-align:center" type="text" name="myphone2" id="phone2" size="4" maxlength="4" value="<?php echo($phone2)?>" class="form-control" disabled>&nbsp-&nbsp
											<input style="width:70px; text-align:center" type="text" name="myphone3" id="phone3" size="4" maxlength="4" value="<?php echo($phone3)?>" class="form-control" disabled>
										</div>
									</div>
									<div class="col-lg-6" style="padding-top:10px">
										<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp이메일</label>
										<input style="width:100%" type="email" name="email" id="email" size="20" maxlength="20" value="<?php echo($row->email)?>" class="form-control" disabled>
									</div>
									<div class="col-lg-12" style="padding-top:10px">
										<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp우편번호</label>
										<input style="width:100px; text-align:center" type="text" name="zip" id="zip" size="20" maxlength="20" value="<?php echo($row->zip_number)?>" class="form-control" disabled>
									</div>
									<div class="col-lg-6" style="padding-top:10px">
										<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp주소</label>
										<input style="width:100%" type="text" name="juso1" id="juso1" size="5" maxlength="5" value="<?php echo($juso[0])?>" class="form-control" disabled>
									</div>
									<div class="col-lg-6" style="padding-top:10px">
										<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp상세정보</label>
										<div class="row" style="padding-left:15px">
											<input style="width:145px" type="text" name="juso2" id="juso2" value="<?php echo($juso[1])?>" class="form-control" disabled>&nbsp&nbsp&nbsp
											<input style="width:145px;" type="text" name="juso3" id="juso3" value="<?php echo($juso[2])?>" class="form-control" disabled>	
										</div>
									</div>
									<div class="col-lg-12" align="right" style="margin-top:20px">
										<a href="/mypage/edit/no/<?php echo($no)?>" style="width:200px; margin-right:10px" class="btn btn-block btn-primary">수정하기</a>
									</div>
								</div><br>
							</div>
						</div>
						<div class="tab-pane fade" id="myroom" role="tabpanel" aria-labelledby="myroom-tab">
							<div class="room_header ">
								<h2 style="color:white; margin:0; padding-top:20px; padding-left:30px; padding-bottom:20px; background:rgb(204, 163, 0); border-top-right-radius: 10px;">Room 예약목록</h2>
							</div>
							<div class="my_content container alert-secondary" style="padding-left:25px; padding-right:25px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
								<!--room 예약 장부 작업부분-->
									<div class="progress-table-wrap" >
										<div class="progress-table table-wrapper-scroll-y my-custom-scrollbar" >
											<div class="table-head">
												<div class="visit" style="text-align:center; font-family: 'Noto Sans KR', sans-serif;">예약번호</div>
												<div class="country" style="text-align:center; font-family: 'Noto Sans KR', sans-serif;">Room 명</div>
												<div class="visit" style="text-align:center; font-family: 'Noto Sans KR', sans-serif;">결제일자</div>
												<div class="visit" style="text-align:center; font-family: 'Noto Sans KR', sans-serif;">성인 수</div>
												<div class="visit" style="text-align:center; font-family: 'Noto Sans KR', sans-serif;">어린이 수</div>
											
												<div class="visit" style="text-align:center; font-family: 'Noto Sans KR', sans-serif;">합계</div>
												<div class="visit" style="text-align:center; font-family: 'Noto Sans KR', sans-serif;">상세보기</div>
												<div class="visit" style="text-align:center; font-family: 'Noto Sans KR', sans-serif;">예약취소</div>
											</div>
											<?php
												foreach($jangburoom as $row)
												{
											?>
													
												<form action="/mypage/deletestateroom/no/<?php echo($row->no)?>" method="post">
													<div class="table-row">
														<input type="hidden" value="<?php echo($row->adult_num)?>" name="up1">
														<input type="hidden" value="<?php echo($row->child_num)?>" name="up2">
														<input type="hidden" value="<?php echo($row->checkinday)?>" name="up3">
														<input type="hidden" value="<?php echo($row->checkoutday)?>" name="up4">
														<input type="hidden" value="<?php echo($row->room_no)?>" name="up5">
														<input type="hidden" value="<?php echo($row->adult_morning_count)?>" name="up6">
														<input type="hidden" value="<?php echo($row->child_morning_count)?>" name="up7">
														<input type="hidden" value="<?php echo($row->adult_morning)?>" name="up8">
														<input type="hidden" value="<?php echo($row->child_morning)?>" name="up9">
														<input type="hidden" value="<?php echo($row->member_no)?>" name="up10">
														<input type="hidden" value="<?php echo($row->price)?>" name="up11">
														<input type="hidden" value="<?php echo($row->pay_method)?>" name="up12">
														<input type="hidden" value="0" name="up13">
														<input type="hidden" value="<?php echo($row->carpickup)?>" name="up14">
														<input type="hidden" value="<?php echo($row->bigo)?>" name="up15">
														<input type="hidden" value="<?php echo($row->pay_day)?>" name="up16">
														<input type="hidden" value="<?php echo($row->reservation_no)?>" name="up17">

														<div class="visit" style="text-align:center; margin-top:10px"><?php echo($row->reservation_no)?></div>
														<div class="country" style="text-align:center; margin-top:10px"><?php echo($row->room_name)?></div>
														<div class="visit" style="text-align:center; margin-top:10px"><?php echo($row->pay_day)?></div>
														<div class="visit" style="text-align:center; margin-top:10px"><?php echo($row->adult_num)?> 명</div>
														<div class="visit" style="text-align:center; margin-top:10px"><?php echo($row->child_num)?> 명</div>
														<div class="visit" style="text-align:center; margin-top:10px"><?php echo(number_format($row->price))?></div>
														<div class="visit" style="text-align:center; margin-top:5px"><a href="/mypage/detailroom/no/<?php echo($row->no)?>/room/<?php echo($row->room_no);?>" class="button_hover theme_btn_two" onclick="window.open(this.href, '_blank', 'width=560, height=930,toolbars=no,scrollbars=no'); return false;" style="border-radius:10px">상세보기</a></div>
														<div class="visit" style="text-align:center;">
															<input type="submit" onclick="return confirm('정말로 취소 하시겠습니까 ?')" class="delete_button btn btn-outline-danger" value="X" style="border-radius:40px">
														</div>
													</div>
												</form>
													
											<?php
												}
											?>
										</div>
									</div>
								<!--room 예약 장부 작업부분-->
							</div>
						</div>
						<div class="tab-pane fade" id="myrestaurant" role="tabpanel" aria-labelledby="myrestaurant-tab">
							<div class="restaurant_header ">
								<h2 style="color:white; margin:0; padding-top:20px; padding-left:30px; padding-bottom:20px; background:rgb(255, 190, 11); border-top-right-radius: 10px;">Restaurant 예약목록</h2>
							</div>
							<div class="my_content container alert-secondary" style="padding-left:25px; padding-right:25px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
								<!--레스토랑 예약 장부 작업부분-->
									<div class="progress-table-wrap" >
										<div class="progress-table table-wrapper-scroll-y my-custom-scrollbar" >
											<div class="table-head">
												<div class="visit" style="text-align:center; font-family: 'Noto Sans KR', sans-serif;">예약번호</div>
												<div class="visit" style="text-align:center; font-family: 'Noto Sans KR', sans-serif;">레스토랑 명</div>
												<div class="visit" style="text-align:center; font-family: 'Noto Sans KR', sans-serif;">예약일자</div>
												<div class="visit" style="text-align:center; font-family: 'Noto Sans KR', sans-serif;">성인 수</div>
												<div class="visit" style="text-align:center; font-family: 'Noto Sans KR', sans-serif;">어린이 수</div>
												<div class="visit" style="text-align:center; font-family: 'Noto Sans KR', sans-serif;">상세보기</div>
												<div class="visit" style="text-align:center; font-family: 'Noto Sans KR', sans-serif;">예약취소</div>
											</div>
											<?php
												foreach($jangbumeal as $row)
												{
											?>
													<form action="/mypage/deletestatemeal/no/<?php echo($row->no)?>" method="post">
														<div class="table-row">
															<input type="hidden" value="<?php echo($row->adult_num)?>" name="up1">
															<input type="hidden" value="<?php echo($row->child_num)?>" name="up2">
															<input type="hidden" value="<?php echo($row->member_no)?>" name="up3">
															<input type="hidden" value="<?php echo($row->restaurant_no)?>" name="up4">
															<input type="hidden" value="<?php echo($row->meal_time)?>" name="up5">
															<input type="hidden" value="<?php echo($row->meal_day)?>" name="up6">
															<input type="hidden" value="<?php echo($row->bigo)?>" name="up7">
															<input type="hidden" value="0" name="up8">
															<input type="hidden" value="<?php echo($row->reservation_no)?>" name="up9">
															<input type="hidden" value="<?php echo($row->reservation_date)?>" name="up10">

															<div class="visit" style="text-align:center; margin-top:10px"><?php echo($row->reservation_no)?></div>
															<div class="visit" style="text-align:center; margin-top:10px"><?php echo($row->restaurant_name)?></div>
															<div class="visit" style="text-align:center; margin-top:10px"><?php echo($row->reservation_date)?></div>
															<div class="visit" style="text-align:center; margin-top:10px"><?php echo($row->adult_num)?> 명</div>
															<div class="visit" style="text-align:center; margin-top:10px"><?php echo($row->child_num)?> 명</div>
															
															<div class="visit" style="text-align:center; margin-top:5px"><a href="/mypage/detailmeal/no/<?php echo($row->no)?>/meal/<?php echo($row->restaurant_no);?>" class="button_hover theme_btn_two" onclick="window.open(this.href, '_blank', 'width=520, height=670,toolbars=no,scrollbars=no'); return false;" style="border-radius:10px">상세보기</a></div>
															<div class="visit" style="text-align:center;">
																<input type="submit" onclick="return confirm('정말로 취소 하시겠습니까 ?')" class="delete_button btn btn-outline-danger" value="X" style="border-radius:40px">
															</div>
														</div>
													</form>
											<?php
												}
											?>
										</div>
									</div>
								<!--레스토랑 예약 장부 작업부분-->
							</div>
						</div>
					</div>
				</div>
		    </div><br><br><br><br><br><br>   
		</section>
		<script src="/my/js/jquery-3.5.1.min.js"></script>
