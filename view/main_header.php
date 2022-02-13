<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="/~team1/my/img/main_Logo.png" type="image/png">
        <title>INDUK Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/~team1/my/css/bootstrap.css">
		
        <link rel="stylesheet" href="/~team1/my/vendors/linericon/style.css">
        <link rel="stylesheet" href="/~team1/my/css/font-awesome.min.css">
        <link rel="stylesheet" href="/~team1/my/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="/~team1/my/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="/~team1/my/vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="/~team1/my/css/style.css">
        <link rel="stylesheet" href="/~team1/my/css/responsive.css">
        <link rel="stylesheet" href="/~team1/my/css/jquery-ui.css"/>
        <!-- animation css -->
        <link rel="stylesheet" href="/~team1/my/css/animate.css">
        <link rel="stylesheet" href="/~team1/my/css/animate.compat.css">
        <link rel="stylesheet" href="/~team1/my/css/animate.min.css">
		<!-- font css -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500&display=swap" rel="stylesheet">
		<!-- 달력 css-->
		<link rel="stylesheet" href="/~team1/my/css/bootstrap-material-datetimepicker.css" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            /*datepicker에서 사용한 이미지 버튼 style적용*/
            img.ui-datepicker-trigger {
                margin-left:5px; vertical-align:middle; cursor:pointer;
            }
        </style>
		<!--스크롤 CSS (aos 라이브러리) !-->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		
    </head>
    <body>
		<!-- AOS 라이브러리 초기화 스크립트 !-->
			<script> 
				AOS.init(); 
			</script>
			
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="/~team1/main"><img src="/~team1/my/img/main_Logo.png" alt="">&nbsp;&nbsp;<b>INDUK HOTEL</b></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar" ></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset type1" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto ">
                            <li class="nav-item"><a class="nav-link" href="/~team1/main">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="/~team1/about">About us</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="/~team1/room" class="nav-link dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Room</a>
                                <!--for문으로 룸의 이름 및 정보 불러오기 개별프로젝트 활용-->
                                <ul class="dropdown-menu">
									<?php
										foreach($list1 as $row)
										{
											$no=$row->no;
									?>
											<li class="nav-item"><a class="nav-link" href="/~team1/room/detail/no/<?php echo($no);?>"><?php echo($row->name);?></a></li>
									<?php
										}
									?>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="/~team1/restaurant" class="nav-link dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Restaurant</a>
                                <!--for문으로 룸의 이름 및 정보 불러오기 개별프로젝트 활용-->
                                <ul class="dropdown-menu">
                                    <!--3star 한자 이름 : 花戀-->
									<?php
										foreach($list2 as $row)
										{
											$no=$row->no;
									?>
											<li class="nav-item"><a class="nav-link" href="/~team1/restaurant/detail/no/<?php echo($no);?>"><?php echo($row->name);?></a></li>
									<?php
										}
									?>
                                </ul>
                            </li>
							<?
								if($this->session->userdata("rank")==1){
									echo("<li class='nav-item'><a class='nav-link' href='/~team1/admin'>Admin</a></li>");
									echo("<li class='nav-item'><a class='nav-link' href='/~team1/mypage'>My Page</a></li>");
									echo("<li class='nav-item'><a class='nav-link' href='/~team1/main/clientlogout'>Logout</a></li>");
								}
								else if($this->session->userdata("rank")==2){
									echo("<li class='nav-item'><a class='nav-link' href='/~team1/mypage'>My Page</a></li>");
									echo("<li class='nav-item'><a class='nav-link' href='/~team1/main/clientlogout'>Logout</a></li>");
								}
								else{
									echo("<li class='nav-item'><a class='nav-link' href='#signUpModal' data-toggle='modal'>Sign up</a></li>");
									echo("<li class='nav-item'><a class='nav-link' href='#loginModal' data-toggle='modal'>Login</a></li>");
                                }
							?>
                            <li class="nav-item submenu dropdown">
                                <a href="/~team1/service" class="nav-link dropdown-toggle" role="button" aria-haspopup="true" >Service</a>
                                <ul class="dropdown-menu">
                                    <?php
										foreach($list3 as $row)
										{
											$no=$row->no;
									?>
											<li class="nav-item"><a class="nav-link" href="/~team1/service/detail/no/<?php echo($no);?>"><?php echo($row->name);?></a></li>
									<?php
										}
									?>
                                </ul>
                            </li>
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
		
		<!--================sign up Area =================-->
		<div class="modal fade" id="signUpModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModelLabel" >
			<div class="modal-dialog" role="document" style="width:400px">
				<div class="modal-content" style="width:402px">
					<div class="modal-header" style="width:400px; background: rgb(255, 190, 11);">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true" onClick="javascript:Uncheck()">&times;</span></button>
					</div><br>
					<center><img src="/~team1/my/img/Login_Logo.png" style="width:220px; height: 130px"></center><br>
					<h4 class="modal-title" style="text-align: center; margin-top:10px; margin-bottom:10px" id="exampleModelLabel">회원가입</h4>
					<div class="modal-body bg-light" style="width:400px;">
						<div id="accordion">
						  <div class="card">
							<div class="card-header" id="headingOne">
							  <h5 class="mb-0 row">
								<div class="d-flex">
									<div class="primary-checkbox" style="margin:10px">
										<input type="checkbox" id="one-checkbox" name="check1">
										<label for="one-checkbox"></label>
									</div>
								</div>

								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#signUpOne" aria-expanded="false" aria-controls="signUpOne">
									제1조(본 약관의 목적 및 적용)
								</button>
							  </h5>
							</div>
							<div id="signUpOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
							  <div class="card-body">
								1. 본 약관은 주식회사 호텔롯데(이하 ‘당 호텔')와 고객(당 호텔에 숙박을 희망하는 자 및 실제 숙박하는 자를 의미하며, 이하 동일합니다)간의 권리와 의무에 대하여 규정함을 그 목적으로 합니다.<br><br>

								2. 당 호텔과 고객 간에 체결되는 숙박계약 및 기타 관련계약은 본 약관이 정하는 바에 의하며, 본 약관에 규정되지 않은 사항에 대해서는 법령, 상관례 또는 관습에 따릅니다.<br><br>

								3. 신용카드를 이용한 예약의 경우 예약의 절차에 관련된 것은 본 약관에 따르고, 그 외 고객이 사용하는 신용카드와 관련된 세부사항은 신용카드사와 당 호텔 가맹점간의 약관에 따릅니다.<br><br>

								4. 당 호텔은 본 약관의 취지, 법령 또는 관습에 위배되지 않은 범위 내에서 고객과 별도의 특약을 체결할 수 있고, 이 경우 본 해당 특약이 본 약관에 우선하여 적용됩니다.<br>
							  </div>
							</div>
						  </div>
						  <div class="card">
							<div class="card-header" id="headingTwo">
							  <h5 class="mb-0 row">
								<div class="d-flex justify-content-between">
									<div class="primary-checkbox" style="margin:10px">
										<input type="checkbox" id="two-checkbox" name="check2">
										<label for="two-checkbox"></label>
									</div>
								</div>
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#signUpTwo" aria-expanded="false" aria-controls="signUpTwo">
								  제2조(이용규칙의 준수)
								</button>
							  </h5>
							</div>
							<div id="signUpTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							  <div class="card-body">
								1. 당 호텔에 숙박을 희망하는 고객은 당 호텔에 숙박 예약을 신청할 수 있으며, 이 때 당 호텔은 예약고객에게 다음의 사항을 요청할 수 있습니다. 고객이 해당 요청을 거절할 경우, 숙박 예약이 제한될 수 있습니다.<br><br>

								① 숙박자의 성명, 생년월일, 성별, 국적, 주소, 여권번호, 연락처, 예약 보증을 위한 신용카드 번호 등<br>
								② 개인정보 수집 및 이용, 제3자 제공에 대한 동의<br>
								③ 기타 당 호텔에서 필요하다고 정하는 사항<br><br>

								2. 고객의 숙박예약 신청을 당 호텔이 승낙하였을 때에 숙박계약이 성립된 것으로 합니다.<br>
							  </div>
							</div>
						  </div>
						  <div class="card">
							<div class="card-header" id="headingThree">
							  <h5 class="mb-0 row">
								<div class="d-flex justify-content-between">
									<div class="primary-checkbox" style="margin:10px">
										<input type="checkbox" id="three-checkbox" name="check3">
										<label for="three-checkbox"></label>
									</div>
								</div>
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#signUpThree" aria-expanded="false" aria-controls="signUpThree">
								  제3조(약관의 변경)
								</button>
							  </h5>
							</div>
							<div id="signUpThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							  <div class="card-body">
								1. 본 약관의 내용은 호텔의 필요에 의해 언제든지 변경될 수 있습니다. 또한 이 약관의 일부 조항이 대한민국의 강행법규와 상충되는 경우에는 그 강행법규에 따릅니다. 다만 이 경우에도 약관의 나머지 조항의 효력에는 영향을 미치지 않습니다.<br><br>

								2. 고객은 숙박계약의 체결 시점에 시행 중인 약관의 적용을 받으며 변경된 약관은 소급하여 적용되지 않습니다.
							  </div>
							</div>
						  </div>
						</div>
					</div>
					<div class="modal-footer alert-secondary" style="width:400px; text-align:center; padding:10px">
						<div class="row">
							<div style="width:180px; margin-right:10px">
								<input type="button" class="btn btn-block btn-warning" onClick="javascript:Uncheck();" value="닫기" data-dismiss="modal">
							</div>
							<div style="width:180px">
								<button type="button" id="insert" class="btn btn-block btn-success">회원정보입력</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--================sign up Area =================-->

		<!--================sign up insert Area =================-->
		<div class="modal fade" id="signUpinsertModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModelLabel" >
			<div class="modal-dialog" role="document" style="width:500px">
				<div class="modal-content" style="width:502px">
					<div class="modal-header" style="width:500px; background: rgb(255, 190, 11);">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true" onClick="javascript:Uncheck()">&times;</span></button>
					</div><br>
					<center><img src="/~team1/my/img/Login_Logo.png" style="width:220px; height: 130px"></center><br>
					<h4 class="modal-title" style="text-align: center; margin-top:10px; margin-bottom:10px" id="exampleModelLabel">회원가입</h4>
					<form action="/~team1/main/add" method="post">
						<div class="modal-body bg-light" style="width:500px;">
							<div class="container">
								<table>
									<tbody>
										<tr>
											<td class="row" style="padding-top:5px; padding-bottom:5px">
												<font style="width:100px; text-align:center; padding-top:5px; padding-bottom:5px; margin:0; font-family: 'Noto Sans KR', sans-serif;">아이디 </font><input style="width:150px" type="text" name="inuid" id="chuid" size="20" maxlength="20" value="" oninput="check_id()" class="form-control" required="required">
												<font style="height:38px; text-align:center; padding-top:5px; padding-bottom:5px; margin:0; font-family: 'Noto Sans KR', sans-serif;" id="id"></font>
											</td>
											<td class="row" style="padding-top:5px; padding-bottom:5px">
												<font style="width:100px; text-align:center; padding-top:5px; padding-bottom:5px; margin:0; font-family: 'Noto Sans KR', sans-serif;">비밀번호 </font><input style="width:150px" type="password" name="inpwd" id="chpwd" size="20" maxlength="20" value="" class="form-control" required="required">
											</td>
											<td class="row" style="padding-top:5px; padding-bottom:5px">
												<font style="width:100px; text-align:center; padding-top:5px; padding-bottom:5px; margin:0; font-family: 'Noto Sans KR', sans-serif;">이름 </font><input style="width:150px" type="text" name="inname" id="chname" size="20" maxlength="20" value="" class="form-control" required="required">
											</td>
											<td class="row" style="padding-top:5px; padding-bottom:5px">
												<font style="width:100px; text-align:center; padding-top:5px; padding-bottom:5px; margin:0; font-family: 'Noto Sans KR', sans-serif;">이메일 </font><input style="width:300px" type="email" name="inemail" id="chemail" size="40" maxlength="40" value="" class="form-control" required="required">
											</td>
											<td class="row form-inline" style="padding-top:5px; padding-bottom:5px">
												<font style="width:100px; text-align:center; padding-top:5px; padding-bottom:5px; margin:0; font-family: 'Noto Sans KR', sans-serif;">전화번호 </font>
												<input style="width:60px; text-align:center" type="text" name="phone1" id="chphone1" size="3" maxlength="3" value="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required="required">-
												<input style="width:70px; text-align:center" type="text" name="phone2" id="chphone2" size="4" maxlength="4" value="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required="required">-
												<input style="width:70px; text-align:center" type="text" name="phone3" id="chphone3" size="4" maxlength="4" value="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required="required">
											</td>
											<td class="row" style="padding-top:5px; padding-bottom:5px">
												<font style="width:100px; text-align:center; padding-top:5px; padding-bottom:5px; margin:0; font-family: 'Noto Sans KR', sans-serif;">생일 </font>
												<input style="width:150px" type="text" name="inbirthday" placeholder="생년월일" id="entranceDate" size="20" maxlength="20" value="" class="form-control entrance" required="required">
											</td>
											<td class="row" style="padding-top:5px; padding-bottom:5px">
												<font style="width:100px; text-align:center; padding-top:5px; padding-bottom:5px; margin:0; font-family: 'Noto Sans KR', sans-serif;">우편번호 </font>
												<input style="width:100px; text-align:center" type="text" name="inzip" id="chzip" size="5" maxlength="5" value="" class="form-control" required="required" placeholder="우편번호" readonly="readonly">&nbsp&nbsp
												<input type="button" class="btn btn-sm btn-warning" value="우편번호찾기" onclick="javascript:searchinhome()">
											</td>
											<td class="row" style="padding-top:5px; padding-bottom:5px">
												<font style="width:100px; text-align:center; padding-top:5px; padding-bottom:5px; margin:0; font-family: 'Noto Sans KR', sans-serif;">주소 </font>
												<input style="width:350px;" type="text" name="injuso" id="chjuso" value="" class="form-control" required="required" placeholder="주소" readonly="readonly"><br>											
											</td>
											<td class="row" style="padding-top:5px; padding-bottom:5px">
												<font style="width:100px; text-align:center; padding-top:5px; padding-bottom:5px; margin:0; font-family: 'Noto Sans KR', sans-serif;">상세정보</font>
												<input style="width:170px;" type="text" name="indejuso" id="detailjuso" value="" class="form-control" required="required" placeholder="상세주소">&nbsp&nbsp
												<input style="width:170px;" type="text" name="inmojuso" id="modeljuso" value="" class="form-control" required="required" placeholder="참고항목" readonly="readonly">
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="modal-footer alert-secondary" style="width:500px; text-align:center; padding:10px">
							<div class="row" style="margin:0px;">
								<div style="width:230px; margin-right:20px">
									<input type="button" class="btn btn-block btn-warning" onclick="javascript:signreset();" value="닫기" data-dismiss="modal">
								</div>
								<div style="width:230px">
									<input type="submit" id="signinsert" class="btn btn-block btn-success" value="회원가입">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--================sign up insert Area =================-->

		<!--================Login Area =================-->
		<div class="modal fade" id="loginModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModelLabel">
			<div class="modal-dialog" role="document" style="width:350px">
				<div class="modal-content" style="width:352px; border-radius: 1rem">
					<div class="modal-header" style="width:350px; background: rgb(73, 73, 73);">
						<button type="button" style="color:white;" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true" onClick="logreset()">&times;</span></button>
					</div><br>
					<form onsubmit="return logincheck()">
						<center><img src="/~team1/my/img/Login_Logo.png" style="width:220px; height: 130px"></center><br>
						<h4 class="modal-title" style="text-align: center; margin-top:10px; margin-bottom:10px" id="exampleModelLabel">로그인</h4><br>
							<div class="modal-body bg-light" style="width:350px;">
								<div class="container">
									<table>
										<tbody>
											<tr>
												<td class="row" style="padding-top:5px; padding-bottom:5px">
													<font style="width:100px; text-align:center; padding-top:5px; padding-bottom:5px; margin:0; font-family: 'Noto Sans KR', sans-serif;">아이디 </font><input style="width:200px" type="text" name="loginuid" id="loguid" size="20" maxlength="20" value="" class="form-control" required="required">
													
												</td>
												<td class="row" style="padding-top:5px; padding-bottom:5px">
													<font style="width:100px; text-align:center; padding-top:5px; padding-bottom:5px; margin:0; font-family: 'Noto Sans KR', sans-serif;">비밀번호 </font><input style="width:200px" type="password" name="loginpwd" id="logpwd" size="20" maxlength="20" value="" class="form-control" required="required">
												</td>
												
											</tr>
											<td id="error"></td>
										</tbody>
									</table>
										
								</div>
							</div>
							<div class="alert-secondary" style="width:350px; padding-right:15px; padding-left:15px; padding-top:15px; text-align:center">
								
								<a href='#signUpModal' data-toggle='modal' data-dismiss="modal" >Create an Account!</a>
							</div>
						<div class="modal-footer alert-secondary" style="width:350px; text-align:center">
							<div style="width:155px">
								<input type="button" class="btn btn-sm btn-block btn-warning" onclick="javascript:logreset();" data-dismiss="modal" value="닫기" >
							</div>
							<div style="width:155px">
								<input type="submit" class="btn btn-sm btn-block btn-success" value="로그인">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--================Login Area =================-->