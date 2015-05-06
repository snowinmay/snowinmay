<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><{$title}></title>
	<style type="text/css">
		#loginform{
			width: 320px; 
			margin: 50px auto 20px; 
			padding: 24px 24px 24px 14px; 
			overflow: hidden; 
			font-size: 14px; 
			color: #999; 
			background: #eee;
			border: 1px solid #ccc;
			border-radius: 3px;
			box-shadow: 0 1px 0 #FFFFFF, 0 2px 0 rgba(0, 0, 0, 0.35), 0 3px 0 #FFFFFF, 0 4px 0 rgba(0, 0, 0, 0.35),0 5px 0 #FFFFFF, 0 6px 0 rgba(0, 0, 0, 0.35),0 4px 10px -1px rgba(200, 200, 200, 0.7);
	 	}
		.pinfo{ width: 100%; padding: 5px; font-size: 24px; border: 1px solid #ccc; border-radius: 3px;}
		.pinfo:focus,.pinfo:focus{ border: 1px solid #999; }
		#submit{ 
			float: right; 
			padding: 5px 8px; 
			border: 1px solid; 
			border-radius: 3px; 
			border-color: #21759B #21759B #1E6A8D; 
			background: #2a95c5;
			background: -moz-linear-gradient(top, #2A95C5, #21759B);
			background: -webkit-linear-gradient(top, #2A95C5, #21759B); 
			background: -o-linear-gradient(top, #2A95C5, #21759B);  
			color: #fff; 
			cursor: pointer; 
			box-shadow: 0 1px 0 rgba(120, 200, 230, 0.5) inset;
		}
		.remembermenot{
			float:left;
			margin: 5px 0;
		}
		#rememberme{
			position: relative;
			top: 2px;
		}
		.infomore{
			width: 320px; 
			margin: 20px auto; 			
    		font-size: 14px;
		}
		.infomore a{
			color: #21759b;
		}
	</style>
</head>
<body> 
	<div>
		<form action="../admin/loginController.php" id="loginform" method="post">
			<p>登录网站管理后台</p>
			<p><input type="text" id="username" class="pinfo" name="username"></p>
			<p><input type="password" id="password" class="pinfo" name="password"></p>
			<p><button id="submit">登录</button></p>
		</form>
	</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</body>
</html>