<?php
include("connect.php");
$a=$_REQUEST['LoginID'];
$b=$_REQUEST['Password'];
$c=$_REQUEST['Name'];
$d=$_REQUEST['Address'];
$e=$_REQUEST['City'];
$f=$_REQUEST['Phone'];
$g=$_REQUEST['E-mail'];
echo "INSERT INTO `tb1`(`id`, `login_id`, `password`, `name`, `address`, `city`, `phone`, `email`) VALUES ('','$a','$b','$c','$d','$e','$f','$g')";

	$conn->query("INSERT INTO `tb1`(`id`, `login_id`, `password`, `name`, `address`, `city`, `phone`, `email`) VALUES ('','$a','$b','$c','$d','$e','$f','$g')");
header("location:index.php?a=login")

?>