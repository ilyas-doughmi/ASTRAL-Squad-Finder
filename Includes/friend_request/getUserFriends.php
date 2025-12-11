<?php

    session_start();
    require_once("../../Class/connexion.php");
    require_once("../../Class/Friend.php");
    require_once("../../Class/User.php");
    $user = new User;
    $friend = new Friend;
    $friend_requests = $friend->getUserFriends($_SESSION["id"]);
    $all_friends = [];

    foreach($friend_requests as $fr){
        if($fr["sender_id"] == $_SESSION["id"]){
            $user_info = $user->getUserInfo($fr["receiver_id"]);
        }
        else{
            $user_info = $user->getUserInfo($fr["sender_id"]);
        }
        $all_friends[] = $user_info;
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo json_encode($all_friends);
    }