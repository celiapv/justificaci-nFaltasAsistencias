<?php
    include_once 'conexion.php';
    include_once 'JustificacionDAO.php';

    function insertarJustificacion($justificacion){
        try {
            
            //$con = new PDO("mysql:host=".SERVIDOR.";dbname=".BBDD, USUARIO, CLAVE);
            // Establecemos el modo de error de PDO para que salten excepciones
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            //Sentencia y parámetros
            $stmt = $con->prepare("INSERT INTO Justificacion () VALUES (?,?,?,?,?,?,?,?,?)");
            $stmt->bindParam(1, $justificacion->fechaInicio);
            $stmt->bindParam(2, $justificacion->fechaFin);
            $stmt->bindParam(3, $justificacion->fechaFirma);
            $stmt->bindParam(4, $justificacion->horasLectivas);
            $stmt->bindParam(5, $justificacion->horasComplementarias);
            $stmt->bindParam(6, $justificacion->docente->id);
            $stmt->bindParam(7, $justificacion->documentos->id);
            $stmt->bindParam(8, $justificacion->motivos->id);
            $stmt->bindParam(9, $justificacion->otrosMotivos->id);

            $stmt->execute();
            
            
            echo "Nuevas filas insertadas correctamente";
        
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $con = null;
    }
    
?>