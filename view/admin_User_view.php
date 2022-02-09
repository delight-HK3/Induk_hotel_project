<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">회원상세정보</h6>
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
								<div class="row form-inline" style="padding-left:12px">
									<input style="width:70px; text-align:center" type="text" name="myphone1" id="phone1" size="3" maxlength="3" value="<?php echo($phone1)?>" class="form-control" disabled>&nbsp-&nbsp
									<input style="width:70px; text-align:center" type="text" name="myphone2" id="phone2" size="4" maxlength="4" value="<?php echo($phone2)?>" class="form-control" disabled>&nbsp-&nbsp
									<input style="width:70px; text-align:center" type="text" name="myphone3" id="phone3" size="4" maxlength="4" value="<?php echo($phone3)?>" class="form-control" disabled>
								</div>
							</div>
							<div class="col-lg-6" style="padding-top:10px">
								<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp이메일</label>
								<input style="width:300px" type="email" name="email" id="email" size="20" maxlength="20" value="<?php echo($row->email)?>" class="form-control" disabled>
							</div>
							<div class="col-lg-12" style="padding-top:10px">
								<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp우편번호</label>
								<input style="width:100px; text-align:center" type="text" name="zip" id="zip" size="20" maxlength="20" value="<?php echo($row->zip_number)?>" class="form-control" disabled>
							</div>
							<div class="col-lg-6" style="padding-top:10px">
								<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp주소</label>
								<input style="width:300px" type="text" name="juso1" id="juso1" size="5" maxlength="5" value="<?php echo($juso[0])?>" class="form-control" disabled>
							</div>
							<div class="col-lg-6" style="padding-top:10px">
								<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp상세정보</label>
								<div class="row" style="padding-left:15px">
									<input style="width:145px" type="text" name="juso2" id="juso2" value="<?php echo($juso[1])?>" class="form-control" disabled>&nbsp&nbsp&nbsp
									<input style="width:145px;" type="text" name="juso3" id="juso3" value="<?php echo($juso[2])?>" class="form-control" disabled>
								</div>
							</div>
							<div class="col-lg-6" style="padding-top:10px"></div>
							<div class="col-lg-6"  style="padding-top:40px; padding-right: 50px">
								<a href="/admin/edit/?no=<?php echo $no?>" style="width:200px; margin-right:10px" class="btn btn-block btn-primary" >수정하기</a>
							</div>
						</div>
                    </div>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
