<?php
header("content-type: text/html; charset=utf8");
?>
<?php
$lastUrl=$_POST['yincang'];
$usertype=$_POST['usertype'];;
$phonenum=$_POST['phonenum'];
$nickname=$_POST['nickname'];
$inputPassword=$_POST['inputPassword'];
$sheng=$_POST['s1'];
$shi=$_POST['s2'];
$qu=$_POST['s3'];
$school=$_POST['school'];
$level=$_POST['level'];
$subject=$_POST['subject'];
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
$query="";
if($usertype=="student"){
	$query="insert into student(phone,nickname,password,sheng,shi,qu,school,grade,gold,section) values('$phonenum','$nickname','$inputPassword','$sheng','$shi','$qu','$school','$level',50,'青铜')";  	
}else{
	$query="insert into teacher(phone,nickname,password,subject,gold) values('$phonenum','$nickname','$inputPassword','$subject',30)";  	
}

mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");
$result=mysql_query($query);
if(!$result){
	die("Error:"+mysql_error);
}
mysql_close($link);
session_start();
$_SESSION["type"]=$usertype;
$_SESSION["name"]=$nickname;
$_SESSION["ID"]=mysql_insert_id();
?>
<script type="text/javascript">
	alert("注册成功！");
	var url='<?php echo $lastUrl?>';
	if(url==""){
		window.location.href="/home.php";
	}else{
		window.location.href=url;
	}
</script>
