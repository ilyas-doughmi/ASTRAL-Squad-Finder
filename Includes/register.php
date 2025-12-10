<?php 

require_once("../Class/connexion.php");
require_once("../Class/User.php");

$user = new User;

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    $rank = $_POST["rank"];
    $pfp_image = $_POST["pfp_image"]; 
    $game_playing = $_POST["game_playing"];

    $user->registerUser($username, $email, $password, $pfp_image, $game_playing, $rank);

    header("Location: ../index.php");
    exit();
}

?>
