<?php
header("content-type: text/html; charset=utf8");
?>
<?php
session_start();
$ID=$_SESSION['ID'];
$judgeID=$_POST['judgeid'];
$time=date("Y-m-d H:i:s",time());
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");
$_sql="select t.questionID from test_result t left join level_judging l on t.judgeID=l.ID where t.hit='F' and t.judgeID=$judgeID";
$query=mysql_query($_sql);
while($row=mysql_fetch_array($query)){
	$questionID=$row['questionID'];
	$sql="insert into myfaults(questionID,time,userID) values($questionID,'$time',$ID)";
	$query1=mysql_query($sql);
}
mysql_close($link);
echo json_encode(array("result"=>"yes"));
?>
