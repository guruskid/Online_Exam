<?php
include("connect.php");
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$str=$conn->query("select * from tb1 where login_id='$user' and password='$pass'");
while($row=$str->fetch_assoc())
{
	if($user==$row['login_id'] && $pass==$row['password'])
	{
		$_SESSION['id']=$user;
		echo $_SESSION['id'];
		header("location:index.php?a=test");
	}
	else
	{
		header("location:index.php?a=login&b='wrong id password'");
	}
	
}

?>