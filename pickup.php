<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/pickup.css">
</head>
<body>
	<header>
		<nav>
			<div class="logo"><a href="mainpage.php"><img src="image/logo.png"></a></div>
			<ul>
				<li><a href="pickup.php">拾物</a></li>
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
				<div class="search-logo"><a href="#"><img src="image/search.png"></a></div>
			    <input type="text" name="search" placeholder="    输入特征搜索">
			</div>
			
		</nav>
	</header>
	<form action="./doFile/dolostfound.php" method="post" enctype="multipart/form-data">
     <div class="content">
		<section class="main-regin">
			<div class="left-regin">
				<div class="image-border">
					<div class="image">
				       <img src="image/lostandfound.png" alt="">
				    </div>
				</div>
			</div>

			<div class="right-regin">
				<div class="sort">
					<div class="sort-title">类型：</div>
					   <div class="select-style">
					      <select name ="type" class="select">
					    	<option value="0">手机</option>
					    	<option value="1">钱包</option>
					    	<option value="2">卡片</option>
					    	<option value="3">文件</option>
					    	<option value="4">文具</option>
					    	<option value="5">眼镜</option>
					    	<option value="6">证件</option>
					    	<option value="7">钥匙</option>
					    	<option value="8">宠物</option>
					        <option value="9">手包</option>
					        <option value="10">其他</option>
					     </select>
					   </div>
				</div>

				<div class="title-box">
			        <span class="title-text">标题：</span>
				    <input class="title-text-input" style="width:252px;height:30px;" " type="text" name="title"/>
                </div>

                <div class="updata-image">
                	<span class="updata-image-title">上传图片:</span>
                	<a href="javascript:;" class="file">选择图片<input type="file" name="img_src" id=""></a>
                </div>

                <div class="item-description-box">
                	<span class="item-description-title">物品描述:</span>
                	<textarea class="long-text"	 name="content" id="" cols="32" rows="3"></textarea>
                </div>

                <div class="contact-way-box">
                	<div class="contact-way">联系方式(至少填一种):</div>
                	   <div class="phone">
                		  <span class="phone-title">手机:</span>
                		  <input class="phone-title-box" style="width:150px;height:30px;" " type="text" name="phone_num"/>
                	   </div>
                	<div class="QQ">
                		<span class="QQ-title">QQ:</span>
                		<input class="QQ-title-box" style="width:150px;height:30px;" " type="text" name="qq"/>
                	</div>
                	<div>
                     	<div class="wechat">
                		<span class="wechat-title">微信:</span>
                		<input class="wechat-title-box" style="width:150px;height:30px;" " type="text" name="wechat"/>
                	  </div>
                	</div>

                	<div class="updata">
				       <input type="submit" name="提交" class="updata-button" >
			       </div>
                </div>
		</section>
	</div>
	</form>
	<footer>
		
	</footer>
</body>