<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/pickup.css?2">
</head>
<body>
	<header>
		<nav>
			<div class="logo"><a href="#"><img src="image/logo.png"></a></div>
			<ul>
				<li><a href="#">拾物</a></li>
				<li><a href="#">寻物启事</a></li>
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
				 <div class="item-descripption">
				 	 <div class="item-title">物品描述：</div>
				 	 <!-- <input class="item-input" style="width:505px;height:60px;" " type="text" name="emali" value="    " /> -->
				 	 <textarea name=""  class="item-input" style="width:445px;height:60px;" id="" cols="30" rows="10"></textarea>
				 </div>
                 <div class="contact">
                 	   <div class="contact-person">
                 	   	  <div>联系人：</div>
                          <input class="contact-person-input" style="width:180px;height:60px;" " type="text" name="emali" value="" />
                 	   </div>
                 	   <div class="contact-way">
                 	   	 <div>联系方式：</div>
                          <input class="contact-way-input" style="width:180px;height:60px;" " type="text" name="emali" value="" />
                 	   </div>
                 </div>

                 <div class="main-item">
                 	   <div class="item-sort">
                 	   	  <div>物品类型：</div>
                          <input class="item-sort-input" style="width:180px;height:60px;" " type="text" name="emali" value="" />
                 	   </div>
                 	   <div class="pickup-time">
                 	   	 <div>拾取时间：</div>
                          <input class="pickup-time-input" style="width:180px;height:60px;" " type="text" name="emali" value="" />
                 	   </div>
                 </div>

                 <div class="updata-image">
                 	   <div class="updata-image-title">
                 	   	  <div class="updata-image-text">上传图片：</div>
                          <!-- <input class="updata-image-title-input" style="width:200px;height:60px;" " type="file" name="emali" value="    " /> -->
                          <a href="javascript:;" class="file">选择图片<input type="file" name="" id=""></a>
                          
                 	   </div>
                 	   
                 </div>

                 <div class="updata">
				 <button class="updata-button" type="button">提交</button>
			</div>
			</div>
		</section>
	</div>

	<footer>
		
	</footer>
</body>