<?php
session_start(); 
require_once("../../Class/connexion.php");
require_once("../../Class/Lobby.php");
$owner_id = $_SESSION["id"];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $select_game = $_POST["select_game"];
    $title = $_POST["title"];

    $create_lobby = new Lobby($owner_id,$select_game,$title);

    echo "lobby created successfuly";
}