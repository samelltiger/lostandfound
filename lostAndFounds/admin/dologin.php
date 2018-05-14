<?php
require_once '../include.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$verify =$_POST['verify'];
$verify1 = $_POST['verify'];
if ($verify == $verify1) {
	$sql = "select * from user where uname ='{$usernamer}' and pwd ='{$password}'";
	# code...
}else{
	echo "<script>alert('验证码错误')</script>";
	echo "<script>window.localtion = 'login.php';</script>";
}