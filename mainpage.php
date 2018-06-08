
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/mainpage.css">
	<script type="text/javascript" src="/js/mainpage.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/zzsc-demo.css">
</head>
<body>
	<header>
		<nav>
			<div class="logo"><a href="mainpage.php"><img src="image\logo.png"></a></div>
			<ul>
				<li class="title-li"><a href="pickup.php">&nbsp;&nbsp;&nbsp;拾物</a></li>
				<li class="title-li"><a href="foundthing.php">寻物启事</a></li>
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
				<form action="./search.php" method="get">  
			    
			    <input type="text" name="key" placeholder=" 输入特征搜索"> 
			    <input type="submit" name="sub" value="搜索" /> 
			    </form>  

			<!-- <div class="search-logo"><a href="#"><img src="image\search.png"></a></div> -->
			
			
			</div>
			
			</nav>
			</header>

			<div class="main-1">
			   <div class="main-2">
			   	   <div class="tianchong1"></div>
			<section  class="menu">
			<div id="add" class="menu-total">
			<ul class="menu-ul">
			<li class="menu-li-1"><a class="menu-a" href="mainpage.php?type=0" target="_self" >手机</a></li>  
			<li class="menu-li"><a class="menu-a" href="mainpage.php?type=1" target="_self">钱包</a></li>
			<li class="menu-li"><a class="menu-a" href="mainpage.php?type=2" target="_self">卡片</a></li>
			<li class="menu-li"><a class="menu-a" href="mainpage.php?type=3" target="_self">文件</a></li>
			<li class="menu-li"><a class="menu-a" href="mainpage.php?type=4" target="_self">文具</a></li>
			<li class="menu-li"><a class="menu-a" href="mainpage.php?type=5" target="_self">眼镜</a></li>
			<li class="menu-li"><a class="menu-a" href="mainpage.php?type=6" target="_self">证件</a></li>
			<li class="menu-li"><a class="menu-a" href="mainpage.php?type=7" target="_self">钥匙</a></li>
			<li class="menu-li"><a class="menu-a" href="mainpage.php?type=8" target="_self">宠物</a></li>
			<li class="menu-li"><a class="menu-a" href="mainpage.php?type=9" target="_self">手包</a></li>
			<li class="menu-li-2"><a class="menu-a" href="mainpage.php?type=10" target="_self">其他</a></li>
			</ul>
			</div>
<!-- 			</section>

			<section class="section2">
			<div class="big-box1">
			<div class="box1"><img src="image\10.png" alt=""></div>
			<div class="box2"><img src="image\2.png" alt=""></div>
			<div class="box4"><img src="image\3.png" alt=""></div>

			</div>
			<div class="big-box2">
			<div class="box3"><img src="image\4.png" alt=""></div>  
			<div class="box5"><img src="image\5.png" alt=""></div>
			</div>
			<div class="big-box3">
			<div class="box6"><img src="image\6.png" alt=""></div>
			</div>
			<div class="big-box4">
			<div class="box7"><img src="image\12.png" alt=""></div>
			<div class="box8"><img src="image\9.png" alt=""></div>
			<div class="box9"><img src="image\11.png" alt=""></div
			</div>	
			</section> -->

			<section class="section3">

		
			<div class="down-image"><img src="image\down.png" alt=""></div>
			</section>

			<section class="section4">
			
				<?php

					if (isset($_GET['type'])) {

					$link = connect();

					$type = $_GET['type'];

					$sql_select = "select * from lost_found where  type=? ";

					$stmt = mysqli_prepare($link,$sql_select);

					mysqli_stmt_bind_param($stmt,'s',$type);

					mysqli_execute($stmt);

					$result = mysqli_stmt_get_result($stmt);

					$row = mysqli_fetch_all($result,MYSQL_ASSOC);

					
					    
						
					}else{

					$link = connect();

					$sql_select = "select * from lost_found";

					mysqli_query($link,$sql_select);

					$result = mysqli_query($link,$sql_select);

					$row = mysqli_fetch_all($result,MYSQL_ASSOC);
	 
					}

					if (isset($row)) {
						$count = count($row);
						// echo $count;

						$arr = reshape($row,5);
						// var_dump($arr);

							for ($x=0; $x < $count/5; $x++) { 
								
								$name_list[$x] = array_column($arr[$x], 'img_src');
								for ($y=0; $y <5&&isset($name_list[$x][$y]) ; $y++) 
								{ 
				
?>


<div class="section4-box1" >
				<a href="detail.php?imgsrc=<?php echo $name_list[$x][$y];  ?>"><img src="<?php echo './doFile/'.$name_list[$x][$y];  ?>"></a>
			</div>

<?php
}
?>


<?php
	echo '<br>';
								
			}
?>



<?php

}

?>
			
	

						

	
			
			</section>
			   </div>
			</div>

			<footer>

			</footer>
			</body>