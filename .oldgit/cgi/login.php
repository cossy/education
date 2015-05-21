<?php
header("content-type: text/html; charset=utf8");
?>
<?php
$lastUrl=$_POST['yincang'];
$name=$_POST['myname'];
$regex = '/\d{11}/';
$matches = array(); 
$password=$_POST['password'];
$usertype=$_POST['usertype'];
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
$query="";
$table=$usertype;
if(preg_match($regex, $name, $matches)){
	$query="select * from $table where phone='$name' and password='$password'";  	
}else{
	$query="select * from $table where nickname='$name' and password='$password'";  	
}
mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");

$result=mysql_query($query);
if($row= mysql_fetch_array($result)){  
     $name=$row["nickname"];
     session_start();
	 $_SESSION["type"]=$usertype;
	 $_SESSION["name"]=$name;
	 $_SESSION["ID"]=$row["ID"];
}else{
	echo "<script type='text/javascript'>alert('用户名或密码错误')</script>";
	echo "<script type='text/javascript'>history.back(-1)</script>";
}
mysql_close($link);
?>
<script type="text/javascript">
	alert("登录成功！");
	var url='<?php echo $lastUrl?>';
	if(url==""){
		window.location.href="/home.php";
	}else{
		window.location.href=url;
	}
</script>
