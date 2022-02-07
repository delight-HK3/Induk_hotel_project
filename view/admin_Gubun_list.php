
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Room Gubun list
                <a href="/~team1/adminroomgubun/cAdd" class="btn btn-warning btn-icon-split" style="float: right;">
                    <span class="icon text-white-50">
                        <i class="fas fa-flag"></i>
                    </span>
                    <span class="text">Gubun 추가</span>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>구분 이름</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?
                    foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
                    {
                        $no=$row->no;
                        $name=$row->name;
                        ?>
                        <tr>

                            <td><a><?=$no; ?></a></td>
                            <td><a href="/~team1/adminroomgubun/view/?no=<?=$no?>"><?=$name; ?></a></td>
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