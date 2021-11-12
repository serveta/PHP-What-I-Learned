<?php
// if there is a link like that;
// https://www.example.com/?user=servet  (or a <form method='GET'>)
// we can get the user name like that; $user = $_GET["user"];
if($_GET){
	echo "<br/>";
	$user = $_GET["user"];
	echo "I'm ".$user; // servet //
	echo "<br/>";
}
else{
	echo "If you want to use \$_GET method, please go here: <a href='?user=servet'>/?user=servet</a>";
}


// if there is a form like that (<form method='POST'>); 
// we can get the user name like that; $user = $_POST["user"];
if($_POST){
	echo "<br/><br/>";
	$user = $_POST["user"];
	echo "Nice to meet you ".$user;
	echo "<br/>";
}
else{
	echo "
	<br/><br/>
		If you want to use \$_POST method, <br/>
		<form action='' method='POST'>
		<input type='text' placeholder='Enter your name' name='user' />
		<input type='submit' value='Sent' />
		</form>
	";
}


// setcookie("localhostCookie","My first local cookie :)",time()+60*60*24); // it's how to create a cookie for 1 day.
if(isset($_COOKIE["localhostCookie"])){
	echo $_COOKIE["localhostCookie"]; // it's how to show the content the cookie. // My first local cookie :)
}
// setcookie("localhostCookie","My first local cookie :)",time()-1); // it's how to die the cookie.


// session_start(); // How to start the session
// $_SESSION["username"] = "user1"; // Set session variable
// echo $_SESSION["username"]; // it's how to show the content the session. // user1
// session_unset(); // if you want to remove all session variables
// session_destroy(); // if you want to destroy all sessions


?>