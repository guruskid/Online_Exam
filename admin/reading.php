<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<form method="post" action="read.php">
<div class="container">

<!--<div class="row">
<div class="col-lg-4">
<center><h2><span style="color:#C33;">Test Name</span></h2></center>
</div>
<div class="col-lg-6">
<select name="select_name" class="form-control">
<option value="IELTS TEST">IELTS TEST</option>
<option value="BANKING TEST">GRE TEST	</option>
</div>
</div>
-->


<div class="row">
<div class="col-lg-4">
<h4>Test Name</h4>
</div>
<div class="col-lg-6">
<select name="test_name" class="form-control">
<option value="IELTS TEST">IELTS TEST</option>
<option value="GRE TEST">GRE TEST</option>
</select>
</div>
</div>


<div class="row">
<div class="col-lg-4">
<h4>Description</h4>
</div>
<div class="col-lg-6">
   <textarea name="description" class="form-control"></textarea>
</div>
</div>
<div class="col-lg-6">
<br />
<br/>
<br/>
<a href="<?php echo "adarea.php?a=pass";   ?>"><button type="button" class="btn btn-danger center-block"> ADD QUESTION TO PASSAGE</button></a>
</div><br /><br /><br />
</div>

<div class="row">
<center><button type="submit" class="btn btn-sm btn-warning">ADD</button></center>
</div>
</div>
<form/>
</body>
</html>