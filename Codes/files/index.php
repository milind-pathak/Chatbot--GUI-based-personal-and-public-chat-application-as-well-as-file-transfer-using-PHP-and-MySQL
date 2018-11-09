<?php include('inc/db.php'); 
$sql="select * from documents";
$res=mysqli_query($con,$sql);
?>
<html>
<body>
<a href="upload.php">Add new document</a><br><br>
<?php
while($row=mysqli_fetch_array($res)){
	$id=$row['id'];
	$name=$row['name'];
	$path=$row['path'];
	
	echo $id. "" .$name. " <a href='download.php?dow=$path'>Download</a><br>";
}

?>
</body>
</html>