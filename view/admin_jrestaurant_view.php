<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">예약번호 : <?=$row->reservation_no?> 상세정보</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <?
                    $no=$row->no;
					$reservation_no=$row->reservation_no;
                    $adult_num=$row->adult_num;
                    $child_num=$row->child_num;
					$reservation_date=$row->reservation_date;
                    $meal_day=$row->meal_day;
                    $meal_time=$row->meal_time;
					$state=$row->state;
                    ?>
                    <div class="alert" style="padding-left:50px; padding-right:50px">
                        <br>
                        <div class="form-group">
                            <div class="col-lg-6" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp예약번호</label>
                                <label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
                                <input style="width:200px" type="text" name="no" id="no" size="20" maxlength="20" value="<?=$reservation_no?>" oninput="check_id()" class="form-control" disabled>
                            </div>
							<div class="row" style="padding-left:15px">
								<div class="col-lg-3" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp레스토랑 이름</label>
									<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
									<input style="width:300px" type="text" name="restaurant" id="restaurant" size="20" value="<?=$row->restaurant_name; ?>" oninput="check_id()" class="form-control" disabled>
								</div>
								<div class="col-lg-3" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp예약자</label>
									<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
									<input style="width:300px" type="text" name="member" id="member" size="20" value="<?=$row->member_name; ?>" oninput="check_id()" class="form-control" disabled>
								</div>
								<div class="col-lg-6" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp예약상태</label>
									<?
										if($state == 1){
									?>
										<input style="width:300px" type="text" name="state" id="state" size="20" maxlength="20" value="예약완료" oninput="check_id()" class="form-control" disabled>
									<?
										}	
									?>
									<?
										if($state == 0){
									?>
											<input style="width:300px" type="text" name="state" id="state" size="20" maxlength="20" value="예약취소" oninput="check_id()" class="form-control" disabled>
									<?
										}
									?>
								</div>
								<div class="col-lg-3" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp어른 수</label>
									<input style="width:300px" type="text" name="adult" id="adult" size="20" maxlength="20" value="<?=$adult_num?> 명" oninput="check_id()" class="form-control" disabled>
								</div>
								<div class="col-lg-9" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp어린이 수</label>
									<input style="width:300px" type="text" name="child" id="child" size="20" maxlength="20" value="<?=$child_num?> 명" oninput="check_id()" class="form-control" disabled>
								</div>
								<div class="col-lg-3" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp예약일자</label>
									<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
									<input style="width:300px" type="date" name="meal_day" id="meal_day" size="20" maxlength="20" value="<?=$reservation_date?>" oninput="check_id()" class="form-control" disabled>
								</div>
								<div class="col-lg-3" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp방문일자</label>
									<input style="width:300px" type="date" name="meal_day" id="meal_day" size="20" maxlength="20" value="<?=$meal_day?>" oninput="check_id()" class="form-control" disabled>
								</div>
								<div class="col-lg-6" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp방문시간</label>
									<input style="width:300px" type="time" name="meal_time" id="meal_time" size="20" maxlength="20" value="<?=$meal_time?>" oninput="check_id()" class="form-control" disabled>
								</div>
								<div class="col-lg-9" align="right" style="padding-top:40px; padding-right: 50px">
									<a href="/~team1/ajrestaurant/edit/?no=<?=$no?>" style="width:200px; margin-right:10px" class="btn btn-block btn-primary" >수정하기</a>
								</div>
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