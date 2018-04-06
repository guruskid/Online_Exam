<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#d1
{
	background-color:#336;
}
#d1:hover
{
	background-color:#9CF;
}
</style>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery-1.11.0.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<form method="post" action="session_u.php">
<br /><br /><br /><br />

<div class="container">
<div class="row">
<h2> <center>WELCOME BACK!</center></h2>
</div>
<br />
<br />
<div class="row">
<div class="col-lg-6">
<div class="row">
<div class="col-lg-4 text-right">Username
</div>
<div class="col-lg-5">
<input type="text"  maxlenght="30" size="30" placeholder="username" name="user" class="form-control" />
</div>
</div>
<br />
<div class="row">
<div class="col-lg-4 text-right">Password
</div>
<div class="col-lg-5">
<input type="password"  maxlength="30" size="30" placeholder="password" name="pass" class="form-control" /><br /><br />
</div>
</div>
<div class="row">
<center><button type="submit" class="btn btn-lg" id="d1" style="color:#FFF;">LOGIN</button></center><br />
<center><h4>DON'T HAVE AN ACCOUNT? <span style="color:#336;"> <a href="<?php echo "index.php?a=register"; ?>">Sign Up</a></span></h4></center>
</div>
</div>

<div class="col-lg-5">
<h3> NEW USER</h3><br />
<p> We are providing free of cost courses of IELTS, BANKING EXAMS & GRE EXMAS. you can get any information about this courses. so you are requested to register new account.</p><br /><br />
<button type="submit" class="btn btn-lg" id="d1" style="color:#FFF;"> <a href="<?php echo "index.php?a=register"; ?>">REGISTER NEW ACCOUNT</a></button>

</div>
</div>

</div>
</form>
<br /><br />
<br /><br />
<br /><br />
</body>
</html>
