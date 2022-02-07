<!DOCTYPE html>
<html lang="ko">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="/~team1/my/img/main_Logo.png" type="image/png">
    <title>Induk Hotel - AdminPage</title>

    <!-- Custom fonts for this template-->
    <link href="/~team1/my/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/~team1/my/vendors/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="/~team1/my/vendors/jquery/jquery.min.js"></script>
    <script src="/~team1/my/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/~sale18/my/js/moment-with-locales.min.js"></script>
    <script src="/~team1/my/js/bootstrap-datetimepicker.js"></script>
    <link   href="/~team1/my/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- Core plugin JavaScript-->
    <script src="/~team1/my/vendors/jquery-easing/jquery.easing.min.js"></script>



    <!-- Page level plugins -->
    <script src="/~team1/my/vendors/chart.js/Chart.min.js"></script>
    <script src="/~team1/my/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="/~team1/my/vendors/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->

   <!-- <script src="/~team1/my/js/demo/chart-bar-demo.js"></script>
    <script src="/~team1/my/js/demo/chart-pie-demo.js"></script>-->

    <!-- Page level custom scripts -->
    <script src="/~team1/my/js/demo/datatables-demo.js"></script>

    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script><!--우편번호 찾는 스크립트-->
    <script src="/~team1/my/js/mypage_edit.js"></script><!--주소수정 스크립트-->

</head>


<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: linear-gradient(0deg, rgba(253,187,45,1) 11%, rgba(96,96,96,1) 90%);">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/~team1/admin">
            <div class="sidebar-brand-icon">
				<img src="/~team1/my/img/main_Logo.png">
            </div>
            <div class="sidebar-brand-text mx-3">INH<sup>Admin</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-text mx-3">Welcome<br><sub><?=$this->session->userdata("name")?></sub></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/~team1/main">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>사용자 페이지 이동</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Management
        </div>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="/~team1/admin/cUserlist">
                <i class="fas fa-fw fa-table"></i>
                <span>회원목록</span></a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href="/~team1/contact/admin_contact_list">
                <i class="fas fa-fw fa-folder"></i>
                <span>문의사항</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-table"></i>
                <span>Room</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Management Room</h6>
                    <a class="collapse-item" href="/~team1/adminroom">Room 목록</a>
                    <a class="collapse-item" href="/~team1/adminroomgubun">Room 구분</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
               aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-folder"></i>
                <span>Service</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Management Service</h6>
                    <a class="collapse-item" href="/~team1/adminrestaurant">레스토랑 목록</a>
                    <a class="collapse-item" href="/~team1/adminservice">부대시설 목록</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
			account book
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
               aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Account book</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">account book</h6>
                    <a class="collapse-item" href="/~team1/ajroom">Room 예약장부</a>
					<a class="collapse-item" href="/~team1/ajrestaurant">Restaurant 예약장부</a>
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->