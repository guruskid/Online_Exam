<?php
error_reporting(0);
include("connect.php");

$a=1;
$b=0;

while($a<=20)
{
if($_REQUEST['ans'.$a]==$_REQUEST['true_ans'.$a])
{
	echo "correct<br>";
	$b++;
}
else
{
	echo "not correct<br>";
}
$a++;
}

echo $b;

?>