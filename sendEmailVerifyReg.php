
<?php
//注册发送验证码
require_once 'include.php';
require_once './lib/sendEmail.php';

$chars = bulidRandomString(1, 6);
$_SESSION['verifymail'] = $chars;
$content = "亲爱的".$_POST['email']."<br>欢迎您注册失物招领网！这是一封来自失物招领网的验证码，请尽快输入下面的验证码验证您的邮箱地址：<span style='color:red;'>".$_SESSION['verifymail']."</span>如果您没有在失物招领网注册，请忽略此邮件。这可能是其他人不小心输错了邮箱。";
// echo $content;die;
sendmail($_POST['email'],$content);
// echo $_SESSION['verifymail'];
// echo '你的邮箱是:'.$_POST['email'];