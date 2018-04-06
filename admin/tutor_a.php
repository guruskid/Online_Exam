<?php
include("connect.php");
$a=$_REQUEST['exam'];
$b=$_REQUEST['module'];
$c=$_REQUEST['sub_module'];
$d=$_REQUEST['desp'];
$e=$_REQUEST['url'];
echo "INSERT INTO `tutorials`( `exam`, `module`, `sub_module`,`description`,`url`) VALUES ('$a','$b','$c','$d','$e')";
$conn->query("INSERT INTO `tutorials`(`exam`, `module`, `sub_module`,`description`,`url`)VALUES ('$a','$b','$c','$d','$e')");
header("location:adarea.php");

?>