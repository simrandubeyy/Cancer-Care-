<?php
session_start();
//validation();
//session_start();
	// function validation()
	// {
	// 	if(trim($_POST['name'])=='' ||trim($_POST['address'])=='' ||trim($_POST['MobileNo'])=='' ||trim($_POST['Email_ID'])=='' ||trim($_POST['UserName'])=='' ||trim($_POST['Password'])=='' ||trim($_POST['R_Password'])=='' )
	// 	{
	// 	echo '<script type="text/javascript">';
	// 	echo 'alert("one or more fields are empty.");';
	// 	echo 'window.location = "../registration.html";';
	// 	echo '</script>';
	// 	}
	// 	elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])){
	// 	echo '<script type="text/javascript">';
	// 	echo 'alert("name must contain alphabates only.");';
	// 	echo 'window.location = "../registration.html";';
	// 	echo '</script>';
	// 	}
	// 	elseif(!preg_match("/^[0-9]*$/",$_POST['MobileNo'])){
	// 	echo '<script type="text/javascript">';
	// 	echo 'alert("mobile number must contain numbers only.");';
	// 	echo 'window.location = "../registration.html";';
	// 	echo '</script>';
	// 	}
	// 	elseif(!filter_var($_POST['Email_ID'], FILTER_VALIDATE_EMAIL))
	// 	{
	// 	echo '<script type="text/javascript">';
	// 	echo 'alert("please enter valid email.");';
	// 	echo 'window.location = "../registration.html";';
	// 	echo '</script>';
	// 	}
	// 	else{
	// 		register();
	// 	}
	// }
	register();
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
	$address=trim($_POST['Address']);
    $MobileNo=trim($_POST['phone']);
    $p_address=trim($_POST['p_address']);
	$Email_ID=trim($_POST['email']);
	$ctype=trim($_POST['ctype']);
	$stage=trim($_POST['stage']);
    $krg=trim($_POST['krg']);
    $treat=trim($_POST['treat']);
    $medupload=trim($_POST($_FILES["Medical"]["name"]));
    $income= trim($_POST($_FILES['Income']['name']));
    $result=mysqli_query($db,"insert into customerdetails(Name,Address,MobileNo,pAddress,email,type,stage,kta,treat,medupload,tax)
    values('$name','$address','$MobileNo','$p_address','$Email_ID','$ctype','$stage','$krg','$treat','$medupload','$income')");
	if($result)
	{
		echo '<script type="text/javascript">';
        echo 'alert("data save successfully");';
        echo 'alert($medupload);';
		echo 'window.location = "../patient.html";';
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