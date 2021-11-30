<?php
include_once 'DepartamentosDTO.php';

/**
* @ORM\Entity
* @ORM\Table(name="docente")
*/
class Docente{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** @ORM\Column(type="string") **/
    private $nombre;
    /** @ORM\Column(type="string") **/
    private $dni;
    /** @ORM\Column(type="string") **/
    private $nrp;
    /**
    * @ORM\ManyToOne(targetEntity="Departamento")
    * @ORM\JoinColumn(name="departamento", referencedColumnName="id")
    **/
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