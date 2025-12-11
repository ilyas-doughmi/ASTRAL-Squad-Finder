<?php

Class Friend extends db{
    public function addfriend($sender_id,$receiver_id){
        $query = "INSERT INTO friend_request(sender_id,receiver_id) VALUES(:sender_id,:receiver_id)";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":sender_id",$sender_id);
        $stmt->bindParam(":receiver_id",$receiver_id);

        try{
            $stmt->execute();
            return "Friend Request sended succ";
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }   
}