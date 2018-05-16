<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/register.css">
    <script src="http://www.jq22.com/jquery/jquery-2.1.1.js"></script>
    <script src="./js/send_email.ajax.js"></script>
</head>
<body>
	<header>
		<nav>
			<div class="logo"><a href="#"><img src="image/logo.png"></a></div>
			<ul>
				<li><a href="#">拾物</a></li>
				<li><a href="#">寻物启事</a></li>
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
	<input type="hidden" id="filename" value="sendEmailVerifyReg">
	<form method="post" action="./doFile/doRegister.php">
	<div class="content">
		<section class="main-regin">
			 <div class="register-title-box">
			 	<h1 class="register-title">注册</h1>
			 </div>

			 <div class="user-name-box">
				<div class="user-name">用户名:</div>
				<input class="user-name-input" style="width:300px;height:40px;" " type="text" name="username" />
			</div>

			 <div class="school-name-box">
				<div class="school-name">学校:</div>
				    <select name ="school">
      					<option value="1">湖南农业大学</option>
      					<option value="2" selected = "selected">湖南师范大学</option>
     					<option value="3">长沙理工大学</option>
      					<option value="4">中南大学</option>
    				</select>
				
			</div>

			<div class="password-box">
				<div class="password">密码:</div>
				<input class="password-input" style="width:300px;height:40px;" " type="password" name="password"/>
			</div>	

			<div class="password-sure-box">
				<div class="password-sure">确认密码:</div>
				<input class="password-sure-input" style="width:300px;height:40px;"  type="password" name="surePwd"/>
			</div>

			<div class="email-box">
				<div class="email">邮箱:</div>
				<input class="email-input" id='email' style="width:180px;height:40px;" " type="text" name="emailAdress"/>
				<div class="email-proving-button-box">
					<a href="javascript:send_email()" class="register-button formBtn"> 发送验证码</a>
				</div>
			</div>

			<div class="email-proving-code-box">
				<div class="email-proving-code">邮箱验证码:</div>
				<input class="email-proving-code-input" style="width:300px;height:40px;"  type="text" name="emailVerify"  />
			</div>

			<div class="proving-code-box">
				<div class="proving-code">验证码:</div>
				<input class="proving-code-input" style="width:180px;height:40px;" " type="text" name="verify" />
				<div class="proving-image">	
				<img src = "doFile/getVerify.php" onclick="javascript:this.src=this.src+'?time='+Math.random();">	
				</div>
			</div>

			<div class="register">
				 <input type="submit" name="注册" class="register-button" >
			</div>
		</section>
	</div>

	<footer>
		
	</footer>
</body>
<!-- <form action="reg.php" method="post" name="myform" onsubmit=" return checkinput();" >
 <div class="container">
 <div class="right">
 <h2>用户注册</h2>

 <p>用 户 名：<input type="text" name="name" id="name"></p>
 <p>密　　码: <input type="password" name="pwd" id="pwd"></p>
 <p>确认密码: <input type="password" name="pwdconfirm" id="pwdconfirm"></p>
 <p>验 证 码：<input type="text" name="yzm" id="yzm">
 <img src="yanzhengma.php" onClick="this.src='yanzhengma.php?nocache='+Math.random()" style="cursor:hand"></p>
 <p><button type="submit" value="注册" >立即注册</button></p>
 </div>
 </div>
 </form> -->