<?php

/**
* @ORM\Entity
* @ORM\Table(name="justificacion")
*/
class Justificacion{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** @ORM\Column(type="date") **/
    private $fechaInicio;
    /** @ORM\Column(type="date") **/
    private $fechaFin;
    /** @ORM\Column(type="date") **/
    private $fechaFirma;
    /** @ORM\Column(type="integer") **/
    private $horasLectivas;
    /** @ORM\Column(type="integer") **/
    private $horasComplementarias;
    /**
    * @ORM\ManyToOne(targetEntity="Docente")
    * @ORM\JoinColumn(name="docente", referencedColumnName="id")
    **/
    private $docente;
    /**
    * @ORM\ManyToOne(targetEntity="Documento")
    * @ORM\JoinColumn(name="documentos", referencedColumnName="id")
    **/
    private $documentos;
    /**
    * @ORM\ManyToOne(targetEntity="Motivo")
    * @ORM\JoinColumn(name="motivos", referencedColumnName="id")
    **/
    private $motivos;
    /**
    * @ORM\ManyToOne(targetEntity="OtroMotivo")
    * @ORM\JoinColumn(name="otros_motivos", referencedColumnName="id")
    **/
    private $otrosMotivos;

    public function __construct($id, $fechaInicio, $fechaFin, $fechaFirma, $horasLectivas, $horasComplementarias, $docente, $documentos, $motivos, $otrosMotivos){
        $this->id = $id;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
        $this->fechaFirma = $fechaFirma;
        $this->horasLectivas = $horasLectivas;
        $this->horasComplementarias = $horasComplementarias;
        $this->docente = $docente;
        $this->documentos = $documentos;
        $this->motivos = $motivos;
        $this->otrosMotivos = $otrosMotivos;
    }

    public function getID(){
        return $this->id;
    }
    public function setID($id){
        $this->id = $id;
    }

    public function getFechaInicio(){
        return $this->fechaInicio;
    }
    public function setFechaInicio($fechaInicio){
        $this->fechaInicio = $fechaInicio;
    }

    public function getFechaFin(){
        return $this->fechaFin;
    }
    public function setFechaFin($fechaFin){
        $this->fechaFin = $fechaFin;
    }

    public function getFechaFirma(){
        return $this->fechaFirma;
    }
    public function setFechaFirma($fechaFirma){
        $this->fechaFirma = $fechaFirma;
    }

    public function getHorasLectivas(){
        return $this->horasLectivas;
    }
    public function setHorasLectivas($horasLectivas){
        $this->horasLectivas = $horasLectivas;
    }

    public function getHorasComplementarias(){
        return $this->horasComplementarias;
    }
    public function setHorasComplementarias($horasComplementarias){
        $this->horasComplementarias = $horasComplementarias;
    }

    public function getDocente(){
        return $this->docente;
    }
    public function setDocente($docente){
        $this->docente = $docente;
    }

    public function getDocumentos(){
        return $this->documentos;
    }
    public function setDocumentos($documentos){
        $this->documentos = $documentos;
    }

    public function getMotivos(){
        return $this->motivos;
    }
    public function setMotivos($motivos){
        $this->motivos = $motivos;
    }

    public function getOtrosMotivos(){
        return $this->otrosMotivos;
    }
    public function setOtrosMotivos($otrosMotivos){
        $this->otrosMotivos = $otrosMotivos;
    }
}

?>