<?php

require_once("../Class/connexion.php");
require_once("../Class/User.php");

$user = new User;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $input = $_POST["username"];
    $found_users = $user->SearchUser($input);

    echo json_encode($found_users);
}