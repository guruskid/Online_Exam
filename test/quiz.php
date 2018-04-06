<?php
session_start();
error_reporting(1);
mysql_connect("localhost","root","");
mysql_select_db("onlineexam");
$a=$_REQUEST['a'];
extract($_POST);
extract($_GET);
extract($_SESSION);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<script type="text/javascript">
function countdown(secs,elem){
	var element=document.getElementById(elem);
	element.innerHTML="please wait for "+secs+" seconds";
	if(secs < 1)
	{
		clearTimeout(timer);
		element.innerHTML='<h3>countdown complete</h3>';
	}
	secs--;
	var timer=setTimeout('countdown('+secs+',"'+elem+'")',1000);
}
</script>
<div id="status"></div>
<script type="text/javascript">
countdown(20,"status");
</script>
<form method="post" action="test_ins.php">
<?php
echo $a;
if($a=="GRE EXAM")
{
	echo"<h3>QUANTITATIVE REASONING</h3>";
	$rs=mysql_query("select * from addques where select_name='$a' and modules='QUANTITATIVE REASONING' ORDER BY rand() LIMIT 10");
	$x=1;
	while($row=mysql_fetch_array($rs))
	{
		echo "<table >ans$x";
		echo "<tr><td>Que: $row[enter_ques]";
		echo "<tr><td><input type=radio name='ans$x' value=$row[enter_ans1]>$row[enter_ans1]</td></tr>";
		echo "<tr><td><input type=radio name='ans$x' value=$row[enter_ans2]>$row[enter_ans2]</td></tr>";
		echo "<tr><td><input type=radio name='ans$x' value=$row[enter_ans3]>$row[enter_ans3]</td></tr>";
		echo "<tr><td><input type=radio name='ans$x' value=$row[enter_ans4]>$row[enter_ans4]
		<input type='hidden' name='true_ans$x' value='$row[true_ans]'></td></tr></table>";
		$x++;
	}
	echo"<h3>TEXT COMPREHENSION</h3>";
	echo "<h4>Each of the following questions includes a short text with a blank,
	indicating that something has been omitted. Select the entry that
	best completes the text. </h4>";
	$rs1=mysql_query("SELECT * FROM `addques` WHERE `select_name`='$a' AND `sub_modules`='TEXT COMPREHENSION' ORDER BY rand() LIMIT 4");
	$y=1;
	while($row1=mysql_fetch_array($rs1))
	{
		echo "<table>ans$x";
		echo "<tr><td><span class=style2>Que: $row1[enter_ques]</style>";
		echo "<tr><td class=style8><input type=radio name=ans$x value=$row1[enter_ans1]>$row1[enter_ans1]</td></tr>";
		echo "<tr><td class=style8> <input type=radio name=ans$x value=$row1[enter_ans2]>$row1[enter_ans2]</td></tr>";
		echo "<tr><td class=style8><input type=radio name=ans$x value=$row1[enter_ans3]>$row1[enter_ans3]</td></tr>";
		echo "<tr><td class=style8><input type=radio name=ans$x value=$row1[enter_ans4]>$row1[enter_ans4]
		<input type='hidden' value='$row1[true_ans]' name='true_ans$x'></td></tr></table>";
		$x++;
	}
	echo"<h3>SENTENCE EQUIVALENCE</h3>";
	$rs2=mysql_query("select * from addques where select_name='$a' and sub_modules='SENTENCE EQUIVALENCE' ORDER BY rand() LIMIT 4");
	$z=1;
	while($row2=mysql_fetch_array($rs2))
	{
		echo "<table >ans$x";
		echo "<tr><td><span class=style2>Que: $row2[enter_ques]</style>";
		echo "<tr><td class=style8><input type=radio name=ans$x value=$row2[enter_ans1]>$row2[enter_ans1]</td></tr>";
		echo "<tr><td class=style8> <input type=radio name=ans$x value=$row2[enter_ans2]>$row2[enter_ans2]</td></tr>";
		echo "<tr><td class=style8><input type=radio name=ans$x value=$row2[enter_ans3]>$row2[enter_ans3]</td></tr>";
		echo "<tr><td class=style8><input type=radio name=ans$x value=$row2[enter_ans4]>$row2[enter_ans4]
		<input type='hidden' value='$row2[true_ans]'  name='true_ans$x'></td></tr></table>";
		$x++;
	}	
	echo"<h3>READING COMPREHENSION</h3>";
	$rs3=mysql_query("select * from reading where test_name='GRE TEST' ORDER BY rand() LIMIT 2");
	$w=1;
	while($row3=mysql_fetch_array($rs3))
	{
		echo "<p style='color:red;'>$row3[description]</p>";
		$str=mysql_query("select * from passage where select_ques='$row3[description]'");
		while($row4=mysql_fetch_array($str))
		{
			echo "<table >ans$x";
			echo "<tr><td><span class=style2>Que: $row4[enter_ques]</style>";
			echo "<tr><td class=style8><input type=radio name=ans$x value=$row4[enter_ans1]>$row4[enter_ans1]</td></tr>";
			echo "<tr><td class=style8> <input type=radio name=ans$x value=$row4[enter_ans2]>$row4[enter_ans2]</td></tr>";
			echo "<tr><td class=style8><input type=radio name=ans$x value=$row4[enter_ans3]>$row4[enter_ans3]</td></tr>";
			echo "<tr><td class=style8><input type=radio name=ans$x value=$row4[enter_ans4]>$row4[enter_ans4]
			<input type='hidden' value='$row4[true_ans]' name='true_ans$x'></td></tr></table>";
			$x++;
		}
	}	
}
elseif($a=="BANKING TEST")
{
	echo"<h3>QUANTITATIVE ABILITY</h3>";
	$rs6=mysql_query("select * from addques where modules='QUANTITATIVE REASONING' ORDER BY rand() LIMIT 10");
	while($row6=mysql_fetch_array($rs6))
	{
		echo "<table >";
		echo "<tr><td>Que: $row6[enter_ques]";
		echo "<tr><td><input type=radio name=ans value=$row6[enter_ans1]>$row6[enter_ans1]</td></tr>";
		echo "<tr><td><input type=radio name=ans value=$row6[enter_ans2]>$row6[enter_ans2]</td></tr>";
		echo "<tr><td><input type=radio name=ans value=$row6[enter_ans3]>$row6[enter_ans3]</td></tr>";
		echo "<tr><td><input type=radio name=ans value=$row6[enter_ans4]>$row6[enter_ans4]
		<input type='hidden' name='true_ans' value='$row6[true_ans]'></td></tr></table>";
	}
	echo"<h3>REASONING ABILITY</h3>";
	$rs=mysql_query("select * from addques where select_name='$a' and modules='REASONING ABILITY' ORDER BY rand() LIMIT 10");
	while($row=mysql_fetch_array($rs))
	{
		echo "<table >";
		echo "<tr><td>Que: $row[enter_ques]</td></tr>";
		echo "<tr><td><input type=radio name=ans value=1>$row[enter_ans1]</td></tr>";
		echo "<tr><td> <input type=radio name=ans value=2>$row[enter_ans2]</td></tr>";
		echo "<tr><td><input type=radio name=ans value=3>$row[enter_ans3]</td></tr>";
		echo "<tr><td><input type=radio name=ans value=4>$row[enter_ans4]</td></tr></table>";
	}
	echo"<h3>ENGLISH LANGUAGE</h3>";
	$rs1=mysql_query("select * from addques where select_name='$a' and modules='ENGLISH LANGUAGE' ORDER BY rand() LIMIT 10");
	while($row1=mysql_fetch_array($rs1))
	{
		echo "<table >";
		echo "<tr><td><span class=style2>Que: $row1[enter_ques]</style>";
		echo "<tr><td><input type=radio name=ans value=1>$row1[enter_ans1]</td></tr>";
		echo "<tr><td class=style8> <input type=radio name=ans value=2>$row1[enter_ans2]</td></tr>";
		echo "<tr><td class=style8><input type=radio name=ans value=3>$row1[enter_ans3]</td></tr>";
		echo "<tr><td class=style8><input type=radio name=ans value=4>$row1[enter_ans4]</td></tr></table>";
	}
}

elseif($a=="IELTS TEST")
{
$rs=mysql_query("select * from addques where select_name='$a' ORDER BY rand() LIMIT 4");

while($row=mysql_fetch_array($rs))
{
echo "<table >";
echo "<tr><td><span class=style2>Que: $row[enter_ques]</style>";
echo "<tr><td class=style8><input type=radio name=ans value=1>$row[enter_ans1]</td></tr>";
echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[enter_ans2]</td></tr>";
echo "<tr><td class=style8><input type=radio name=ans value=3>$row[enter_ans3]</td></tr>";
echo "<tr><td class=style8><input type=radio name=ans value=4>$row[enter_ans4]</td></tr></table>";

}
}

?>
<input type="submit">
</body>
</html>