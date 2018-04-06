<?php
include("connect.php");
$a=$_REQUEST['test_name'];
$b=$_REQUEST['enter_ques'];
$c=$_REQUEST['enter_ans1'];
$d=$_REQUEST['enter_ans2'];
$e=$_REQUEST['enter_ans3'];
$f=$_REQUEST['enter_ans4'];
$g=$_REQUEST['true_ans'];
echo "INSERT INTO `passage`(`id`, `select_ques`, `enter_ques`, `enter_ans1`, `enter_ans2`, `enter_ans3`, `enter_ans4`, `true_ans`) VALUE ('','$a','$b','$c','$d','$e','$f','$g')"; 
$conn->query("INSERT INTO `passage`(`id`, `select_ques`, `enter_ques`, `enter_ans1`, `enter_ans2`, `enter_ans3`, `enter_ans4`, `true_ans`) VALUES ('','$a','$b','$c','$d','$e','$f','$g')");
header("location:adarea.php?a=passage&b='entered succesfully'");


?>