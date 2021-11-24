<?php

class Motivo{
    private $id;
    private $nombre;

    function __construct($id, $nombre){
        $this->id = $id;
        $this->$nombre = $nombre;
    }

    public function getID(){
        return $this->id;
    }
    public function setID($id){
        $this->id = $id;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre(){
        $this->nombre;
    }
}

?>