<?php
 /*** If someone clicks the login button (home.html), the login process is going to continue on this page (login.php). ***/
 
 include("set.php"); 
 session_start();
 $_SESSION["login"] = false; // One of the important points here is $_SESSION["login"] has to be false, up to username and password authentication.
 
 if($_POST){ // One of the important points here is $_POST has to be true;
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	if($username == $user && $password == $pass){
		$_SESSION["login"] = true;
		$_SESSION["user"] = $user;
		
		header("Location:profile.php");
	}
	else{
		echo "Your username or password is wrong. Please go <a href='home.html'>home.html</a>";
	}
	
 }
 else{
	echo "You cannot reach this page without a login. Please go <a href='home.html'>home.html</a>";
 }

?>