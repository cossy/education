<?php error_reporting(0);?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>注册</title>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<?php
   session_start();
if(!$_SESSION["ID"]){
	echo "<script type='text/javascript'>alert('请先登录')</script>";
	echo "<script type='text/javascript'>window.location.href='/ulogin.php'</script>";
}
	$gourl = $_SERVER['HTTP_REFERER'];
?>
<style>
	body{
		padding-top:20px;
		padding-bottom:60px;
	}
	.container{
		margin:0 auto;
		max-width:1000px;
	}
	.container > hr{
		margin:60px 0;
	}
	.jumbotron{
		margin:80px 0;
		text-align:center;
	}
	.jumbotron h1{
		font-size:100px
		line-height:1;
	}
	.jumbotron .lead{
		font-size:24px
		line-height:1.25;
	}
	.jumbotron .btn{
		font-size:21px
		padding:14px 24px;
	}
	.marketing{
		margin:60px 0;
	}
	.marketing p + h4{
		margin-top:28px;
	}
	.navbar .navbar-inner{
		padding:0;
	}
	.navbar .nav{
		margin:0;
		display:table;
		width:100%;
	}
	.navbar .nav li{
		display:table-cell;
		width:1%;
		float:none;
	}
	.navbar .nav li a{
		font-weight:bold;
		text-align:center;
		border-left:1px solid rgba(255,0,255,.75);
		border-right:1px solid rgba(0,0,0,.1);
	}
	.navbar .nav li:first-child a{
		border-left:0;
		border-radius:3px 0 0 3px;
	}
	.navbar .nav li:last-child a{
		border-right:0;
		border-radius:0 3px 3px 0;
	}
	.form-signin{
		max-width:300px;
		padding:19px 29px 29px;
		margin:0 auto 20px;
		background-color:#fff;
		border:1px solid #e5e5e5;
		-webkit-border-radius:5px;
		-moz-border-radius:5px;
		border-radius:5px;
		-webkit-box-shadow:0 1px 2px rgba(0,0,0,.05);
		-moz-box-shadow:0 1px 2px rgba(0,0,0,.05);
		box-shadow:0 1px 2px rgba(0,0,0,.05);
	}
	.form-signin .form-signin-heading,
	.form-signin .checkbox{
		margin-bottom:10px;
	}
	.form-signin input[type="text"],
	.form-signin input[type="password"]{
		font-size:16px;
		height:auto;
		margin-bottom:15px;
		padding:7px 9px;
	}
</style>
<?php
		$gourl = $_SERVER['HTTP_REFERER'];
		session_start();
		$usertype=$_SESSION["type"];
		$username=$_SESSION["name"];
		$userID=$_SESSION["ID"];
?>
 <link href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (注册) -->
<div class="container">
				<form class="form-horizontal" action="cgi/createClass.php" method="post">
				<div style="border:1px solid #FFEBCD">
 <div class="control-group" style="margin-left:100px">
    <label class="control-label" for="inputEmail">班级名称</label>
    <div class="controls">
      <input type="text" id="checknum" name="classname" placeholder="例如：语文111" style="height:30px;width:300px"/>
    </div>
  </div>
					<div class="control-group" style="margin-left:100px">
    <label class="control-label" for="phonenum"></i>班级介绍:</label>
    <div class="controls">
		<textarea class="form-control" rows="3" name="introduce" placeholder="对班级的简单介绍..."></textarea>
    </div>
  </div>
  <div class="control-group" style="margin-left:100px">
    <label class="control-label" for="nickname">班主任:</label>
    <div class="controls">
      <select id="master" name="master" style="width:100px">
		  	<?php
		  	if($usertype=="student"){
				$link = mysql_connect('localhost','cossy','6207486010');
				if (!$link) {
				  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
				  exit;
				}
				$_sql="select * from teacher";
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
					 $name=$row["nickname"];
				//将数据放到html的表格中
				   echo  "<option value='$ID'>$name</option>";
				}
				mysql_close($link);
			}else{
				echo "<option value='$userID'>$username</option>";
			}
?>
	  </select>
    </div>
  </div>
 <div id="t_first" class="control-group" style="margin-left:100px">
    <label class="control-label">所属科目</label>
    <div class="controls">
      <select id="subject" name="subject" style="width:100px">
          <option>请选择</option>
          <option>语文</option>
          <option>数学</option>
          <option>英语</option>
          <option>物理</option>
          <option>化学</option>
          <option>生物</option>
          <option>政治</option>
          <option>历史</option>
          <option>地理</option>
          </select>
    </div>
  </div>
  <button class="btn btn-success" type="submit" style="margin-left:250px;width:90px"><span class="glyphicon glyphicon-plus" aria-hidden="true"><strong>创建</strong></button>
   </div>
   <input type="hidden" name="yincang" value="<?php echo $gourl ?>">
				</form>
			
			
<span class="text-warning" id="span1" style="position:absolute;top:-20px;left:-20px"></span>
<span class="text-warning" id="span2" style="position:absolute;top:-20px;left:-20px"></span>
<span class="text-warning" id="span3" style="position:absolute;top:-20px;left:-20px"></span>
<span class="text-warning" id="span4" style="position:absolute;top:-20px;left:-20px"></span>
		</div>
		
  
<!-- End Save for Web Slices -->
</body>
</html>
