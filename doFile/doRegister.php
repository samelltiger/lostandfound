<?php
require_once '../include.php';

header("Content-type:text/html;charset=utf-8");
$link = mysqli_connect('localhost','root','','lostfound');
mysqli_set_charset($link,'utf8');
$username = $_POST['username'];
$password = md5($_POST['password']);
$surePwd =md5($_POST['surePwd']);
$school = $_POST['school'];
$emailAdress = $_POST['emailAdress'];
$emailVerify = $_POST['emailVerify'];
$verify = $_POST['verify'];
// $verifymail =$_POST['verifymail'];

// <?php
// session_start();
// header("Content-type:text/html;charset=utf-8");
// $link = mysqli_connect('localhost','root','','lostfound');
// mysqli_set_charset($link,'utf8'); //设定字符集
// $name=$_POST['name'];
// $pwd=$_POST['pwd'];
// $pwdconfirm=$_POST['pwdconfirm'];
// $yzm=$_POST['yzm'];
// $hadden=$_POST['hadden'];
// if($hadden=="hadden"){
if($username==''){

 echo"<script>alert('你的用户名不能为空，请重新输入');location='".$_SERVER['HTTP_REFERER']. "'</script>";
 exit;

}
if($password==''){

 echo"<script>alert('你的密码不能为空，请重新输入');location='".$_SERVER['HTTP_REFERER']. "'</script>";
 exit;

}
if($password != $surePwd){

 echo"<script>alert('你输入的两次密码不一致，请重新输入');location='".$_SERVER['HTTP_REFERER']. "'</script>";
 exit;

}
if ($emailAdress =='') {
	 echo"<script>alert('请输入正确的邮箱...');location='".$_SERVER['HTTP_REFERER']. "'</script>";
 		exit;
}

if($emailVerify!=$_SESSION['verifymail']){

 echo"<script>alert('你的邮箱验证码不正确，请重新输入');location='".$_SERVER['HTTP_REFERER']. "'</script>";
 exit;

}
if($verify!=$_SESSION['verify']){

 echo"<script>alert('你的验证码不正确，请重新输入');location='".$_SERVER['HTTP_REFERER']. "'</script>";
 exit;

}


$insert_sql="insert into user(uname,email,pwd,university_id) values(?,?,?,?)";
// var_dump([$username,$password]);die;
// echo sprintf("insert into user(uname,email,pwd,university_id) values(%s,%s,%s,%d)",$username,$emailAdress,$password,$school);
$stmt=mysqli_prepare($link,$insert_sql);

$stmt->bind_param('sssd',$username,$emailAdress,$password,$school);

// mysqli_stmt_bind_param($stmt,'ss',$username,$password);
// var_dump($stmt);die;
$result_insert=mysqli_stmt_execute($stmt);
// var_dump($result_insert);

if($result_insert){

 echo "<script>alert('您已注册成功，返回登录');location='../login.php'</script>";
 exit;

}else {
 echo "<script>alert('您输入的用户名已存在,请重新注册！';location='../register.php')</script>";
 exit;
}

