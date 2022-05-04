<?php

session_start();

if (isset($_POST["username"])) {
    $username = $_POST["username"];
    $_SESSION["username"] = $username;
} else if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
}

if (isset($username)) {
    echo "Your username is $username<br>";
} else {
    header("Location: login.php");
}

if (isset($_POST["password"])) {
    $password = $_POST["password"];
    $_SESSION["password"] = $password;
} else if (isset($_SESSION["password"])) {
    $password = $_SESSION["password"];
}

if (isset($password)) {
    echo "Your password is $password<br>";
} else {
    header("Location: login.php");
}
