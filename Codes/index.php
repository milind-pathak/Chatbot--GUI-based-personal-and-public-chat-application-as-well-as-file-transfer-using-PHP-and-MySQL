<?php include('server.php'); 
if(empty($_SESSION['username'])){
	header('location: login.php');
}
?>
<html>
<head>
<script src="//code.jquery.com/jquery-latest.js"></script>
  <script src="chat.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="chat.css" rel="stylesheet"/>
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
			<td width="50%"><button class="btn" onclick="window.location.href='index.php';"><i class="fa fa-home"></i> Home</button></td>
			<td>
			<form class="form2" method="POST" action="index.php">
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
		<form method="POST" action="index.php">
		<?php 
		include("users.php");
		?>
		</form>
		</div>
		 <div class="chatbox">
		 <?php
		  include("chatbox.php");
		 ?>
		 </div>
		</div>
		<?php endif ?>
		<br>
		<font size="3" face="Open sans" color="rgb(1, 6, 36)"><h4 style="text-align:center;">&copy;2018 Chat Application MITAOE,All Rights Reserved</h4></font>
	</div>
	
	<script>
	
		function refresh(a){
			window.location.href="private.php?user="+a;
		}
	
	</script>
	
</body>
</html>
