

<?php
require 'Classes/User.php';
use Classes\User;
require 'Classes/HotelOwner.php';
use Classes\HotelOwner;


    if(!empty($_POST['fname'])|| !empty($_POST['lname']) || !empty($_POST['cNumber']) || !empty($_POST['email']) || !empty($_POST['pass']) || !empty($_POST['account'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['cNumber'];
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = $_POST['pass'];
    $hash_password = password_hash($pass, PASSWORD_DEFAULT);
    $gender = $_POST['gender'];
    $account = $_POST['account'];

    if($account=="Personal"){
        $user = new User($fname, $lname, $contact, $email, $hash_password, $gender);
        $user->registerUser();
    
    }else{
        $HotelOwner = new HotelOwner($fname, $lname, $contact, $email, $hash_password, $gender);
        $HotelOwner->registerHOwner();
    }
        

        
    
}else{
    echo 'error';
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

