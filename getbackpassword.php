<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/getback-password.css">
    <script src="http://www.jq22.com/jquery/jquery-2.1.1.js"></script>
    <script src="./js/send_email.ajax.js"></script>
</head> 
<body>
	<header>
		<nav>
			<div class="logo"><a href="mainpage.php"><img src="image/logo.png"></a></div>
			<ul>
				<li><a href="pickup.php">&nbsp;&nbsp;&nbsp;发布</a></li>
				<li><a href="foundthing.php">寻物启事</a></li>
			</ul>
			<div class="login-text">
			<p><a href="login.php">登录</a > | <a href="register.php">注册</a></p>
		    </div>
			<div class="search-box">
				<div class="search-logo"><a href="#"><img src="image/search.png"></a></div>
			    <input type="text" name="search" placeholder="    输入特征搜索">
			</div>
			
		</nav>
	</header>
	<input type="hidden" id="filename" value="sendEmailVerifyForget">
	<form action = "./doFile/doGetBackPwd.php"  method="post">
	<div class="content">
		<section class="main-regin">
			 <div class="tianchong1"></div>
              
             <div class="main-style">

			 <div class="getback-title-box">
			 	<h2 class="getback-title">找回密码</h2>
			 </div>

			<div class="email-box">
				<div class="email">邮箱:</div>
				<input class="email-input" style="width:180px;height:30px;" id="email" " type="text" name="email" />
				<div class="email-proving-button-box">
					<a href="javascript:send_email()" class="email-proving-button formBtn" class="proving-button" >发送验证码</a>
				</div>
			</div>

			<div class="email-proving-code-box">
				<span class="email-proving-code">邮箱验证码:</span>
				<input class="email-proving-code-input" style="width:180px;height:30px;"  type="text" name ="emailVerify" />
			</div>

			 <div class="xinpassword-box">
				<span class="xinpassword">新密码:</span>
				<input class="xinpassword-input" style="width:180px;height:30px;"  type="password" name="newPwd" />
			</div>
            
            <div class="sure-password-box">
				<div class="sure-password">确认新密码:</div>
				<input class="sure-password-input" style="width:180px;height:30px;"  type="password" name="surePwd" />
			</div>

			<div class="change-password">
				 <input  class="change-password-button" type="submit" value="确认提交">
			</div>
            
           </div> 

		</section>
	</div>
	</form>
	<footer>
		
	</footer>
</body>