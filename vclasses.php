<?php error_reporting(0);?> 
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>虚拟班</title>

    <!-- Bootstrap core CSS -->
    <link href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

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
              <li><a href="home.php"><font size="4">首页</font></a></li>
              <li><a href="#"><font size="4">资料库</font></a></li>
              <li><a href="/video_class.php"><font size="4">直播课堂</font></a></li>
              <li><a href="#"><font size="4">视频课</font></a></li>
	      <li><a href="#"><font size="4">名师推荐</font></a></li>
	      <li><a href="#"><font size="4">名师冲刺</font></a></li>
	      <li class="active"><a href="#"><font size="4">虚拟班级</font></a></li>
	      <li><a href="#"><font size="4">在线评测</font></a></li>
           
            </ul>
          </div>
        </div>
</div>
<!--demo结束-->
	  
	  
	<div class="container marketing" style="margin-top:10px">
		
		<?php
	$i=0;
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
$_sql="select vc.ID,vc.name,vc.time,vc.introduce,vc.subject,t.nickname from virtual_class vc left join teacher t on vc.master=t.ID";
mysql_select_db("pengbo",$link);
mysql_query("set names utf8");//编码设置为utf8
$query=mysql_query($_sql);
if(!$query){
	die("Error:"+mysql_error);
}
while($row=mysql_fetch_array($query))
{  
    //从数据库查询出来的字段
     $ID=$row["ID"];
     $cname=$row["name"];
     $time=$row["time"];
     $introduce=$row["introduce"];
     $subject=$row["subject"];
     $tname=$row["nickname"];
     $cnum=0;
     $talks=0;
     $_sql1="select count(*) as num from student_class where classID=$ID";
     $query1=mysql_query($_sql1);
     if(!$query1){
		die("Error:"+mysql_error);
	 }
	 
	 if($row=mysql_fetch_array($query1)){
		$cnum=$row["num"];
		if($tname){
			$cnum++;
		}
	 }
	 
	 $_sql2="select count(*) as num from class_talk where virtualclass_ID=$ID";
     $query2=mysql_query($_sql2);
     if(!$query2){
		die("Error:"+mysql_error);
	 }
	 if($row=mysql_fetch_array($query2)){
		$talks=$row["num"];
	 }
	 if($i%3==0){
		 echo "<div class='row'>";
	 }
	 echo "<div class='col-lg-4'><img class='img-circle' src='images/vclass.jpg' alt='Generic placeholder image' width='140' height='140' style='float:left' onmouseover="."document.getElementById('info$i').style.visibility='visible'"." onmouseout=document.getElementById('info$i').style.visibility='hidden'>";
	 echo "<div id='info$i' style='border:1px solid #CCCCFF;float:left;width:210px;height:140px;margin-bottom:20px;visibility:hidden'><ul><li>班级人数：$cnum</li><li>话题数：$talks</li><li>班主任：$tname</li><li>所属科目：$subject</li><li>建班时间：$time</li></ul></div>";
	 echo "<h2>$cname</h2><p>$introduce</p>";
	 echo "<p><a class='btn btn-default' href='cgi/checkInto.php?classID=$ID' role='button'>进入该班&raquo;</a></p>";
	 echo "</div>";
	 $i++;
	 if($i%3==0){
		 echo "</div>";
	 }
	 
} 
mysql_close($link);
?>
<div class="col-lg-4" style="float:left">
          <img class="img-circle" src="images/vclass.jpg" alt="Generic placeholder image" width="140" height="140" style="margin-bottom:10px">
          <p style="margin-left:20px"><a class='btn btn-default' href='ucreateClass.php' role='button'><strong>创建班级</strong><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></p>
         
        </div><!-- /.col-lg-4 -->		
		
		
		
		
		
		
		
		
		
		
	
		
	
      
      </div>
</body>
</html>
