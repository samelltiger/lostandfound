<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */
//Import PHPMailer classes into the global namespace
// use lib/PHPMailer\PHPMailer\PHPMailer;
// require_once '../vendor/autoload.php';

$base_dir = dirname(__FILE__);
require_once $base_dir.'/PHPMailer/src/Exception.php';
require_once $base_dir.'/PHPMailer/src/PHPMailer.php';
require_once $base_dir.'/PHPMailer/src/SMTP.php';

function sendmail($to_email,$content){

$send_mail = "1393994876@qq.com";

 //发件人密码（需要去网页邮箱设置里获取客户端授权密码）
 $send_password = "kftwnzdzgxmphhii";

 //发送内容
 // $content = "你好";

 //收件人
 // $to_email = array(
 //         "192399986@qq.com",
 //         "1366971213@qq.com"
 // );

 // 实例化phpmailer
 $mail = new PHPMailer();

 // 设置发送邮件的协议：SMTP
 $mail->IsSMTP();

 // 发送邮件的服务器（与发件人邮箱对应）
 $mail->Host = "smtp.qq.com";

 // 打开SMTP
 $mail->SMTPAuth = true;

 // SMTP账户
 $mail->Username = $send_mail;
 $mail->Timeout  = 40;

 //是否使用HTML格式
 $mail->IsHTML(true);

 // SMTP密码
 $mail->Password = $send_password;
 $mail->From = $send_mail;

 $mail->FromName = "wlt";
 if (is_array($to_email)) {
     foreach ($to_email as $v) {
         $mail->AddAddress("$v", "");
     }
 } else {
    $mail->AddAddress("$to_email", "");
 }

 //设置字符集编码
 $mail->CharSet = "UTF-8";

 //邮件内容（可以是HTML邮件）
 $mail->Body = $content;
 $error_info = '';
 if (!$mail->Send()) {
     $error_info = $mail->ErrorInfo;
     // echo $error_info;die;
     $email_status = false;
     echo "发送失败";
 } else {
     $email_status = true;
     echo '发送成功';
   }




}

