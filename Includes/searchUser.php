<?php

require_once("../Class/connexion.php");
require_once("../Class/User.php");

$user = new User;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $input = $_POST["username"];
    $myusername = $_POST["myusername"];
    $found_users = $user->SearchUser($input,$myusername);

    echo json_encode($found_users);
}