<?php 
include 'koneksi.php';
 
session_start();
 
if (isset($_SESSION['username'])) {


?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
    <title>Daily Test Avsec</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='styleku.css'>
	
</head>

<body translate="no">
<body class="hero-anime">	
<div class="container text text-left">    
</br></div>
	<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
					<div class="container-fluid">
        			<img src="img/logo1.png" width="250" height="60">
						<a class="navbar-brand" target="_blank"><img src="" alt=""></a>	
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="home.php">Home</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Daily Test</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="dailytest_xray.php" target="scs_body">XRAY</a>
										<a class="dropdown-item" href="dailytest_wtmd.php" target="scs_body">WTMD</a>
										<a class="dropdown-item" href="dailytest_hhmd.php" target="scs_body">HHMD</a>
										<a class="dropdown-item" href="dailytest_etd.php" target="scs_body">ETD</a>
									</div>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Report</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="report_xray.php?controladd=1" target="scs_body">XRAY</a>
										<a class="dropdown-item" href="report_wtmd.php?controladd=1" target="scs_body">WTMD</a>
										<a class="dropdown-item" href="report_hhmd.php"	target="scs_body">HHMD</a>
										<a class="dropdown-item" href="report_etd.php"	target="scs_body">ETD</a>
									</div>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Master Data</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="masterdata_xray.php?controladd=1" target="scs_body">XRAY</a>
										<a class="dropdown-item" href="masterdata_wtmd.php?controladd=1" target="scs_body">WTMD</a>
										<a class="dropdown-item" href="masterdata_hhmd.php?controladd=1" target="scs_body">HHMD</a>
										<a class="dropdown-item" href="masterdata_etd.php" target="scs_body">ETD</a>
										<a class="dropdown-item" href="masterdata_user.php?controladd=1" target="scs_body">USER</a>
										<a class="dropdown-item" href="masterdata_peleton.php" target="scs_body">PELETON</a>
									</div>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="changepassword.php" target="scs_body">Change Password</a>
									</div>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="../login/logout.php">Logout</a>
								</li>
							</ul>
						</div>
					</nav>		
				</div>
			</div>
		</div>
	</div>

	<div class="section full-height">
	<div class="jumbotron">
        <img src="images/logo.png" class="center">
        <h2>Selamat Datang di Aplikasi Daily Test Aviation Security</h2>
        <p>Halo <strong><?php echo $_SESSION['username']; ?></strong><!-- Anda login sebagai
      <strong>
      <?php
        if($_SESSION['level'] == 2){
          echo 'Admin.';
        } else {
            echo 'Petugas';
        }
      ?> -->
			<div class="section">
				<!-- <div class="container">
					<div class="row">
						<div class="col-12"> -->
					<iframe name="scs_body" height="1000px" width="1350px" frameborder="0"></iframe>
					<!-- <iframe name="scs_body" src=""style="width: 1400px; height: 300px;" frameborder="0"></iframe> -->
					</div>		
				</div>		
			</div>
			<!-- <div class="section mt-5">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div id="switch">
								<div id="circle"></div>
							</div>
						</div>	
					</div>		
				</div>			
			</div> -->
		</div>
	</div>
	<div class="my-5 py-5">
	</div>

</body>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

      <script id="rendered-js" >
/* Please ❤ this if you like it! */


(function ($) {"use strict";

  $(function () {
    var header = $(".start-style");
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 10) {
        header.removeClass('start-style').addClass("scroll-on");
      } else {
        header.removeClass("scroll-on").addClass('start-style');
      }
    });
  });

  //Animation

  $(document).ready(function () {
    $('body.hero-anime').removeClass('hero-anime');
  });

  //Menu On Hover

  $('body').on('mouseenter mouseleave', '.nav-item', function (e) {
    if ($(window).width() > 750) {
      var _d = $(e.target).closest('.nav-item');_d.addClass('show');
      setTimeout(function () {
        _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
      }, 1);
    }
  });

  //Switch light/dark

//   $("#switch").on('click', function () {
//     if ($("body").hasClass("dark")) {
//       $("body").removeClass("dark");
//       $("#switch").removeClass("switched");
//     } else
//     {
//       $("body").addClass("dark");
//       $("#switch").addClass("switched");
//     }
//   });

})(jQuery);
//# sourceURL=pen.js
    </script>

  
</body>

</html>
<?php
    
}
else {
	header("Location: ../login");
    }
?>