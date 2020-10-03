<?php
$db=mysqli_connect("localhost","root","");
if(!$db)
{
	die('<html><body><center><h2>Connection problem..!!</h2></center></body></html> '.mysql_error());
}
if(isset($_POST['submit'])){
$username=$_POST['username'];
$pass=$_POST['password'];
$user='';
$password='';
$role='';
$db_select=mysqli_select_db($db,"cancercare");
$result=mysqli_query($db,"select * from registration where UserName='$username' and Password='$pass'");
while($row=mysqli_fetch_array($result))
{
	$user=$row['UserName'];
	$password=$row['Password'];
	$role=$row['role'];
}
if($username==$user && $pass==$password)
{	session_start();
	$_SESSION['username']=$user;
	$_SESSION['role']=$role;
	header("location:../index.html");
}
else
{
	echo '<script type="text/javascript">';
		echo 'alert("Invalid Username or Password");';
		echo 'window.location = "../login.html";';
		echo '</script>';
}
}
mysqli_close($db);
?>