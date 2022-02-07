
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">레스토랑 예약 장부
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
						<th>예약번호</th>
                        <th>레스토랑 이름</th>
                        <th>예약자</th>
                        <th>어른 수</th>
                        <th>아이 수</th>
						<th>예약일자</th>
                        <th>방문일자</th>
                        <th>방문시간</th>
						<th>예약상태</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?
                    foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
                    {
                        $no=$row->no;
						$reservation_no=$row->reservation_no;
                        $adult_num=$row->adult_num;
                        $child_num=$row->child_num;
						$reservation_date=$row->reservation_date;
                        $meal_day=$row->meal_day;
                        $meal_time=$row->meal_time;
						$state=$row->state;
                        ?>
                        <tr>
							<td><a href="/~team1/ajrestaurant/view/?no=<?=$no?>"><?=$reservation_no; ?></a></td>
                            <td><?=$row->restaurant_name; ?></td>
                            <td><?=$row->member_name; ?></td>
                            <td><?=$adult_num; ?> 명</td>
                            <td><?=$child_num; ?> 명</td>
							<td><?=$reservation_date?></td>
                            <td><?=$meal_day; ?></td>
                            <td><?=$meal_time; ?></td>
							<?
								if($state == 1){
									echo("<td style='color:blue'>예약 완료</td>");
								}
								else{
									echo("<td style='color:red'>예약 취소</td>");
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