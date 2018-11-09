<?php
include("server.php");
$username=$_SESSION['username'];
if(isset($_POST['users2'])){
 $user=$_POST['users2'];
 $_SESSION['users2'] = $user;
}
else{
	$user = $_SESSION['users2'];
}

$sql="SELECT * FROM messages1 where (sender='$username' and receiver='$user') or (sender='$user' and receiver='$username')";
$result=mysqli_query($con,$sql);
while($r=mysqli_fetch_assoc($result)){
 echo "<div class=msg title=".$r['posted']."><span class=name>".$r['sender']."</span> : <span class=msg>".$r['msg']."</span></div>";
}
?>
