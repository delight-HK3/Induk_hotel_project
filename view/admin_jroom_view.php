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
                        <div class="form-group row">
                            <div class="col-lg-4" style="padding-top:10px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp결제번호</label>
                                <label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
                                <input style="width:200px" type="text" name="no" id="no"  value="<?php echo $reservation_no?>"  class="form-control" disabled>
                            </div>
                            <div class="col-lg-8" style="padding-top:10px">
				<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp결제날짜</label>
				<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
                                <input style="width:300px" type="text" name="member_name" id="member_name"  value="<?php echo $pay_day; ?>"  class="form-control" disabled>
                            </div>
                            <div class="col-lg-4" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp예약한 Room 이름</label>
				<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
                                <input style="width:300px" type="text" name="room_name" id="room_name"  value="<?php echo $row->room_name; ?>"  class="form-control" disabled>
                            </div>
                            <div class="col-lg-8" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp예약자 이름</label>
				<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
                                <input style="width:300px" type="text" name="member_name" id="member_name"  value="<?php echo $row->member_name; ?>"  class="form-control" disabled>
                            </div>
			    <div class="col-lg-4" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp체크인</label>
                                <input style="width:300px" type="text" name="checkinday" id="checkinday"  value="<?php echo $checkinday?>"  class="form-control" disabled>
                            </div>
                            <div class="col-lg-8" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp체크아웃</label>
                                <input style="width:300px" type="text" name="checkoutday" id="checkoutday"  value="<?php echo $checkoutday?>"  class="form-control" disabled>
                            </div>
                            <div class="col-lg-4" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp성인 총 인원 수</label>
                                <input style="width:300px" type="text" name="adult_num" id="adult_num"  value="<?php echo $adult_num?> 명"  class="form-control" disabled>
                            </div>
                            <div class="col-lg-8" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp어린이 종 인원 수</label>
                                <input style="width:300px" type="text" name="child_num" id="child_num"  value="<?php echo $child_num?> 명"  class="form-control" disabled>
                            </div>
                            <div class="col-lg-4" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp성인 조식 주문 수</label>
                                <input style="width:300px" type="text" name="adult_morning_count" id="adult_morning_count"  value="<?php echo $adult_morning_count?> 인분"  class="form-control" disabled>
                            </div>
                            <div class="col-lg-8" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp어린이 조식 주문 수</label>
                                <input style="width:300px" type="text" name="child_morning_count" id="child_morning_count"  value="<?php echo $child_morning_count?> 인분"  class="form-control" disabled>
                            </div>
                            	<?php
					if($row->room_no == 1)
					{
				?>
						<div class="col-lg-4" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp성인 조식 총 합계</label>
							<input style="width:300px" type="text" name="child_morning" id="child_morning"  value="VIP 특별혜택"  class="form-control" disabled>
						</div>
				<?php
					}
					else{
				?>
						<div class="col-lg-4" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp성인 조식 총 합계</label>
							<input style="width:300px" type="text" name="child_morning" id="child_morning"  value="<?php echo number_format($adult_morning)?> KRW"  class="form-control" disabled>
						</div>
				<?php
					}
				?>
				<?php
					if($row->room_no == 1)
					{
				?>
						<div class="col-lg-8" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp어린이 조식 총 합계</label>
							<input style="width:300px" type="text" name="child_morning" id="child_morning"  value="VIP 특별혜택"  class="form-control" disabled>
						</div>
				<?php
					}
					else{
				?>
						<div class="col-lg-8" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp어린이 조식 총 합계</label>
							<input style="width:300px" type="text" name="child_morning" id="child_morning"  value="<?php echo number_format($child_morning)?> KRW"  class="form-control" disabled>
						</div>
				<?php
					}
				?>
				<div class="col-lg-4" style="padding-top:20px">
					<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp전체 총 합계</label>
					<input style="width:300px" type="text" name="price" id="price"  value="<?php echo number_format($price)?> KRW"  class="form-control" disabled>
				</div>
				<?php
					if($row->room_no == 1)
					{
				?>
						<div class="col-lg-8" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp차량 서비스</label>
							<input style="width:300px" type="text" name="carpickup" id="carpickup"  value="VIP 특별혜택"  class="form-control" disabled>
						</div>
				<?php
					}
					else{
				?>
						<div class="col-lg-8" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp차량 서비스</label>
							<input style="width:300px" type="text" name="carpickup" id="carpickup"  value="<?php echo number_format($carpickup)?> KRW"  class="form-control" disabled>
						</div>
				<?php
					}
				?>
				<?php
					if($pay_method == 0)
					{
				?>
						<div class="col-lg-4" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp결제수단</label>
							<input style="width:300px" type="text" name="pay_method" id="pay_method"  value="카드결제"  class="form-control" disabled>
						</div>
				<?php
					}
					else{
				?>
						<div class="col-lg-4" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp결제수단</label>
							<input style="width:300px" type="text" name="pay_method" id="pay_method"  value="계좌이체"  class="form-control" disabled>
						</div>
				<?php
					}
					if($state == 1)
					{
				?>
						<div class="col-lg-8" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp결제상태</label>
							<input style="width:300px" type="text" name="state" id="state"  value="결제승인"  class="form-control" disabled>
						</div>
				<?php
					}
					else
					{
				?>
						<div class="col-lg-8" style="padding-top:20px">
							<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp결제상태</label>
							<input style="width:300px" type="text" name="state" id="state"  value="결제취소"  class="form-control" disabled>
						</div>
				<?php
					}
				?>			
                            <div class="col-lg-4" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp추가사항</label>
                                <textarea style="width:400px" type="text" name="bigo" id="bigo" rows="6" value="" class="form-control" disabled><?php echo $bigo?></textarea>
                            </div>
                            <div class="col-lg-8" style="padding-top:20px">
				<br><br><br><br><br><br>
				<a href="/ajroom/edit/no/<?php echo $no?>" style="width:200px; margin-right:10px" class="btn btn-block btn-primary" >수정하기</a>
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
