<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery-1.11.0.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<form method="post" action="nws.php">
<div class="container">
<div class="row">
<div class="col-lg-4">
<h4>Enter Name</h4>
</div>
<div class="col-lg-6">
 <input type="text" name="name" maxlenght="30" size="30" class="form-control" />
</div>
</div>
<div class="row">
<div class="col-lg-4">
<h4>Enter Venue</h4>
</div>
<div class="col-lg-6">
 <input type="text" name="venue" maxlenght="30" size="30" class="form-control" />
</div>
</div>
<div class="row">
<div class="col-lg-4">
<h4>Enter Date</h4>
</div>
<div class="col-lg-6">
 <input type="date" name="date" maxlenght="30" size="30" class="form-control" />
</div>
</div>
<div class="row">
<div class="col-lg-4">
<h4>Enter time</h4>
</div>
<div class="col-lg-6">
 <input type="time" name="time" maxlenght="30" size="30" class="form-control" />
</div>
</div>
<div class="row">
<div class="col-lg-4">
<h4>Enter Description</h4>
</div>
<div class="col-lg-6">
 <textarea name="description" size="30" class="form-control" ></textarea>
</div>
</div><br />
<div class="row">

<center><button type="submit" class="btn btn-sm btn-warning">SUBMIT</button></center>


</div>
</div>
</form>
</div>
</body>
</html>