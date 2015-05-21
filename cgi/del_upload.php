<?php
header("content-type: text/html; charset=utf8");
?>
<?php
$id=$_GET['id'];
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
$query="delete from t_upload where ID=$id";  
mysql_select_db("pengbo",$link);
$result=mysql_query($query);
if(!$result){
	die("Error:"+mysql_error);
}

mysql_close($link);
?>
<script type="text/javascript">
	alert("删除成功！");
	window.location.href='/upload_manage.php';
</script>
