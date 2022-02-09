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
            <h6 class="m-0 font-weight-bold text-dark"><?php echo $row->name;?> 수정</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div class="alert" style="padding-left:50px; padding-right:50px">
                        <br>
                        <form id="RoomEdit" method="post" enctype="multipart/form-data" action="/adminroom/goedit/?no=<?=$row->no?>" >
                            <div class="col-6" style="padding-top:10px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbspRoom 구분</label>
                                <select name="gubun_no" class="form-control form-control-sm" style="width:200px">
                                    <?php
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
                            <div class="col-6" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbspRoom 이름</label>
								<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                <input style="width:300px" type="text" name="ename" id="ename" size="20" maxlength="20" value="<?=$row->name;?>" oninput="check_id()" class="form-control">
                            </div>
                            <div class="col-6" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp1박 가격</label>
								<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                <input style="width:300px" type="text" name="eprice" id="eprice" size="20" maxlength="20" value="<?=$row->price;?>" oninput="check_id()" class="form-control">
                            </div>
			    <div class="row" style="padding-left:10px">
				<div class="col-lg-3" style="padding-top:20px">
					<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp기본옵션</label>
					<textarea style="width:300px" type="email" name="enormal" id="enormal" rows="4" class="form-control"><?=$row->normal;?></textarea>
				</div>
				<div class="col-lg-3" style="padding-top:20px">
					<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp욕실옵션</label>
					<textarea style="width:300px;" type="text" name="ebathroom" id="ebathroom" rows="4" class="form-control"><?=$row->bathroom;?></textarea>
				</div>
				<div class="col-lg-3" style="padding-top:20px">
					<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp기타옵션r</label>
					<textarea style="width:300px" type="text" name="eother" id="eother" rows="4" class="form-control"><?=$row->other;?></textarea>
				</div>
			    </div>
                            <div class="col-6" style="padding-top:10px"></div>
                            <div class="col" style="padding-top:10px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp상세설명</label>
                                <textarea style="width:1000px" type="text" name="eexplanation" id="eexplanation" rows="4" class="form-control"><?=$row->Explanation?></textarea>
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
                                                <?php
							if ($row->image_room1)     // 이미지가 있는 경우
							    echo("<img src='/my/img/indukroom/$row->image_room1' class='d-block w-100' alt='1'>");
							else                   // 이미지가 없는 경우
							    echo("<img src='' class='d-block w-100' alt='1'>");
                                                ?><br>
						<input type="file" name="pic1" id="pic1" size = "20" value = "" class="btn btn-primary btn-icon-split">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item"></div>

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
                                                <?php
							if ($row->image_room2)     // 이미지가 있는 경우
							    echo("<img src='/my/img/indukroom/$row->image_room2' class='d-block w-100' alt='1'>");
							else                   // 이미지가 없는 경우
							    echo("<img src='' class='d-block w-100' alt='1'>");
                                                ?><br>
						<input type="file" name="pic2" id="pic2" size = "20" value = "" class="btn btn-primary btn-icon-split">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item"></div>

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
                                                <?php
							if ($row->image_room3)     // 이미지가 있는 경우
							    echo("<img src='/my/img/indukroom/$row->image_room3' class='d-block w-100' alt='1'>");
							else                   // 이미지가 없는 경우
							    echo("<img src='' class='d-block w-100' alt='1'>");
                                                ?><br>
						<input type="file" name="pic3" id="pic3" size = "20" value = "" class="btn btn-primary btn-icon-split">
                                            </div> 
                                        </div>
                                    </div>
				    <div class="col" style="padding:0px;" align="right">
					<a href="/adminroom/del/?no=<?php echo $row->no;?>" onClick="return confirm('삭제할까요?');" class="btn btn-danger btn-icon-split">
						<span class="icon text-white-50">
							<i class="fas fa-trash"></i>
						</span>
						<span class="text">삭제하기</span>
					</a>&nbsp&nbsp&nbsp                   
					<a href="#" onclick="return roomcheck()" class="btn btn-success btn-icon-split">
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
<script src="/my/js/jquery-3.5.1.min.js"></script>
<script>
	function roomcheck(){
		var ename = $("#ename").val();
		var eprice = $("#eprice").val();
		
		if(ename == ""){
			alert("이름이 없습니다.");
			$("#ename").focus();
			return false;
		}
		else if(eprice == ""){
			alert("가격이 없습니다.");
			$("#eprice").focus();
			return false;
		}
		document.getElementById('RoomEdit').submit();
	}
</script>
