<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>

<form method="post" action="test.php">
<div class="container">
<div class="row"><br /><br />
<center><h3><span style="color:#C33;"> ADD TEST</span></h3></center>
</div>
<div class="row">
<div class="col-lg-4"> 
<h4>Enter Subject ID</h4>
</div>
<div class="col-lg-6">
<select name="subj_id" class="form-control">
<option value="IELTS TEST">IELTS TEST</option>
<option value="BANKING TEST">BANKING TEST	</option>
<option value="GRE EXAM">GRE EXAM</option>

</select></center><br /><br />
</div>
</div>
<div class="row">
<div class="col-lg-4">
<h4>Enter Test Name</h4>
</div>
 <div class="col-lg-6">
 <input type="text" name="test_name" maxlenght="30" size="30" class="form-control" /></center><br /><br />
 </div>
 </div>
<div class="row">
<div class="col-lg-4">
<h4>Enter Total Question</h4>
</div>
<div class="col-lg-6">
 <input type="text" name="test_ques" maxlenght="30" size="30" class="form-control" /></center> <br />
 </div>
 </div>
<center><button type="submit" class="btn btn-sm btn-warning">ADD</button></center>
</div>
</form>


</body>
</html>