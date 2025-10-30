<?php
class Usuario{
    private $id;
    private $nick;
    public function getID(){
        return $this->id;
    }
    public function getNick(){
        return $this->nick;
    }
    public function setNick($nick){
        $this->nick = $nick;
    }    
    public function setID($id){
        $this->id = $id;
    }

    public function setAll($id,$nick){
        $this->id = $id;
        $this->nick = $nick;
    }
}