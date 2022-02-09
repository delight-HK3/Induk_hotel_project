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
                    <?php
						$no=$row->no;
						$name=$row->name;
						$price=$row->price;
						$image_room1=$row->image_room1;
						$image_room2=$row->image_room2;
						$image_room3=$row->image_room3;
						$normal=$row->normal;
						$bathroom=$row->bathroom;
						$other=$row->other;
						$Explanation=$row->Explanation;
						$room_gubun_name=$row->room_gubun_name;
                    ?>
                    <div class="alert" style="padding-left:50px; padding-right:50px">
                    	<br>
                        <div class="form-group">
                        	<div class="col-6" style="padding-top:10px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbspRoom 구분</label>
                                
                                <input style="width:200px" type="text" name="uid" id="uid" size="20" maxlength="20" value="<?php echo $room_gubun_name?>" oninput="check_id()" class="form-control" disabled>
                            </div>
                            <div class="col-6" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbspRoom 이름</label>
                                <input style="width:300px" type="text" name="pwd" id="pwd" size="20" maxlength="20" value="<?php echo $name?>" oninput="check_id()" class="form-control" disabled>
                            </div>
							<div class="col-6" style="padding-top:20px">
								<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp1박 가격</label>
								<input style="width:300px" type="text" name="name" id="name" size="20" maxlength="20" value="<?php echo number_format($price);?> KRW" oninput="check_id()" class="form-control" disabled>
							</div>
							<div class="row" style="padding-left:10px">
								<div class="col-lg-3" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp기본옵션</label>
									<textarea style="width:300px" type="email" name="email" id="email" rows="4" maxlength="20" value="<?=$normal?>" class="form-control" disabled><?php echo $normal?></textarea>
								</div>
								<div class="col-lg-3" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp욕실옵션</label>
									<textarea style="width:300px;" type="text" name="zip" id="zip" rows="4" maxlength="20" class="form-control" disabled><?php echo $bathroom?></textarea>
								</div>
								<div class="col-lg-3" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp기타옵션</label>
									<textarea style="width:300px" type="text" name="juso1" id="juso1" rows="4" maxlength="5" class="form-control" disabled><?php echo $other?></textarea>
								</div>
							</div>
                            
                        	<div class="col-6" style="padding-top:20px"></div>
                            <div class="col" style="padding-top:10px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp상세설명</label>
                                <textarea style="width:1000px" type="text" name="juso1" id="juso1" rows="4" maxlength="5" class="form-control" disabled><?php echo $Explanation?></textarea>
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
                                                <?
                                                if ($row->image_room1)     // 이미지가 있는 경우
                                                    echo("<img src='/my/img/indukroom/$row->image_room1' class='d-block w-100' alt='1'>");
                                                else                   // 이미지가 없는 경우
                                                    echo("<img src='' class='d-block w-100' alt='1'>");
                                                ?>
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
                                                <?
                                                if ($row->image_room2)     // 이미지가 있는 경우
                                                    echo("<img src='/my/img/indukroom/$row->image_room2' class='d-block w-100' alt='1'>");
                                                else                   // 이미지가 없는 경우
                                                    echo("<img src='' class='d-block w-100' alt='1'>");
                                                ?>
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
                                                <?
                                                if ($row->image_room3)     // 이미지가 있는 경우
                                                    echo("<img src='/my/img/indukroom/$row->image_room3' class='d-block w-100' alt='1'>");
                                                else                   // 이미지가 없는 경우
                                                    echo("<img src='' class='d-block w-100' alt='1'>");
                                                ?>
                                            </div>
                                        </div>
                                    </div><br>
									<div style="float:right">
										<a href="/adminroom/edit/?no=<?=$no?>" style="width:200px;" class="btn btn-block btn-primary" >수정하기</a>
									</div>	
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
