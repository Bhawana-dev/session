<?php
session_start();
echo "Welcome ".$_SESSION["username"]." on profile page.<br>";
?>
<a href="?logout=true">logout</a><br>