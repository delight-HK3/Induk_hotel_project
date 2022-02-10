
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Room 예약 장부
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
			<th>결제번호</th>
                        <th>예약한 방 이름</th>
                        <th>예약자</th>
                        <th>어른 수</th>
                        <th>아이 수</th>
			<th>결제일자</th>
                        <th>체크인 날짜</th>
                        <th>체크아웃 날짜</th>
			<th>합계</th>
			<th>결제방식</th>
			<th>결제상태</th>
                    </tr>
                    </thead>
                    <tbody>
			    <?php
			    foreach ($list as $row)// 연관배열 list를 row를 통해 출력한다.
			    {
				$no=$row->no;
				$reservation_no=$row->reservation_no;
				$adult_num=$row->adult_num;
				$child_num=$row->child_num;
				$pay_day=$row->pay_day;
				$checkinday=$row->checkinday;
				$checkoutday=$row->checkoutday;
				$price=$row->price;
				$pay_method=$row->pay_method;
				$state=$row->state;
			    ?>
				<tr>
					<td><a href="/ajroom/view/?no=<?php echo $no?>"><?php echo $reservation_no?></a></td>
					<td><?php echo $row->room_name; ?></td>
					<td><?php echo $row->member_name; ?></td>
					<td style="text-align:right"><?php echo $adult_num; ?> 명</td>
					<td style="text-align:right"><?php echo $child_num; ?> 명</td>
					<td><?php echo $pay_day; ?></td>
					<td><?php echo $checkinday; ?></td>
					<td><?php echo $checkoutday; ?></td>
					<td><?php echo number_format($price); ?> KRW</td>
					<?php
						if($pay_method == 0){
					?>
							<td>카드결제</td>
					<?php
						}
						else{
					?>
							<td>계좌이체</td>
					<?php
						}
					?>
					<?php
						if($state == 0){
					?>
							<td style="color:red">취소</td>
					<?php
						}
						else{
					?>
							<td style="color:blue">승인</td>
					<?php
						}
					?>
				</tr>
			    <?
				}
			    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
