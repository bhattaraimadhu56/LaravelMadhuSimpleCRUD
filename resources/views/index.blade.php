	<!DOCTYPE html>
	<html lang="en">
	<head>
	<!-- Title Page-->
	<title>Madhu Dash Board</title>
	<!-- Bootstrap CSS-->
	<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
	<link href="css/theme.css" rel="stylesheet" media="all">
	<!-- For Toast Message-->
	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
	</head>

	<body class="animsition">
	<div class="page-wrapper">
	<!-- MENU SIDEBAR-->
	<aside class="menu-sidebar d-none d-lg-block">
	<div class="logo"><a href="#"><img src="images/icon/logo.png" alt="Cool! Madhu Admin" /></a></div>
	<!--Side Bar Dash Board  Madhu-->
	<div class="menu-sidebar__content js-scrollbar1">
	<nav class="navbar-sidebar">
	<ul class="list-unstyled navbar__list">
	<li class="active has-sub">
	<a  href="{{URL::to('add_contact')}}"  class="btn btn-info">Add Contact </a>
	</li>
	<li>
	<a href="{{Route('allContact')}}" class="btn btn-success">All Contact </a>
	</li>

	</ul>
	</nav>
	</div>
	</aside><!-- END MENU SIDEBAR-->

	<!-- PAGE CONTAINER-->
	<div class="page-container">
	<!-- HEADER DESKTOP-->
	<header class="header-desktop">
	<!--Toppppppp Bar Madhu -->
	<h1 align="center"> Add your Menu </h1>
	<h2><a href="{{Route('home')}}" class="btn btn-success">login </a></h2>
	</header>
	<!-- HEADER DESKTOP-->

	<!-- MAIN CONTENT to display section-->
	<div class="main-content">
	<!--Displaying Section Madhu-->

	<div class="container-fluid">		
	@yield('content') 
	</div>






	</div><!-- END MAIN CONTENT to display section>
	<!-- footer Section start here-->
	<div class="col-md-12" align="center">
	<div class="copyright">
	<p>Copyright © 2018 Madhu Sudan. All rights reserved</p>
	</div>
	</div>
	<!-- footer Section End  here-->
	</div><!-- END PAGE CONTAINER-->





	</div>

	<!-- Jquery JS-->
	<script src="vendor/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap JS-->
	<script src="vendor/bootstrap-4.1/popper.min.js"></script>
	<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>

	<!-- Main JS-->
	<script src="js/main.js"></script>
	<!-- For Toast Message-->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<script>
	@if(Session::has('message'))

	var type="{{Session::get('alert-type','info')}}";


	switch(type){
	case 'info':
	toastr.info("{{Session::get('message')}}");
	break;

	case 'success':
	toastr.success("{{Session::get('message')}}");
	break;

	case 'warning':
	toastr.warning("{{Session::get('message')}}");
	break;

	case 'error':
	toastr.error("{{Session::get('message')}}");
	break;
	toastr.info("{{ Session::get('message') }}");
	break;
	case 'success':
	toastr.success("{{ Session::get('message') }}");
	break;
	case 'warning':
	toastr.warning("{{ Session::get('message') }}");
	break;
	case 'error':
	toastr.error("{{ Session::get('message') }}");
	break;
	}
	@endif

	</script>



	</body>

	</html>
	<!-- end document-->
