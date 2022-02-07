
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow border-left-warning mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">회원 목록
                            <a href="/~team1/admin/cAdd" class="btn btn-warning btn-icon-split" style="float: right;">
                                <span class="icon text-white-50">
                                    <i class="fas fa-flag"></i>
                                </span>
                                <span class="text">사용자 추가</span>
                            </a>
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>이름</th>
                                    <th>Email</th>
                                    <th>아이디</th>
                                    
                                    <th>전화번호</th>
                                    <th>생일</th>
                                    <th>우편번호</th>
                                    <th>주소</th>
                                    <th>Rank</th>
                                </tr>
                                </thead>
                                <tfoot>
                               
                                </tfoot>
                                <tbody>
                                <?
                                foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
                                {
                                    $no=$row->no;
                                    $name=$row->name;
                                    $email=$row->email;
                                    $uid=$row->uid;
                                   
                                    $phone=$row->phone;
                                    $birth=$row->birthday;
                                    $zip=$row->zip_number;
                                    $juso = preg_replace('/!/', ' ', $row->juso);
                                    $rank=$row->rank==1 ? "관리자" : "고객" ;      // 1->관리자, 2->유저
                                    ?>
                                    <tr>

                                        <td><a href="/~team1/admin/view/?no=<?=$no?>"><?=$name; ?></a></td>
                                        <td><?=$email; ?></a></td>
                                        <td><?=$uid; ?></a></td>
                                        
                                        <td><?=$phone; ?></a></td>
                                        <td><?=$birth; ?></a></td>
                                        <td><?=$zip; ?></a></td>
                                        <td><?=$juso; ?></a></td>
                                        <td><?=$rank; ?></a></td>
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