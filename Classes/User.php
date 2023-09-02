<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;


use Classes\DBConnecter;
use PDO;
use PDOException;
/**
 * Description of User
 *
 * @author dilha
 */
class User {
    //put your code here
    private $userid;
    private $fname;
    private $lname;
    private $contact;
    private $email;
    private $password;
    private $gender;
    
    
    public function __construct($fname, $lname, $contact, $email, $password, $gender) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->contact = $contact;
        $this->email = $email;
        $this->password = $password;
        $this->gender = $gender;
    }
    public function registerUser(){
        $query = "INSERT INTO user(userFirstName,userLastName,userGender,userPhoneNo,userEmail,userPassword) VALUES(?,?,?,?,?,?)";
        $dbcon = new DBConnecter();
        try {
            $con = $dbcon->getConnection();
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->fname);
            $pstmt->bindValue(2, $this->lname);
            $pstmt->bindValue(3, $this->gender);
            $pstmt->bindValue(4, $this->contact);
            $pstmt->bindValue(5, $this->email);
            $pstmt->bindValue(6, $this->password);
            $pstmt->execute();
            
            if($pstmt->rowCount()>0){
                header("Location:login.php");
            }
            
        } catch(PDOException $e){
            echo $e->getMessage();
            
        }
    }
    public function viewUser($id){
        $this->id=$id;
        $query = "SELECT * FROM user WHERE userId=?";
        $dbcon = new DBConnecter();
        try {
            $con = $dbcon->getConnection();
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->id);
            $pstmt->execute();
            $rs = $pstmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $rs;
        } catch(PDOException $e){
            echo $e->getMessage();
            
        }
    }
    
}
