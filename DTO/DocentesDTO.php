<?php
include_once 'DepartamentosDTO.php';

class Docente{
    private $id;
    private $nombre;
    private $dni;
    private $nrp;
    private $departamento;

    function __construct($id, $nombre, $dni, $nrp, $departamento){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->nrp = $nrp;
        $this->departamento = new Departamento($departamento->getId(), $departamento->getNombre());
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getDni(){
        return $this->dni;
    }
    public function setDni($dni){
        $this->dni = $dni;
    }

    public function getNrp(){
        return $this->nrp;
    }
    public function setNrp($nrp){
        $this->nrp = $nrp;
    }

    public function getDepartamento(){
        return $this->departamento;
    }
    public function setDepartamento($departamento){
        $this->departamento = $departamento;
    }
}

?>