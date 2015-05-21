<?php error_reporting(0);?>
<?php
	
/*
PHP 写的 WebSocket 在线聊天室
使用 需要修改
./index.php
WS_STATIC_URL
WS_HOST

./server/config.php
WEBSOCKET_HOST
ADMIN_PASS  管理员登录能使用 die 结束掉 php 进程  登录 管理员 输入名称的时候 恋月,123456  123456 = 密码 然后发送die 能结束掉php 进程

Linux 需要 root 权限 运行
IIS 直接url 访问 
./server/index.php 就能开启聊天室了

*/









?>
<!DOCTYPE html>
<html dir="ltr" lang="zh" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>WebSocket 在线聊天室</title>
<link rel="stylesheet" href="./static/style.css" type="text/css" media="all" />
<script type="text/javascript" src="./static/jquery.js"  media="all"></script>
<script type="text/javascript" src="./static/jquery.websocket.js"  media="all"></script>
<?php
		session_start();
		$name=$_SESSION["name"];
		$ID=$_SESSION["ID"];
		$type=$_SESSION["type"];
		$classID=$_GET["classID"];
		$tname="";
		$online="";
		$link = mysql_connect('localhost','cossy','6207486010');
		if (!$link) {
			printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
			exit;
		}
		mysql_select_db("pengbo",$link);
		mysql_query("set names 'utf8'");
		$query="select t.nickname,vc.online from virtual_class vc,teacher t where vc.master=t.ID and vc.ID=$classID"; 
		$result=mysql_query($query);
		if(!$result){
			die("Error:"+mysql_error);
		}
		if($row=mysql_fetch_array($result)){
			$tname=$row['nickname'];
			$online=$row['online'];
		}  
		?>
<script type="text/javascript">
WS_STATIC_URL = 'http://127.0.0.1/websocket/static';
WS_HOST = '127.0.0.1';
WS_PORT = 843;
var tname='<?php echo $tname ?>';
var myname='<?php echo $name ?>';
var myclassid='<?php echo $classID ?>';
$(function(){
	var t = $('.message');
	$.wsmessage( 'msg', function( data ){
		//接收状态信息
		//t.append(data);
		if($(data).attr('class')=="msg login"){
			var temp=$(data).children("strong").get(0).innerHTML;
			var name=temp.split('_')[0];
			var classid=temp.split('_')[1];
			if(classid==myclassid){
				if(name==tname){
					//老师登录
					document.getElementById('list1').innerHTML=name;
				}else{
					var w = $( '<li>' +name + '</li>' ).click(function(){
						$('.send .chat').val( '@' + name + ' ' );
					});
					$('.list2').append(w);
					//遍历节点找到该节点，删除
					$/*('.list3 > li').each(function(){
						
						if($(this).html()==name){
							$('.list3').empty();
						}
					});*/
					var childrens = document.getElementById("list3").childNodes;
					var len = childrens.length;
					for(var i=0;i<len-1;i++){
						alert(childrens[i+1].innerHTML);
						if(childrens[i+1].innerHTML==name){
							document.getElementById("list3").removeChild(childrens[i+1]);
							break;
						}
					}
					$('.online').html( $('.list2 li').size() );
					$('.outline').html( $('.list3 li').size() );
				}
				data="<div class='msg login'><strong class='name'>"+name+"</strong>登录聊天室</div>";
				t.append( data);
			}
		}else if($(data).attr('class')=="msg logout"){
			var temp=$(data).children("strong").get(0).innerHTML;
			var name=temp.split('_')[0];
			var classid=temp.split('_')[1];
			if(classid==myclassid){
				if(name==tname){
					//老师登出
					document.getElementById('list1').innerHTML="";
				}else{
					var w = $( '<li>' +name + '</li>' ).click(function(){
							$('.send .chat').val( '@' + name + ' ' );
						});
					$('.list3').append(w);
					//遍历节点找到该节点，删除
					/*$('.list2 > li').each(function(){
						if($(this).html()==name){
							$('.list2').empty();	
						}
						
					});*/
					var childrens = document.getElementById("list2").childNodes;
					var len = childrens.length;
					for(var i=0;i<len-1;i++){
						if(childrens[i+1].innerHTML==name){
							document.getElementById("list2").removeChild(childrens[i+1]);
							break;
						}
						
					}
					$('.online').html( $('.list2 li').size() );
					$('.outline').html( $('.list3 li').size() );
				}
				data="<div class='msg logout'><strong class='name'>"+name+"</strong>离开聊天室</div>";
				t.append( data);
			
			}
		}
		else if($(data).attr('class')=="msg yes"){
				//个人登录信息
			t.append( data);
		}
		$('.message').animate( { scrollTop: $('.message')[0].scrollHeight } ,0 );
	});
	
	$.wsmessage( 'chat', function( data ){
		//接收其他人说话
		//根据班级屏蔽消息
		var temp=$(data).children("div").get(0).innerHTML;
		var content=$(data).children("p").get(0).innerHTML;
		var name=temp.split('_')[0];
		var classid=temp.split('_')[1];
		if(classid==myclassid){
			data="<div class='chat'><div class='name'>"+name+"</div><p>"+content+"</p></div>";
			t.append( data);
		}
		$('.message').animate( { scrollTop: $('.message')[0].scrollHeight } ,0 );
	});
	
	$.wsmessage( 'name', function( data ) {
		if ( data) {
			$('.msg.info.name').remove();
		}
		
	});
	
	$.wsmessage( 'list', function( data ) {
		if ( !data ) {
			return false;
		}
		$.each( data, function( k, v ){
			if ( v[1] ) {
				/*var w = $( '<li>' + v[0] + '</li>' ).click(function(){
					$('.send .chat').val( '@' + v[0] + ' ' );
				});
				/*var childrens = document.getElementById("list3").childNodes;
				var len = childrens.length;
				var flag="true";
				for(var i=0;i<len;i++){
					if(childrens[i].nodeName=='LI'){
						if(childrens[i].innerHTML.substr(0,childrens[i].innerHTML.length-6)==v[0]){
							document.getElementById("list3").remove(childrens[i]);
							flag="false";
							break;
						}
					}
				}
				if(flag=="false"){
					$('.list2').append(w);
				}
			
				var list1=document.getElementById("list1");
				if(list1.innerHTML==""){
					list1.innerHTML=v[0]; 
				}*/
			} else {
				$(".list ul li").each(function(){
					if ( $(this).html() == v[0] ) {
						$(this).remove();
						return false;
					}
				});
			}
		});
		$('.online').html( $('.list2 li').size() );
		$('.outline').html( $('.list3 li').size() );
	});
	$.wsclose(function( data ){
		$(".list2 li").html('');
		$(".list3 li").html('');
		$('.online').html( 0 );
		$('.outline').html( 0 );
		//alert("确定要离开吗？");
		t.append( '<div class="msg info">连接已断开, 6秒后自动重试</div>' );
	});
	
	
	$.wsopen( function( data ) {
		//个人上线，更改数据库，
		<?php
		$link = mysql_connect('localhost','cossy','6207486010');
		if (!$link) {
			printf("Can't connect to MySQL Server. Errorcode: %s ", mysql_connect_error());
			exit;
		}
		mysql_select_db("pengbo",$link);
		mysql_query("set names 'utf8'");
		if($type=="teacher"){
			$query="update virtual_class set online='T' where ID=$classID"; 
		}else{
			$query="update student_class set online='T' where userID=$ID and classID=$classID";
		} 
		$result=mysql_query($query);
		if(!$result){
			die("Error:"+mysql_error);
		}
		?>
		var value="<?php echo $name?>";
		var classid="<?php echo $classID?>";
		$.wssend('name='+value+"_"+classid);
	});
	
	
	
	
	$('.send .submit').click(function(){
		if ( $('.send .chat').val() ) {
			
			$.wssend($.param( { chat : $('.send .chat').val() } ) );
			$('.send .chat').val('');
		}
		return false;
	});
	$('.send  .chat').keydown(function (e) {
		if ( ( e.ctrlKey && e.keyCode == 13 ) || ( e.altKey && e.keyCode == 83 ) ) {
			$('.send .submit').click();
			return false;
		}
	})
	
	$('.tool .empty').click(function(){
		t.html('');
	})
});
</script>
<?php
$classID=$_GET["classID"];
?>
</head>
<body onunload="unloadDestorySession()">
<div class="content">
	<div class="message"></div>
	<div class="tool">
		<span class="empty">清空记录</span>
	</div>
	<div class="send">
		<textarea class="chat" name="chat" id="chat"></textarea>
		<p><input type="submit" class="submit" name="submit" value="发送" /></p>
	</div>
	<div class="list">
		<h3>班主任</h3>
		<div onclick="document.getElementById('chat').value+='@'+this.innerHTML" id='list1'><?php 
		if($type=='teacher'){
			if($name==$tname){
				echo $tname;
			}
		}else{
			if($online=='T'){
				echo $tname;
			}
		}
		?></div>
		<h3>在线学生<strong class="online">0</strong></h3>
		<ul class="list2" id="list2">
		<?php	
			$query="select s.nickname,sc.online from student_class sc,student s where sc.classID=$classID and sc.userID=s.ID and sc.online='T'"; 
			$result=mysql_query($query);
			while($row=mysql_fetch_array($result))
			{  
				//从数据库查询出来的字段
				 $name=$row["nickname"];
			//将数据放到html的表格中
				 echo  "<li onclick='p2p(this.innerHTML)'>";
				 echo $name;
				 echo "</li>";
			}
			
			?>
		</ul>
		<h3>离线学生<strong class="outline">0</strong></h3>
		<ul class="list3" id="list3">
		<?php			
			$query="select s.nickname,sc.online from student_class sc,student s where sc.classID=$classID and sc.userID=s.ID and sc.online='F'"; 
			$result=mysql_query($query);
			while($row=mysql_fetch_array($result))
			{  
				//从数据库查询出来的字段
				 $name=$row["nickname"];
			//将数据放到html的表格中
			    echo  "<li onclick='p2p(this.innerHTML)'>";
				 echo $name;
				 echo "</li>";
			}
			mysql_close($link);
			?>
		</ul>
	</div>
</div>
<script type='text/javascript'>
	function p2p(value){
		document.getElementById('chat').value+='@'+value;
	}
	</script>
<script language="javascript" type="text/javascript">
     var httpRequests = false;  
     var httpRequest=false;
     var classid="<?php echo $classID?>";
	var id="<?php echo $ID?>";
	var type="<?php echo $type?>";
    var myurl="/cgi/logout.php?id="+id+"&classid="+classid+"&type="+type; 
        function alertContents()
   {
    if( httpRequests.readyState == 4 )
    {
     if( httpRequests.status == 200 )
     {
      //alert( httpRequest.responseText );
     }
     else
     {
      alert( 'Page error' );
     }
    }
   }
        window.onbeforeunload =function(event){
			httpRequests = false;
   
			if( window.XMLHttpRequest )
			{
			 httpRequests = new XMLHttpRequest();
			 if( httpRequests.overrideMimeType )
			 {
			  httpRequests.overrideMimeType( "text/xml" );
			 }
			}
			else if( window.ActiveXObject )
			{
			 try
			 {
			  httpRequests = new ActiveXObject( "Msxml2.XMLHTTP" );
			 }
			 catch( e )
			 {
			  try
			  {
			   httpRequests = new ActiveXObject( "Microsoft.XMLHTTP" );
			  }
			  catch( e )
			  {
			  }
			 }
			}
		   
			if( !httpRequests )
			{
			 alert( 'Can\'t create XMLHTTP instance' );
			}
		   
			httpRequests.onreadystatechange = alertContents;    // 立即执行数据回收
			httpRequests.open( "GET", myurl, true );
			httpRequests.send();
			
        }
   
 
</script>

</body>
</html>
