<?php
header("content-type: text/html; charset=utf8");
?>
<?php
$ID=$_GET['id'];
$classID=$_GET['classid'];
$type=$_GET['type'];
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");
$query="";
if($type=="teacher"){
	$query="update virtual_class set online='F' where ID=$classID"; 
}else{
	$query="update student_class set online='F' where userID=$ID and classID=$classID";
} 
$result=mysql_query($query);
echo json_encode(array("result"=>"yes")); 
mysql_close($link);
?>
