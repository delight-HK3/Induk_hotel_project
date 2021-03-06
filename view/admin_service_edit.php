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
            <h6 class="m-0 font-weight-bold text-dark"><?php echo $row->name?> 수정</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div class="alert" style="padding-left:50px; padding-right:50px">
                        <br>
                        <?php
				$no=$row->no;
				$name=$row->name;
				$bego=$row->bego;
				$price=$row->price;
				$opentime=$row->opentime; 
				$closetime=$row->closetime;
				$explanation=$row->Explanation;
				$insertbigo=$row->insertbigo;
				$pic1=$row->image_serve1;
				$pic2=$row->image_serve2;
				$pic3=$row->image_serve3;
				$pic4=$row->image_serve4;
				$pic5=$row->image_serve5;
                        ?>
                        <form id="serviceedit" method="post" enctype="multipart/form-data" action="/adminservice/goedit?no=<?php echo $row->no?>" >
                            
                            <div class="col-lg-6" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp이름</label>
				<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                <input style="width:300px" type="text" name="name" id="name" size="20" maxlength="20" value="<?php echo $name?>" oninput="check_id()" class="form-control" >
                            </div>
                            <div class="col-lg-6" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp가격</label>
				<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                <input style="width:300px" type="text" name="price" id="price" size="20" maxlength="20" value="<?php echo $price?>" oninput="check_id()" class="form-control" >
                            </div>
                            <div class="col-lg-6" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp오픈 시간</label>
				<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                <input style="width:300px" type="time" name="opentime" id="opentime" min="6:00:00" max="11:00:00" value="<?php echo $opentime?>" oninput="check_id()" class="form-control" >
                            </div>
                            <div class="col-lg-6" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp마감 시간</label>
				<label style="font-size: 13px; margin:0; font-family: 'Noto Sans KR', sans-serif; color:red">&nbsp※필수사항 입니다.※</label>
                                <input style="width:300px" type="time" name="closetime" id="closetime" min="13:00:00" max="15:00:00" value="<?php echo $closetime?>" oninput="check_id()" class="form-control" >
                            </div>
			    <div class="row" style="padding-left:10px;">
			    	<div class="col-lg-4" style="padding-top:20px">
					<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp설명</label>
					<textarea style="width:400px;" type="text" name="explanation" id="explanation" rows="4" class="form-control" ><?php echo $explanation?></textarea>
				</div>
				<div class="col-lg-4" style="padding-top:20px">
					<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp세부 설명</label>
					<textarea style="width:400px;" type="text" name="insertbigo" id="insertbigo" rows="4" class="form-control" ><?php echo $insertbigo?></textarea>
				</div>
				<div class="col-lg-4" style="padding-top:20px">
					<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp비고</label>
					<textarea style="width:400px;" type="text" name="bego" id="bego" rows="4" class="form-control" ><?php echo $bego?></textarea>
				</div>
			    </div>
                            <!-- Collapsable Card Example -->
                            <div class="container" style="padding-top: 50px; padding-left:10px; margin:0px">

                                <div class="item">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Accordion -->
                                        <a href="#collapseCard1" class="d-block card-header py-3" data-toggle="collapse"
                                           role="button" aria-expanded="true" aria-controls="collapseCard1">
                                            <h6 class="m-0 font-weight-bold text-primary">Service Image 1</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse show" id="collapseCard1">
                                            <div class="card-body">
                                                <?
                                                if ($pic1)     // 이미지가 있는 경우
                                                    echo("<img src='/my/img/service/$pic1' class='d-block w-100' alt='1'>");
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
                                            <h6 class="m-0 font-weight-bold text-primary">Service Image 2</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse show" id="collapseCard2">
                                            <div class="card-body">
                                                <?
                                                if ($pic2)     // 이미지가 있는 경우
                                                    echo("<img src='/my/img/service/$pic2' class='d-block w-100' alt='1'>");
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
                                            <h6 class="m-0 font-weight-bold text-primary">Service Image 3</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse show" id="collapseCard3">
                                            <div class="card-body">
                                                <?
                                                if ($pic3)     // 이미지가 있는 경우
                                                    echo("<img src='/my/img/service/$pic3' class='d-block w-100' alt='1'>");
                                                else                   // 이미지가 없는 경우
                                                    echo("<img src='' class='d-block w-100' alt='1'>");
                                                ?><br>
						<input type="file" name="pic3" id="pic3" size = "20" value = "" class="btn btn-primary btn-icon-split">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container" style="padding-top: 50px; padding-left:10px; margin:0px">

                                <!-- Collapsable Card Example -->
                                <div class="item">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Accordion -->
                                        <a href="#collapseCard4" class="d-block card-header py-3" data-toggle="collapse"
                                           role="button" aria-expanded="true" aria-controls="collapseCard4">
                                            <h6 class="m-0 font-weight-bold text-primary">Service Image 4</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse show" id="collapseCard4">
                                            <div class="card-body">
                                                <?
                                                if ($pic4)     // 이미지가 있는 경우
                                                    echo("<img src='/my/img/service/$pic4' class='d-block w-100' alt='1'>");
                                                else                   // 이미지가 없는 경우
                                                    echo("<img src='' class='d-block w-100' alt='1'>");
                                                ?><br>
						<input type="file" name="pic4" id="pic4" size = "20" value = "" class="btn btn-primary btn-icon-split">
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
                                        <a href="#collapseCard5" class="d-block card-header py-3" data-toggle="collapse"
                                           role="button" aria-expanded="true" aria-controls="collapseCard5">
                                            <h6 class="m-0 font-weight-bold text-primary">Service Image 5</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse show" id="collapseCard5">
                                            <div class="card-body">
                                                <?
                                                if ($pic5)     // 이미지가 있는 경우
                                                    echo("<img src='/my/img/service/$pic5' class='d-block w-100' alt='1'>");
                                                else                   // 이미지가 없는 경우
                                                    echo("<img src='' class='d-block w-100' alt='1'>");
                                                ?><br>
						<input type="file" name="pic5" id="pic5" size = "20" value = "" class="btn btn-primary btn-icon-split">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col" align="right" style="padding-top:20px; padding-right:250px">
                                <a href="/adminservice/del/?no=<?php echo $no?>" onClick="return confirm('삭제할까요?');" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                    	<i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">삭제하기</span>
                                </a>&nbsp&nbsp&nbsp
                                <a href="#" onclick="servicecheck()" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                    	<i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">저장하기</span>
                                </a>
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
	function servicecheck(){
		var name = $("#name").val();
		var price = $("#price").val();
		
		if(name == ""){
			alert("부대시설 명이 없습니다.");
			$("#name").focus();
			return false;
		}
		else if(price == ""){
			alert("1일 사용가격이 없습니다.");
			$("#price").focus();
			return false;
		}
		document.getElementById('serviceedit').submit();
	}
</script>
