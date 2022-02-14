<!--===== Footer 고객문의 화면 =====-->

        <!--================Breadcrumb Area =================-->
    <section class="banner_area">
		<div class="reservation_table d_flex align-items-center">
			<div class="overlay bg-contect" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
                        <br><br><br><br><br><br><br><br>
                        <img src="/my/img/Hotel_name.png" class="animated fadeInDown" style="width:580px; height:266px"><br><br><br>
                        <div class="animated fadeInUp">
                            <center>
                                <font class="animated fadeInUp" style="font-family: 'Noto Sans KR', sans-serif; font-size:40px; color:white;">고객의 소리</font>
                                <br><br><br>
                                <font class="animated fadeInUp" style="font-family: 'Noto Sans KR', sans-serif; font-size:20px; color:white">
                                    호텔 이용과 관련된 궁금한 사항이 있으시면 문의를 남겨주시기 바랍니다, 가능한 빠른 답변을 드리겠습니다.
                                </font>
                            </center>
					    </div>
                    </div>
				</div>
			</div>
		</div> 
	</section>
        <!--================Breadcrumb Area =================-->

	<!--================Contact Area =================-->
	<div class="container">  
		<div style="text-align:center" >
			<br><br><br><br><br><br>		
	  		<form name="form1" method="post" action="/contact/add" enctype="multipart/form-data" onsubmit="return check()">
				<br>
					<h2 class="title_color">문의내용</h2>
					<h4 align="left">상담유형</h4>
					<div class="input-group-icon mt-10">
						<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
						<div class="form-select2" id="type">
							<select  name="type">
								<option value="직접선택">직접선택</option>
								<option value="칭찬">칭찬</option>
								<option value="질문">질문</option>
								<option value="불만">불만</option>
								<option value="기타">기타</option>
							</select>
						</div>
					</div>
				<br>
					<h4 align="left">제목</h4>
					<div class="mt-10">
						<input type="text" name="q_name" value=""  placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = '* 제목을 입력해주세요'" required class="single-input2">
					</div>
				<br>
					<h4 align="left">내용</h4>
					<div class="mt-10">
						<textarea class="single-textarea2" id="q_bigo" style="margin-left:15px; padding:10px" name="q_bigo" placeholder="※ 익명 제보의 경우 구체적이지 않고 사실근거가 불분명한 경우 조사를 진행하지 않을 수 있습니다. (최대 500자까지 작성가능)" onfocus="this.placeholder = ''" onblur="this.placeholder = '* 내용을 입력해주세요(최대 500자 작성가능)'" required></textarea>
						<div style="font-size:15px; font-family: 'Noto Sans KR', sans-serif; margin-left:15px; float:left" id="q_bigo_cnt">(0 / 500)</div>
					</div>
				<br>
					<h2 class="title_color">고객 정보</h2>
					<h4 align="left">성명(국문·영문)</h4>
					<div class="mt-10">
						<input type="text" name="c_name" value="" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = '* 이름을 입력해주세요.'" required class="single-input2">
					</div>
				<br>
					<h4 align="left">E-MAIL</h4>
					<div class="mt-10">
						<input type="email" name="c_email" value="" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'EMAIL을 입력해주세요'" required class="single-input2">
					</div>
				<br>
					<h4 align="left">휴대전화</h4>
					<div class="mt-10">
						<input type="tel" name="c_phone" value="" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = '휴대전화 번호를 입력해주세요.'" required class="single-input2" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
					</div>
				<br>
				<hr>
					<div class="button-group-area mt-40">
						<input type="submit" value="문의" class="genric-btn primary e-large" style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;">&nbsp;
						<a onclick="javascript:back()" class="genric-btn danger-border e-large" style="font-family: 'Noto Sans KR', sans-serif; font-size:15px;">뒤로가기</a>
					</div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</form>
		</div>
	</div>
<!--================Contact Area =================-->
<script src="/my/js/jquery-3.5.1.min.js"></script>
