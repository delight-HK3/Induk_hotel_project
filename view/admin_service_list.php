
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">부대시설 목록
                <a href="/~team1/adminservice/cAdd" class="btn btn-warning btn-icon-split" style="float: right;">
                    <span class="icon text-white-50">
                        <i class="fas fa-flag"></i>
                    </span>
                    <span class="text">service 추가</span>
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
                        <th>가격</th>
						<th>오픈시간</th>
						<th>마감시간</th>
                        
                    </tr>
                    </thead>

                    <tbody>
                    <?
                    foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
                    {
                        $no=$row->no;
                        $name=$row->name;
						$opentime=$row->opentime;
						$closetime=$row->closetime;
                        $price=$row->price;
                        
                        ?>
                        <tr>

                            <td><a><?=$no; ?></a></td>
                            <td><a href="/~team1/adminservice/view/?no=<?=$no?>"><?=$name; ?></a></td>
                            <td><a><?=number_format($price)?> KRW</a></td>
							<td><a><?=$opentime?></a></td>
							<td><a><?=$closetime?></a></td>
                            
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