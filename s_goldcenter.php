<?php error_reporting(0);?> 
<!DOCTYPE HTML>
<html>
<head>
<title>金币中心</title>
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
    <LINK href="css/update8.css" type=text/css rel=stylesheet>
     <?php
   session_start();
   $ID=$_SESSION["ID"];
if(!$_SESSION["ID"]){
	echo "<script type='text/javascript'>alert('请先登录')</script>";
	echo "<script type='text/javascript'>window.location.href='/ulogin.php'</script>";
}
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
         <a class="navbar-brand" href="#" style="margin-top:-10px"><small>|&nbsp;&nbsp;&nbsp;&nbsp;个人中心&nbsp;&nbsp;&nbsp;&nbsp;|</small></a> 
        </div>
<div style="float:right;margin-top:7px" id="replace">
	<a class="navbar-brand" href="regist.html" style="margin-top:-17px"><small>注册&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</small></a>
	<a class="navbar-brand" href="login.php" style="margin-top:-17px"><small>登录</small></a>
         
        </div>
      </div>
    </div>
    <?php
    session_start();
    if($_SESSION["name"]){
		echo "<script type='text/javascript'>document.getElementById('replace').innerHTML='<strong>hi,".$_SESSION['name']."</strong>'</script>";
	}
    ?>
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
              <li><a href="home.php"><font size="4">首页</font></a></li>
              <li><a href="#"><font size="4">资料库</font></a></li>
              <li><a href="/video_class.php"><font size="4">直播课堂</font></a></li>
              <li><a href="#"><font size="4">视频课</font></a></li>
	      <li><a href="#"><font size="4">名师推荐</font></a></li>
	      <li><a href="#"><font size="4">名师冲刺</font></a></li>
	      <li><a href="vclasses.php"><font size="4">虚拟班级</font></a></li>
	      <li><a href="#"><font size="4">在线评测</font></a></li>
           
            </ul>
          </div>
        </div>
</div>
<!--demo结束-->
<div style="width:1000px;min-height:1500px;margin-left:150px;margin-top:30px;border:1px solid #DDA0DD" >
	<DIV class=pnav-cnt>
	<DIV class=pnav-box id=letter-a>
	<DIV class=box-title><A class="btn-fold " href="#"></A><A class="btn-unfold hidden" 
	href="#"></A><SPAN class=pnav-letter>基本信息</SPAN></DIV>
	<UL class="box-list hidden">
	  <LI><A 
	  href="s_userinfo.php" 
	  target=NT_PHVIEW>修改个人资料</A></LI>  
	  </UL></DIV>
	<DIV class=pnav-box id=letter-b>
	<DIV class=box-title><A class="btn-fold " 
	href="#"></A><A class="btn-unfold hidden" 
	href="#"></A><SPAN 
	class=pnav-letter>账户管理</SPAN></DIV>
	<UL class="box-list hidden">
	  <LI><A 
	  href="#" 
	  target=NT_PHVIEW>金币中心</A></LI>
	  <LI><A 
	  href="#" 
	  target=NT_PHVIEW>现金中心</A></LI>
	  <LI><A 
	  href="#" 
	  target=NT_PHVIEW>交易管理</A></LI>
	  </UL></DIV>
	<DIV class=pnav-box id=letter-b>
	<DIV class=box-title><A class="btn-fold " 
	href="#"></A><A class="btn-unfold hidden" 
	href="#"></A><SPAN 
	class=pnav-letter>笔记本</SPAN></DIV>
	<UL class="box-list hidden">
	  <LI><A 
	  href="#" 
	  target=NT_PHVIEW>强化本</A></LI>
	  <LI><A 
	  href="#" 
	  target=NT_PHVIEW>错题本</A></LI>
	  </UL></DIV>
	  <DIV class=pnav-box id=letter-b>
	<DIV class=box-title><A class="btn-fold " 
	href="#"></A><A class="btn-unfold hidden" 
	href="#"></A><SPAN 
	class=pnav-letter>我的悬赏题</SPAN></DIV>
	<UL class="box-list hidden">
	  <LI><A 
	  href="uwanted.php" 
	  target=NT_PHVIEW>悬赏提问</A></LI>
	  <LI><A 
	  href="uanswer_wanted.php" 
	  target=NT_PHVIEW>回答悬赏题</A></LI>
	  <LI><A 
	  href="mywanted.php" 
	  target=NT_PHVIEW>我的提问</A></LI>
	  </UL></DIV>
	  <DIV class=pnav-box id=letter-b>
	<DIV class=box-title><A class="btn-fold " 
	href="#"></A><A class="btn-unfold hidden" 
	href="#"></A><SPAN 
	class=pnav-letter>我的消息</SPAN></DIV>
	<UL class="box-list hidden">
	  <LI><A 
	  href="s_msgManage.php" 
	  target=NT_PHVIEW>消息管理</A></LI>
	  </UL></DIV>



</DIV>

<div id="input_title" style="font-family: '宋体';font-size:15;float:right;margin-right='30px';width:700px;margin-top:10px">
	<font size="5">金币中心</font>
	<hr style="height:5px">
	<div id="input_title" style="position:relative; float:left;">
		<div>
	<span><h1>余额</h1></span>
	<span class="glyphicon glyphicon-yen" aria-hidden="true" style="float:left;margin-top:20px"></span><span style="float:left;margin-top:10px;margin-bottom:20px">
		<h1>
		<?php
		$link = mysql_connect('localhost','cossy','6207486010');
		if (!$link) {
		  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
		  exit;
		}
		session_start();
		$_sql="select * from student where ID=$ID";
		mysql_select_db("pengbo",$link);
		mysql_query("set names utf8");//编码设置为utf8
		$result=mysql_query($_sql);  
		if($row=mysql_fetch_array($result)){
				echo $row["gold"];
		}
		?>
		</h1>
		</span>
	</div>
	<div style="margin-top:70px">
	<span><h1>明细</h1></span>
	<!--<div><input type="date"/></div><!--firefox不支持date控件，chrome和opera支持，IE不支持html5-->
	<div style="margin-top:20px">
	<span style="">从&nbsp;&nbsp;<input type="date" id="start">&nbsp;&nbsp;到&nbsp;&nbsp;<input type="date" id="end"><button type="button" class="btn btn-primary" onclick="mysearch()">查找</button></span>
	</div>
	<div>
<?php
	if($_GET['flag']){
		$start=$_GET["start"]." 00:00:00";
		$end=$_GET["end"]." 00:00:00";
		$link = mysql_connect('localhost','cossy','6207486010');
		if (!$link) {
		  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
		  exit;
		}
		session_start();
		$_sql="select * from gold_record where user_type='student' and userID=$ID and time between '$start' and '$end'";
		//echo $_sql;
		mysql_select_db("pengbo",$link);
		mysql_query("set names utf8");//编码设置为utf8
		$result=mysql_query($_sql);  
		 echo "<table class='table table-striped'>";
		echo "<tr><th>序号</th><th>用户</th><th>发生时间</th><th>事件类型</td><th>事件</th><th>金额</th></tr>";
		$i=0;
		while($row=mysql_fetch_array($result))
		{  
			//从数据库查询出来的字段
			 $i++;
			 $name=$row["name"];
			 $time=substr($row["time"],0,10);
			 $type=$row["type"];
			 $event=$row["event"];
			 $number=$row["number"];
			
		//将数据放到html的表格中
		   echo  "<tr><td>$i</td><td>$name</td><td>$time</td><td>$type</td><td>$event</td><td>$number</td></tr>";
		}
		echo "</table>";  
		

		
		mysql_close($link);
	}
	?>
	</div>
	</div>
</div>
 </div>
          
</div>
<SCRIPT src="js/update8.js" type=text/javascript></SCRIPT>
<script>
function mysearch(){
	var start=document.getElementById("start").value;
	var end=document.getElementById("end").value;
	window.location.href="/gold_center.php?flag=true&start="+start+"&end="+end;
}
</script>
<SCRIPT type=text/javascript>
//<![CDATA[ 
(function(){
NTES("span.photo-search input[type=text]").addEvent("focus", function(){ this.value == this.defaultValue && (this.value = ""); }).addEvent("blur", function(){ this.value == "" && (this.value = this.defaultValue); });
	NTES("div.pnav-box div.box-title a.btn-fold").addEvent("click", function(e){
		e.preventDefault();
		var eleTitle = NTES(this.parentNode);
		NTES(this).addCss("hidden");
		eleTitle.$("a.btn-unfold").removeCss("hidden");
		NTES(eleTitle.parentNode).$("ul.box-list").removeCss("hidden");
	});
	NTES("div.pnav-box div.box-title a.btn-unfold").addEvent("click", function(e){
		e.preventDefault();
		var eleTitle = NTES(this.parentNode);
		NTES(this).addCss("hidden");
		eleTitle.$("a.btn-fold").removeCss("hidden");
		NTES(eleTitle.parentNode).$("ul.box-list").addCss("hidden");
	});
	NTES("div.pnav-box ul.box-list a.btn-fold").addEvent("click", function(e){
		e.preventDefault();
		var eleTitle = NTES(this.parentNode);
		NTES(this).addCss("hidden");
		eleTitle.$("a.btn-unfold").removeCss("hidden");
		eleTitle.$("h2").removeCss("hidden");
	});
	NTES("div.pnav-box ul.box-list a.btn-unfold").addEvent("click", function(e){
		e.preventDefault();
		var eleTitle = NTES(this.parentNode);
		NTES(this).addCss("hidden");
		eleTitle.$("a.btn-fold").removeCss("hidden");
		eleTitle.$("h2").addCss("hidden");
	});
	new NTES.ui.Slide(NTES("ul.photo-snav li"), NTES("div.photo-scnt"), "active", "mouseover", 6000);
})();
//]]> 
</SCRIPT>
</body>
</html>
