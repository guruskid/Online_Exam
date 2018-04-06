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
<form method="post" action="tutor_a.php">
<div class="container">
<div class="row">
<center><h2 style="color:#C0C;">Enter Gre Tutorials</h2></center>
</div><br /><br />
<input type="hidden" value="GRE" name="exam" />
<div class="row">
<div class="col-lg-4">
<h3>Module</h3>
</div>
<div class="col-lg-4">

<select name="module" class="form-control">
<option value="Analytical writing section">Analytical writing section</option>
<option value="Verbal section">verbal section</option>
<option value="Quantitative reasoning">Quantitative reasoning</option>
</select>
</div>
</div>
<div class="row">
<div class="col-lg-4">
<h3>Sub module</h3>
</div>
<div class="col-lg-4">
<select name="sub_module" class="form-control">
<option value="Reading Comprehension">Reading Comprehension</option>
<option value="Text Comprehension">Text Comprehension	</option>
<option value="Sentence Equivalence">Sentence Equivalence</option>
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
<h3> Enter Url</h3>
</div>
<div class="col-lg-4">
<input type="url" name="url" maxlength="30" size="30" class="form-control" />

</div>
</div>
<div class="row">
<center><button type="submit" id="d1" class="btn">SUBMIT</button></center>
 </div>
 </div>
</div>
</form>
<body>
</body>
</html>