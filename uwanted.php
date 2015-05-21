<?php error_reporting(0);?> 
<!DOCTYPE HTML>
<html>
<head>
<title>悬赏提问</title>
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
    <script type="text/javascript" src="js/jquery.js"></script>
    <style type="text/css">
        .mysub{display:none;float:left}
        
    </style>
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
              <li class="active"><a href="home.php"><font size="4">首页</font></a></li>
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
	  href="s_goldcenter.php" 
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
	  href="faultsBook.php" 
	  target=NT_PHVIEW>错题本</A></LI>
	  </UL></DIV>
	  <DIV class=pnav-box id=letter-b>
	<DIV class=box-title><A class="btn-fold " 
	href="#"></A><A class="btn-unfold hidden" 
	href="#"></A><SPAN 
	class=pnav-letter>我的悬赏题</SPAN></DIV>
	<UL class="box-list hidden">
	  <LI><A 
	  href="#" 
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
	<font size="5">悬赏提问</font>
	<hr style="height:5px">
	<form id="uploads" method="post" action="cgi/wanted.php" enctype='multipart/form-data'>
	<input type="hidden" value="<?php echo $_SESSION['ID']?>" name="myid">
          <div id="input_info" style="position:relative; float:left;">
          <ul id="upload">
           <li style="list-style-type:none;margin-bottom:8px;">所属科目<select id="mysel1" name="subject">
        <option>科目</option>
        <option>语文</option>
        <option>数学</option>
        <option>英语</option>
        <option>物理</option>
        <option>化学</option>
        <option>历史</option>
        <option>政治思品</option>
        <option>地理</option>
        <option>生物</option>
    </select></li>
    <li style="list-style-type:none;margin-bottom:8px;">适用年级<select name="grade">
          <option>一年级</option>
          <option>二年级</option>
          <option>三年级</option>
          <option>四年级</option>
          <option>五年级</option>
          <option>六年级</option>
          <option>七年级</option>
          <option>八年级</option>
          <option>九年级</option>
          <option>高一</option>
          <option>高二</option>
          <option>高三</option>
          </select>
          <li style="list-style-type:none;margin-bottom:8px;">问题内容<textarea style="resize:none;width:550px;height:70px;vertical-align:top" name="question"></textarea>
          悬赏值<input type="text" name="score" style="width:50px">
          </li>
          <li style="list-style-type:none;margin-bottom:8px;"><font style="float:left">问题补充</font><div id="add" style="border:1px solid gray;width:550px; height:auto;min-height:100px;float:left;margin-bottom:30px" contentEditable="true">
          </div><button type="button" style="margin-top:-30px;float:left;margin-right:150px;margin-left:44px">插入图片</button>
          </li>
    <input id="mypicture" type="file" style="width:70px;margin-top:-30px;float:left;margin-right:150px;margin-left:44px;filter:alpha(opacity=0);opacity:0;cursor:pointer;overflow:hidden" onchange="picture()"/>
          <li style="list-style-type:none;margin-top:20px"><button type="button" class="btn btn-primary" style="width:200px;margin-left:30px;margin-top:20px" onclick="mysubmit()">提交</button></li>
            </ul>        
            </div>
            </form>
            <!--可以用ajax上传多个图片，暂时只上传一张-->
 </div>
          
</div>
<SCRIPT src="js/update8.js" type=text/javascript></SCRIPT>
	<script type='text/javascript'>
		var docObj=$('#mypicture');
		function picture(){
			//alert("dsad");
			if(docObj.files &&docObj.files[0]){
				//火狐下，直接设img属性
				var img=document.createElement( "img");
				img.setAttribute( "src", window.URL.createObjectURL(docObj.files[0]));
				img.setAttribute( "style","width:450px;height:150px");
				document.getElementById("add").appendChild(img);
				
				//if(!docObj.files[0].getAsDataURL()){
				//	w="<p><img src="+window.URL.createObjectURL(docObj.files[0])+" ></p>";
				//}
				//$('#add').append($(w));
				
				//火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
				//imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);
			}
		}
		function mysubmit(){
			var formElement=document.getElementById("uploads");
			var formData = new FormData(formElement);//构造空对象，下面用append 方法赋值。  
            formData.append("content",document.getElementById("add").innerHTML);  
            formData.append("picture", document.getElementById("mypicture").files[0]);
            var oReq = new XMLHttpRequest();
			oReq.open( "POST", "cgi/wanted.php" , true );
			oReq.onload = function(oEvent) {
				  if (oReq.status == 200) {
					   var data = JSON.parse(oReq.responseText);
					   if(data.result=="yes"){
						   alert("提问成功");
						}
						
				 } else {
					 alert("页面出错");
					  //oOutput.innerHTML = "Error " + oReq.status + " occurred uploading your file.<br \/>";
				 }
			};
			oReq.send(formData);
		}
	</script>
<SCRIPT type="text/javascript">
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
