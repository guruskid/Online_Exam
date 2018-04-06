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
	background-color:#CCF;
}
</style>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery-1.11.0.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<br /><br /><br /><br /><br />
<form method="post" action="regis.php">
<div class="row">
<center><h3>REGISTER NEW ACCOUNT</h3></center><br /><br />
</div>
<div class="row">
<div class="col-lg-4 text-right">Login Id
</div>
<div class="col-lg-5">
 <input type="text"  maxlenght="30" size="30" name="LoginID" class="form-control"/><br /><br />
 </div>
 </div>
<div class="row">
<div class="col-lg-4 text-right">Password
</div>
<div class="col-lg-5">
 <input type="password"  maxlenght="30" size="30" name="Password" class="form-control" />  <br /><br />
 </div>
 </div>
<div class="row">
<div class="col-lg-4 text-right">Name
</div>
<div class="col-lg-5">
  <input type="text"  maxlenght="30" size="30" name="Name" class="form-control" /><br /><br />
</div>
</div>
<div class="row">
<div class="col-lg-4 text-right">Address
</div>
<div class="col-lg-5">
 <textarea rows="5" cols="35" name="Address" class="form-control"></textarea> <br /><br />
 </div>
 </div>
 <div class="row">
<div class="col-lg-4 text-right">City
</div>
<div class="col-lg-5">
 <input type="text"  maxlenght="30" size="30" name="City" class="form-control" /><br /><br />
 </div>
 </div>
 <div class="row">
<div class="col-lg-4 text-right">Phone
</div>
<div class="col-lg-5">
 <input type="number"  maxlenght="30" size="30" name="Phone" class="form-control" /><br /><br />
 </div>
 </div>
<div class="row">
<div class="col-lg-4 text-right">E-mail
</div>
<div class="col-lg-5">
 <input type="email"  maxlenght="30" size="30" name="E-mail" class="form-control" /><br /><br /><br />
 </div>
 </div>
 <div class="row">
<center><button type="submit" class="btn btn-lg" id="d1" style="color:#FFF;"> sign up</button></center><br />

<center><h4> ALREADY HAVE AN ACCOUNT? <span style="color:#336; "> Sign Up</span></h4></center>
</div>
</form>
<br /><br /><br /><br />
</body>
</html>
