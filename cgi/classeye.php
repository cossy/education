<?php
header("content-type: text/html; charset=utf8");
?>
<?php
$ID=$_GET['id'];
$classID=$_GET['classid'];
$msgID=$_GET['msgid'];
$link = mysql_connect('localhost','cossy','6207486010');
$time=date("Y-m-d H:i:s",time());
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");
$_sql1="update virtual_class set master=$ID where ID=$classID";
$_sql2="update message set done='T',time='$time' where ID=$msgID";
$query1=mysql_query($_sql1);
$query2=mysql_query($_sql2);
mysql_close($link);
?>
<script type="text/javascript">
	alert("已同意加入");
	history.back(-1);
	</script>
