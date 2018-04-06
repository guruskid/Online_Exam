<?php
include("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
<form method="post" action="pass.php">

<div class="container">
<div class="row">
<div class="col-lg-6">
<center><h2><span style="color:#C33;">ADD QUESTION PASSAGE</span></h2></center>
</div>

</div><br /><br /><br />
</div>
<div class="container">
<div class="row">


<div class="row">
<div class="col-lg-4">
<h4>Select Question</h4>
</div>
<div class="col-lg-6">

<select name="test_name" class="form-control">
<?php
mysql_connect("localhost","root","");
mysql_select_db("onlineexam");
$str=mysql_query("select * from reading");
while($row=mysql_fetch_assoc($str))
{
	echo "<option value='$row[description]'>$row[description]</option>";
}

?>
</select>
</div>
</div>



<div class="row">
<div class="col-lg-4">
<h4>Enter Question</h4>
</div>
<div class="col-lg-6">
 <input type="text" name="enter_ques" maxlenght="30" size="30" class="form-control" />
</div>
</div>
<div class="row">
<div class="col-lg-4">
<h4>Enter Answer1</h4>
</div>
<div class="col-lg-6">
<input type="text" name="enter_ans1" maxlenght="30" size="30" class="form-control" />
</div>
</div>
<div class="row">
<div class="col-lg-4">
<h4>Enter Answer2</h4>
</div>
<div class="col-lg-6">
 <input type="text" name="enter_ans2" maxlenght="30" size="30" class="form-control" />
</div>
</div>
<div class="row">
<div class="col-lg-4">
<h4>Enter Answer3</h4>
</div>
<div class="col-lg-6">
 <input type="text" name="enter_ans3"  maxlenght="30" size="30" class="form-control" />
</div>
</div>
<div class="row">
<div class="col-lg-4">
<h4>Enter Answer4</h4>
</div>
<div class="col-lg-6">
 <input type="text"name="enter_ans4" maxlenght="30" size="30" class="form-control" />
</div>
</div>
<div class="row">
<div class="col-lg-4">
<h4>Enter True Answer</h4>
</div>
<div class="col-lg-6">
 <input type="text" name="true_ans" maxlenght="30" size="30" class="form-control" />
 </div>
 </div>
 
 <div class="row">
<center><button type="submit" class="btn btn-sm btn-warning">ADD</button></center>
</div>
</div>


</div>
</div>
</body>
</html>
<form/>
</body>
</html>