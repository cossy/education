<?php
header("content-type: text/html; charset=utf8");
?>
<?php
$ID=$_POST['myid'];
$phone=$_POST['phone_num'];
$name=$_POST['nickname'];
$password=$_POST['inputPassword'];
$sheng=$_POST['s1'];
$shi=$_POST['s2'];
$qu=$_POST['s3'];
$school=$_POST['school'];
$grade=$_POST['level'];
$upload_file3=$_FILES['upload_file3']['name'];
$link = mysql_connect('localhost','cossy','6207486010');
if(!$link){
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
if(!move_uploaded_file($_FILES['upload_file3']['tmp_name'],"/cgi/uploads/img/".$upload_file3)){ 
	echo "error"; 
} 
$query="update student set phone='$phone',nickname='$name',password='$password',sheng='$sheng',shi='$shi',qu='$qu',school='$school',grade='$grade',img='/cgi/uploads/img/$upload_file3' where ID=$ID";  
mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");
$result=mysql_query($query);
if(!$result){
	die("Error:"+mysql_error);
}
mysql_close($link);
?>
<script type="text/javascript">
	alert("修改成功！");
	window.location.href='/s_userinfo.php';
</script>
