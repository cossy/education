<?php
header("content-type: text/html; charset=utf8");
?>
<?php
$subject=$_POST["subject"];
$version=$_POST["version"];
$grade=$_POST["grade"];
$section=$_POST["section"];
$userID=$_POST["userid"];
$link = mysql_connect('localhost','cossy','6207486010');
$time=date("Y-m-d H:i:s",time());
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");
$i=1;
$count=0;
$result=array();
while($i<11){
	$title=$_POST['title'.$i];
	$options = array(); 
	$options= $_POST['checkbox'.$i]; 
	$_sql="select nice from cossy_option where question_ID=$title";
	$query=mysql_query($_sql);
	$j=0;
	$k=0;
	while($row=mysql_fetch_array($query)){
		if($j==$options[$k]){
			if($row['nice']=='T'){
				$j++;
				$k++;
				continue;
			}else{
				break;
			}
		}else{
			if($row['nice']=='F'){
				$j++;
				continue;
			}else{
				break;
			}
		}
	}
	if($j==4){
		$result[$title]='T';
		$count++;
	}else{
		$result[$title]='F';
	}
	$i++;
} 
//echo $count;
$result_section=$section;
if($count>=9){
	switch ($section)
		{
		case '青铜':
		 $result_section='白银';
		  break;  
		case '白银':
		  $result_section='黄金';
		  break;
		case '黄金':
		   $result_section='钻石';
		  break;
		case '钻石':
		 $result_section='王者';
		  break;
		case '王者':
		  $result_section='王者';
		  break;
	}
	echo "<script type='text/javascript'>alert('答对".$count."题，恭喜您升为".$result_section."')</script>";
}else{
	$count1=10-$count;
	echo "<script type='text/javascript'>alert('答对".$count."题，答错".$count1."道')</script>";	
}
$_sql="insert into level_judging(userID,subject,version,result_section,time,grade) values($userID,'$subject','$version','$result_section','$time','$grade')";
$query=mysql_query($_sql);
if(!$query){
	echo $_sql;
}
$judgeID=mysql_insert_id();
foreach($result as $questionID=>$r){
	$_sql="insert into test_result(judgeID,questionID,hit) values($judgeID,$questionID,'$r')";
	$query=mysql_query($_sql);
}
mysql_close($link);

?>
<script type="text/javascript">
	var judgeID="<?php echo $judgeID?>";
	window.location.href="/judge_result.php?judgeid="+judgeID;
</script>
