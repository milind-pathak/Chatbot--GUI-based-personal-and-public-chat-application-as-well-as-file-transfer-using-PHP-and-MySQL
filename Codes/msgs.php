<?
include("server.php");
$sql="SELECT * FROM messages";
$result=mysqli_query($con,$sql);
while($r=mysqli_fetch_assoc($result)){
 echo "<div class=msg title=".$r['posted']."><span class=name>".$r['name']."</span> : <span class=msg>".$r['msg']."</span></div>";
}
if(!isset($_SESSION['username']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
 echo "<script>window.location.reload()</script>";
}
?>
