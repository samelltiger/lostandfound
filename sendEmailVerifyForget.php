
<?php
//找回密码发送验证码
require_once 'include.php';
require_once './lib/sendEmail.php';
$email = $_POST['email'];
// $link = mysqli_connect('localhost','root','','lostfound');
$link = connect();
$sql_select = "select * from user where  email=? ";
$stmt = mysqli_prepare($link,$sql_select);
mysqli_stmt_bind_param($stmt,'s',$email);
mysqli_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
if ($row) {
	$chars =bulidRandomString(1, 6);;
	$_SESSION['verifyforget'] = $chars;

	$content = "亲爱的".$_POST['email']."<br>您用于找回密码的验证码是：<span style='color:red;'>".$_SESSION['verifyforget']."</span>为了防止验证码泄露,请在60s内输入严验证码,来确认你的身份。";
// echo $content;die;
sendmail($_POST['email'],$content);
// echo $_SESSION['verifymail'];
// echo '你的邮箱是:'.$_POST['email'];
}else{
	echo "你输入的邮箱不存在!";
}
