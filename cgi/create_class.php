<?php 
header("content-type:text/html;charset=utf8");
?>
<?php
/*$name=$_POST['name'];
$hash=$_POST['hash'];
$myIP=gethostbyname($_ENV('COMPUTERNAME'));
$link=mysql_connect('localhost','cossy','6207486010');
if(!$link){
  printf("Can't connect to MYSQL Server.Errorcode:%s",mysql_connect_error());
  exit;
}
mysql_select_db("pengbo",$link);
mysql_query("set name 'utf8'");
$sql="insert into video(name,url) values('$name',$myID.':8081/student'.$hash)";
$query=mysql_query($sql);
mysql_close($link);*/
echo json_encode(array("result"=>"yes"));
?>
