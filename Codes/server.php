<?php
if(!isset($con)){
SESSION_start();

$con=mysqli_connect('localhost','root','','registration');

}
$username="";
$email="";
$errors=array();

if(isset($_POST['register'])){
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password_1=mysqli_real_escape_string($con,$_POST['password_1']);
	$password_2=mysqli_real_escape_string($con,$_POST['password_2']);
	
$sql1="select username from users";
		$result=mysqli_query($con,$sql1);
		while($r=mysqli_fetch_array($result))
		{
			if($r['username']==$username)
			{
				array_push($errors,"Username already exist");
			}
			
		}
	
	if(empty($username)){
		array_push($errors,"Username is required");
	}
	if(empty($email)){
		array_push($errors,"Email is required");
	}
	if(empty($password_1)){
		array_push($errors,"Password is required");
	}
	if($password_1!= $password_2){
		array_push($errors,"The two passwords do not match");
	}
	
	if(count($errors)==0){
		$password=md5($password_1); 
		$sql="Insert into users(username,email,password) values('$username','$email','$password')";
		mysqli_query($con,$sql);
		header('location:login.php');
	}
}

if (isset($_POST['login'])){
	$username=mysqli_real_escape_string($con,$_POST['username']);
	
	$password=mysqli_real_escape_string($con,$_POST['password']);

	if(empty($username)){
		array_push($errors,"Username is required");
	}
	if(empty($password)){
		array_push($errors,"Password is required");
	}
	if(count($errors)==0){
		$password=md5($password);
		$query="select * from users where username='$username' and password='$password'";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)==1){
			$_SESSION['username']=$username;
			$_SESSION['success']="you are now logged in";
			mysqli_query($con,"insert into chatters(name,seen) values ('$username',NOW())");
			header('location:index.php');
		}else{
			array_push($errors," Wrong username/password combination");
			
		}
	}
	
}


if(isset($_POST['users5']))
{	
	$_SESSION['users2']="";
	unset($_SESSION['users2']);
	$user1=$_POST['users5'];
	$_SESSION['users2']=$user1;
	header('location:private.php');
}

if(isset($_POST['submit1']))
{
	$username=$_SESSION['username'];
	$user=$_SESSION['users2'];
	$doc_name=$_POST['doc_name'];
	$name=$_FILES['myfile']['name'];
	$tmp_name=$_FILES['myfile']['tmp_name'];
	
		if($name && $doc_name)
		{
		$location="documents/$name";
		move_uploaded_file($tmp_name,$location);
$query=mysqli_query($con,"insert into documents (sender,receiver,name,path,posted) values ('$username','$user','$doc_name','$location',NOW())");			
		}
		else
			die("Please select a file");
}

if(isset($_POST['logout1'])){
	$username=mysqli_real_escape_string($con,$_SESSION['username']);
	mysqli_query($con,"delete from chatters where name='$username'");
	SESSION_destroy();
	unset($_SESSION['username']);
	header('location:login.php');
}
?>