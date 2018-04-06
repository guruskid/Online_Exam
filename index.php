<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<title>Literacy</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Literacy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>
   <style>
	#d1
{
	background-color:#933;
}
#d1 a
{
	text-decoration:none;
	color:#CCC;
}
#d1:hover
{
	background-color:#ccc;
}
#d1 a:hover
{
	color:#933;
}
</style>
  <!-- web-fonts -->
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600italic,400italic,600,300italic,300,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- web-fonts -->
  <script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>
	<!-- header-section-starts-here -->
	<div class="header" id="movetop">
		<div class="container">
			<div class="header-top">
				
				<div class="logo">
					<h1><a href="index.php">Online Examination</a></h1>
				</div>
				<div class="social-icons">
					<ul>
						<li><a class="facebook" href="#"></a></li>
						<li><a class="twitter" href="#"></a></li>
						<li><a class="google-plus" href="#"></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- navigation -->
			<div class="navigation">
					<nav class="navbar navbar-default">
					 
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							  <ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
								<li><a href="<?php echo "index.php?a=about";   ?>">ABOUT</a></li>
								<li><a href="index.php#news-section">News</a></li>
                                <li><a href="<?php echo "index.php?a=tutorials";   ?>">Tutorials</a></li>
								<li><a href="<?php echo "index.php?a=test";   ?>">Test</a></li>
                                
                                <li>
                                <?php
								if(!$_SESSION['id'])
								{
								?>
                                
								<a href="<?php echo "index.php?a=login";   ?>">Login</a>
                                <?php
								}
								else
								{
								?>
                                <a href="<?php echo "index.php?a=logout_u";   ?>">Logout</a>
                                <?php
								}
								?>
                                </li>
								
							  </ul>
						  <div class="clearfix"></div>
						</div><!-- /.navbar-collapse -->
					</nav>
			</div>
			<!-- //navigation -->
		</div>
	</div>
    
    <?php
	if($_REQUEST['a']=="login")
	include_once("login.php");
	else if($_REQUEST['a']=="register")
	include_once("register.php");
	else if($_REQUEST['a']=="test")
	include_once("test.php");
	else if($_REQUEST['a']=="logout_u")
	include_once("logout_u.php");
	else if($_REQUEST['a']=="about")
	include_once("about.php");
	else if($_REQUEST['a']=="contact")
	include_once("contact.php");
	else if($_REQUEST['a']=="ielts")
	include_once("ielts.php");
	else if($_REQUEST['a']=="gre")
	include_once("gre.php");
	else if($_REQUEST['a']=="bankpo")
	include_once("bankpo.php");
	else if($_REQUEST['a']=="tutorials")
	include_once("tutorials.php");
	else
	{
?>	<!-- header-section-ends-here -->
	<div class="slider">
	    <ul class="rslides" id="slider1">
	      <li><img src="images/banner2.png"></li>
	      <li><img src="images/examination system.jpg"></li>
          <li><img src="images/online_examination_Software_odisha_india_interface_software_services.jpg"></li>
	    </ul>
    </div>
	<!-- content-section-starts-here -->
	<div class="content">
		<div class="welcome-top">
			<div class="container">
				<div class="col-md-6 welcome_top_left"><br/><br/><br/>
					<h3>WELCOME</h3>
					<h5>TO OUR ONLINE EXAMINATION</h5>
					
				</div>
				<div class="col-md-6 welcome_top_right">
					<h3>WE'RE OPEN</h3>
					<h5>IN LUDHIANA</h5>
					<div class="welcome_right_location">
						<div class="location_img">
							<img src="images/loc.jpg" alt="" />
						</div>
						<div class="location">
							
							<p class="location_text"><span class="glyphicon glyphicon-map-marker"></span>SCO-12A.2nd floor, Wisdom Tower Model Town Ext. Ludhiana.</p>
							<p class="location_text"><span class="glyphicon glyphicon-dashboard"></span>Mon to Sat 8:30am - 4:30pm,  Sunday - Holiday</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<div class="service-section" style="margin-top:5%;">
				<div class="container">
					<div class="service-section-head text-center">
						<header>
							<h3>COURSES</h3>
							
						</header>
					</div>
					<div class="service-section-grids">
						<div class="col-md-4 service-grid">
							<div class="service-section-grid">
								<div class="icon">
									<span class="d1 glyphicon glyphicon-pencil"></span>
								</div>
								<div class="icon-text">
									<a href="single.html">IELTS</a>
									<p>IELTS stands for International English Language Testing System. It is an exam intended for non-native English speakers. Its purpose is to find out what your level of English is (your result is a band score from 0 to 9). Usually you need to take the IELTS test if you are migrating to such country.</p><br/><br/></p>
                                                                    <center> <button type="button" id="d1" class="btn" ><a href="<?php echo "index.php?a=ielts";  ?>">READ MORE</a></button></center>
                                 </div></div>
                             <div class="clearfix"></div>
						</div>
						<div class="col-md-4 service-grid">
							<div class="service-section-grid">
								<div class="icon">                          
                                                                    
                             <span class="d6 glyphicon glyphicon-sort-by-alphabet"></span>									
								</div>
								<div class="icon-text">
									<a href="single.html">BANKING EXAM</a>
									<p>A bank is a financial institution that creates credit by lending money to a borrower, thereby creating a corresponding deposit on the bank's balance sheet. Lending activities can be performed either directly or indirectly through capital markets. </p><br/><br/><br/><br/>
                                     <center> <button type="button" id="d1" class="btn" ><a href="<?php echo "index.php?a=bankpo";  ?>">READ MORE</a></button></center>
								</div>
                                </div>
                                <div class="clearfix"></div>
						</div>
						<div class="col-md-4 service-grid">
							<div class="service-section-grid">
								<div class="icon">
									<span class="d6 glyphicon glyphicon-sort-by-alphabet"></span>									
								</div>
								<div class="icon-text">
                               <a href="single.html">GRE</a>
									<p>The Graduate Record Examinations (GRE) General Test is a standardized test that graduate schools use to evaluate candidates. Over one thousand graduate programs around the world require applicants to submit GRE scores in order to be considered for admission.</p><br/><br/>
                                     <center> <button type="button" id="d1" class="btn" ><a href="<?php echo "index.php?a=gre";  ?>">READ MORE</a></button></center>
								</div>
                                
							</div>
							
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!-- //services -->
			<!-- News-section -->
            <div class="news-section" id="news-section">
			 <div class="container">
				<div class="news-section-head text-center">
					<header>
						<h3>Latest News</h3>
						<p>Read Latest News about Online Examination.</p>
					</header>
				</div>
               
				<div class="news-section-grids">
                 <?php
				include("connect.php");
				$result=$conn->query("select * from news");
				while($row=$result->fetch_assoc())
				{
				?>
					<div class="col-md-4 col-lg-4 news-section-grid">
                    <h4 style="color:#6CDD75;"><a href="#"><?php echo $row['name'];  ?></a></h4>
                    <br>
                             <h4><?php echo $row['venue']." on ".$row['date']; ?></h4>
                             <br>
						<div class="news-section-grid-left">
							<h4><?php echo $row['time']; ?></h4>
						</div>
                       
						<div class="news-section-grid-right">
							
							<p style="color:#333;"><?php echo $row['description'];  ?></p>
						</div>
						<div class="clearfix"></div>
					</div>
             
                <?php
				}
				?>
			</div>
                   
            
		</div>
	</div>
			 
    <?php
	}
	?>
    
	<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
								</div>
						
                                
<!----> 

</body>
</html>