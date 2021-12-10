<?php
/*** If the username and password are the same as in our database (set.php), the user can come to this page (profile.php).  ***/

session_start();

if(isset($_SESSION["login"])){ // The important point here is $_SESSION["login"] have to be true;
	echo "
		<div style='text-align:right;'>
		***<a href='logout.php'>Logout</a>***
		</div>
	";
	echo "<center>";
	echo "Welcome, <b style='font-size:20px;'>".$_SESSION["user"]."</b>";
	echo "<br/>";
	echo "It's your profile page.";
	echo "</center>";
}
else{
	echo "You cannot reach this page without a login. Please go <a href='home.html'>home.html</a>";
}

?>