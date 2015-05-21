<?php
header("content-type: text/html; charset=utf8");
?>
<?php
$wantedID=$_POST['wantedid'];
$answerID=$_POST['answerid'];
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");
$_sql="update wanted set done='T',agreeID=$answerID where ID=$wantedID";
$query=mysql_query($_sql);
mysql_close($link);
echo json_encode(array("result"=>"yes"));
?>
