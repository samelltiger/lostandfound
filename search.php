<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/search.css">
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
   <div class="main-1">
	<div class="content">
	  <div class="search-box1"></div>
	  <a href="" class="chaolianjie">
	     <div class="search-box2">
	  	  <span class="sort">校园卡</span>
	  	  <span class="person">联系人<span>刘大炮</span></span>
	  	  <span class="contact">联系方式：<span>18711148211</span></span><br>
	  	  <span class="title">我在芷兰食堂捡了一张教育学院学生的校园卡。</span>
	    </div>
	  </a>
	  <a href="" class="chaolianjie">
	     <div class="search-box2">
	  	  <span class="sort">校园卡</span>
	  	  <span class="person">联系人<span>刘大炮</span></span>
	  	  <span class="contact">联系方式：<span>18711148211</span></span><br>
	  	  <span class="title">我在芷兰食堂捡了一张教育学院学生的校园卡。</span>
	    </div>
	  </a>
	  <a href="" class="chaolianjie">
	     <div class="search-box2">
	  	  <span class="sort">校园卡</span>
	  	  <span class="person">联系人<span>刘大炮</span></span>
	  	  <span class="contact">联系方式：<span>18711148211</span></span><br>
	  	  <span class="title">我在芷兰食堂捡了一张教育学院学生的校园卡。</span>
	    </div>
	  </a>
	  <a href="" class="chaolianjie">
	     <div class="search-box2">
	  	  <span class="sort">校园卡</span>
	  	  <span class="person">联系人<span>刘大炮</span></span>
	  	  <span class="contact">联系方式：<span>18711148211</span></span><br>
	  	  <span class="title">我在芷兰食堂捡了一张教育学院学生的校园卡。</span>
	    </div>
	  </a>
	  <a href="" class="chaolianjie">
	     <div class="search-box2">
	  	  <span class="sort">校园卡</span>
	  	  <span class="person">联系人<span>刘大炮</span></span>
	  	  <span class="contact">联系方式：<span>18711148211</span></span><br>
	  	  <span class="title">我在芷兰食堂捡了一张教育学院学生的校园卡。</span>
	    </div>
	  </a>

    </div>
   </div>
	<footer>
		
	</footer>
</body>