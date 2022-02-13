		<?
			$phone1=trim(substr($row->phone,0,3));
			$phone2=trim(substr($row->phone,3,4));
			$phone3=trim(substr($row->phone,7,4));
			$juso = explode("!", $row->juso);
			$no=$row->no;
		?>
		<section class="banner_area">
            <div class="mypage_table align-items-center"><br><br><br><br><br><br><br>
            	<div class="overlay bg-mypage" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container animate__animated animate__fadeInDown">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						    <li class="nav-item" style="background:rgb(73, 73, 73); border-top-left-radius: 10px; border-top-right-radius: 10px;" role="presentation">
								<a class="nav-link active" style="color:white" id="mypage-tab" data-toggle="tab" href="#mypage" role="tab" aria-controls="mypage" aria-selected="true">Mypage</a>
						    </li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="mypage" role="tabpanel" aria-labelledby="mypage-tab">
								<div class="mypage_header">
									<h2 style="color:white; margin:0; padding-top:10px; padding-left:30px; padding-bottom:20px; background:rgb(73, 73, 73); border-top-right-radius: 10px;">Mypage</h2>
								</div>
								<div class="mypage_content alert-secondary" style="padding-left:25px; padding-right:25px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
									<br>
									<form method="post" action="/~team1/mypage/goedit/no/<?php echo($no)?>" onsubmit="return mypagecheck()">
										<div class="form-group row">
											<div class="col-6" style="padding-top:10px">
												<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp아이디</label> 
												<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
												<input style="width:150px" type="text" name="myuid" id="uid" size="20" maxlength="20" value="<?php echo($row->uid)?>"  class="form-control" readonly="readonly">
											</div>
											<div class="col-6" style="padding-top:10px">
												<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp비밀번호</label>
												<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
												<input style="width:150px" type="password" name="mypwd" id="pwd" size="20" maxlength="20" value="<?php echo($row->pwd)?>" class="form-control" >
											</div>
											<div class="col-6" style="padding-top:10px">
												<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp이름</label>
												<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
												<input style="width:150px" type="text" name="myname" id="name" size="20" maxlength="20" value="<?php echo($row->name)?>"  class="form-control" >
											</div>
											<div class="col-6" style="padding-top:10px">
												<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp생일</label>
												<input style="width:150px" type="text" name="mybirthday" id="editDate" size="20" maxlength="20" value="<?php echo($row->birthday)?>" class="form-control entrance" placeholder="생년월일">
											</div>
											<div class="col-6" style="padding-top:10px">
												<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp전화번호</label>
												<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
												<div class="row form-inline" style="padding-left:15px">
													<input style="width:70px; text-align:center" type="text" name="myphone1" id="phone1" size="3" maxlength="3" value="<?php echo($phone1)?>" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">&nbsp-&nbsp
													<input style="width:70px; text-align:center" type="text" name="myphone2" id="phone2" size="4" maxlength="4" value="<?php echo($phone2)?>" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">&nbsp-&nbsp
													<input style="width:70px; text-align:center" type="text" name="myphone3" id="phone3" size="4" maxlength="4" value="<?php echo($phone3)?>" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
												</div>
											</div>
											<div class="col-6" style="padding-top:10px">
												<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp이메일</label>
												<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
												<input style="width:300px" type="email" name="myemail" id="email" size="20" maxlength="20" value="<?php echo($row->email)?>" class="form-control" >
											</div>
											<div class="col-12" style="padding-top:10px">
												<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp우편번호</label>
												<div class="container row">
													<input style="width:100px; text-align:center" type="text" name="myzip" id="mychzip" size="20" maxlength="20" value="<?php echo($row->zip_number)?>" class="form-control" placeholder="우편번호">&nbsp&nbsp<input type="button" class="btn btn-sm btn-warning" value="우편번호찾기" onclick="javascript:searchhome()">
												</div>
											</div>
											<div class="col-6" style="padding-top:10px">
												<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp주소</label>
												<input style="width:300px" type="text" name="myinjuso" id="mychjuso" size="5" maxlength="5" value="<?php echo($juso[0])?>" class="form-control" placeholder="주소">
											</div>
											<div class="col-6" style="padding-top:10px">
												<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp상세정보</label>
												<div class="row" style="padding-left:15px">
													<input style="width:145px" type="text" name="myindejuso" id="mydetailjuso" value="<?php echo($juso[1])?>" class="form-control" placeholder="상세주소">&nbsp&nbsp&nbsp
													<input style="width:145px;" type="text" name="myinmojuso" id="mymodeljuso" value="<?php echo($juso[2])?>" class="form-control" placeholder="참고항목">
													<input style="width:145px;" type="hidden" name="myrank" id="myrank" value="<?php echo($row->rank)?>">
												</div>
											</div>

											<div class="col" align="right" style="padding-top:20px">
												<input type="submit" style="width:200px; margin-right:10px" class="btn btn-block btn-success" value="저장하기">
											</div>
										</div><br>
									</form>
								</div>
							</div>
						</div>
					<br><br><br><br><br><br><br><br>
				</div>
            </div>   
        </section>
		<script src="/~team1/my/js/jquery-3.5.1.min.js"></script>