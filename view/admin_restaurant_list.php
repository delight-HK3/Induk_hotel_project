<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">레스토랑 목록
                <a href="/adminrestaurant/cAdd" class="btn btn-warning btn-icon-split" style="float: right;">
                    <span class="icon text-white-50">
                        <i class="fas fa-flag"></i>
                    </span>
                    <span class="text">Restaurant 추가</span>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
			    <tr>
				<th>No</th>
				<th>이름</th>
				<th>오픈시간</th>
				<th>마감시간</th>
			    </tr>
                    </thead>
                    <tbody>
			<?php
				foreach ($list as $row)                            
				{
					$no=$row->no;
					$name=$row->name;
					$opentime=$row->opentime;
					$closetime=$row->closetime
			?>
				<tr>
					<td><a><?php echo $no; ?></a></td>
					<td><a href="/adminrestaurant/view/?no=<?php echo $no?>"><?php echo $name; ?></a></td>
					<td><a><?php echo $opentime; ?></a></td>
					<td><a><?php echo $closetime; ?></a></td>
				</tr>
                        <?php
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
