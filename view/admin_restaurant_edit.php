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
            <h6 class="m-0 font-weight-bold text-dark"><?=$row->name?> 수정</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div class="alert" style="padding-left:50px; padding-right:50px">
                        <br>
                        <?
                        $no=$row->no;
                        $name=$row->name;
                        $opentime=$row->opentime;
                        $closetime=$row->closetime;
                        $explanation=$row->Explanation;
                        $pic1=$row->image_res1;
                        $pic2=$row->image_res2;
                        $pic3=$row->image_res3;
                        ?>
                        <form id="restaurantedit" method="post" enctype="multipart/form-data" action="/~team1/adminrestaurant/goedit?no=<?=$row->no?>" >
                            
                            <div class="col-6" style="padding-top:10px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp이름</label>
								<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                <input style="width:300px" type="text" name="name" id="name" size="20" value="<?=$name?>" oninput="check_id()" class="form-control" >
                            </div>
                            <div class="col-6" style="padding-top:10px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp여는 시간</label>
								<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                <input style="width:300px" type="time" name="opentime" id="opentime" min="06:00:00" max="08:00:00" value="<?=$opentime?>" oninput="check_id()" class="form-control" >
                            </div>
                            <div class="col-6" style="padding-top:10px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp닫는 시간</label>
								<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                <input style="width:300px" type="time" name="closetime" id="closetime" min="13:00:00" max="15:00:00" value="<?=$closetime?>" oninput="check_id()" class="form-control" >
                            </div>
                            <div class="col-12" style="padding-top:10px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp설명</label>
                                <textarea style="width:500px;" type="text" name="explanation" id="explanation" rows="6" class="form-control" ><?=$explanation?></textarea>
                            </div>

                            <!-- Collapsable Card Example -->
                            <div class="container" style="padding-top: 50px; padding-left:10px; margin:0px">

                                <div class="item">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Accordion -->
                                        <a href="#collapseCard1" class="d-block card-header py-3" data-toggle="collapse"
                                           role="button" aria-expanded="true" aria-controls="collapseCard1">
                                            <h6 class="m-0 font-weight-bold text-primary">Restaurant Image 1</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse show" id="collapseCard1">
                                            <div class="card-body">
                                                <?
                                                if ($pic1)     // 이미지가 있는 경우
                                                    echo("<img src='/~team1/my/img/restaurant/$pic1' class='d-block w-100' alt='1'>");
                                                else                   // 이미지가 없는 경우
                                                    echo("<img src='' class='d-block w-100' alt='1'>");
                                                ?><br>
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
                                            <h6 class="m-0 font-weight-bold text-primary">Restaurant Image 2</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse show" id="collapseCard2">
                                            <div class="card-body">
                                                <?
                                                if ($pic2)     // 이미지가 있는 경우
                                                    echo("<img src='/~team1/my/img/restaurant/$pic2' class='d-block w-100' alt='1'>");
                                                else                   // 이미지가 없는 경우
                                                    echo("<img src='' class='d-block w-100' alt='1'>");
                                                ?><br> 
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
                                            <h6 class="m-0 font-weight-bold text-primary">Restaurant Image 3</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse show" id="collapseCard3">
                                            <div class="card-body">
                                                <?
                                                if ($pic3)     // 이미지가 있는 경우
                                                    echo("<img src='/~team1/my/img/restaurant/$pic3' class='d-block w-100' alt='1'>");
                                                else                   // 이미지가 없는 경우
                                                    echo("<img src='' class='d-block w-100' alt='1'>");
                                                ?><br>
												<input type="file" name="pic3" id="pic3" size = "20" value = "" class="btn btn-primary btn-icon-split">
                                            </div>
                                            
                                        </div>
                                    </div>
									<div class="col" style="padding:0px;" align="right">
										<a href="/~team1/adminrestaurant/del/?no=<?=$no?>" onClick="return confirm('삭제할까요?');" class="btn btn-danger btn-icon-split">
											<span class="icon text-white-50">
												<i class="fas fa-trash"></i>
											</span>
											<span class="text">삭제하기</span>
										</a>&nbsp&nbsp&nbsp
										<a href="#" onclick="restaurantcheck()" class="btn btn-success btn-icon-split">
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
	function restaurantcheck(){
		var name = $("#name").val();
		var eprice = $("#eprice").val();
		
		if(name == ""){
			alert("레스토랑 명이 없습니다.");
			$("#ename").focus();
			return false;
		}
		document.getElementById('restaurantedit').submit();
	}
</script>