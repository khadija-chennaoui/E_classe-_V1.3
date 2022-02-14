<?php
    session_start();
    session_unset();
    setcookie('email' , $_SESSION['email'] , time() - 20 , NULL , NULL , FALSE , TRUE);
    setcookie('password' , $_SESSION['password'] , time() - 20 , NULL , NULL , FALSE , TRUE);
    session_destroy();
    header('location:Bootstrap.php');
?>