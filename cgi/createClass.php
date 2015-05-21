<?php
header("content-type: text/html; charset=utf8");
?>
<?php
$lastUrl=$_POST['yincang'];
session_start();
$usertype=$_SESSION["type"];
$ID=$_SESSION["ID"];
$classname=$_POST['classname'];
$introduce=$_POST['introduce'];
$master=$_POST['master'];
$subject=$_POST['subject'];
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");
if($usertype=="teacher"){
	$query="insert into virtual_class(name,master,time,introduce,subject) values('$classname',$master,'".date("y-m-d",time())."','$introduce','$subject')";
	$result=mysql_query($query);
	if(!$result){
		die("Error:"+mysql_error);
	}
	echo "<script type='text/javascript'>alert('创建成功')</script>";
}else{
	//注册为学生
	$query1="insert into virtual_class(name,time,introduce,subject) values('$classname','".date("y-m-d",time())."','$introduce','$subject')";
	$result=mysql_query($query1);
	if(!$result){
		die("Error:"+mysql_error);
	}
	$q_ID=mysql_insert_id();
	//发送邀请给老师
	$query2="insert into message(src,dst,time,event,done,srctype,dsttype) values($ID,$master,'".date("y-m-d",time())."','class_".$q_ID."','F','student','teacher')";
	$result=mysql_query($query2);
	if(!$result){
		die("Error:"+mysql_error);
	}
	echo "<script type='text/javascript'>alert('创建成功，邀请已发送老师')</script>";
}
mysql_close($link);
?>
<script type="text/javascript">
	window.location.href='<?php echo $lastUrl?>';
</script>
