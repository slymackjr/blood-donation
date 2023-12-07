<?php
use App\classes\HospitalOfficer;

require_once 'include/session.php';
require_once 'classes/HospitalOfficer.php';
require_once 'classes/DBManager.php';

$staff = new HospitalOfficer();

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $job_title = $_POST['jobTitle'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $confirmPassword = $_POST['confirmPassword'];
    $register = $_POST['register'];

    if ($staff->registerStaff($register,$name,$username,$email,$address,$phone,$job_title,$password,$confirmPassword,$gender))
    {
        header('location: request-donor.php');
    }
}

