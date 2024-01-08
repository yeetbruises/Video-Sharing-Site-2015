<?php 
	session_start();
	if (isset($_SESSION["Username"])) {
	   session_destroy();
	   echo "<br> you are logged out successufuly!";
	} 
	   echo "<br/><a href='Login.php'>login</a>";
?>