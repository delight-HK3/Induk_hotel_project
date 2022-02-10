<!DOCTYPE html>
<html lang="ko">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">	
	    <link rel="icon" href="/my/img/main_Logo.png" type="image/png">
	    <title>Induk Hotel - Admin Login</title>

	    <!-- Custom fonts for this template-->
	    <link href="/my/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	    <!-- Custom styles for this template-->
	    <link href="/my/css/sb-admin-2.min.css" rel="stylesheet">
	</head>

	<style>
	    .outer {
		display: flex;
	    }

	    .inner {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
	    }
	</style>

	<body class="bg-gradient-primary" style="background: linear-gradient(-35deg, rgba(253,187,45,1) 20%, rgba(96,96,96,1) 80%);">

	    <div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

		    <div class="col-xl-10 col-lg-12 col-md-9">

			<div class="card o-hidden border-0 shadow-lg my-5">
			    <div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
				    <div class="col-lg-6 d-none d-lg-block outer">
					<a href="/main"><img class="inner" src="/my/img/Hotel_name_admin_login.png" style="padding-left:30px"></a>
				    </div>
				    <div class="col-lg-6">
					<div class="p-5">
					    <div class="text-center">
						<h1 class="h4 text-gray-900 mb-4">INH Admin Page</h1>
					    </div>
					    <form class="form_login" method="post" action="/admin/clientlogin">
						<div class="form-group">
						    <input name="uid" type="email" class="form-control form-control-user" value="" aria-describedby="emailHelp"
							placeholder="Enter ID">
						</div>
						<div class="form-group">
						    <input name="pwd" type="password" class="form-control form-control-user" value="" placeholder="Password">
						</div>
						<hr>
						<button type="button" class="btn btn-primary btn-user btn-block" style="background:#cc9900; border:0px" onclick="submit();">Login</button>
					    </form>
					</div>
				    </div>
				</div>
			    </div>
			</div>
		    </div>
		</div>
	    </div>

	    <!-- Bootstrap core JavaScript-->
	    <script src="/my/vendors/jquery/jquery.min.js"></script>
	    <script src="/my/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

	    <!-- Core plugin JavaScript-->
	    <script src="/my/vendors/jquery-easing/jquery.easing.min.js"></script>

	    <!-- Custom scripts for all pages-->
	    <script src="/my/js/sb-admin-2.min.js"></script>

	</body>

</html>
