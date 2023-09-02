<?php
require 'Classes/login.php';
use Classes\login;
if (isset($_POST["pass1"])||isset($_POST["pass2"])||isset($_POST["id"])) {
    if (!empty($_POST["pass1"])|| !empty($_POST["pass2"])|| !empty($_POST["id"])) {
        $pass1 = $_POST["pass1"];
        $pass2 = $_POST["pass2"];
        $id = $_POST["id"];
        $user = new login();
        if($pass1==$pass2){
            $newpass = password_hash($pass1, PASSWORD_BCRYPT);
            $user->resetPassworduser($newpass, $id);
            header("Location:login.php?success=1");
        }
        
        
    }
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

