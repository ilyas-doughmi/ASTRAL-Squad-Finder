<?php
class Lobby extends db
{
    private $owner_id;
    private $game;
    private $title;
    private $status = "status";

    public function __construct($owner_id, $game, $title) {
        $this->owner_id = $owner_id;
        $this->game = $game;
        $this->title = $title;
        

        $this->createLobby();
    }

    private function createLobby()
    {
        $query = "INSERT INTO squad(title,game,owner_id,status) VALUES(:title,:game,:owner_id,:status)";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":game", $this->game);
        $stmt->bindParam(":owner_id", $this->owner_id);
        $stmt->bindParam(":status", $this->status);

        try{
            $stmt->execute();
            return "Lobby Created Successfully";
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}
