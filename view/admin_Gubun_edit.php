<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Gubun 수정</h6>
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
                        <form id="GubunEdit" method="post" action="/~team1/adminroomgubun/goedit/?no=<?=$no?>">
                            <div class="form-group row">
                                <div class="col-lg-6" style="padding-top:10px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbspNo</label>
                                    <label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※수정이 불가능 합니다.※</label>
                                    <input style="width:150px" type="text" name="eno" id="no" size="20" maxlength="20" value="<?=$no?>"  class="form-control" readonly="readonly">
                                </div>
                                <div class="col-lg-6" style="padding-top:10px">
                                    <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp구분 이름</label>
									<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                    <input style="width:150px" type="text" name="ename" id="name" size="20" maxlength="20" value="<?=$name?>" class="form-control" >
                                </div>
                                <div class="col-lg-6" style="padding-top:20px"></div>
                                <div class="col-lg-6 row" style="padding-top:20px; padding-left:25px" align="left">
									<a href="/~team1/adminroomgubun/del/?no=<?=$no?>" onClick="return confirm('삭제할까요?');" class="btn btn-danger btn-icon-split">
										<span class="icon text-white-50"><i class="fas fa-trash"></i></span>
										<span class="text">삭제하기</span>
									</a>&nbsp&nbsp&nbsp
									<a href="#" onclick="gubuncheck()" class="btn btn-success btn-icon-split">
										<span class="icon text-white-50"><i class="fas fa-check"></i></span>
										<span class="text">저장하기</span>
									</a>
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
<script src="/~team1/my/js/jquery-3.5.1.min.js"></script>
<script>
	function gubuncheck(){
		var name = $("#name").val();

		if(name == ""){
			alert("구분명이 없습니다.");
			$("#name").focus();
			return false;
		}
		document.getElementById('GubunEdit').submit();
	}
</script>