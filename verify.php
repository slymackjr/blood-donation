<?php
use App\classes\HospitalOfficer;
include_once 'include/session.php';
include_once 'classes/DBManager.php';
include_once 'classes/HospitalOfficer.php';

if(isset($_POST['login'])) {

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $staff = new HospitalOfficer();

   $staff->verifyOfficer($login, $email, $password); 
      
}



