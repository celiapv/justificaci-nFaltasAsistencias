<?php

//fichero que se va a utilizar para la inserción

include_once 'conexion.php';

try {

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
$sql = "INSERT INTO Docente (nombre,dni,nrp,idDepartamento) VALUES (?,?,?,?,?)";
$sql = "INSERT INTO Justificacion (id,fecha_inicio,fecha_fin,fecha_firma,horas_lectivas,horas_colectivas,docente,documentos,motivo,otros_motivos) VALUES (?,?,?,?,?,?,?,?,?,?)";

}
catch(PDOException $e) {

    echo $sql . "<br>" . $e->getMessage();
 
  }
 
  $conexion = null;
   
?>
