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
				<li><a href="pickup.php">&nbsp;&nbsp;&nbsp;发布</a></li>
				<li><a href="foundthing.php">寻物启事</a></li>
			</ul>
			<div class="login-text">
			<p><a href="login.php">登录</a > | <a href="register.php">注册</a></p>
		    </div>
					<div class="search-box">
				<form action="./doFile/dosearch.php" method="get">  
			    
			    <input type="text" name="key" placeholder=" 输入特征搜索"> 
			    <input type="submit" name="sub" value="搜索" /> 
			    </form>  

			<!-- <div class="search-logo"><a href="#"><img src="image\search.png"></a></div> -->
			
			
			</div>
			
		</nav>
	</header>

	<div class="content">
	<section class="black-section">
		<div class="register-left">	
			<div class="phone-image">
				<div class="image-box1"><img src="image\电脑手机.png" alt=""> </div> 
			</div>
		</div>

		<form method="post" action="./doFile/dologin.php">
		<div class="register-right">
			 <div class="tianchong1"></div>
		  <div class="main-style">	
			<div class="register-titel-box">
				<h2 class="register-titel">登录</h2>
			</div>
			<div class="register-email">
				<span class="email-text">账号:</span>
				<input class="email-box" style="width:200px;height:30px;" " type="text" name="username"   />
			</div>
			<div class="register-password">
				<div class="register-mima">
				   <span class="password-text">密码:</span>
				   <span class="forget-password"><a href="getbackpassword.php" class="forget-password-text">忘记密码</a></span>
				   <input class="password-box" style="width:160px;height:30px;" " type="password" name=" password"  />
				</div>
			</div>	
			
				<div class="register-proving">
				<span class="proving-text">验证码:</span>


				<input class="proving-box" style="width:100px;height:32px;" " type="text" name="verify" placeholder="" />


				<div class="proving-image" >
				<img src = "doFile/getVerify.php" onclick="javascript:this.src=this.src+'?time='+Math.random()";>	
			    </div>
			</div>
			<div class="button-box">
				<a href="./register.php" class="register-button">注册</a>
				<input class="login-button" type="submit" value = "登录" />
			</div>
		 </div>
		
		</div>
	</form>
	</section>
    </div>
	<footer>
		
	</footer>
</body>