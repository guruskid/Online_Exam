<?php
include("connect.php");
$a=$_REQUEST['subj_id'];
$b=$_REQUEST['test_name'];
$c=$_REQUEST['test_ques'];
echo "INSERT INTO `addtest`(`subj_id`, `test_name`, `test_ques`) VALUES ('$a','$b','$c')";
$conn->query("INSERT INTO `addtest`( `subj_id`, `test_name`, `test_ques`) VALUES ('$a','$b','$c')");
header("location:adarea.php?a=addtest&b='entered'");
?>