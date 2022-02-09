
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
            <h6 class="m-0 font-weight-bold text-dark">문의사항 상세정보</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div class="alert" style="padding-left:50px; padding-right:50px">
                        <br>
                        <?php 
							$no=$row->no;
							$type=$row->type;
							$q_name=$row->q_name;
							$c_name=$row->c_name;
							$c_email=$row->c_email;
							$c_phone=$row->c_phone;
							$q_bigo=$row->q_bigo;
                        ?>
							<div class="row" style="padding-left:10px">
								<div class="col-lg-2" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp상담유형</label>
									<input style="width:150px" type="text" name="type" id="type" size="20" maxlength="20" value="<?php echo $type?>" oninput="check_id()" class="form-control" disabled>
								</div>
								<div class="col-lg-2" style="padding-top:20px">
									<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp제목</label>
									<input style="width:250px" type="text" name="type" id="type" size="20" value="<?php echo $q_name?>" oninput="check_id()" class="form-control" disabled>
								</div>
							</div>
                            <div class="col-12" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp문의내용</label>
                                <textarea style="width:500px;" type="text" name="c_bigo" id="c_bigo" rows="6" class="form-control" disabled><?php echo $q_bigo?></textarea>
                            </div>
							
							<br>

							<label style="font-size: 20px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp문의고객정보</label>
							
							 <div class="col-6" style="padding-top:20px">
                                <label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp성명</label>
                                <input style="width:150px" type="text" name="c_name" id="c_name" size="20" maxlength="20" value="<?php echo $c_name?>" oninput="check_id()" class="form-control" disabled>
                            </div>
						
							<div class="col-6" style="padding-top:20px">
								<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp이메일</label>
								<input style="width:300px" type="email" name="c_email" id="c_email" size="20" maxlength="20" value="<?php echo $c_email?>" class="form-control" disabled>
							</div>
                            
                            <div class="col-6" style="padding-top:20px">
								<label style="font-size: 18px; margin:0; font-family: 'Noto Sans KR', sans-serif;">&nbsp휴대전화</label>
								<input style="width:300px" type="tel" name="c_phone" id="c_phone" size="20" maxlength="20" value="<?php echo $c_phone?>" class="form-control" disabled>
							</div>
                        </div>
							
						<div class="col" align="right">
							<a href="/contact/del/?no=<?php echo $no;?>" onClick="return confirm('삭제할까요?');" class="btn btn-danger btn-icon-split">
								<span class="icon text-white-50"><i class="fas fa-trash"></i></span>
								<span class="text">삭제하기</span>
							</a>
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
