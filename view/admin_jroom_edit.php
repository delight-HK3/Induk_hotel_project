<script>
    function submit_form() {
        document.getElementById('jroomEdit').submit();
    }
</script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">주문번호 : <?php echo $row->reservation_no?> 상세정보</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <?php
						$no=$row->no;
						$reservation_no=$row->reservation_no;
						$adult_num=$row->adult_num;
						$child_num=$row->child_num;
						$room_name=$row->room_name;
						$room_no=$row->room_no;
						$pay_day=$row->pay_day;
						$checkinday=$row->checkinday;
						$checkoutday=$row->checkoutday;
						$adult_morning_count=$row->adult_morning_count;
						$child_morning_count=$row->child_morning_count;
						$adult_morning=$row->adult_morning;
						$child_morning=$row->child_morning;
						$price=$row->price;
						$pay_method=$row->pay_method;
						$state=$row->state;
						$carpickup=$row->carpickup;
						$bigo=$row->bigo;
                    ?>
                    <div class="alert" style="padding-left:50px; padding-right:50px">
                        <br>
                        <form id="jroomEdit" method="post" enctype="multipart/form-data" action="/ajroom/goedit/?no=<?php echo $row->no?>">
                            <div class="form-group row">
                                <div class="col-4" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp결제번호</label>
                                    <label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
                                    <input style="width:200px" type="text" name="no" id="no" value="<?php echo $reservation_no?>" class="form-control" disabled>
                                </div>
                                <div class="col-lg-8" style="padding-top:10px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp결제날짜</label>
                                    <label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
                                    <input style="width:300px" type="text" name="pay_day" id="pay_day" value="<?php echo $pay_day; ?>" class="form-control" disabled>
                                </div>
                                <div class="col-lg-4" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp예약한 Room 이름</label>
                                    <label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
                                    <input type="hidden" name="room_no" value="<?php echo $room_no ?>">
                                    <input style="width:300px" type="text" name="room_name" value="<?php echo $room_name ?>" class="form-control" disabled>
                                </div>
                                <div class="col-lg-8" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp예약자 이름</label>
                                    <label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
                                    <input style="width:300px" type="text" name="member_name" id="member_name" value="<?php echo $row->member_name; ?>" class="form-control" disabled>
                                </div>
                                <div class="col-lg-4" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp체크인 날짜</label>
                                    <input style="width:300px" type="date" name="checkinday" id="checkinday" value="<?php echo $checkinday?>" class="form-control">
                                </div>
                                <div class="col-lg-8" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp체크아웃 날짜</label>
                                    <input style="width:300px" type="date" name="checkoutday" id="checkoutday" value="<?php echo $checkoutday?>" class="form-control">
                                </div>
                                <div class="col-lg-4" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp성인 수</label>
                                    <input style="width:300px" type="number" name="adult_num" id="adult_num" min="1" max="2" value="<?php echo $adult_num?>" class="form-control">
                                </div>
                                <div class="col-lg-8" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp어린이 수</label>
                                    <input style="width:300px" type="number" name="child_num" id="child_num" min="0" max="2" value="<?php echo $child_num?>" class="form-control">
                                </div>
                                <div class="col-lg-4" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp성인 조식 주문 수</label>
                                    <input style="width:300px" type="text" name="adult_morning_count" id="adult_morning_count" value="<?php echo $adult_morning_count?>" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                </div>
                                <div class="col-lg-8" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp어린이 조식 주문 수</label>

                                    <input style="width:300px" type="text" name="child_morning_count" id="child_morning_count" value="<?php echo $child_morning_count?>" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                </div>
                                <div class="col-lg-4" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp성인 조식 총 합계</label>
                                    <?php
										if($row->room_no == 1){
									?>
                                    <input type="hidden" name="adult_morning" id="adult_morning" value="<?php echo $adult_morning?>">
                                    <input style="width:300px" type="text" name="adult_morning1" id="adult_morning1" value="VIP 특별혜택" class="form-control" readonly>
                                    <?php
										}
										else{
									?>
                                    <input style="width:300px" type="text" name="adult_morning" id="adult_morning" value="<?php echo $adult_morning?>" class="form-control">
                                    <?php
										}
									?>
                                </div>
                                <div class="col-lg-8" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp어린이 조식 총 합계</label>
                                    <?php
										if($row->room_no == 1){
									?>
                                    <input type="hidden" name="child_morning" id="child_morning" value="<?php echo $adult_morning?>">
                                    <input style="width:300px" type="text" name="child_morning1" id="child_morning1" value="VIP 특별혜택" class="form-control" readonly>
                                    <?php
										}
										else{
									?>
                                    <input style="width:300px" type="text" name="child_morning" id="child_morning" value="<?php echo $child_morning?>" class="form-control">
                                    <?php
										}
									?>

                                </div>
                                <div class="col-lg-4" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp전체 총 합계</label>
                                    <input style="width:300px" type="text" name="price" id="price" value="<?php echo $price?>" class="form-control">
                                </div>

                                <div class="col-lg-8" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp차량 서비스</label>
                                    <?php
										if($row->room_no == 1){
									?>
                                    <input type="hidden" name="carpickup" id="carpickup" value="<?php echo $carpickup?>">
                                    <input style="width:300px" type="text" name="carpickup1" id="carpickup1" value="VIP 특별혜택" class="form-control" readonly>
                                    <?php
										}
										else{
									?>
                                    <input style="width:300px" type="text" name="carpickup" id="carpickup" value="<?php echo $carpickup?>" class="form-control">
                                    <?php
										}
									?>

                                </div>

                                <div class="col-lg-4" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp결제상태</label><br>
                                    <?php
										if($state == 1){
											echo("<input type='radio' style='margin-top:7px' name='state' value='1' id='state' checked>");
											echo("<font style='margin-right:15px; font-family: \"Noto Sans KR\", sans-serif;'>&nbsp : 결제승인 </font>");
											echo("<input type='radio' style='margin-top:7px' name='state' value='0' id='state' >");
											echo("<font style='margin-right:15px; font-family: \"Noto Sans KR\", sans-serif;'>&nbsp : 결제취소 </font>");
										}
										else if($state == 0){
											echo("<input type='radio' style='margin-top:7px' name='state' value='1' id='state'>");
											echo("<font style='margin-right:15px; font-family: \"Noto Sans KR\", sans-serif;'>&nbsp : 결제승인 </font>");
											echo("<input type='radio' style='margin-top:7px' name='state' value='0' id='state' checked>");
											echo("<font style='margin-right:15px; font-family: \"Noto Sans KR\", sans-serif;'>&nbsp : 결제취소 </font>");
										}
									?>

                                </div>

                                <div class="col-lg-8" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp결제수단</label><br>
                                    <?php
										if($pay_method == 1){
											echo("<input type='radio' style='margin-top:7px' name='pay_method' value='0' id='pay_method' >");
											echo("<font style='margin-right:15px; font-family: \"Noto Sans KR\", sans-serif;'>&nbsp : 카드결제 </font>");
											echo("<input type='radio' style='margin-top:7px' name='pay_method' value='1' id='pay_method' checked>");
											echo("<font style='margin-right:15px; font-family: \"Noto Sans KR\", sans-serif;'>&nbsp : 계좌이체 </font>");
										}
										else if($pay_method == 0){
											echo("<input type='radio' style='margin-top:7px' name='pay_method' value='0' id='pay_method' checked>");
											echo("<font style='margin-right:15px; font-family: \"Noto Sans KR\", sans-serif;'>&nbsp : 카드결제 </font>");
											echo("<input type='radio' style='margin-top:7px' name='pay_method' value='1' id='pay_method'>");
											echo("<font style='margin-right:15px; font-family: \"Noto Sans KR\", sans-serif;'>&nbsp : 계좌이체 </font>");
										}
									?>
                                </div>

                                <div class="col-lg-4" style="padding-top:20px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp추가사항</label>
                                    <textarea style="width:450px" type="text" name="bigo" id="bigo" rows="6" value="" class="form-control"><?php echo $bigo?></textarea>
                                </div>
                                <div class="col-lg-8" style="padding-top:20px; padding-left:20px"><br><br><br><br><br><br>
                                    <div class="row" align="right">
                                        <a href="/ajroom/del/?no=<?php echo $row->no;?>" onClick="return confirm('삭제할까요?');" class="btn btn-danger btn-icon-split">
                                            <span class="icon text-white-50"><i class="fas fa-trash"></i></span>
                                            <span class="text">삭제하기</span>
                                        </a>&nbsp&nbsp&nbsp
                                        <a href="#" onclick="submit_form()" class="btn btn-success btn-icon-split">
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
