<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">문의사항 목록</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
						<tr>
							<th>상담유형</th>
							<th>제목</th>
							<th>내용</th>
							<th>문의자 이메일</th>
						</tr>
                    </thead>
                    <tbody>
						<?
							foreach ($list as $row)// 연관배열 list를 row를 통해 출력한다.
							{
								$no=$row->no;
								$q_name=$row->q_name;//제목
								$type=$row->type;
								$q_bigo=$row->q_bigo;
								$email=$row->c_email;
                        ?>
							<tr>
								<td><?php echo $row->type; ?></a></td>
								<td><a href="/contact/admin_contact_view/?no=<?php echo $no?>"><?php echo $q_name; ?></a></td>
								<td><?php echo $q_bigo; ?></a></td>
								<td><?php echo $email; ?></td>
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
