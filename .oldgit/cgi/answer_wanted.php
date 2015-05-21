<?php
header("content-type: text/html; charset=utf8");
?>
<?php
$answer=$_POST['answer'];
$ID=$_POST['id'];
$myID=$_POST['myid'];
$path1=null;
$path2=null;
$time=date("Y-m-d H:i:s",time());
$answer1=$answer;
$answer2=$answer;
if($_FILES['audio']){
	$upload_file1=$_FILES['audio']['name'];
	$path1="/cgi/uploads/audio/".$upload_file1;
	$answer1=preg_replace("/<source.+><\/audio>/is","<source src=''$path1''></audio>",$answer);
	$answer2=preg_replace("/<source.+><\/audio>/is","<source src='$path1'></audio>",$answer);
	move_uploaded_file($_FILES['audio']['tmp_name'],"./uploads/audio/".$upload_file1);
}
if($_FILES['picture']){
	$upload_file2=$_FILES['picture']['name'];
	$path2="/cgi/uploads/img/".$upload_file2;
	$answer1=preg_replace("/<img.+?>/is","<img src=''$path2'' style=''width:450px;height:150px''>",$answer1);
	$answer2=preg_replace("/<img.+?>/is","<img src='$path2' style='width:450px;height:150px'>",$answer2);
	move_uploaded_file($_FILES['picture']['tmp_name'],"./uploads/img/".$upload_file2);
}  
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");
$query="select nickname from student where ID=$myID";
$result=mysql_query($query);
$name="";
if($row=mysql_fetch_array($result)){
	$name=$row['nickname'];
}

$query="insert into answer(answerID,questionID,answer,time) values($myID,$ID,'$answer1','$time')";  
$result=mysql_query($query);
if(!$result){
	die("Error:"+mysql_error);
}
mysql_close($link);
echo json_encode(array("result"=>"yes","content"=>$answer2,"name"=>$name,"time"=>$time));
?>

