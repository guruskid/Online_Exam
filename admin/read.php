<?php
include("connect.php");
$a=$_REQUEST['test_name'];
$b=$_REQUEST['description'];
$conn->query("INSERT INTO `reading`(`id`, `test_name`, `description`) VALUES ('','$a','$b')");
header("location:adarea.php?a=reading&b='entered succesfully'");
?>
