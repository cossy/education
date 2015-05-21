<?php
header("content-type: text/html; charset=utf8");
?>
<?php
$name=$_GET['name'];
$url=$_GET['url'];
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");
$_sql="insert into video values('$name','$url')";
$query=mysql_query($_sql);
if($query){
	echo json_encode(array("result"=>"yes"));
}
mysql_close($link);
?>
