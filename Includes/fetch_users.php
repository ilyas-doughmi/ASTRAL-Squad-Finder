<?php
session_start();
require_once("../Class/connexion.php");
require_once("../Class/User.php");

$user = new User;
$all_users = $user->getAllUsers($_SESSION["id"]);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo json_encode($all_users);
}