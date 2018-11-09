<?php
include('server.php');
if(isset($_GET['dow'])){
	$path=$_GET['dow'];
	
	$res = mysqli_query("select * from documents where path='$path'");
	header('Content-Type:application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($path).'"');
	header('Content-Length: ' . filesize($path));
	readfile($path);
}
?>