<?php error_reporting(0);?> 
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>水平测试</title>

    <!-- Bootstrap core CSS -->
    <link href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
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
		<form id="uploads" method="post" action="cgi/judge.php">
		<?php
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
$_sql="select grade,result_section from level_judging where userID=$ID";
mysql_select_db("pengbo",$link);
mysql_query("set names utf8");//编码设置为utf8
$query=mysql_query($_sql);
if(!$query){
	die("Error:"+mysql_error);
}
$grade=null;
$section=null;	 
while($row=mysql_fetch_array($query)){  
    //从数据库查询出来的字段
     $grade=$row["grade"];
     $section=$row["result_section"];	 
} 
echo "<input type='hidden' name='grade' value='$grade'/>";
echo "<input type='hidden' name='section' value='$section'/>";
echo "<input type='hidden' name='userid' value='$ID'/>";

?>	<p style="visibility:hidden">隐藏</p>
		<p><h4 style="float:left">请选择学科和教材版本，系统将自动为您抽取10道题</h4>
           <h4 style='float:left;margin-left:20px'><mark>学科</mark></h4><select id="subject" name="subject" style='float:left;margin-top:5px' onchange="makeTest()">
        <option>请选择</option>
        <option>语文</option>
        <option>数学</option>
        <option>英语</option>
        <option>物理</option>
        <option>化学</option>
        <option>历史</option>
        <option>政治思品</option>
        <option>地理</option>
        <option>生物</option>
    </select><h4 style='float:left;margin-left:20px'><mark>教材版本</mark></h4><select name="version" id="version" style='float:left;margin-top:5px;margin-right:200px' onchange="makeTest()">
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
          </select></p>
          <div id="problem" style="margin-top:50px">
  <?php
		$a=0;$b=0;$c=0;$d=0;
		switch ($section)
		{
		case '青铜':
		  $a=3;$b=5;$c=2;
		  break;  
		case '白银':
		  $a=2;$b=3;$c=3;$d=2;
		  break;
		case '黄金':
		  $b=3;$c=2;$d=5;
		  break;
		case '钻石':
		  $d=10;
		  break;
		case '王者':
		  $d=10;
		  break;
		}
		$subject=$_GET['subject'];
		$version=$_GET['version'];
		$i=0;
		$_sql1="select * from question where (type='单选题' or type='多选题') and level='简单' and subject='$subject' and grade='$grade' and version='$version'";
		$_sql2="select * from question where (type='单选题' or type='多选题') and level='一般' and subject='$subject' and grade='$grade' and version='$version'";
		$_sql3="select * from question where (type='单选题' or type='多选题') and level='中等' and subject='$subject' and grade='$grade' and version='$version'";
		$_sql4="select * from question where (type='单选题' or type='多选题') and level='难' and subject='$subject' and grade='$grade' and version='$version'";
		
		mysql_select_db("pengbo",$link);
		mysql_query("set names utf8");//编码设置为utf8
		$query1=mysql_query($_sql1);
		$query2=mysql_query($_sql2);
		$query3=mysql_query($_sql3);
		$query4=mysql_query($_sql4);
		$arr1=array();
		$arr2=array();
		$arr3=array();
		$arr4=array();
		//////////////////////////
		$j=0;$k=0;
		$count1=mysql_num_rows($query1);
		$arr=range(0,$count1-1);
		shuffle($arr);
		for($next=0;$next<$a;$next++){
			array_push($arr1,$arr[$next]);
		}
		sort($arr1);
		while($row=mysql_fetch_array($query1))
		{  
			if($j==$a){
				break;
			}
			if($k==$arr1[$j]){
				//拿到题
				//从数据库查询出来的字段
				 $quesID=$row["ID"];
				 $title=$row["title"];
				 if($i%3==0){
					 echo "<div class='row'>";
				 }
				 $i++;
				 echo "<div class='col-lg-4'><input type='hidden' name='title$i' value='$quesID'/><div>$i.$title</div>";
				 $_sub="select ID,name from cossy_option where question_ID=$quesID";
				 $query=mysql_query($_sub);
				 echo "<ul style='list-style-type:none'>";
				 $m=0;
				 while($row1=mysql_fetch_array($query)){
					$optionID=$row1["ID"];
					$option=$row1["name"];
					echo "<li><input type='checkbox' name='checkbox$i"."[]"."' value='$m'/>".chr(65+$m).".$option</li>";
					$m++;
				 }
				 echo "</ul>";				 
				 echo "</div>";
				 if($i%3==0){
					 echo "</div>";
				 }
				$j++;
				$k++;
			}else{
				$k++;
				continue;
			} 
		} 
		///////////////////////////////////
		$j=0;$k=0;
		$count2=mysql_num_rows($query2);
		$arr=range(0,$count2-1);
		shuffle($arr);
		for($next=0;$next<$b;$next++){
			array_push($arr2,$arr[$next]);
		}
		sort($arr2);
		while($row=mysql_fetch_array($query2))
		{  
			if($j==$b){
				break;
			}
			if($k==$arr2[$j]){
				//拿到题
				//从数据库查询出来的字段
				 $quesID=$row["ID"];
				 $title=$row["title"];
				 if($i%3==0){
					 echo "<div class='row'>";
				 }
				 $i++;
				 echo "<div class='col-lg-4'><input type='hidden' name='title$i' value='$quesID'/><div>$i.$title</div>";
				 $_sub="select ID,name from cossy_option where question_ID=$quesID";
				 $query=mysql_query($_sub);
				 echo "<ul style='list-style-type:none'>";
				 $m=0;
				 while($row1=mysql_fetch_array($query)){
					$optionID=$row1["ID"];
					$option=$row1["name"];
					echo "<li><input type='checkbox' name='checkbox$i"."[]"."' value='$m'/>".chr(65+$m).".$option</li>";
					$m++;
				 }
				 echo "</ul>";				 
				 echo "</div>";
				 if($i%3==0){
					 echo "</div>";
				 }
				 $k++;
				$j++;
			}else{
				$k++;
				continue;
			} 
		} 
		/////////////////////////////////
		$j=0;$k=0;
		$count3=mysql_num_rows($query3);
		$arr=range(0,$count3-1);
		shuffle($arr);
		for($next=0;$next<$c;$next++){
			array_push($arr3,$arr[$next]);
		}
		sort($arr3);
		while($row=mysql_fetch_array($query3))
		{  
			if($j==$c){
				break;
			}
			if($k==$arr3[$j]){
				//拿到题
				//从数据库查询出来的字段
				 $quesID=$row["ID"];
				 $title=$row["title"];
				 if($i%3==0){
					 echo "<div class='row'>";
				 }
				 $i++;
				 echo "<div class='col-lg-4'><input type='hidden' name='title$i' value='$quesID'/><div>$i.$title</div>";
				 $_sub="select ID,name from cossy_option where question_ID=$quesID";
				 $query=mysql_query($_sub);
				 echo "<ul style='list-style-type:none'>";
				 $m=0;
				 while($row1=mysql_fetch_array($query)){
					$optionID=$row1["ID"];
					$option=$row1["name"];
					echo "<li><input type='checkbox' name='checkbox$i"."[]"."' value='$m'/>".chr(65+$m)."$option</li>";
					$m++;
				 }
				 echo "</ul>";				 
				 echo "</div>";
				 if($i%3==0){
					 echo "</div>";
				 }
				$j++;
				$k++;
			}else{
				$k++;
				continue;
			} 
		} 
		/////////////////////////////////////
		$j=0;$k=0;
		$count4=mysql_num_rows($query4);
		$arr=range(0,$count4-1);
		shuffle($arr);
		for($next=0;$next<$d;$next++){
			array_push($arr4,$arr[$next]);
		}
		sort($arr4);
		while($row=mysql_fetch_array($query4))
		{  
			if($j==$d){
				break;
			}
			if($k==$arr4[$j]){
				//拿到题
				//从数据库查询出来的字段
				 $quesID=$row["ID"];
				 $title=$row["title"];
				 if($i%3==0){
					 echo "<div class='row'>";
				 }
				 $i++;
				 echo "<div class='col-lg-4'><input type='hidden' name='title$i' value='$quesID'/><div>$i.$title</div>";
				 $_sub="select ID,name from cossy_option where question_ID=$quesID";
				 $query=mysql_query($_sub);
				 echo "<ul style='list-style-type:none'>";
				 $m=0;
				 while($row1=mysql_fetch_array($query)){
					$optionID=$row1["ID"];
					$option=$row1["name"];
					echo "<li><input type='checkbox' name='checkbox$i"."[]"."' value='$m'/>".chr(65+$m)."$option</li>";
					$m++;
				 }
				 echo "</ul>";				 
				 echo "</div>";
				 if($i%3==0){
					 echo "</div>";
				 }
				$j++;
				$k++;
			}else{
				$k++;
				continue;
			} 
		} 
		echo "</div>";
		mysql_close($link);
?>
</div>
<div id="done" style='display:none'><button type="button" class="btn btn-primary" onclick="uploads.submit();" style="width:200px;margin-top:50px;margin-bottom:30px;margin-left:900px">提交</button></div>
</form>
      </div>
      
      <script type="text/javascript">
		  var subj='<?php echo $subject?>';
		  var ver='<?php echo $version?>';
		  if(ver){
			var subs=document.getElementById("subject");
			var vers=document.getElementById("version");
			for(var i=0;i<subs.length;i++){
				if(subs[i].innerHTML==subj){
					subs[i].selected=true;
					break;
				}
			}
			for(var i=0;i<vers.length;i++){
				if(vers[i].innerHTML==ver){
					vers[i].selected=true;
					break;
				}
			}
			document.getElementById("done").style.display='block'; 
		  }
		  function makeTest(){
			var mysubject=document.getElementById("subject").value;
			var myversion=document.getElementById("version").value;
			if(mysubject!="请选择"&&myversion!="请选择"){
				window.location.href="level_judge.php?subject="+mysubject+"&version="+myversion;
			}
		  }
		  </script>
</body>
</html>
