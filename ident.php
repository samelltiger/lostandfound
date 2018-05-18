<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/ident.css">
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
			<p><a href="login.php">登录</a > | <a href="register.php">注册</a></p>
		    </div>
			<div class="search-box">
				<div class="search-logo"><a href="#"><img src="image\search.png"></a></div>
			    <input type="text" name="search" placeholder="    输入特征搜索">
			</div>
			
		</nav>
	</header>
    <div class="main-regin1">
	    <div class="content">
            <div class="main-regin">
         	   <div class="center-box">
         		    <div class="tianchong1"></div>
         	    <div class="main-style">
         	         <div class="declare"><h2>用户认证</h2></div>
         	         <div class="declare-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;为保证本 网站服务的对象是正常在校大学生，我们需要您用学生信息进行认证。请您放心，我们承诺会保证用户信息的安全性。
         	         </div>
         	        <div class="student-image-box">
         	 	         <span class="student-image">学生证照片:</span>
         	 	         <a href="javascript:;" class="file">选择图片<input type="file" name="" id=""></a>
         	 	    </div>
         	 	    <div class="student-name-box">
         	             <span class="student-name">学生姓名:</span> 
				         <input class="student-name-input" style="width:100px;height:25px;" " type="text" name="username"   />
			        </div>
         	        <div>
         	             <div class="long-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;以下是我们能为您提供完整的服务所需要的信息，我们会自动匹配拾物者发布物品的失主信息，若匹配到您，我们会通过邮件的形式通知您。</div>
         	        <div class="s-card-box">
                         <span class="s-card">校园卡号:</span>
				         <input class="s-card-input" style="width:200px;height:25px;" " type="text" name="username"   />
			        </div>
			        <div class="s-card-box">
                         <span class="id-card">身份证号码:</span>
				         <input class="s-card-input" style="width:200px;height:25px;" " type="text" name="username"   />
			        </div>
			        <div class="s-card-box">
                         <span class="telephone">手机号码:</span>
				         <input class="s-card-input" style="width:200px;height:25px;" " type="text" name="username"   />
			        </div>
			             <div class="button-box">
				    <input class="sure-button" type="submit" value = "提交" />
			        </div>
			     </div>
			     
		        </div>
            </div>
	    </div>
	</div>
	<footer>
		
	</footer>
</body>