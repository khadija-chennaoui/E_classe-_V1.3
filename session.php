<?php
session_start();
if (!isset($_COOKIE['email']) && !isset($_COOKIE['password'])){
    header("location:Bootstrap.php");
}