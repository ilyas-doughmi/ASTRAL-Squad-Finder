<?php

require_once("../Class/connexion.php");
require_once("../Class/User.php");

$user = new User;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"]; 

    try{
        $user->loginUser($email,$password);
         header("location: ../index.php?login=success");
        exit;
    } catch(PDOException $e){
        header("location: ../pages/login.php?login=error");
        exit;
    }

    
}
