<?php
header("content-type: text/html; charset=utf8");
?>
<?php
$bound=$_GET['bound'];
$link = mysql_connect('localhost','cossy','6207486010');
if (!$link) {
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
  exit;
}
mysql_select_db("pengbo",$link);
mysql_query("set names 'utf8'");
//
$_sql="select s.nickname,m.ID,m.dst,m.time,m.event from message m left join student s on m.src=s.ID where m.done='F' and m.srctype='student' and m.dsttype='teacher' and m.ID>$bound";
$query=mysql_query($_sql);
if(!$query){
	die("Error:"+mysql_error);
}
$messages=array(); 
$i=0; 
while($row=mysql_fetch_array($query)){
	$array=explode("_",$row['event']);
	$event="";
	$method="";
	if($array[0]=="class"){
		$_sql="select name from virtual_class where ID=$array[1]";
		$result1=mysql_query($_sql);  
		$classname="";
		if($row1=mysql_fetch_array($result1)){
			$classname=$row1['name'];	
		}
		$event=$row['nickname'].'邀请您加入'.$classname;	
		$method='add';
	}
	
	$list=array("srcname"=>$row['nickname'],"dst"=>$row['dst'],"time"=>$row['time'],"event"=>$event,"method"=>$method,"msgID"=>$row['ID']); 
	$messages[$i]=$list;
	$i++;
}
echo json_encode($messages); 
mysql_close($link);

?>
