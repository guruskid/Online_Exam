<?php
include("connect.php");
$a=$_REQUEST['name'];
$b=$_REQUEST['venue'];
$c=$_REQUEST['date'];
$d=$_REQUEST['time'];
$e=$_REQUEST['description'];
echo "INSERT INTO `news`( `name`, `venue`, `date`, `time`, `description`) VALUES ('$a','$b','$c','$d','$e')";
$conn->query("INSERT INTO `news`(`name`, `venue`, `date`, `time`, `description`)VALUES ('$a','$b','$c','$d','$e')");
header("location:adarea.php?a=adarea")

?>