<?php
/*** If the user clicks on the logout can come to this page. Here we have to destroy the session. ***/

session_start();

if(isset($_SESSION["login"])){
	echo "<center>";
	echo "Goodbye, <b style='font-size:20px;'>".$_SESSION["user"]."</b>";
	echo "<br/>";
	echo "You can go <a href='home.html'>home.html</a>";
	echo "</center>";
	
	session_destroy();
}
else{
	echo "You cannot reach this page without a login. Please go <a href='home.html'>home.html</a>";
}

?>