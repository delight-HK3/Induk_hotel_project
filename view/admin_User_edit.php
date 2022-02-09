<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">회원정보 수정</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <?php
							$no=$row->no;
							$name=$row->name;
							$email=$row->email;
							$uid=$row->uid;
							$pwd=$row->pwd;
							$birth=$row->birthday;
							$zip=$row->zip_number;
							$phone1=trim(substr($row->phone,0,3));
							$phone2=trim(substr($row->phone,3,4));
							$phone3=trim(substr($row->phone,7,4));
							$juso = explode("!", $row->juso);
							$rank=$row->rank==1 ? "관리자" : "유저" ;      // 1->관리자, 2->유저
                        ?>
                        <div class="alert" style="padding-left:50px; padding-right:50px">
                            <br>
                            <form id="UserEdit" method="post" action="/admin/goedit/?no=<?php echo $no?>">
                                <div class="form-group row">
                                    <div class="col-6" style="padding-top:10px">
                                        <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp아이디</label>
                                        <label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
                                        <input style="width:150px" type="text" name="myuid" id="uid" size="20" maxlength="20" value="<?php echo($row->uid)?>"  class="form-control" readonly="readonly">
                                    </div>
                                    <div class="col-6" style="padding-top:10px">
                                        <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp비밀번호</label>
										<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                        <input style="width:150px" type="text" name="mypwd" id="pwd" size="20" maxlength="20" value="<?php echo($row->pwd)?>" class="form-control" >
                                    </div>
                                    <div class="col-6" style="padding-top:10px">
                                        <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp이름</label>
										<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                        <input style="width:150px" type="text" name="myname" id="name" size="20" maxlength="20" value="<?php echo($row->name)?>"  class="form-control" >
                                    </div>
                                    <div class="col-6" style="padding-top:10px">
                                        <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp생일</label>
                                        <input style="width:200px" type="date" name="mybirthday" id="editDate" size="20" maxlength="20" value="<?php echo($row->birthday)?>" class="form-control entrance" placeholder="생년월일">
                                    </div>
                                    <div class="col-6" style="padding-top:10px">
                                        <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp전화번호</label>
										<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                        <div class="row form-inline" style="padding-left:12px">
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
                                        <div class="form row" style="padding-left:12px">
                                            <input style="width:100px; text-align:center" type="text" name="myzip" id="mychzip" size="20" maxlength="20" value="<?php echo($row->zip_number)?>" class="form-control" placeholder="우편번호">&nbsp&nbsp<input type="button" class="btn btn-sm btn-warning" value="우편번호찾기" onclick="javascript:searchhome()" readonly>
                                        </div>
                                    </div>
                                    <div class="col-6" style="padding-top:10px">
                                        <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp주소</label>
                                        <input style="width:300px" type="text" name="myinjuso" id="mychjuso" size="5" value="<?php echo($juso[0])?>" class="form-control" placeholder="주소" readonly>
                                    </div>
                                    <div class="col-6" style="padding-top:10px">
                                        <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp상세정보</label>
                                        <div class="row" style="padding-left:15px">
                                            <input style="width:145px" type="text" name="myindejuso" id="mydetailjuso" value="<?php echo($juso[1])?>" class="form-control" placeholder="상세주소">&nbsp&nbsp&nbsp
                                            <input style="width:145px;" type="text" name="myinmojuso" id="mymodeljuso" value="<?php echo($juso[2])?>" class="form-control" placeholder="참고항목" readonly>
                                            <input style="width:145px;" type="hidden" name="myrank" id="myrank" value="<?php echo($row->rank)?>">
                                        </div>
                                    </div>
                                    <div class="col-6" style="padding-top:40px"></div>
                                    <div class="col-6" style="padding-top:40px" align="left">
										<div class="row" style="padding-left:15px">
											<a href="/admin/del/?no=<?=$no?>" onClick="return confirm('삭제할까요?');" class="btn btn-danger btn-icon-split">
												<span class="icon text-white-50"><i class="fas fa-trash"></i></span>
												<span class="text">삭제하기</span>
											</a>&nbsp&nbsp&nbsp
											<a href="#" onclick="return membercheck()" class="btn btn-success btn-icon-split">
												<span class="icon text-white-50"><i class="fas fa-check"></i></span>
												<span class="text">저장하기</span>
											</a>
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
	function membercheck(){
		var pwd = $("#pwd").val();
		var name = $("#name").val();
		var email = $("#email").val();
		var phone1 = $("#phone1").val();
		var phone2 = $("#phone2").val();
		var phone3 = $("#phone3").val();
		
		if(pwd == ""){
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
		document.getElementById('UserEdit').submit();
	}
</script>
