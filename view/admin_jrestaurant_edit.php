<script>
    function submit_form() {
        document.getElementById('JrestaurantEdit').submit();
    }
</script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">예약번호 : <?php echo $row->reservation_no?> 상세정보</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <?
                    	$no=$row->no;
			$reservation_no=$row->reservation_no;
			$restaurant_no=$row->restaurant_no;
			$restaurant_name=$row->restaurant_name;
                    	$adult_num=$row->adult_num;
                    	$child_num=$row->child_num;
			$reservation_date=$row->reservation_date;
                    	$meal_day=$row->meal_day;
                    	$meal_time=$row->meal_time;
			$state=$row->state;
                    ?>
                    <div class="alert" style="padding-left:50px; padding-right:50px">
                        <br>
                        <form id="JrestaurantEdit" method="post" enctype="multipart/form-data" action="/ajrestaurant/goedit/?no=<?php echo $row->no?>" >
				<div class="form-group">
				    <div class="col-lg-6" style="padding-top:20px">
					<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp예약번호</label>
					<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
					<input type="hidden" name="no" id="no" size="20" maxlength="20" value="<?php echo $no?>">
					<input style="width:200px" type="text" name="reservation_no" id="reservation_no" size="20" maxlength="20" value="<?php echo $reservation_no?>" class="form-control" disabled>
				    </div>
					<div class="row" style="padding-left:10px">
						<div class="col-lg-3" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp레스토랑 이름</label>
							<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
							<input type="hidden" name="restaurant_no" value="<?php echo $restaurant_no ?>">
							<input style="width:300px" type="text" name="restaurant_name" id="restaurant_name" size="20" maxlength="20" value="<?php echo $restaurant_name?>" class="form-control" disabled>
						</div>
						<div class="col-lg-3" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp예약자</label>
							<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
							<input style="width:300px" type="text" name="member" id="member" size="20" maxlength="20" value="<?php echo $row->member_name; ?>" oninput="check_id()" class="form-control" disabled>
						</div>
						<div class="col-lg-6" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp예약상태</label><br>
							<?php
								if($state == 1){
									echo("<input type='radio' style='margin-top:7px' name='state' value='1' id='state' checked>");
									echo("<font style='margin-right:15px; font-family: \"Noto Sans KR\", sans-serif;'>&nbsp : 예약완료 </font>");
									echo("<input type='radio' style='margin-top:7px' name='state' value='0' id='state' >");
									echo("<font style='margin-right:15px; font-family: \"Noto Sans KR\", sans-serif;'>&nbsp : 예약취소 </font>");
								}
								else if($state == 0){
									echo("<input type='radio' style='margin-top:7px' name='state' value='1' id='state'>");
									echo("<font style='margin-right:15px; font-family: \"Noto Sans KR\", sans-serif;'>&nbsp : 예약완료 </font>");
									echo("<input type='radio' style='margin-top:7px' name='state' value='0' id='state' checked>");
									echo("<font style='margin-right:15px; font-family: \"Noto Sans KR\", sans-serif;'>&nbsp : 예약취소 </font>");
								}
							?>
						</div>
						<div class="col-lg-3" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp성인 수</label>
							<input style="width:300px" type="number" name="adult" id="adult" size="20" min="1" max="8" value="<?php echo $adult_num?>" oninput="check_id()" class="form-control" >
						</div>
						<div class="col-lg-9" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp아이 수</label>
							<input style="width:300px" type="number" name="child" id="child" size="20" min="1" max="8" value="<?php echo $child_num?>" oninput="check_id()" class="form-control" >
						</div>
						<div class="col-lg-3" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp예약일자</label>
							<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
							<input style="width:300px" type="text" name="meal_day" id="meal_day" size="20" maxlength="20" value="<?php echo $reservation_date?>" class="form-control" disabled>
						</div>
						<div class="col-lg-3" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp방문일자</label>
							<input style="width:300px" type="date" name="meal_day" id="meal_day" size="20" maxlength="20" value="<?php echo $meal_day?>" oninput="check_id()" class="form-control" >
						</div>
						<div class="col-lg-6" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp방문시간</label>
							<select id="meal_time" name="meal_time" class="form-control" style="width:300px">
								<option value="12:00">12:00</option>
								<option value="12:30">12:30</option>
								<option value="13:00">13:00</option>
								<option value="18:00">18:00</option>
								<option value="18:30">18:30</option>
								<option value="19:00">19:00</option>
							</select>
						</div>
						<div class="col-lg-9" align="right" style="padding-top:40px; padding-right: 65px">
							<a href="/ajrestaurant/del/?no=<?php echo $row->no;?>" onClick="return confirm('삭제할까요?');" class="btn btn-danger btn-icon-split">
								<span class="icon text-white-50">
									<i class="fas fa-trash"></i>
								</span>
								<span class="text">삭제하기</span>
							</a>&nbsp&nbsp&nbsp
							<a href="#" onclick="res_check()" class="btn btn-success btn-icon-split">
								<span class="icon text-white-50">
									<i class="fas fa-check"></i>
								</span>
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
<script>
	function res_check(){
		var adult = document.getElementById("adult").value;
		var child = document.getElementById("child").value;
		var all = parseInt(adult) + parseInt(child);
		if(adult <= 0){
			alert("성인 1명은 필수입니다.");
			return false;
		}
		if(all > 8){
			alert("예약가능한 인원을 초과했습니다.");
			return false;
		}
		document.getElementById('JrestaurantEdit').submit();
	}
</script>
