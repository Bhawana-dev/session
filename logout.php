<?php
session_start();

$username = $_GET["username"];

$_SESSION["username"] = $username;
echo "Welcome ".$_SESSION["username"]."<br>";
?>
<a href="session.php">session</a><br>
<a href="profile.php">profile</a><br>

