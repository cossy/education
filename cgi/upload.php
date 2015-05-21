<?php
header("content-type: text/html; charset=utf8");
?>
<?php
$subject=$_POST['subject'];
$grade=$_POST['grade'];
$edition=$_POST['edition'];
$price=$_POST['price'];
$hard_level=$_POST['hard_level'];
$doc_type=$_POST['doc_type'];
$upload_file3=$_FILES['upload_file3']['name'];
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
if(!move_uploaded_file($_FILES['upload_file3']['tmp_name'],"./uploads/upload/".$upload_file3)){ 
	echo "error"; 
} 


$query="insert into t_upload(time,subject,grade,version,price,level,type,resource) values('".date("y-m-d",time())."','$subject','$grade','$edition','$price','$hard_level','$doc_type','./uploads/$upload_file3')";  
mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");
$result=mysql_query($query);
if(!$result){
	die("Error:"+mysql_error);
}
mysql_close($link);
?>
<script type="text/javascript">
	alert("上传成功！");
	window.location.href='/uploadinfo.php';
</script>
