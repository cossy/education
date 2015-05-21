<html>
<head>
<title>消息管理</title>
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
	$ID=$_SESSION["ID"]
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
              <li class="active"><a href="#"><font size="4">首页</font></a></li>
              <li><a href="#"><font size="4">资料库</font></a></li>
              <li><a href="#"><font size="4">直播课堂</font></a></li>
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
<div style="width:1000px;height:1500px;margin-left:150px;margin-top:30px;border:1px solid #DDA0DD" >
	<DIV class=pnav-cnt>
	<DIV class=pnav-box id=letter-a>
	<DIV class=box-title><A class="btn-fold " href="#"></A><A class="btn-unfold hidden" 
	href="#"></A><SPAN class=pnav-letter>基本信息</SPAN></DIV>
	<UL class="box-list hidden">
	  <LI><A 
	  href="userinfo.php" 
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
	  href="#" 
	  target=NT_PHVIEW>消息管理</A></LI>
	  </UL></DIV>



</DIV>
<div id="input_title" style="font-family: '宋体';font-size:15;float:right;margin-right='30px';width:700px;margin-top:10px">
	<strong>消息管理</strong>
	<hr style="height:5px">
	<div id="input_title" style="position:relative; float:left;width:100%">
		<span><font size="5">未处理消息--学生消息</font></span>
		<table class='table table-striped' id='unstu'>
         <tr><th>序号</th><th>用户来源</th><th>发生时间</th><th>事件</th><th>操作</th></tr>
         <?php
		$link = mysql_connect('localhost','cossy','6207486010');
		if (!$link) {
		  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
		  exit;
		}
		session_start();
		$_sql="select s.nickname,m.time,m.event,m.ID from message m left join student s on m.src=s.ID where m.done='F' and m.srctype='student' and m.dst=$ID and m.dsttype='teacher'";
		mysql_select_db("pengbo",$link);
		mysql_query("set names utf8");//编码设置为utf8
		$result=mysql_query($_sql);  
		$i=0;
		while($row=mysql_fetch_array($result)){
			$i++;
			$msgID=$row['ID'];
			$name=$row['nickname'];
			$time=$row['time'];
			$event=$row['event'];
			$array=explode("_",$event);
			$str="";
			if($array[0]=='class'){
				$classID=$array[1];
				$_sql="select name from virtual_class where ID=$classID";
				$result1=mysql_query($_sql);  
				$classname="";
				if($row1=mysql_fetch_array($result1)){
					$classname=$row1['name'];	
				}
				$str=$name.'邀请您加入'.$classname;
				echo  "<tr><td>$i</td><td>$name</td><td>$time</td><td>$str</td><td><button onclick='do_s_class($ID,$classID,$msgID)'>同意</button></td></tr>";
			}
			
		}
		?>
		</table>
		<span><font size="5">未处理消息--教师消息</font></span>
		<table class='table table-striped' id='untea'>
         <tr><th>序号</th><th>用户来源</th><th>发生时间</th><th>事件</th><th>操作</th></tr>
         <?php
		/*$link = mysql_connect('localhost','cossy','6207486010');
		if (!$link) {
		  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
		  exit;
		}
		session_start();
		$_sql="select * from message where done='F'";
		mysql_select_db("pengbo",$link);
		mysql_query("set names utf8");//编码设置为utf8
		$result=mysql_query($_sql);  
		$i=0;
		while($row=mysql_fetch_array($result)){
			$i++;
			$src=$row['src'];
			
			echo  "<tr><td>$i</td><td>$time</td><td>$subject</td><td>$grade</td><td>$version</td><td>$price</td><td>$level</td><td>$type</td><td>$resource</td><td><button id='btn$ID' onclick='deletes($ID)'>删除</button></td></tr>";
		}*/
		?>
         </table>
		<span><font size="5">已处理消息</font></span>
		<table class='table table-striped' id='unstu'>
         <tr><th>序号</th><th>用户来源</th><th>发生时间</th><th>事件</th></tr>
         <?php
         $j=0;
		$link = mysql_connect('localhost','cossy','6207486010');
		if (!$link) {
		  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
		  exit;
		}
		session_start();
		$_sql="select s.nickname,m.time,m.event,m.ID from message m left join student s on m.src=s.ID where m.done='T' and m.srctype='student' and m.dst=$ID and m.dsttype='teacher'";
		mysql_select_db("pengbo",$link);
		mysql_query("set names utf8");//编码设置为utf8
		$result=mysql_query($_sql);  
		while($row=mysql_fetch_array($result)){
			$j++;
			$name=$row['nickname'];
			$time=$row['time'];
			$event=$row['event'];
			$array=explode("_",$event);
			$str="";
			if($array[0]=='class'){
				$classID=$array[1];
				$_sql="select name from virtual_class where ID=$classID";
				$result1=mysql_query($_sql);  
				$classname="";
				if($row1=mysql_fetch_array($result1)){
					$classname=$row1['name'];	
				}
				$str=$name.'邀请您加入'.$classname;
				echo  "<tr><td>$j</td><td>$name</td><td>$time</td><td>$str</td></tr>";
			}
			
		}
		$_sql="select t.nickname,m.time,m.event,m.ID from message m left join teacher t on m.src=t.ID where m.done='T' and m.srctype='teacher' and m.dst=$ID and m.dsttype='teacher'";
		$result=mysql_query($_sql);  
		while($row=mysql_fetch_array($result)){
			$j++;
			$name=$row['nickname'];
			$time=$row['time'];
			$event=$row['event'];
			$array=explode("_",$event);
			$str="";
			if($array[0]=='class'){
				$classID=$array[1];
				$_sql="select name from virtual_class where ID=$classID";
				$result1=mysql_query($_sql);  
				$classname="";
				if($row1=mysql_fetch_array($result1)){
					$classname=$row1['name'];	
				}
				$str=$name.'邀请您加入'.$classname;
				echo  "<tr><td>$j</td><td>$name</td><td>$time</td><td>$str</td></tr>";
			}
		}
		mysql_close($link);
		?>
         </table>
        
    </div>
 </div>
          
</div>
<script type="text/javascript">
	function do_s_class(id,classid,msgid){ 
		window.location.href="cgi/classeye.php?id="+id+"&classid="+classid+"&msgid="+msgid; 
   }
</script>
<SCRIPT src="js/update8.js" type=text/javascript></SCRIPT>
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

<SCRIPT type="text/javascript"> 
   var httpRequests = false;
    var httpRequestt = false;
	var id="<?php echo $ID?>";
	var classID="<?php echo $classID?>";
	var count="<?php echo $i?>";
	var msgID="<?php echo $msgID?>";
  function createRequestt( url )
   {
    httpRequestt = false;
   
    if( window.XMLHttpRequest )
    {
     httpRequestt = new XMLHttpRequest();
     if( httpRequestt.overrideMimeType )
     {
      httpRequestt.overrideMimeType( "text/xml" );
     }
    }
    else if( window.ActiveXObject )
    {
     try
     {
      httpRequestt = new ActiveXObject( "Msxml2.XMLHTTP" );
     }
     catch( e )
     {
      try
      {
       httpRequestt = new ActiveXObject( "Microsoft.XMLHTTP" );
      }
      catch( e )
      {
      }
     }
    }
   
    if( !httpRequestt )
    {
     alert( 'Can\'t create XMLHTTP instance' );
     return false;
    }
   
    httpRequestt.onreadystatechange = alertContentt;    // 立即执行数据回收
    httpRequestt.open( "GET", url, true );
    httpRequestt.send();
   }
   function createRequests( url )
   {
    httpRequests = false;
   
    if( window.XMLHttpRequest )
    {
     httpRequests = new XMLHttpRequest();
     if( httpRequests.overrideMimeType )
     {
      httpRequests.overrideMimeType( "text/xml" );
     }
    }
    else if( window.ActiveXObject )
    {
     try
     {
      httpRequests = new ActiveXObject( "Msxml2.XMLHTTP" );
     }
     catch( e )
     {
      try
      {
       httpRequests = new ActiveXObject( "Microsoft.XMLHTTP" );
      }
      catch( e )
      {
      }
     }
    }
   
    if( !httpRequests )
    {
     alert( 'Can\'t create XMLHTTP instance' );
     return false;
    }
   
    httpRequests.onreadystatechange = alertContents;    // 立即执行数据回收
    httpRequests.open( "GET", url, true );
    httpRequests.send();
   }
  function alertContentt()
   {
    if( httpRequest.readyState == 4 )
    {
     if( httpRequest.status == 200 )
     {
      //alert( httpRequest.responseText );
       var data = JSON.parse(httpRequest.responseText);
       var i=0;
       while(data[i]){
		   var dst=data[i].dst;
		   alert(dst);
		   if(dst==id){
				continue;
			}
			var srcname=data[i].srcname;
			var time=data[i].time;
			var event=data[i].event;
			var table = document.getElementById("NewTable");   //取得自定义的表对象
     NewRow = Table.insertRow();                        //添加行
     NewCell1= NewRow.insertCell();                     //添加列
     NewCell2=NewRow.insertCell();
    NewCell1.innerHTML = "<B>这是新加的列</B>";          //添加数据
     NewCell2.innerHTML="<a href='#'>这是空链接</a>";
    NewCell1.class="className";      //设置样式
     NewCell1.style.height="100px";  //设置样式的高度
   
		}
     }
     else
     {
      alert( 'Page error' );
     }
    }
   }
   function alertContents()
   {
    if( httpRequests.readyState == 4 )
    {
     if( httpRequests.status == 200 )
     {
      //alert( httpRequest.responseText );
      var data = JSON.parse(httpRequests.responseText);
      var i=0;
       
      while(data[i]){
		   count++;
		   var dst=data[i].dst;
		   if(dst!=id){
				continue;
			}
			var srcname=data[i].srcname;
			var time=data[i].time;
			var event=data[i].event;
			var method=data[i].method;
			msgID=data[i].msgID;
			var table = document.getElementById("unstu");   //取得自定义的表对象
			newRow = table.insertRow();                        //添加行
			newCell1= newRow.insertCell();                     //添加列
			newCell2=newRow.insertCell();
			newCell3=newRow.insertCell();
			newCell4=newRow.insertCell();
			newCell5=newRow.insertCell();
			newCell1.innerHTML = count;          //添加数据
			newCell2.innerHTML=srcname;
			newCell3.innerHTML=time;
			newCell4.innerHTML=event;
			if(method=="add"){
				newCell5.innerHTML="<button onclick='do_s_class("+id+","+classID+")'>同意</button>";	
			}
			i++;
		
		}
     }
     else
     {
      alert( 'Page error' );
     }
    }
   }
	
   function chg()
   {
    createRequests( 'cgi/s_t_messageProvide.php?bound='+msgID);
    //createRequestt('/cgi/t_t_messageProvide.php');
   }
  //chg();
　setInterval('chg()',3000);
</SCRIPT>

</body>
</html>
