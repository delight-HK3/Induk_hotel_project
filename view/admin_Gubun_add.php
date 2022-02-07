<script>
    function submit_form() {
        document.getElementById('GubunAdd').submit();
    }
</script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow border-left-info mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Gubun Add</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div class="alert" style="padding-left:50px; padding-right:50px">
                        <br>
                        <form id="GubunAdd" method="post" action="/~team1/adminroomgubun/add">
                            <div class="form-group row">
                                <div class="col-6" style="padding-top:10px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp구분 이름</label>
                                    <input style="width:150px" type="text" name="aname" id="name" size="20" maxlength="20" value=""  class="form-control" >
                                </div>
                                <div class="col-6 row" style="padding-top:20px">
                                    <div class="col" align="right">
                                        <a href="#" onclick="submit_form()" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                            <span class="text">저장하기</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->