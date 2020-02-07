<?php
session_start();
if(isset($_GET["logout"]))
{ 
    session_destroy();
    header("Location:login.php");
}
else{
    $username = $_GET["username"];
    $_SESSION["username"] = $username;
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="get">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>