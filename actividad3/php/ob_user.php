<?php  
 class User{
    private $nick;
    private $cel;
    public function __construct($nick, $cel){
        $this->nick = $nick;
        $this->cel = $cel;
    }
    public function getNick(){
        return $this->nick;
    }
    public function getCel(){
        return $this->cel;
    }
 }