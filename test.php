<?php
include("connect.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<br /><br /><br /><br /><br /><br /><br /><br /><br />
<div class="container" >
<div class="row">
<div class="col-lg-8">
<div class="row" style="border:solid thin #999;">
<div class="col-lg-4">
<a href="#demo" data-toggle="collapse"><b> <font size="+3" style="color:#903"> IELTS</b></a></font><br /><br />
</div>
<div class="col-lg-8 collapse" id="demo">
<?php
$str=$conn->query("select * from addtest where subj_id='IELTS TEST'");
while($row=$str->fetch_assoc())
{
	echo "<a href='test/quiz.php?a=$row[subj_id]' target='_blank'>".$row['test_name']."</a><br>";
}
?>

</div>
</div>

<div class="row" style="border:solid thin #999;">
<div class="col-lg-4">
<a href="#demo1" data-toggle="collapse"><b><font size="+3" style="color:#903">BANK PO</b></a></font><br /><br />
</div>
<div class="col-lg-8 collapse" id="demo1">
<?php
$str1=$conn->query("select * from addtest where subj_id='BANKING TEST'");
while($row1=$str1->fetch_assoc())
{
	echo "<a href='test/quiz.php?a=$row1[subj_id]' target='_blank'>".$row1['test_name']."</a><br>";
}
?>
</div>

</div>

<div class="row" style="border:solid thin #999;">
<div class="col-lg-4">
<a href="#demo2" data-toggle="collapse"><b><font size="+3" style="color:#903">GRE</b></a></font><br /><br />

</div>
<div class="col-lg-8 collapse" id="demo2">
<?php
$str2=$conn->query("select * from addtest where subj_id='GRE EXAM'");
while($row2=$str2->fetch_assoc())
{
	echo "<a href='test/quiz.php?a=$row2[subj_id]' target='_blank'>".$row2['test_name']."</a><br>";
}
?>
</div>
</div>
</div>
<div class="col-lg-4">
<h1> <b> <font size="+3" style="color:#C66">LATEST NEWS</h1><b/><font/><br />
<h1><font size="+1" style="font-style:italic"> Punjab National Bank reverses from a key base level <h1/></font>
<img src="images/g8.jpg"  height="400" width="400" /><br/><br/>
<h1> <b> <font size="+2" style="color:#00F">STUDY ABROAD</h1><b/><font/>
<h2><b><font size="+1" style="border-right-color:#F9C">Gateway to overseas education<h2/><b/></font>
<img src="admin/images/g3.jpg" height="200" width="400" />
<p><font size="-1" style="color:#963">The tests are designed to ensure that the students are on par with their international counterparts. Photo: Nagara Gopal <p/><font/>

<p> <font size="+1" style="font-style:oblique" style="color:#9FC">Planning to study abroad? A primer on some of the tests you will have to crack.<p/><font/><br/>
<div class="row">

<p><font style="color:#FC6">The British Council will set up its first kindergarten in Hong Kong later this year, 68 years after the council’s establishment in the city, the Post has learnt.
</p>
</font>



</div>
</div>


</div>
<br /><br /><br /><br /><br /><br />
</body>
</html>