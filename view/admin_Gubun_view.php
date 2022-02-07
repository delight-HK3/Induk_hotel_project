
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Gubun 상세보기</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <?
                    $no=$row->no;
                    $name=$row->name;
                    ?>
                    <div class="alert" style="padding-left:50px; padding-right:50px">
                        <br>
                        <div class="form-group row">
                            <div class="col-lg-6" style="padding-top:10px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbspNo</label>
                                <label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
                                <input style="width:150px" type="text" name="no" id="no" size="20" maxlength="20" value="<?=$no?>" oninput="check_id()" class="form-control" disabled>
                            </div>
                            <div class="col-lg-6" style="padding-top:10px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp구분 이름</label>
                                <input style="width:150px" type="text" name="name" id="name" size="20" maxlength="20" value="<?=$name?>" oninput="check_id()" class="form-control" disabled>
                            </div>
							<div class="col-lg-6"></div>
                            <div class="col-lg-6" align="left" style="padding-top:20px; padding-right: 50px">
                                <a href="/~team1/adminroomgubun/edit/?no=<?=$no?>" style="width:200px; margin-right:10px" class="btn btn-block btn-primary" >수정하기</a>
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