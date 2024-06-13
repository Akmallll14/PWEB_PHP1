<?php
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $U = 'a122206812'; //username
    $P = 'polke001'; //password

    if($username == $U AND $password == $P)
    {
        session_start();
        $_SESSION['nama'] = $username;
        $_SESSION['is_logged_in'] = TRUE;

        header("location: index.php");
    }
    else
    {
        echo "Username atau Password salah";
    }