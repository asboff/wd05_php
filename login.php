<?php
include_once 'db_users.php';
session_start();
$_SESSION['is_admin'] = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login = "'".$_POST['login']."'";
    $password = "'".md5($_POST['password'])."'";
    $res = mysqli_query($connection, "SELECT * FROM users WHERE login = $login AND password = $password;");
    $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
    if (empty($result) == false){
        $_SESSION['is_admin'] = 1;
    }
session_abort();
};

var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>