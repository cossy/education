<!DOCTYPE HTML>
<html>
<head>
<title>错题本</title>
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
    <script type="text/javascript" src="jquery-2.1.3.min.js"></script>
    <?php
   session_start();
   $ID=$_SESSION["ID"];
if(!$_SESSION["ID"]){
	echo "<script type='text/javascript'>alert('请先登录')</script>";
	echo "<script type='text/javascript'>window.location.href='/ulogin.php'</script>";
}
?>
    <style type="text/css">
       .file {
    position: relative;
    display: inline-block;
    background: #D0EEFF;
    border: 1px solid #99D3F5;
    border-radius: 4px;
    padding: 4px 12px;
    overflow: hidden;
    color: #1E88C7;
    text-decoration: none;
    text-indent: 0;
    line-height: 20px;
	}
.file input {
    position: absolute;
    font-size: 70px;
    right: 0;
    top: 0;
    opacity: 0;
}
.file:hover {
    background: #AADFFD;
    border-color: #78C3F3;
    color: #004974;
    text-decoration: none;
}
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
              <li><a href="#"><font size="4">直播课堂</font></a></li>
              <li><a href="#"><font size="4">视频课</font></a></li>
	      <li><a href="#"><font size="4">名师推荐</font></a></li>
	      <li><a href="#"><font size="4">名师冲刺</font></a></li>
	      <li><a href="vclasses.php"><font size="4">虚拟班级</font></a></li>
	      <li><a href="/level_judge.php"><font size="4">在线评测</font></a></li>
           
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

<div id="input_title" style="font-family: '宋体';font-size:15;float:right;margin-right='30px';min-height:1000px;width:700px;margin-top:10px">
		<?php 
			$link = mysql_connect('localhost','cossy','6207486010');
			$time=date("Y-m-d H:i:s",time());
			if (!$link) {
			  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
			  exit;
			}
			mysql_select_db("pengbo",$link);
			mysql_query("set names 'utf8'");
			$_sql="select m.questionID,m.time,q.title,q.type,q.subject,q.version,q.answer from myfaults m left join question q on m.questionID=q.ID where userID=$ID";
			$query=mysql_query($_sql);
			$i=1;
			while($row=mysql_fetch_array($query)){
				$questionID=$row['questionID'];
				$title=$row['title'];
				$type=$row['type'];
				$subject=$row['subject'];
				$version=$row['version'];
				$time=$row['time'];
				$answer=$row['answer'];
				echo "<div class='row'><div class='col-md-6'><Strong>$i.$title</Strong><button id='btn$i' onclick='look($i)'>答案</button></div><div class='col-md-6'><span style='margin-right:30px'><font color='blanchediamond'>$type</font></span><span style='margin-right:30px'><font color='blanchediamond'>$subject,$version</font></span><span><font color='blanchediamond'>$time</font></span></div></div>";
				if($type=='单选题'||$type=='多选题'||$type=='判断题'){
					$_sql1="select name from cossy_option where question_ID=$questionID";
					$query1=mysql_query($_sql1);
					echo "<ul style='list-style-type:none'>";
					$m=0;
					while($row1=mysql_fetch_array($query1)){
						$option=$row1['name'];
						echo "<li>".chr(65+$m).".$option</li>";
						$m++;
					}
					echo "</ul>";
				}else{
					$_sql1="select ID,name from sub_question where question_ID=$questionID";
					$query1=mysql_query($_sql1);
					$count1=mysql_num_rows($query1);
					if($count1>0){
						$k=1;
						while($row1=mysql_fetch_array($query1)){
							$subID=$row1['ID'];
							$name=$row1['name'];
							echo "<div>(".$k.").$name</div>";
							$_sql2="select name from cossy_option where question_ID=$subID";
							$query2=mysql_query($_sql2);
							$count2=mysql_num_rows($query2);
							if($count2>0){
								echo "<ul style='list-style-type:none'>";
								$m=0;
								while($row2=mysql_fetch_array($query2)){
									$option=$row2['name'];
									echo "<li>".chr(65+$m).".$option</li>";
									$m++;
								}
								echo "</ul>";
							}
							$k++;
						}	
					}else{
						$_sql1="select name from cossy_option where question_ID=$questionID";
						$query1=mysql_query($_sql1);
						$count1=mysql_num_rows($query1);
						if($count1>0){
							echo "<ul style='list-style-type:none'>";
							$m=0;
							while($row1=mysql_fetch_array($query1)){
								$option=$row1['name'];
								echo "<li>".chr(65+$m).".$option</li>";
								$m++;
							}
							echo "</ul>";
						}
						
					}
				}
				echo "<div id='$i' style='display:none'>$answer</div>";
				$i++;
			}
			
		?>
</div>

<SCRIPT src="js/update8.js" type=text/javascript></SCRIPT>
	<script type="text/javascript">
 
		function look(id){
			document.getElementById(id).style.display='block';
			document.getElementById("btn"+id).innerHTML="收起";
			document.getElementById("btn"+id).setAttribute("onclick","back("+id+")");
		}
		function back(id,btn){
			document.getElementById(id).style.display='none';
			document.getElementById("btn"+id).innerHTML="答案";
			document.getElementById("btn"+id).setAttribute("onclick","look("+id+")");
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
