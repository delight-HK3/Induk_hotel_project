
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Room 목록
                <a href="/~team1/adminroom/cAdd" class="btn btn-warning btn-icon-split" style="float: right;">
                    <span class="icon text-white-50">
                        <i class="fas fa-flag"></i>
                    </span>
                    <span class="text">Room 추가</span>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>방 구분</th>
                        <th>방 이름</th>
                        <th>가격</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?
                    foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
                    {
                        $no=$row->no;
                        $name=$row->name;
                        $price=$row->price;
                        ?>
                        <tr>

                            <td><?=$row->room_gubun_name; ?></a></td>
                            <td><a href="/~team1/adminroom/view/?no=<?=$no?>"><?=$name; ?></a></td>
                            <td><?=number_format($price); ?> KRW</a></td>
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