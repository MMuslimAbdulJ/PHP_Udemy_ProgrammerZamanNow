<?php
session_start();

if($_SESSION['login'] == true) {
    header("Location: /session/member.php");
    exit();
} 
$error = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['username'] == "Muslim" && $_POST['password'] == "muslim") {
        $_SESSION['login'] = true;
        $_SESSION['username'] = "Muslim";
        header("Location: /session/member.php");
        exit();
    } else {
        $error = "Login gagal";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php 
        if($error != "") {
            echo "<p>$error</p>";
        }
    ?>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <label for="">Username:
            <input type="text" name="username">
        </label>
        <br>
        <label for="">Password: 
            <input type="password" name="password">
        </label>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>