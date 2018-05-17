<?php

require_once '../include.php';
header("Content-type:text/html;charset=utf-8");
// $link = mysqli_connect('localhost','root','','lostfound');
// mysqli_set_charset($link,'utf8');
$link = connect();
$newPwd = isset($_POST['newPwd']) ? md5($_POST['newPwd']):null;
$surePwd =isset($_POST['surePwd']) ? md5($_POST['surePwd']):null;
$emailVerify = isset($_POST['emailVerify']) ? $_POST['emailVerify']:null;
$email = isset($_POST['email']) ? $_POST['email'] :null;


if($emailVerify!=$_SESSION['verifyforget']){

 echo"<script>alert('你的邮箱验证码不正确，请重新输入');location='".$_SERVER['HTTP_REFERER']. "'</script>";
 exit;
}
if($newPwd != $surePwd){

 echo"<script>alert('你输入的两次密码不一致，请重新输入');location='".$_SERVER['HTTP_REFERER']. "'</script>";
 exit;

}
$sql_updata = "update user set pwd = ? where email =?";
$stmt = mysqli_prepare($link,$sql_updata);
// var_dump($stmt);

//mysqli_stmt_bind_param($stmt,'ss',$username,$password);
mysqli_stmt_bind_param($stmt,'ss',$newPwd,$email);
$result_updata=mysqli_stmt_execute($stmt);
// var_dump($result_insert);

if($result_updata){

 echo "<script>alert('密码修改成功，返回登录');location='../login.php'</script>";
 exit;

}else {
 echo "<script>alert('修改失败！';location='../getbackpassword.php')</script>";
 exit;
}
