<?php

if (isset($_POST['login'])) {

    $username      = $_POST['username'];
    $password   = $_POST['password'];

    if ($username == 'admin' && $password == 'admin') {
        header('location: dashboard.php');
    } else {
        header('location: index.php?error');
    }
}
