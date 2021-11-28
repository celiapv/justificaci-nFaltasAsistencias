<?php

//Se inserta una justificación pasada por parámetro
public function insertarJustificacion($justificacion){
    $stmt = $con->prepare("INSERT INTO Justificacion (nombre, direccion ) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $direccion);
}

//Se modifica una justificación pasada por parámetros
public function modificarJustificacion($justificacion){

}

//Se elimina una justificación pasada por parámetro
public function eliminarJustificacion($justificacion){

}

//Se saca un listado de todas las justificaciones
public function listaJustificaciones(){

}

?>