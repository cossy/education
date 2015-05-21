<?php error_reporting(0);?> 
<!DOCTYPE HTML>
<html>
<head>
<title>题库制作</title>
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
              <li class="active"><a href="#"><font size="4">首页</font></a></li>
              <li><a href="#"><font size="4">资料库</font></a></li>
              <li><a href="/video_class.php"><font size="4">直播课堂</font></a></li>
              <li><a href="#"><font size="4">视频课</font></a></li>
	      <li><a href="#"><font size="4">名师推荐</font></a></li>
	      <li><a href="#"><font size="4">名师冲刺</font></a></li>
	      <li><a href="#"><font size="4">虚拟班级</font></a></li>
	      <li><a href="#"><font size="4">在线评测</font></a></li>
           
            </ul>
          </div>
        </div>
</div>
<!--demo结束-->
<div style="width:1000px;height:1500px;margin-left:150px;margin-top:30px;border:1px solid #DDA0DD" >
	<DIV class=pnav-cnt>
	<DIV class=pnav-box id=letter-a>
	<DIV class=box-title><A class="btn-fold " href="#"></A><A class="btn-unfold hidden" 
	href="#"></A><SPAN class=pnav-letter>基本信息</SPAN></DIV>
	<UL class="box-list hidden">
	  <LI><A 
	  href="userinfo.html" 
	  target=NT_PHVIEW>基本资料</A></LI>  
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
	class=pnav-letter>我的发布</SPAN></DIV>
	<UL class="box-list hidden">
	  <LI><A 
	  href="#" 
	  target=NT_PHVIEW>上传资料</A></LI>
	  <LI><A 
	  href="upload_manage.php" 
	  target=NT_PHVIEW>资料管理</A></LI>
	  <LI><A 
	  href="#" 
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
	  href="#" 
	  target=NT_PHVIEW>消息管理</A></LI>
	  </UL></DIV>



</DIV>
<div id="input_title" style="font-family: '宋体';font-size:15;float:right;margin-right='30px';width:700px;margin-top:10px">
	<font size="5">题库制作</font>
	<hr style="height:5px">
	<form id="uploads" method="post" action="cgi/makeQuestion.php" enctype='multipart/form-data'>
	
          <div id="input_info" style="position:relative; float:left;">
          <ul id="upload">
           <li style="list-style-type:none;margin-bottom:8px;">所属科目<select id="mysel1" onchange="duang()" name="mysubject">
        <option value="0">科目</option>
        <option value="1">语文</option>
        <option value="2">数学</option>
        <option value="3">英语</option>
        <option value="4">物理</option>
        <option value="5">化学</option>
        <option value="6">历史</option>
        <option value="7">政治思品</option>
        <option value="8">地理</option>
        <option value="9">生物</option>
    </select></li>
           <li style="list-style-type:none;margin-bottom:38px;"><font style="float:left">题目类型</font>
    <select id="op0" class="mysub">
        <option>题型</option>
    </select>
    <select id="op1" class="mysub" name="type1">
        <option>请选择</option>
        <option>单选题</option>
        <option>写作题</option>
        <option>现代文阅读</option>
        <option>文言文阅读</option>
        <option>诗词鉴赏</option>
        <option>语言表达</option>
        <option>名著导读</option>
        <option>默写</option>
        <option>书写</option>
        <option>其他题型</option>
    </select>    
    <select id="op2" class="mysub" name="type2">
        <option>请选择</option>
        <option>单选题</option>
        <option>判断题</option>
        <option>填空题</option>
        <option>计算题</option>
        <option>解答题</option>
        <option>其他题型</option>
    </select>
      <select id="op3" class="mysub" name="type3">
        <option>请选择</option>
        <option>单选题</option>
        <option>完型填空</option>
        <option>阅读理解</option>
        <option>写作题</option>
        <option>句型转换</option>
        <option>单词拼写</option>
        <option>补充句子</option>
        <option>翻译</option>
        <option>改错</option>
        <option>单词造句</option>
        <option>选词填空</option>
        <option>其他题型</option>
    </select>
     <select id="op4" class="mysub" name="type4">
        <option>请选择</option>
        <option>单选题</option>
        <option>多选题</option>
        <option>填空题</option>
        <option>问答题</option>
        <option>探究题</option>
        <option>计算题</option>
        <option>实验题</option>
        <option>做图题</option>
        <option>综合题</option>
        <option>其他题型</option>
    </select>
    <select id="op5" class="mysub" name="type5">
        <option>请选择</option>
        <option>单选题</option>
        <option>填空题</option>
        <option>问答题</option>
        <option>探究题</option>
        <option>计算题</option>
        <option>推断题</option>
        <option>信息分析题</option>
        <option>其他题型</option>
    </select>
    <select id="op6" class="mysub" name="type6">
        <option>请选择</option>
        <option>单选题</option>
        <option>判断题</option>
        <option>填空题</option>
        <option>问答题</option>
        <option>探究题</option>
        <option>其他题型</option>
    </select>
    <select id="op7" class="mysub" name="type7">
        <option>请选择</option>
        <option>单选题</option>
        <option>多选题</option>
        <option>判断题</option>
        <option>填空题</option>
        <option>问答题</option>
        <option>探究题</option>
        <option>综合题</option>
        <option>辨析题</option>
        <option>其他题型</option>
    </select>
    <select id="op8" class="mysub" name="type8">
        <option>请选择</option>
        <option>单选题</option>
        <option>判断题</option>
        <option>填空题</option>
        <option>综合题</option>
        <option>填表题</option>
        <option>连线题</option>
        <option>其他题型</option>
    </select>
    <select id="op9" class="mysub" name="type9">
        <option>请选择</option>
        <option>单选题</option>
        <option>判断题</option>
        <option>填空题</option>
        <option>探究题</option>
        <option>综合题</option>
        <option>连线题</option>
        <option>其他题型</option>
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
           <li style="list-style-type:none;margin-bottom:8px;">适用版本<select name="edition">
          <option>请选择</option>
        <option>人教版</option>
        <option>苏教版</option>
        <option>语文版</option>
        <option>北师大版</option>
        <option>沪教版</option>
        <option>鲁教版</option>
        <option>鄂教版</option>
        <option>长春版</option>
        <option>河大版</option>
        <option>粤教版</option>
        <option>湘教版</option>
        <option>浙教版</option>
         <option>科教版</option>
         <option>华师大版</option>
         <option>青岛版</option>
         <option>西师大版</option>
         <option>冀教版</option>
         <option>新课标版</option>
         <option>外研版</option>
          </select></li>
           <li style="list-style-type:none;margin-bottom:8px;">题目难度<select name="hard_level">
          <option>请选择</option>
          <option>简单</option>
          <option>一般</option>
          <option>中等</option>
          <option>难</option>
          </select></li>
          <li style="list-style-type:none;margin-bottom:8px;">题干要求<textarea style="resize:none;width:450px;height:160px;vertical-align:top" name="question"></textarea>
          分数<input type="text" name="score" style="width:50px">
          <span style="float:left;margin-left:500px;margin-top:-20px" ><button type="button" onclick="add_op()">设置选项</button><button type="button" onclick="add_sub()">增加子问题</button></span>
          </li>
            </ul>        
            <ul style="margin-top:15px">
				<li style="list-style-type:none">题目解析<textarea style="resize:none;width:450px;height:130px;vertical-align:top" name="answer"></textarea></li>
				<li style="list-style-type:none;margin-top:20px"><button type="button" class="btn btn-primary" style="width:200px;margin-left:30px" onclick="uploads.submit();">上传</button></li>
				</ul>
				
            </div>
            </form>
 </div>
          
</div>
<SCRIPT src="js/update8.js" type=text/javascript></SCRIPT>
	<script type="text/javascript">
			$("#op0").style.display="block";
	   </script>
   <script type="text/javascript">
		function duang(){
			var post=$("#mysel1").value;
			//alert($("#op"+post).innerHTML);
			for(var i=0;i<10;i++){
				if(i==post){
					$("#op"+i).style.display="block";
				}else{
					$("#op"+i).style.display="none";	
				}
			}
		}
    </script>
    <script type="text/javascript">
		var i=1;
		var j=0;
		function add_op(){
		  var up=document.getElementById('upload');
		  var li= document.createElement("li");
		  li.innerHTML=String.fromCharCode(i+64)+".<input type='text' style='width:482px' name='option"+j+"_"+i+"'/>&nbsp;正确&nbsp;<input name='judge"+j+"[]' type='checkbox' value="+i+" />";
		  up.appendChild(li);
		  i++;
		}
		function add_sub(){
		  j++;
		  var up=document.getElementById('upload');
		  var li= document.createElement("li");
		  li.innerHTML="("+j+").<textarea style='resize:none;width:450px;height:40px;vertical-align:top' name='sub_question"+j+"'></textarea>分数<input type='text' name='score"+j+"' style='width:50px'>";
		  up.appendChild(li);
		  i=1;	
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
