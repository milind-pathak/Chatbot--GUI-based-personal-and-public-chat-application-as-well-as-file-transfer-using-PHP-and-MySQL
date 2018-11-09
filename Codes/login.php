<?php include('server.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#DDFAF9;">
	<div class="header">
		<h2>LOGIN</h2>
	</div>
	<form class="form1" method="POST" action="login.php">
	<?php include('errors.php');?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Not yet a member?<a href="register.php"> Sign up</a>
			</p>
	</form>
</body>
</html>
