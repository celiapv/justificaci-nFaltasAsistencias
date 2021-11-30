<?php

/**
* @ORM\Entity
* @ORM\Table(name="otros_motivos")
*/
class OtroMotivo{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** @ORM\Column(type="string") **/
    private $descripcion;

    public function __construct($id, $descripcion){
        $this->id = $id;
        $this->descripcion = $descripcion;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
}

?>