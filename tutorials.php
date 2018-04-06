<?php
include("connect.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#a1
{
	color:#F96;
	text-decoration:none;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:18px;
}

</style>
</head>

<body>
<br />
<br />
<br />
<div class="container">
<div class="row">
<div class="col-lg-4">
<h2 style="color:#966;">ILETS EXAM</h2><br />
<h3>READING</h3>
<?php
$str1=$conn->query("select * from tutorials where module='READING'");
while($row1=$str1->fetch_assoc())
{
	echo "<a href='$row1[url]'  id='a1'>$row1[description]"."<br></a>";
}


?>
<br />
<h3> LISTENING</h3>
<?php
$str2=$conn->query("select * from tutorials where module='LISTENING'");
while($row2=$str2->fetch_assoc())
{
	echo "<a href='$row2[url]'  id='a1'>$row2[description]"."<br></a>";
}


?>
<br />
<h3>WRITING</h3>
<?php
$str3=$conn->query("select * from tutorials where module='WRITING'");
while($row3=$str3->fetch_assoc())
{
	echo "<a href='$row3[url]' id='a1' >$row3[description]"."<br></a>";
}


?>
<br />

<h3>SPEAKING</h3>
<?php
$str4=$conn->query("select * from tutorials where module='SPEANKING'");
while($row4=$str4->fetch_assoc())
{
	echo "<a href='$row4[url]' id='a1'>$row4[description]"."<br></a>";
}


?><br />

</div>
<div class="col-lg-4">
<h2 style="color:#966;">BANKING EXAM</h2><br />
<h3>ENGLISH LANGUAGE</h3>
<?php
$str5=$conn->query("select * from tutorials where module='English Language'");
while($row5=$str5->fetch_assoc())
{
	echo "<a href='$row5[url]' id='a1'>$row5[description]"."<br></a>";
}


?>
<br />
<h3>QUANTITATIVE APTITUDE</h3>
<?php
$str6=$conn->query("select * from tutorials where module='Quantitative Aptitude'");
while($row6=$str6->fetch_assoc())
{
	echo "<a href='$row6[url]' id='a1'>$row6[description]"."<br></a>";
}


?>
<br />
<h3>REASONING ABILAITY</h3>
<?php
$str7=$conn->query("select * from tutorials where module='Reasoning Ability'");
while($row7=$str7->fetch_assoc())
{
	echo "<a href='$row7[url]' id='a1'>$row7[description]"."<br></a>";
}


?>
<br />

</div>
<div class="col-lg-4">
<h2 style="color:#966;">GRE EXAM</h2><br />
<h3>VERBAL SECTION</h3>
<?php
$str8=$conn->query("select * from tutorials where module='Verbal section'");
while($row8=$str8->fetch_assoc())
{
	echo "<a href='$row8[url]' id='a1'>$row8[description]"."<br></a>";
}


?>
<br />
<h3>QUANTITATIVE REASONING</h3>
<?php
$str9=$conn->query("select * from tutorials where module='Quantitative reasoning'");
while($row9=$str9->fetch_assoc())
{
	echo "<a href='$row9[url]' id='a1'>$row9[description]"."<br></a>";
}


?>
<br />
<h3>ANALYTICAL WRITING REASONING</h3> 
<?php
$str10=$conn->query("select * from tutorials where module='Analytical writing section'");
while($row10=$str10->fetch_assoc())
{
	echo "<a href='$row10[url]' id='a1'>$row10[description]"."<br></a>";
}


?>
</div>
</div>
</div>
</body>
</html>