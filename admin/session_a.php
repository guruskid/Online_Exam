<?php
include("connect.php");
session_start();
$login_id=$_REQUEST['login_id'];
$password=$_REQUEST['password'];
if($login_id="admin" && $password="admin")
{
	$_SESSION['id']=$login_id;
	header("location:adarea.php");
}
else
{
	header("location:admin.php?a='wrong value'");
}

?>