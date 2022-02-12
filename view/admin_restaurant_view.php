
</script>
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
            <h6 class="m-0 font-weight-bold text-dark"><?php echo $row->name?> 상세정보</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div class="alert" style="padding-left:50px; padding-right:50px">
                        <br>
                        <?php
				$no=$row->no;
				$name=$row->name;
				$opentime=$row->opentime;
				$closetime=$row->closetime;
				$explanation=$row->Explanation;
				$pic1=$row->image_res1;
				$pic2=$row->image_res2;
				$pic3=$row->image_res3;
                        ?>
                            <div class="col-lg-6" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp이름</label>
                                <input style="width:300px" type="text" name="name" id="name" size="20" maxlength="20" value="<?php echo $name?>" oninput="check_id()" class="form-control" disabled>
                            </div>
                            <div class="col-lg-6" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp여는 시간</label>
                                <input style="width:300px" type="time" name="opentime" id="opentime" min="6:00:00" max="11:00:00" value="<?php echo $opentime?>" oninput="check_id()" class="form-control" disabled>
                            </div>
                            <div class="col-lg-6" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp닫는 시간</label>
                                <input style="width:300px" type="time" name="closetime" id="closetime" min="13:00:00" max="15:00:00" value="<?php echo $closetime?>" oninput="check_id()" class="form-control" disabled>
                            </div>
                            <div class="col-lg-12" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp설명</label>
                                <textarea style="width:500px;" type="text" name="explanation" id="explanation" rows="6" class="form-control" disabled><?php echo $explanation?></textarea>
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
                                                <?php
                                                if ($pic1)     // 이미지가 있는 경우
                                                    echo("<img src='/my/img/restaurant/$pic1' class='d-block w-100' alt='1'>");
                                                else                   // 이미지가 없는 경우
                                                    echo("<img src='' class='d-block w-100' alt='1'>");
                                                ?>
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
                                                <?php
                                                if ($pic2)     // 이미지가 있는 경우
                                                    echo("<img src='/my/img/restaurant/$pic2' class='d-block w-100' alt='1'>");
                                                else                   // 이미지가 없는 경우
                                                    echo("<img src='' class='d-block w-100' alt='1'>");
                                                ?>
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
                                                <?php
                                                if ($pic3)     // 이미지가 있는 경우
                                                    echo("<img src='/my/img/restaurant/$pic3' class='d-block w-100' alt='1'>");
                                                else                   // 이미지가 없는 경우
                                                    echo("<img src='' class='d-block w-100' alt='1'>");
                                                ?>
                                            </div>
                                        </div>
                                    </div>
				    <div class="col" style="padding:0px;" align="right">
					<a href="/adminrestaurant/edit/?no=<?php echo $no?>" style="width:200px;" class="btn btn-block btn-primary" >수정하기</a>
				    </div>
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
