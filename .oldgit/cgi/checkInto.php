<?php
header("content-type: text/html; charset=utf8");
?>
<script type="text/javascript">
	var query="";
	</script>
<?php
$classID=$_GET['classID'];
session_start();
$ID=$_SESSION["ID"];
$usertype=$_SESSION["type"];
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
$query="";
if($usertype=="teacher"){
	$query="select * from virtual_class where master=$ID and ID=$classID"; 
}else{
	$query="select * from student_class where userID=$ID and classID=$classID";  
}
mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");
$result=mysql_query($query);
$query1="select * from virtual_class where ID=$classID";
$result1=mysql_query($query1);
$row1= mysql_fetch_array($result1);
$master=$row1["master"];
$newQuery=null;
//echo "<script type='text/javascript'>alert('".$ID."')</script>";
if(!mysql_fetch_array($result)){  
     //用户不是该班成员
     echo "<script type='text/javascript' runat='server'>if(confirm('是否加入该班级?')){
	}else{history.go(-1)}</script>";
	if($usertype=='teacher'){
		 if($master){
			echo "<script type='text/javascript'>alert('该班已有班主任')</script>";
			echo "<script type='text/javascript'>history.back(-1)</script>";
		 }else{
			$newQuery="update virtual_class set master=$ID where ID=$classID"; 
		}
	}else{
		$newQuery="insert into student_class(userID,classID,online) values($ID,$classID,'F')"; 
	}
	if($newQuery){
		$result=mysql_query($newQuery);
		echo "<script type='text/javascript'>window.location.href='/websocket/index.php?classID=$classID'</script>";
	}
}else{
	echo "<script type='text/javascript'>window.location.href='/websocket/index.php?classID=$classID'</script>";
}
mysql_close($link);
?>

