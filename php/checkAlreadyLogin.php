<?php
session_start();
$username=$_SESSION['username'];

if($username!=null)
{
    header("location:../donation.html");
}
else
{
    echo '<script type="text/javascript">';
    echo 'alert("you need to login first");';
    echo 'window.location = "../login.html";';
    echo '</script>';
}
?>