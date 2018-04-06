<?php
error_reporting(0);
/*if(!$_SESSION['id'])
{
	header("location:admin.php?a='login first'");
}*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">/
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN PANEL</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
</head>

<body>

<div class="row" style="background-color:#F99;">
<center><h3><span style="color:#C33;">Welcome To Admistrative Area</h3></center><br />
</div>
<ol class="nav nav-tabs nav-justified">
<li><a href="adarea.php">HOME</a></li>
<li><a href="<?php echo "adarea.php?a=news";      ?>">NEWS</a></li>
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">TUTORIALS</a>
<ul class="dropdown-menu">
<li><a href="<?php echo "adarea.php?a=ielts";      ?>"> IELTS EXAM</a></li>
<li><a href="<?php echo "adarea.php?a=bankpo";      ?>"> BANKING EXAM</a></li>
<li><a href="<?php echo "adarea.php?a=gre";      ?>"> GRE EXAM</a>  																																																																																																																																																																																																																																																																																															</li>
</ul>
</li>
<li><a href="<?php echo "adarea.php?a=addques";   ?>">ADDQUES</a></li>
<li><a href="<?php echo "adarea.php?a=addtest";   ?>">ADDTEST</a></li>

<li><a href="logout.php">LOGOUT</a></li>
</ol>
</div>
<div class="row">
<?php
if($_REQUEST['a']=="addques")
	include_once("addques.php");
	else
	if($_REQUEST['a']=="addtest")
	include_once("addtest.php");
	else
	if($_REQUEST['a']=="news")
	include_once("news.php");
	else
	if($_REQUEST['a']=="ielts")
	include_once("ielts_t.php");
	else
	if($_REQUEST['a']=="gre")
	include_once("gre_t.php");
	else
	if($_REQUEST['a']=="bankpo")
	include_once("bank_t.php");
	else
	if($_REQUEST['a']=="read")
	include_once("reading.php");
	else
	if($_REQUEST['a']=="pass")
	include_once("passage.php");
	else
	{
?>

<center><h3 span style="color:#C03;">WELCOME TO ADMIN PAGE</h3></center>

					<div class="about-bottom text-center">
<img src="../images/580466_3100_2.jpg"  height="450" width="950"/>

<?php
	}
?>
</div>
<script>
$(document).ready(function()
{
	$('dropdown-toggle').dropdown();
});
</script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery-1.11.0.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>