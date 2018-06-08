<!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<title></title> 
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/fount-thing.css">
</head>
<body>
	<header>
		<nav>
			<div class="logo"><a href="mainpage.php"><img src="image\logo.png"></a></div>
			<ul> 
				<li class="li2"><a href="pickup.php">&nbsp;&nbsp;&nbsp;发布</a></li>
				<li class="li1 li2"><a href="foundthing.php">寻物启事</a></li>
			</ul>
			<div class="login-text">
			<?php
					session_start();
					header('Content-type:text/html;charset=utf-8');    
					if(isset($_SESSION['username']) ){
				?>
				<p>
					<a href="login.php"> 您好！<?php echo $_SESSION['username']; ?>,欢迎回来！</a >
					<a href='./doFile/logout.php'>注销</a></p>

				<?php
					}  else {
				?>
				<p><a href="login.php">登录</a > | <a href="register.php">注册</a></p>
				<?php
					}
				?>
		    </div>
			<div class="search-box">
				<div class="search-logo"><a href="#"><img src="image\search.png"></a></div>
			    <input type="text" name="search" placeholder="    输入特征搜索">
			</div>
		</nav>
	</header>

	<div class="content">
		   
			 <div class="tianchong1"></div>
			<section  class="menu">
			<div id="add" class="menu-total">
			<ul class="menu-ul">
			<li class="menu-li-1"><a class="menu-a" href="demo.php?type=0" target="_blank" >手机</a></li>  
			<li class="menu-li"><a class="menu-a" href="demo.php?id=purse&type = 1">钱包</a></li>
			<li class="menu-li"><a class="menu-a" href="demo.php?id=cards">卡片</a></li>
			<li class="menu-li"><a class="menu-a" href="demo.php?id=file">文件</a></li>
			<li class="menu-li"><a class="menu-a" href="demo.php?id=wenju">文具</a></li>
			<li class="menu-li"><a class="menu-a" href="demo.php?id=glass">眼镜</a></li>
			<li class="menu-li"><a class="menu-a" href="demo.php?id=papers">证件</a></li>
			<li class="menu-li"><a class="menu-a" href="demo.php?id=keys">钥匙</a></li>
			<li class="menu-li"><a class="menu-a" href="demo.php?id=pet">宠物</a></li>
			<li class="menu-li"><a class="menu-a" href="demo.php?id=handbag">手包</a></li>
			<li class="menu-li-2"><a class="menu-a" href="demo.php?id=others">其他</a></li>
			<li class="menu-li-2"><a class="menu-a-1" href="pickup.php">发布启事</a></li>
			</ul>
			</div>

			</section>

	<section class="main-regin">
		<div class="text-box">
			<a href="#"><div class="text1">本人丢了一只猪，请看到的同志同志我，我的名字叫雷锋个，啦啦啦啦</div></a>
		</div>
		<div class="text-box">
			<a href="#"><div class="text2">本人丢了一只猪，请看到的同志同志我，我的名字叫雷锋个，啦啦啦啦</div></a>
		</div>
		<div class="text-box">
			<a href="#"><div class="text3">本人丢了一只猪，请看到的同志同志我，我的名字叫雷锋个，啦啦啦啦</div></a>
		</div>
		<div class="text-box">
			<a href="#"><div class="text4">本人丢了一只猪，请看到的同志同志我，我的名字叫雷锋个，啦啦啦啦</div></a>
		</div>
		<div class="text-box">
			<a href="#"><div class="text5">本人丢了一只猪，请看到的同志同志我，我的名字叫雷锋个，啦啦啦啦</div></a>
		</div>
		<div class="text-box">
			<a href="#"><div class="text6">本人丢了一只猪，请看到的同志同志我，我的名字叫雷锋个，啦啦啦啦</div></a>
		</div>
		<div class="text-box">
			<a href="#"><div class="text7">本人丢了一只猪，请看到的同志同志我，我的名字叫雷锋个，啦啦啦啦</div></a>
		</div>
	</section>
    </div>

	<footer>
		
	</footer>
</body>