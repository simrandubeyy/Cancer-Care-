<?php
validation();
//session_start();
	function validation()
	{
		if(trim($_POST['name'])=='' ||trim($_POST['address'])=='' ||trim($_POST['MobileNo'])=='' ||trim($_POST['Email_ID'])=='' ||trim($_POST['UserName'])=='' ||trim($_POST['Password'])=='' ||trim($_POST['R_Password'])=='' )
		{
		echo '<script type="text/javascript">';
		echo 'alert("one or more fields are empty.");';
		echo 'window.location = "../registration.html";';
		echo '</script>';
		}
		elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])){
		echo '<script type="text/javascript">';
		echo 'alert("name must contain alphabates only.");';
		echo 'window.location = "../registration.html";';
		echo '</script>';
		}
		elseif(!preg_match("/^[0-9]*$/",$_POST['MobileNo'])){
		echo '<script type="text/javascript">';
		echo 'alert("mobile number must contain numbers only.");';
		echo 'window.location = "../registration.html";';
		echo '</script>';
		}
		elseif(!filter_var($_POST['Email_ID'], FILTER_VALIDATE_EMAIL))
		{
		echo '<script type="text/javascript">';
		echo 'alert("please enter valid email.");';
		echo 'window.location = "../registration.html";';
		echo '</script>';
		}
		else{
			register();
		}
	}
	
	function register()
	{
	$db=mysqli_connect("localhost","root","");
	if(!$db)
	{
		die('<html><body><center><h2>connection problem</h2></center></body></html>'.mysql_error());
	}
	$db_select=mysqli_select_db($db,"cancercare");
	if(isset($_POST['submit'])){
	$name=trim($_POST['name']);
	$address=trim($_POST['address']);
	$MobileNo=trim($_POST['MobileNo']);
	$Email_ID=trim($_POST['Email_ID']);
	$UserName=trim($_POST['UserName']);
	$Password=trim($_POST['Password']);
	$R_Password=trim($_POST['R_Password']);
	$result=mysqli_query($db,"insert into registration(Name,Address,MobileNo,Email_ID,UserName,Password,R_Password,role)values('$name','$address','$MobileNo','$Email_ID','$UserName','$Password','$R_Password','customer')");
	if($result)
	{
		echo '<script type="text/javascript">';
		echo 'alert("data save successfully");';
		echo 'window.location = "../registration.html";';
		echo '</script>';
	}else{
		echo '<script type="text/javascript">';
		echo 'alert("could not save data");';
		echo 'window.location = "../registration.html";';
		echo '</script>';
	}}
	mysqli_close($db);
	}
?>