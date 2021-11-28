<?php

class Documento{
    private $id;
    private $ruta;
    private $nombre;

    public function __construct($id, $ruta, $nombre){
        $this->id = $id;
        $this->ruta = $ruta;
        $this->nombre = $nombre;
    }

    public function getID(){
        return $this->id;
    }
    public function setID($id){
        $this->id = $id;
    }

    public function getRuta(){
        return $this->ruta;
    }
    public function setRuta($ruta){
        $this->ruta = $ruta;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
}

?>