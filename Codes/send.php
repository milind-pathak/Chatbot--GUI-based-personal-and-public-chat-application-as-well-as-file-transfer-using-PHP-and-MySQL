<?php
include('server.php');
if(!isset($_SESSION['username']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
 die("<script>window.location.reload()</script>");
}
if(isset($_SESSION['username']) && isset($_POST['msg'])){
 $msg=htmlspecialchars($_POST['msg']);
 if($msg!=""){
	 $username=$_SESSION['username'];
  $sql="INSERT INTO messages (name,msg,posted) VALUES ('$username','$msg',NOW())";
  mysqli_query($con,$sql);
 }
}
?>
