<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>نمایش مشخصات </title>

</head>

<body>

<?php

include("header.php");

?>

if (isset($_POST['text1'])  & & !empty($_POST['text1'])   & & 

isset($_POST['password'])  & & !empty($_POST['password'])   & & 

isset($_POST['repassword'])  & & !empty($_POST['repassword'])) {

$text1=$_POST['text1'];

$password=$_POST['repassword'];

$repassword=$_POST['repassword'];

} else

exit("برخی از فیلد ها مقدار دهی نشده ");

if($password != $repassword) 

exit("کلمه عبور با تکرار آن مشابه نیست");

?>

<div dir="rtl" style="text-align:left;">

<?php

echo("username=". $text1."<br>");

echo("password=". $password."<br>");

?>

</div>

</body>

</html>

