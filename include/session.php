<?php

session_start();

if(isset($_SESSION['admin'])){
    header('location: admin/index.php');
}
