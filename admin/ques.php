<?php
include("connect.php");
$a=$_REQUEST['select_name'];
$h=$_REQUEST['modules'];
$i=$_REQUEST['submodules'];
$b=$_REQUEST['enter_ques'];
$c=$_REQUEST['enter_ans1'];
$d=$_REQUEST['enter_ans2'];
$e=$_REQUEST['enter_ans3'];
$f=$_REQUEST['enter_ans4'];
$g=$_REQUEST['true_ans'];
echo "INSERT INTO `addques`(`id`, `select_name`, `modules`,`sub_modules`,`enter_ques`, `enter_ans1`, `enter_ans2`, `enter_ans3`, `enter_ans4`, `true_ans`) VALUES ('','$a','$h','$i','$b','$c','$d','$e','$f','$g')";
$conn->query("INSERT INTO `addques`(`id`, `select_name`,`modules`,`sub_modules`, `enter_ques`, `enter_ans1`, `enter_ans2`, `enter_ans3`, `enter_ans4`, `true_ans`) VALUES ('','$a','$h','$i','$b','$c','$d','$e','$f','$g')");
header("location:adarea.php?a=addques&b='entered succesfully'");

?>
