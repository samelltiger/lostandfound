<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/search.css">
    <link rel="stylesheet" href="./css/mainpage.css">
</head>
<body>






	<header>
		<nav>
			<div class="logo"><a href="mainpage.php"><img src="image\logo.png"></a></div>
			<ul>
				<li><a href="pickup.php">&nbsp;&nbsp;&nbsp;拾物</a></li>
				<li><a href="foundthing.php">寻物启事</a></li>
			</ul>
			<div class="login-text">
			<?php

					 require_once './include.php';
					 error_reporting(0); 
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
		
		</nav>
	</header>
   <div class="main-1">
   	<?php  
   
    $link=connect();
     //使用GBK中文编码;  
      
    if($_GET['key']) {  
         $key = $_GET['key'];
        $sql = "SELECT * FROM lost_found WHERE content LIKE '%$key%'";  
        // echo $sql;  
        $query = mysqli_query($link,$sql);
       
        $flag = 0;
                        
        while( $r=mysqli_fetch_array($query)) {

        		$uid = $r[uid];

?>
          <div class="search-box2">
	  	  <span class="sort"><?php echo "$r[title]"?></span>
	  	  <span class="person">联系人<span>
	  	  	 <span class="person">
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
	  	  	 ?><span>
	  	  </span></span>
	  	  <span class="contact">联系方式：<span><?php echo "$r[phone_num]"?></span></span><br>
	  	  <span class="title"><?php echo "$r[content]"?></span>
	    </div>

 <?php
          
            $flag++;
             
            // echo "$r[title]"."<br>"; 
            // echo "$r[img_src]"."<br>";

       
    }  
    if ($flag==0) {
      
      echo "<script>alert('未查询到相关信息');location='./mainpage.php'</script>";
    }
          } 

      
      
?>  
<!-- 	<div class="content">
	  <div class="search-box1"></div>
	  <a href="" class="chaolianjie">
	     <div class="search-box2">
	  	  <span class="sort">校园卡</span>
	  	  <span class="person">联系人<span>
	  	  </span></span>
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

    </div> -->
   </div>
	<footer>
		
	</footer>
</body>