<?php

class Justificacion{
    private $id;
    private $fechaInicio;
    private $fechaFin;
    private $fechaFirma;
    private $horasLectivas;
    private $horasComplementarias;
    private $docente;
    private $documentos;
    private $motivos;
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