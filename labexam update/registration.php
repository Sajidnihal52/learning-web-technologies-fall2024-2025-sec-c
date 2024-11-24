<?php

if (isset($_POST['submit'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {

        echo "UserName Pasword NUlL";
    } 
    else{
        if(!isset(($_SESSION['users'])))
        {
            $_SESSION[]=[];
        }

    else {
        $_SESSION['users'][$username]=$password;
        header("Location: login.html");
        exit();
    }
}
}
else{
    echo"Invaid Regisration";
}
?>
