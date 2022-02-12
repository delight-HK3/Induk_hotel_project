<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                         aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                       placeholder="Search for..." aria-label="Search"
                                       aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <!--탑바 달력 컨트롤-->
                <li class="nav-item dropdown no-arrow" style="float: left">
                    <a class="nav-link " id="userDropdown" aria-haspopup="true" aria-expanded="false">
                        <form name="form1" method="post" action="">
                            <div class="row">
                                <div class="col-12" align="left">
                                    <div class="form-inline">
                                        <div class="input-group input-group-sm table-sm date" id="text1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">년도</span>
                                            </div>
                                            <input type="text" name="year" class="form-control" size="9" value="<?php echo $year; ?>" onKeydown="if (event.keyCode == 13) { find_text1(); }" >
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <div class="input-group-addon">
                                                        <i class="far fa-calendar-alt fa-lg">
                                                        </i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </a>
                </li>


                <div style="padding-right:240PX"></div>

                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link " id="userDropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 15px; margin:0; font-family: 'Noto Sans KR', sans-serif;">서비스 시설 수&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $count['sv_count']?></span>
                    </a>
                </li>
                
                <div class="topbar-divider d-none d-sm-block"></div>              
                <li class="nav-item dropdown no-arrow" >
                    <a class="nav-link " id="userDropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 15px; margin:0; font-family: 'Noto Sans KR', sans-serif;">레스토랑 수&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $count['rt_count']?></span>
                    </a>
                </li>
                
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link " id="userDropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 15px; margin:0; font-family: 'Noto Sans KR', sans-serif;">방 종류 수&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $count['rm_count']?></span>
                    </a>
                </li>
                
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link " id="userDropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 15px; margin:0; font-family: 'Noto Sans KR', sans-serif;">회원 수&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $count['mb_count']?></span>
                    </a>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 15px; margin:0; font-family: 'Noto Sans KR', sans-serif;"><?php echo $this->session->userdata("name")?>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <img class="img-profile rounded-circle" src="/my/img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <!--    로그인 드롭다운바 내용들 로그아웃만 활성화 시켜둠.
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        -->
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->
