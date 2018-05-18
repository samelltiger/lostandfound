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
				<li class="li1"><a href="pickup.php">&nbsp;&nbsp;&nbsp;拾物</a></li>
				<li><a href="foundthing.php">寻物启事</a></li>
			</ul>
			<div class="login-text">
			<p><a href="">登录</a > | <a href="">注册</a></p>
		    </div>
			<div class="search-box">
				<div class="search-logo"><a href="#"><img src="image/search.png"></a></div>
			    <input type="text" name="search" placeholder="    输入特征搜索">
			</div>
			
		</nav>
	</header>
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
			  <div class="border-1">	
				<div class="sort">
					<div class="sort-title">类型：</div>
					   <div class="select-style">
					      <select name ="sort" class="select">
					    	<option value="1">手机</option>
					    	<option value="2">钱包</option>
					    	<option value="3">卡片</option>
					    	<option value="4">文件</option>
					    	<option value="5">文具</option>
					    	<option value="6">眼镜</option>
					    	<option value="7">证件</option>
					    	<option value="8">钥匙</option>
					    	<option value="9">宠物</option>
					        <option value="10">手包</option>
					        <option value="11">其他</option>
					     </select>
					   </div>
				</div>

				<div class="title-box">
			        <span class="title-text">标题：</span>
				    <input class="title-text-input" style="width:252px;height:30px;" " type="text" name=""/>
                </div>

                <div class="updata-image">
                	<span class="updata-image-title">上传图片:</span>
                	<a href="javascript:;" class="file">选择图片<input type="file" name="" id=""></a>
                </div>

                <div class="item-description-box">
                	<span class="item-description-title">物品描述:</span>
                	<textarea class="long-text"	 name="" id="" cols="32" rows="3"></textarea>
                </div>

                <div class="contact-way-box">
                	<div class="contact-way">&nbsp;&nbsp;联系方式(至少填一种):</div>
                	   <div class="phone">
                		  <span class="phone-title">手机:</span>
                		  <input class="phone-title-box" style="width:150px;height:30px;" " type="text" name=""/>
                	   </div>
                	<div class="QQ">
                		<span class="QQ-title">QQ:</span>
                		<input class="QQ-title-box" style="width:150px;height:30px;" " type="text" name=""/>
                	</div>
                	<div>
                     	<div class="wechat">
                		<span class="wechat-title">微信:</span>
                		<input class="wechat-title-box" style="width:150px;height:30px;" " type="text" name=""/>
                	  </div>
                	</div>

                	<div class="updata">
				       <input type="submit" name="提交" class="updata-button" >
			       </div>
                </div>
               </div> 
		</section>
	</div>

	<footer>
		
	</footer>
</body>