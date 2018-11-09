<?php
include("server.php");
if ($con->connect_error) {
	die("Connection failed: ". $con->connect_error);
}
echo "<h2 style='text-align:center;'>Users</h2><br>";
$sql="SELECT name FROM chatters";
$result = $con->query($sql);
if ($result->num_rows > 0) {
	while($r=$result->fetch_assoc()){
		echo "<hr><input type='button' class='btn1' onclick=\"refresh('".$r['name']."')\" name='".$r['name']."' value='".$r['name']."'  style='width:100%'> <br>";
	}
}
else {
	echo " 0 results"; 
}
?>
