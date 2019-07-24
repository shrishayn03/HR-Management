<?php
$con = mysqli_connect("localhost","root","","hr");
session_start();

if (isset($_POST['submit'])){
       
	$username = stripslashes($_REQUEST['username']);
       
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	
        $query = "SELECT * FROM login WHERE username='$username' and password='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
           
	    header("Location: home.php");
         }else{
			 $_SESSION['message']="<div style=color:red;>Invalid Username or Password";
	 header("Location: index.php");
	}
}