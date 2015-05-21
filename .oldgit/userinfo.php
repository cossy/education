<html>
<head>
<title>教师用户信息</title>
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
	<a class="navbar-brand" href="uregist.php" style="margin-top:-17px"><small>注册&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</small></a>
	<a class="navbar-brand" href="ulogin.php" style="margin-top:-17px"><small>登录</small></a>
         
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

<form>
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
              <li class="active"><a href="home.php"><font size="4">首页</font></a></li>
              <li><a href="#"><font size="4">资料库</font></a></li>
              <li><a href="#"><font size="4">直播课堂</font></a></li>
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
<div style="width:1000px;height:700px;margin-left:150px;margin-top:30px;border:1px solid #DDA0DD" >
	<DIV class=pnav-cnt>
	<DIV class=pnav-box id=letter-a>
	<DIV class=box-title><A class="btn-fold " href="#"></A><A class="btn-unfold hidden" 
	href="#"></A><SPAN class=pnav-letter>基本信息</SPAN></DIV>
	<UL class="box-list hidden">
	  <LI><A 
	  href="#" 
	  target=NT_PHVIEW>基本资料</A></LI>  
	  </UL></DIV>
	<DIV class=pnav-box id=letter-b>
	<DIV class=box-title><A class="btn-fold " 
	href="#"></A><A class="btn-unfold hidden" 
	href="#"></A><SPAN 
	class=pnav-letter>账户管理</SPAN></DIV>
	<UL class="box-list hidden">
	  <LI><A 
	  href="gold_center.php" 
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
	class=pnav-letter>我的发布</SPAN></DIV>
	<UL class="box-list hidden">
	  <LI><A 
	  href="uploadinfo.php" 
	  target=NT_PHVIEW>上传资料</A></LI>
	  <LI><A 
	  href="upload_manage.php" 
	  target=NT_PHVIEW>资料管理</A></LI>
	  <LI><A 
	  href="make_question.php" 
	  target=NT_PHVIEW>题库制作</A></LI>
	  <LI><A 
	  href="#" 
	  target=NT_PHVIEW>名师推荐</A></LI>
	  </UL></DIV>
	<DIV class=pnav-box id=letter-b>
	<DIV class=box-title><A class="btn-fold " 
	href="#"></A><A class="btn-unfold hidden" 
	href="#"></A><SPAN 
	class=pnav-letter>我的虚拟班级</SPAN></DIV>
	<UL class="box-list hidden">
	  <LI><A 
	  href="#" 
	  target=NT_PHVIEW>虚拟班级管理</A></LI>
	  </UL></DIV>
	  <DIV class=pnav-box id=letter-b>
	<DIV class=box-title><A class="btn-fold " 
	href="#"></A><A class="btn-unfold hidden" 
	href="#"></A><SPAN 
	class=pnav-letter>我的解答</SPAN></DIV>
	<UL class="box-list hidden">
	  <LI><A 
	  href="#" 
	  target=NT_PHVIEW>解答管理</A></LI>
	  </UL></DIV>
	  <DIV class=pnav-box id=letter-b>
	<DIV class=box-title><A class="btn-fold " 
	href="#"></A><A class="btn-unfold hidden" 
	href="#"></A><SPAN 
	class=pnav-letter>我的消息</SPAN></DIV>
	<UL class="box-list hidden">
	  <LI><A 
	  href="message_manage.php" 
	  target=NT_PHVIEW>消息管理</A></LI>
	  </UL></DIV>



</DIV>
<div id="input_title" style="font-family: '宋体';font-size:15;float:right;margin-right='30px';width:700px;margin-top:10px">
          <ul>
          <li style="list-style-type:none;margin-bottom:5px;">  姓名&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input id="actual_name" name="actual_name" type="text"></li>
          <li style="list-style-type:none;margin-bottom:5px;">  性别&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="gender">
          <option>请选择</option>
          <option>男</option>
          <option>女</option>
          </select></li>
          <li style="list-style-type:none;margin-bottom:5px;">  教龄&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="age" name="age">
           <option>请选择</option>
          <option>3年以下</option>
          <option>3-5年</option>
          <option>5-10年</option>
          <option>10年以上</option>
          </select></li>
          <li style="list-style-type:none;margin-bottom:5px;">  出生年月&nbsp;&nbsp;&nbsp;<input id="birth_date" name="birth_date" type="text"></li>
          <li style="list-style-type:none;margin-bottom:5px;">  毕业院校&nbsp;&nbsp;&nbsp;<input id="graduate_school" name="graduate_school" type="text"></li>
          <li style="list-style-type:none;margin-bottom:5px;">  地址&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input id="address" name="address" type="text"></li>
          <li style="list-style-type:none;margin-bottom:5px;">  工作单位&nbsp;&nbsp;&nbsp;<input id="work" name="work" type="text"></li>
          <li style="list-style-type:none;margin-bottom:5px;">  QQ/微信号<input id="contact" name="contact" type="text"></li>
          <li style="list-style-type:none;margin-bottom:5px;">  个人说明&nbsp;&nbsp;&nbsp;<textarea style="resize:none;width:450px;height:70px;vertical-align:top" name="introduction" id="introduction"></textarea></li>
          <li style="list-style-type:none;margin-bottom:5px;">  银行卡号&nbsp;&nbsp;&nbsp;<input id="cardnumber" name="cardnumber" type="text"></li>
          <li style="list-style-type:none;margin-bottom:5px;">  申请职位&nbsp;&nbsp;&nbsp;<select name="teacher_type">
          <option>老师类型</option>
          <option>内容加盟老师</option>
          <option>本地名师</option>
          <option>冲刺辅导老师</option>
          <option>大学生兼职老师</option>
          </select>
          <select name="charge_type">
          <option>收费类型</option>
          <option>本地名师线下课时费</option>
          <option>本地名师线上课时费</option>
          <option>冲刺辅导师线下课时费</option>
          <option>冲刺辅导师线上课时费</option>
          <option>大学兼职导师线下课时费</option>
          <option>大学兼职师线上课时费</option>
          </select><input id="charge" name="charge_money" type="text">元/小时</li>
          <li style="list-style-type:none;">  上传证件&nbsp;&nbsp;&nbsp;<input type="file" name="upload_file1" /></li>
          <li style="list-style-type:none;margin-bottom:25px;">  上传照片&nbsp;&nbsp;&nbsp;<input type="file" name="upload_file2"  /> </li>
          <li style="list-style-type:none;margin-bottom:25px;"><button type="button" class="btn btn-primary" style="width:200px;margin-left:30px">保存</button></li>
          <li style="list-style-type:none;margin-bottom:25px;"><font color="red">1.冲刺辅导老师、本地名师、推荐老师必须上传：毕业证、教师资格证、身份证、获奖证书和照片。</font></li>
          <li style="list-style-type:none;margin-bottom:25px;"><font color="red">2.大学生兼职老师必须上传：身份证、学生证、照片。</font></li>
          <li style="list-style-type:none;"><font color="red">3.可选上传：获奖证书和职称证书。</font></li>
          </ul>
          </div>
</div>
<SCRIPT src="js/update8.js" type=text/javascript></SCRIPT>

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
