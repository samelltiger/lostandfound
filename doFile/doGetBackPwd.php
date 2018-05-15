<?php

header("Content-type:text/html;charset=utf-8");
$link = mysqli_connect('localhost','root','','lostfound');
mysqli_set_charset($link,'utf8');
$newPwd = md5($_POST['newPwd']);
$surePwd =md5($_POST['surePwd']);
$emailVerify = $_POST['emailVerify'];
echo "$newPwd";
echo "$surePwd";echo "$emailVerify";