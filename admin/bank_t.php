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
<style>
#d1
{
	background-color:#963;
}
#d1:hover
{
	background-color:#666;
}
</style>
</head>

<body>
<form method="post" action="tutor_a.php">
<div class="container">
<div class="row">
<center><h2 style="color:#C0C;">Enter Banking Exam Tutorials</h2></center>
</div><br /><br />
<input type="hidden" value="banking" name="exam" />
<div class="row">
<div class="col-lg-4">
<h3>Module</h3>
</div>
<div class="col-lg-4">

<select name="module" class="form-control">
<option value="English Language">English Language</option>
<option value="Quantitative Aptitude">Quantitative Aptitude</option>
<option value="Reasoning Ability">Reasoning Ability</option>
</select>
</div>
</div>
<div class="row">
<div class="col-lg-4">
<h3> Enter desp</h3>
</div>
<div class="col-lg-4">
<input type="text" name="desp" maxlength="30" size="30" class="form-control" />

</div>
</div>

<div class="row">
<div class="col-lg-4">
<h3> Enter url</h3>
</div>
<div class="col-lg-4">
<input type="url" name="url" maxlength="30" size="30" class="form-control" />

</div>
</div>


<div class="row">
<center><button type="submit" id="d1" class="btn">SUBMIT</button></center>
 </div>
</div>
</form>
</body>
</html>