<style>
    .container {
        display: grid;
        grid-template-columns: 380px 30px 380px 30px 380px;
        /* grid-template-columns: 1fr 1fr 1fr */
        /* grid-template-columns: repeat(3, 1fr) */
        /* grid-template-columns: 200px 1fr */
        /* grid-template-columns: 100px 200px auto */
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow border-left-warning mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Room 추가</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div class="alert" style="padding-left:50px; padding-right:50px">
                        <br>
                        <form id="RoomAdd" method="post" enctype="multipart/form-data" action="/~team1/adminroom/add" >
                            <div class="col-lg-6" style="padding-top:10px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbspGubun</label>
								<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                <select name="gubun_no" id="gubun" class="form-control form-control-sm" style="width:200px">
                                    <option value="">선택하세요.</option>
                                    <?
                                    $room_gubun_name=$row->room_gubun_name;
                                    foreach ($list as $row1)
                                    {
                                        if ($row->gubun_no==$row1->no)
                                            echo("<option value='$row1->no' selected> $row1->name</option>");
                                        else
                                            echo("<option value='$row1->no'> $row1->name</option>");
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-6" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp방 이름</label>
								<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                <input style="width:300px" type="text" name="ename" id="ename" size="20" maxlength="20" value="" oninput="check_id()" class="form-control">
                            </div>
                            <div class="col-lg-6" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp가격</label>
								<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                <input style="width:300px" type="text" name="eprice" id="eprice" size="20" maxlength="20" value="" oninput="check_id()" class="form-control">
                            </div>
							<div class="row" style="padding-left:10px">
								<div class="col-lg-3" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbspNormal</label>
									<textarea style="width:300px" type="email" name="enormal" id="enormal" rows="4" class="form-control"></textarea>
								</div>
								<div class="col-lg-3" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbspBathroom</label>
									<textarea style="width:300px;" type="text" name="ebathroom" id="ebathroom" rows="4" class="form-control"></textarea>
								</div>
								<div class="col-lg-3" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbspOther</label>
									<textarea style="width:300px" type="text" name="eother" id="eother" rows="4"class="form-control"></textarea>
								</div>
							</div>
                            <div class="col" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbspExplanation</label>
                                <textarea style="width:1000px" type="text" name="eexplanation" id="eexplanation" rows="4" class="form-control"></textarea>
                            </div>

                            <!-- Collapsable Card Example -->
                            <div class="container" style="padding-top: 50px; padding-left:10px; margin:0px">

                                <div class="item">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Accordion -->
                                        <a href="#collapseCard1" class="d-block card-header py-3" data-toggle="collapse"
                                           role="button" aria-expanded="true" aria-controls="collapseCard1">
                                            <h6 class="m-0 font-weight-bold text-primary">Room Image 1</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse show" id="collapseCard1">
                                            <div class="card-body">
												<input type="file" name="pic1" id="pic1" size = "20" value = "" class="btn btn-primary btn-icon-split">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                </div>

                                <!-- Collapsable Card Example -->
                                <div class="item">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Accordion -->
                                        <a href="#collapseCard2" class="d-block card-header py-3" data-toggle="collapse"
                                           role="button" aria-expanded="true" aria-controls="collapseCard2">
                                            <h6 class="m-0 font-weight-bold text-primary">Room Image 2</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse show" id="collapseCard2">
                                            <div class="card-body">
												<input type="file" name="pic2" id="pic2" size = "20" value = "" class="btn btn-primary btn-icon-split">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                </div>

                                <!-- Collapsable Card Example -->
                                <div class="item">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Accordion -->
                                        <a href="#collapseCard3" class="d-block card-header py-3" data-toggle="collapse"
                                           role="button" aria-expanded="true" aria-controls="collapseCard3">
                                            <h6 class="m-0 font-weight-bold text-primary">Room Image 3</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse show" id="collapseCard3">
                                            <div class="card-body">
												<input type="file" name="pic3" id="pic3" size = "20" value = "" class="btn btn-primary btn-icon-split">
                                            </div>
                                        </div>
                                    </div>
									<div style="text-align:right;">
										<a href="#" onclick="roomcheck()" class="btn btn-success btn-icon-split">
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
<script src="/~team1/my/js/jquery-3.5.1.min.js"></script>
<script>
	function roomcheck(){
		var ename = $("#ename").val();
		var eprice = $("#eprice").val();
		var egubun = $("#gubun").val();
			
		if(egubun == ""){
			alert("구분이 없습니다.");
			return false;
		}
		else if(ename == ""){
			alert("이름이 없습니다.");
			$("#ename").focus();
			return false;
		}
		else if(eprice == ""){
			alert("가격이 없습니다.");
			$("#eprice").focus();
			return false;
		}
		document.getElementById('RoomAdd').submit();
	}
</script>