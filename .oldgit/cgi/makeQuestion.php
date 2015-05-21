<?php
header("content-type: text/html; charset=utf8");
?>
<?php
$index=$_POST['mysubject'];
$subject="";
switch ($index)
{
case 1:
  $subject="语文";
  break;  
case 2:
  $subject="数学";
  break;
case 3:
  $subject="英语";
  break;
case 4:
  $subject="物理";
  break;
case 5:
  $subject="化学";
  break;
case 6:
  $subject="历史";
  break;
case 7:
  $subject="政治思品";
  break;
case 8:
  $subject="地理";
  break;
case 9:
  $subject="生物";
  break;
default:
  break;
}
$type=$_POST['type'.$index];
$grade=$_POST['grade'];
$edition=$_POST['edition'];
$hard_level=$_POST['hard_level'];
$question=$_POST['question'];
$score=$_POST['score'];
$answer=$_POST['answer'];
session_start();
$teacher_ID=$_SESSION["ID"];
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");

$query="insert into question(title,type,level,score,subject,grade,version,answer,time,teacherID) values('$question','$type','$hard_level','$score','$subject','$grade','$edition','$answer','".date("y-m-d",time())."','$teacher_ID')"; 
$result=mysql_query($query);
if(!$result){
	die("Error:"+mysql_error);
}
$q_ID=mysql_insert_id();
$i=1;
if($_POST['sub_question1']){
	while($_POST['sub_question'.$i]){
		$name=$_POST['sub_question'.$i];
		$sub_score=$_POST['score'.$i];
		$query="insert into sub_question(name,question_ID,score) values('$name',$q_ID,$sub_score)";
		$result= mysql_query($query);
		if(!$result){
			die("Error:"+mysql_error);
		}
		$s_q_ID=mysql_insert_id();
		if($_POST['judge'.$i]){
			$arr=$_POST['judge'.$i];
			$j=1;
			while($_POST['option'.$i."_".$j]){
				$op=$_POST['option'.$i."_".$j];
				$nice="";
				if(in_array($j,$arr)){
					$nice="T";
				}else{
					$nice="F";
				}
				$query="insert into cossy_option(name,question_ID,nice) values('$op',$s_q_ID,'$nice')";
				$result=mysql_query($query);
				if(!$result){
					die("Error:"+mysql_error);
				}
				$j++;
			}
		}
		$i++;
	}
}else{
	//选项问题ID插入题干ID
	if($_POST['judge0']){
		$j=1;
		$arr=$_POST['judge0'];
		while($_POST['option0_'.$j]){
			$op=$_POST['option0_'.$j];
			$nice="";
			if(in_array($j,$arr)){
				$nice="T";
			}else{
				$nice="F";
			}
			$query="insert into cossy_option(name,question_ID,nice) values('$op',$q_ID,'$nice')";
			$result=mysql_query($query);
			if(!$result){
				die("Error:"+mysql_error);
			}
			$j++;
		}
	}
}
mysql_close($link);
?>
<script type="text/javascript">
	alert("上传成功！");
	window.history.go(-1);
</script>
