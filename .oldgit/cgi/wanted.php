<?php
header("content-type: text/html; charset=utf8");
?>
<?php
$subject=$_POST['subject'];
$grade=$_POST['grade'];
$question=$_POST['question'];
$score=$_POST['score'];
$content=$_POST['content'];
$ID=$_POST['myid'];
$time=date("Y-m-d H:i:s",time());
$path1=null;
//插入照片时限制大小
if($_FILES['picture']){
	$upload_file3=$_FILES['picture']['name'];
	$path1="/cgi/uploads/img/".$upload_file3;
	$content=preg_replace("/<img.+?>/is","<img src=''$path1'' style=''width:450px;height:150px''>",$content);
	move_uploaded_file($_FILES['picture']['tmp_name'],"./uploads/img/".$upload_file3);
}
//注意加时间戳，人名
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
$query="insert into wanted(subject,grade,title,number,done,time,addition,personID) values('$subject','$grade','$question',$score,'F','$time','$content',$ID)";  
mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");
$result=mysql_query($query);
if(!$result){
	die("Error:"+mysql_error);
}
mysql_close($link);
echo json_encode(array("result"=>"yes"));
?>
