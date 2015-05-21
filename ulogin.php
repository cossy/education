<?php error_reporting(0);?> 
<html>
<head>
<title>登陆</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <!-- Bootstrap core CSS -->
    <link href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
		$gourl = $_SERVER['HTTP_REFERER'];
    ?>
</head>
<body>
<!-- 第一层-->
<div style="background:#00FFFF;height:30px">
      <div class="container" >
        <div style="float:left">
          <a class="navbar-brand" href="#" style="margin-top:-10px"><small>欢迎光临！  鹏博教育平台</small></a>
        </div>
        <div style="float:right">
          <a class="navbar-brand" href="#" style="margin-top:-10px"><small>常见问题</small></a>
        </div>
	<div style="float:right;">
         <a class="navbar-brand" href="#" style="margin-top:-10px"><small>|&nbsp;&nbsp;个人中心&nbsp;&nbsp;|</small></a> 
        </div>
<div style="float:right;margin-top:5px">
          <strong>欢迎登录</strong>
        </div>
      </div>
    </div>
<!--第二层-->
<div style="height:94px;margin-top:10px">
       <div style="height:94px;margin-left:70px;float:left">
	<img src="images/login_09.gif" width="252" height="94" alt="">
	</div>
    <div style="float:left;margin-top:20px;margin-left:160px;height:60px">
    <input type="text" id="search" placeholder="请输入搜索词" style="width:300px;height:35px">
<button type="button" class="btn btn-primary" style="margin-left:-5px;margin-top:-3px"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> 搜索</button>
  </div>
<div style="height:34px;float:left;margin-top:60px;margin-left:-370px">
<font size="2" color="blue">热门推荐：</font>
<ul class="list-inline" style="float:right" >
  <li style="margin-right:-5px">网络安全</li>
  <li style="margin-right:-5px">信息网络</li>
  <li style="margin-right:-5px">宽带服务</li>
</ul>
</div>

<div style="float:left;margin-left:50px;margin-top:-10px">
<img src="images/phone.png" width="300" height="120" alt="">
</div>
</div>
<!--第三层-->
<div style="background:#33CCFF;margin-top:20px;height:50px">
<div class="container-fluid">
	<?php
	session_start();
	$type=$_SESSION['type'];
	$url="/userinfo.php";
	if($type=="student"){
		$url="/s_userinfo.php";
	}
	?>
          <div class="navbar-header" style="margin-left:60px">
             <a class="navbar-brand" href="<?php echo $url?>">服务项目</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#"><font size="4">首页</font></a></li>
              <li><a href="#"><font size="4">资料库</font></a></li>
              <li><a href="/video_class.php"><font size="4">直播课堂</font></a></li>
              <li><a href="#"><font size="4">视频课</font></a></li>
	      <li><a href="#"><font size="4">名师推荐</font></a></li>
	      <li><a href="#"><font size="4">名师冲刺</font></a></li>
	      <li><a href="vclasses.php"><font size="4">虚拟班级</font></a></li>
	      <li><a href="level_judge.php"><font size="4">在线评测</font></a></li>
           
            </ul>
          </div>
        </div>
</div>
<!--demo结束-->
<div style="width:900px;height:500px;margin-left:200px;margin-top:30px;border:1px solid #DDA0DD" >
	<div style="width:900px">
	<strong><h3>用户登录<h3></strong>
	</div>
	<div style="float:left;margin-left:20px;margin-top:30px">
		<img src="images/login_left.png" width="450" height="300" alt="">
		</div>
<div class="container" style="width:350px;float:right;margin-right:40px">

      <form id="cossy_login" class="form-signin" method="post" action="cgi/login.php">
        <h2 class="form-signin-heading">登录</h2>
        <label class="sr-only">手机号</label>
        <input name="myname" class="form-control" placeholder="手机号/昵称" required autofocus>
        <label class="sr-only">密码</label>
        <input type="password" name="password" class="form-control" placeholder="密码" required>
        <div style="margin-top:10px">
          <label>
			 用户类型&nbsp;&nbsp;&nbsp;
			 </label>
            <input type="radio" name="usertype" value="teacher">老师
            <input type="radio" name="usertype" value="student">学生
        </div>
        <div>
			<a href="#">找回密码</a>
			</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="cossy_login.submit();">登录</button>
        <input type="hidden" name="yincang" value="<?php echo $gourl ?>">
      </form>
<div style="margin-top:10px">
快速登录</br></br>
<a href="#">qq</a>&nbsp;&nbsp;<a href="#">微博</a>
</div>
    </div> <!-- /container -->
    </div>
</body>
</html>
