<?php include('server.php'); 
if(empty($_SESSION['username'])){
	header('location: login.php');
}
	echo "<script>var current_user='".$_SESSION['username']."';</script>";
?>
<html>
<head>
<script src="//code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="chat1.js"></script>
  <script src="chat3.js"></script>
  <link href="chat1.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header1">
	<font size="5" face="Open sans"><h2>Chat Application</h2></font>
	</div>
	<div class="content">
	<table>
		<tr>
		<td style="width:91%">
		<?php if (isset($_SESSION["username"])): ?>
		<font size="3" face="Open sans" color="rgb(1, 6, 36)"><p><h2 style="text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h2></u></p></font>
			</td>
			<td style="width:50%;">
			<button class="btn" onclick="window.location.href='index.php';"><i class="fa fa-home"></i> Home</button><br></td>
			<td>
			<form class="form2" method="POST" action="private.php">
			<button type="submit" name="logout1" class="btn" method=POST>Logout</button>
			</form>
			</td>
			</tr>
	</table>
	<br><br>
	 
		<?php endif ?>
		<?php if (isset($_SESSION["username"])): ?>
		<div class="chat">
		<div class="users">
		<?php 
		include("users.php");
		?>
		</div>
		 <div class="chatbox">
		 
		 <h3 style="text-align:center" id="user_name"></h3><br>
		 
			 <div class='msgs'>
			 </div>
			 <form id="msg_form">
				 <table>
					 <tr>
						 <td style="width:100%;">
			  <input name="msg" style="height:6%;font-size:15px;width:97%;" type="text"/></td>
			  <td>
			  <button id="send_button">Send</button>
</td></tr></table>
			 </form>
		 </div>
		 
		 <div class="chatbox">

 			<h3 style="text-align:center"><strong>
				FILE TRANSFER
			</strong></h3><br>
			
			<div class='msgs1'>
			
			</div>

		<form id="msg_form" method="post" enctype="multipart/form-data">
		<font size="3">Document Name</font>
		<input type="text" size="33" name="doc_name">
		<table width="50%">
			<tr>
				<td>
		<input type="file" style="font-size:13px;" name="myfile"></td>
		<td>
		<input type="submit" class="btn1" name="submit1" value="Upload"> </td></tr></table>
		 </form>

		 </div>		 
		 
		</div>
		<?php endif ?>
		<br><font size="3" face="Open sans" color="rgb(1, 6, 36)"><h4 style="text-align:center;">&copy;2018 Chat Application MITAOE,All Rights Reserved</h4></font>
	</div>
		</div>
		
		
	<script>
	
		var flag = 0;
	
		function refresh( a){

			$.post('msgs1.php', { users2: a }, function(result) { 
			   $('.msgs').html(result);
			   $('#user_name').html("<strong>"+a+"</strong>");
			});
			
		$.post('msgs2.php', { users2: a }, function(result) { 
			   $('.msgs1').html(result);
			});
			
			
		}
		
		$("input[type='button']").click();	
		function scTop(){
 $(".msgs").animate({scrollTop:$(".msgs")[0].scrollHeight});
}
function load_new_stuff(){
 localStorage['lpid']=$(".msgs .msg:last").attr("title");
 $(".msgs").load("msgs1.php",function(){
  if(localStorage['lpid']!=$(".msgs .msg:last").attr("title")){
   scTop();
  }
 });
 $(".users").load("users.php");
}
		
		$("#send_button").on("click", function(){
			   //$('.msgs').html(result);
			   scTop();
			   $('.msgs').append("<div class=msg><span class=name>"+current_user+"</span> : <span class=msg>"+$('input[name="msg"]').val()+"</span></div>");
			   load_new_stuff();
			   scTop();
			   
		});
		
	</script>
	
	
<?php

	if(isset($_GET['user'])){
		echo "<script>$('input[name=\"".$_GET['user']."\"]').click(); </script>";
	}

?>	
	
</body>
</html>
