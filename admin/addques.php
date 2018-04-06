<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN PANEL</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
<form method="post" action="ques.php">

<div class="container">
<div class="row">
<div class="col-lg-6">
<center><h2><span style="color:#C33;">ADD QUESTION</span></h2></center>
</div>
<div class="col-lg-6">
<br />
<a href="<?php echo "adarea.php?a=read";   ?>"><button type="button" class="btn btn-danger" style="float:right">Add Reading ques</button></a>
</div><br /><br /><br />
</div>
<div class="row">
<div class="col-lg-4">
<h4>SELECT TEST NAME</h4>
</div>
<div class="col-lg-6">
<select name="select_name" class="form-control">
<option value="IELTS TEST">IELTS TEST</option>
<option value="BANKING TEST">BANKING TEST	</option>
<option value="GRE EXAM">GRE EXAM</option>
</select>
</div>
</div>

<div class="row">
<div class="col-lg-4">
<h4>MODULE</h4>
</div>
<div class="col-lg-6">
<select name="modules" class="form-control">
<option value="">NO FEILD REQUIRED</option>
<option value="READING">READING</option>
<option value="WRITING">WRITING	</option>
<option value="LISTENING">LISTENING</option>
<option value="SPEAKING">SPEAKING</option>
<option value="VERBAL">VERBAL</option>
<option value="ANALYITICAL WRITING">ANALYITICAL WRITING</option>
<option value="QUANTITATIVE REASONING">QUANTITATIVE REASONING</option>
<option value="ENGLISH LANGUAGE">ENGLISH LANGUAGE</option>
<option value="QUANTITATIVE APTITUDE">QUANTITATIVE APTITUDE</option>
<option value="REASONING ABILITY">REASONING ABILITY</option>
</select>
</div>
</div>


<div class="row">
<div class="col-lg-4">
<h4>SUB MODULE</h4>
</div>
<div class="col-lg-6">
<select name="submodules" class="form-control">
<option value="NO FEILD REQUIEED">NO FEILD REQUIRED</option>
<option value="READING COMPREHENSION">READING COMPREHENSION</option>
<option value="TEXT COMPREHENSION">TEXT COMPREHENSION</option>
<option value="SENTENCE EQUIVALENCE">SENTENCE EQUIVALENCE</option>
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
 <input type="text" name="enter_ans4" maxlenght="30" size="30" class="form-control" />
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
</form>
</body>
</html>