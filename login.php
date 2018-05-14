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
			<div class="logo"><a href="#"><img src="image\logo.png"></a></div>
			<ul>
				<li><a href="#">拾物</a></li>
				<li><a href="#">寻物启事</a></li>
			</ul>
			<div class="login-text">
			<p><a href="">登录</a > | <a href="">注册</a></p>
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
		<div class="register-right">
			<div class="register-titel-box">
				<h1 class="register-titel">登录</h1>
			</div>
			<div class="register-email">
				<div class="email-text">邮箱:</div>
				<input class="email-box" style="width:300px;height:40px;" " type="text" name="emali"  value="" />
			</div>
			<div class="register-password">
				<div class="register-mima">
				<div class="password-text">密码:</div>
				<input class="password-box" style="width:300px;height:40px;" " type="text" name="emali"  />
			</div>
			<div class="register-proving">
				<div class="register-proving">
				<div class="proving-text">验证码:</div>
				<input class="proving-box" style="width:150px;height:40px;" " type="text" name="emali" value="    请输入验证码" />
				<div class="proving-image" >
				<img src = "lostAndFounds/admin/getVerify.php">	
					<h2>验证图片</h2>
				</div>
			</div>
			<div class="button-box">	
				<button class="register-button" type="button">注册</button>
				<button class="login-button" type="button">登录</button>
			</div>
		</div>
	</section>
    </div>
	<footer>
		
	</footer>
</body>