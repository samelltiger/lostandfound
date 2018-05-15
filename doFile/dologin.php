<?php
require_once '../include.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$verify =isset($_POST['verify'])? $_POST['verify']:null;
$link = mysqli_connect('localhost','root','','lostfound');
mysqli_set_charset($link,'utf8');


if($username==''){
	echo "<script>alert('请输入用户名');location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
	exit;
}
if($password==''){
	echo "<script>alert('请输入密码');location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
	exit;
}
if ($verify == $_SESSION['verify']) {
	echo"<script>alert('您的验证码错误,请重新输入');location='".$_SERVER['HTTP_REFERER']. "'</script>";
	exit;
}
$sql_select = "select * from user where  uname=? ";
// $sql_select = "select * from user where  uname=? and pwd=?";
// echo sprintf("select * from user where  uname='%s' and pwd='%s'",$username,$password);
$stmt = mysqli_prepare($link,$sql_select);
// var_dump($stmt);

//mysqli_stmt_bind_param($stmt,'ss',$username,$password);
mysqli_stmt_bind_param($stmt,'s',$username);
mysqli_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
// var_dump($result);
// var_dump($username);
// var_dump($password);
$row = mysqli_fetch_assoc($result);
// var_dump($row);

// echo "$password";
// echo "$username";
// echo "$row[pwd]";
// echo "$row[uname]";
if($row){

	if($password !=$row['pwd'] || $username !=$row['uname']){
		if ($username !=$row['uname']) {
			echo "<script>alert('账号错误，请重新输入');location='../login.php'</script>";exit;
		}
		if ($password !=$row['pwd']) {
			echo "<script>alert('密码错误，请重新输入');location='../login.php'</script>";exit;
		}

	}
	else{
		$_SESSION['username']=$row['uname'];
		$_SESSION['password']=$row['pwd'];
		echo "<script>alert('登录成功');location='../main.php'</script>";
	}

}else{
	echo "<script>alert('您输入的用户名不存在');location='../login.php'</script>";
	exit;
};
// $sql_select="select id,username,password from user where username= ?"; //从数据库查询信息
//  $stmt=mysqli_prepare($link,$sql_select);
//  mysqli_stmt_bind_param($stmt,'s',$name);
//  mysqli_stmt_execute($stmt);
//  $result=mysqli_stmt_get_result($stmt);
//  $row=mysqli_fetch_assoc($result);
