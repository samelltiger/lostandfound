<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/detail.css">
</head>
<body>
	<header>
		<nav>
			<div class="logo"><a href="mainpage.php"><img src="image\logo.png"></a></div>
			<ul>
				<li class="shiwu"><a href="pickup.php">&nbsp;&nbsp;&nbsp;发布</a></li>
				<li class="shiwu"><a href="foundthing.php">寻物启事</a></li>
			</ul>
			<div class="login-text">
				<?php
				require_once './include.php';
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
			<section class="main-regin">
				<div class="left-regin">
					<div class="image-box">
						<?php
						
						
						$link = connect();

						$type = $_GET['type'];

						$sql_select = "select * from lost_found where  type=? ";

						$stmt = mysqli_prepare($link,$sql_select);

						mysqli_stmt_bind_param($stmt,'s',$type);

						mysqli_execute($stmt);

						$result = mysqli_stmt_get_result($stmt);

						$row = mysqli_fetch_array($result);

						$uid = $row['uid'];

						?>

						<img src="<?php
						echo './doFile/'.$row['img_src'];
						?>">
						
					</div>
				</div>
				<div class="right-regin">
					<div class="detail-title"><h2>&nbsp;&nbsp;DETAIL</h2></div>
					<div class="title">

						<?php 
						echo $row['title'];echo "<br>";
						echo $row['uid'];echo "<br>";
						?>

					</div>
					<div class="hr"></div>
					<div class="detail-text">

						<?php
						echo $row['content'];echo "<br>";
						?>

					</div>
					<div class="hr"></div>
					<div class="person">联系人: <span>
						<?php
						$sql_select = "select * from user where  
						uname in 
						(select type from lost_found where uid = ?) ";

						$stmt = mysqli_prepare($link,$sql_select);
						
						mysqli_stmt_bind_param($stmt,'d',$uid);

						mysqli_execute($stmt);
						
						$result = mysqli_stmt_get_result($stmt);
						
						$row = mysqli_fetch_array($result);

						echo $row['uname'];
						?> 
					</span></div>
					<div class="hr"></div>
					<div class="contact-way">联系方式: <span>
						<?php
						$type = $_GET['type'];
						$sql_select = "select * from lost_found where  type=? ";

						$stmt = mysqli_prepare($link,$sql_select);

						mysqli_stmt_bind_param($stmt,'s',$type);

						mysqli_execute($stmt);

						$result = mysqli_stmt_get_result($stmt);

						$row = mysqli_fetch_array($result);

						echo $row['phone_num'];

						?></span></div>
					</div>

				</section>
			</div>

		</nav>
	</header>
  <div class="main-1">
    <div class="content">
	    <section class="main-regin">
		    <div class="left-regin">
		    	<div class="image-box"><img src="image/5.png" alt=""></div>
		    </div>
		    <div class="right-regin">
		    	    <div class="detail-title"><h2>&nbsp;&nbsp;DETAIL</h2></div>
		    		<div class="title">捡到教育学院的一张校园卡</div>
		    		<div class="hr"></div>
		    		<div class="detail-text">本人捡到教育学院一个同学的校园卡，在图书馆。大姐姐了即可来得及领导就是离开家里空间而快乐交流交流空间而乌克兰金坷垃</div>
		    		<div class="hr"></div>
		    		<div class="person">联系人: <span>刘刚</span></div>
		    		<div class="hr"></div>
		    		<div class="contact-way">联系方式: <span>18711148241</span></div>
		    		<div class="hr"></div>
		    </div>



	    </section>
    </div>
  </div> 
	<footer>
		
	</footer>
</body>
