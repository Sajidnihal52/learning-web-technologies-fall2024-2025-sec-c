<?php

if (isset($_POST['submit'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {

        echo "UserName Pasword NUlL";
    } else {

        header("Location: login.html");
    }
}
?>
