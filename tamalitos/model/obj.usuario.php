<?php
class Usuario{
    private $id;
    private $nick;

    public function setAll($id,$nick){
        $this->id = $id;
        $this->nick = $nick;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getNick() {
        return $this->nick;
    }

    public function setNick($nick) {
        $this->nick = $nick;
        return $this;
    }
}