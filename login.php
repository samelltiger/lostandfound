<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
	<header>
		<nav>
			<div class="logo"><a href="mainpage.php"><img src="image\logo.png"></a></div>
			<ul>
				<li><a href="pickup.php">拾物</a></li>
				<li><a href="foundthing.php">寻物启事</a></li>
			</ul>
			<div class="login-text">
			<p><a href="login.php">登录</a > | <a href="register.php">注册</a></p>
		    </div>
			<div class="search-box">
				<div class="search-logo"><a href="#"><img src="image\search.png"></a></div>
			    <input type="text" name="search" placeholder="    输入特征搜索">
			</div>
			
		</nav>
	</header>

	<div class="content">
	<section class="black-section">
		<div class="register-left">	
			<div class="phone-image">
				 <img src="image\电脑手机.png" alt="">
			</div>
		</div>
		<form method="post" action="./doFile/dologin.php">
		<div class="register-right">
			<div class="register-titel-box">
				<h1 class="register-titel">登录</h1>
			</div>
			<div class="register-email">
				<div class="email-text">账号:</div>
				<input class="email-box" style="width:300px;height:40px;" " type="text" name="username"   />
			</div>
			<div class="register-password">
				<div class="register-mima">
				<div class="password-text">密码:</div>
				<input class="password-box" style="width:300px;height:40px;" " type="password" name="password"  />
				<span class="forget-password"><a href="getbackpassword.php" class="forget-password-text">忘记密码?</a></span>
			</div>
			<div class="register-proving">
				<div class="register-proving">
				<div class="proving-text">验证码:</div>

				<input class="proving-box" style="width:150px;height:40px;" " type="text" name="verify" placeholder="    请输入验证码" />

				<div class="proving-image" >
				<img src = "doFile/getVerify.php" onclick="javascript:this.src=this.src+'?time='+Math.random()";>	
			
				</div>
			</div>
			<div class="button-box">
				<a href="./register.php" class="register-button">注册</a>

				<input class="login-button" type="submit" value = "登录" />
			</div>
		
		
		</div>
	</form>
	</section>
    </div>
	<footer>
		
	</footer>
</body>