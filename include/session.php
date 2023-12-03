<?php

session_start();

if(isset($_SESSION['admin'])){
    header('location: admin/index.php');
}

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    $userResult = $donor->getUserSessionDetails($user,"users");
}