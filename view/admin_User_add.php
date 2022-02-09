<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">사용자 추가</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div class="alert" style="padding-left:50px; padding-right:50px">
                        <br>
                        <form id="UserAdd" method="post" action="/admin/add">
                            <div class="form-group row">
                                <div class="col-lg-6" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp아이디</label>
									<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
									<div class="row" style="padding-left:10px">
										<input style="width:150px" type="text" name="auid" id="uid" size="20" maxlength="20" value=""  class="form-control" oninput="check_id()">
										<font style="text-align:center; padding-top:5px; padding-bottom:5px; margin:0; font-family: 'Noto Sans KR', sans-serif; font-size:13px" id="id"></font>
									</div>
                                </div>
                                <div class="col-lg-6" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp비밀번호</label>
									<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                    <input style="width:150px" type="password" name="apwd" id="pwd" size="20" maxlength="20" value="" class="form-control" >
                                </div>
                                <div class="col-lg-6" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp이름</label>
									<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                    <input style="width:150px" type="text" name="aname" id="name" size="20" maxlength="20" value=""  class="form-control" >
                                </div>
                                <div class="col-lg-6" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp생일</label>
                                    <input style="width:200px" type="date" name="abirthday" id="editDate" size="20" maxlength="20" value="" class="form-control">
                                </div>
                                <div class="col-lg-6" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp전화번호</label>
									<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                    <div class="row form-inline" style="padding-left:12px">
                                        <input style="width:70px; text-align:center" type="text" name="aphone1" id="phone1" size="3" maxlength="3" value="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">&nbsp-&nbsp
                                        <input style="width:70px; text-align:center" type="text" name="aphone2" id="phone2" size="4" maxlength="4" value="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">&nbsp-&nbsp
                                        <input style="width:70px; text-align:center" type="text" name="aphone3" id="phone3" size="4" maxlength="4" value="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                    </div>
                                </div>
                                <div class="col-lg-6" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp이메일</label>
									<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                    <input style="width:300px" type="email" name="aemail" id="email" size="20" maxlength="20" value="" class="form-control" >
                                </div>
                                <div class="col-lg-6" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp우편번호</label>
                                    <div class="form row" style="padding-left:12px">
                                        <input style="width:100px; text-align:center" type="text" name="azip" id="mychzip" size="20" maxlength="20" value="" class="form-control" placeholder="우편번호" readonly>&nbsp&nbsp<input type="button" class="btn btn-sm btn-warning" value="우편번호찾기" onclick="javascript:searchhome()">
                                    </div>
                                </div>
								 <div class="col-lg-6" style="padding-top:20px">
								 	<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp등급 체크</label>
                                    <div class="row" style="padding-left:12px">
										<input type="radio" style="margin-top:7px" name="arank" value="2" id="myrank" checked>
										<font style="margin-right:15px; font-family: 'Noto Sans KR', sans-serif;">&nbsp : 고객</font>
										<input type="radio" style="margin-top:7px" name="arank" value="1" id="myrank">
										<font style="margin-right:15px; font-family: 'Noto Sans KR', sans-serif;">&nbsp : 관리자</font>
                                    </div>
                                </div>
                                <div class="col-lg-6" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp주소</label>
                                    <input style="width:300px" type="text" name="ainjuso" id="mychjuso" size="5" maxlength="5" value="" class="form-control" placeholder="주소" readonly>
                                </div>
                                <div class="col-lg-6" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp상세정보</label>
                                    <div class="row" style="padding-left:12px">
                                        <input style="width:145px" type="text" name="aindejuso" id="mydetailjuso" value="" class="form-control" placeholder="상세주소" readonly>&nbsp&nbsp&nbsp
                                        <input style="width:145px;" type="text" name="ainmojuso" id="mymodeljuso" value="" class="form-control" placeholder="참고항목">
                                    </div>
                                </div>
                                <div class="col-lg-6"></div>
									<div class="col-lg-6" style="padding-top:40px;">
										<div class="row" style="padding-left:15px">										
											<input onclick="return membercheck()" id="signinsert" style="width:200px" class="btn btn-block btn-success" value="저장하기">
										</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script src="/my/js/jquery-3.5.1.min.js"></script>
<script>
	function check_id() {
		var uid = $("#uid").val();
		const target = document.getElementById('signinsert');
		let success = "&nbsp&nbsp&nbsp<font style='color:rgb(0, 201, 0)'>사용가능한 아이디입니다.</font>";
		let error = "&nbsp&nbsp&nbsp<font style='color:red'>아이디가 중복됩니다.</font>"; 
		$.ajax({
			url: "/main/check_id",
			type: "POST",
			data:{
				"uid":uid
			},
			dataType:'json',
			success:function(data){ //데이터 성공적으로 받았다.
				if(data.responseText == "no"){
					document.getElementById("id").innerHTML = error;
					target.disabled = true;
				} else{
					document.getElementById("id").innerHTML = success;
					target.disabled = false;
				}
			},
		});
	}
	function membercheck(){
		var uid = $("#uid").val();
		var pwd = $("#pwd").val();
		var name = $("#name").val();
		var email = $("#email").val();
		var phone1 = $("#phone1").val();
		var phone2 = $("#phone2").val();
		var phone3 = $("#phone3").val();
		
		if(uid == ""){
			alert("아이디가 없습니다.");
			$("#uid").focus();
			return false;
		}
		else if(pwd == ""){
			alert("비밀번호가 없습니다.");
			$("#pwd").focus();
			return false;
		}
		else if(name == ""){
			alert("이름이 없습니다.");
			$("#name").focus();
			return false;
		}
		else if(email == ""){
			alert("이메일이 없습니다.");
			$("#email").focus();
			return false;
		}
		else if(phone1.length < 3){
			alert("앞자리는 3자 여야 합니다.");
			$("#phone1").focus();
			return false;
		}
		else if(phone2.length < 4){
			alert("두번째자리는 4자 여야 합니다.");
			$("#phone2").focus();
			return false;
		}
		else if(phone3.length < 4){
			alert("세번째자리는 4자 여야 합니다.");
			$("#phone3").focus();
			return false;
		}
		document.getElementById('UserAdd').submit();
	}
</script>
