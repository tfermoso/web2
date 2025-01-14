<?php
include("conexiondb.php");
try {
    $sql = "insert into usuarios (nombre,apellidos)
values (:nombre,:apellidos)";
    $prstm = $conexion->prepare($sql);
    $nombre = "Juan";
    $apellidos = "Perez";
    $prstm->bindParam(":nombre", $nombre);
    $prstm->bindParam(":apellidos", $apellidos);
    $prstm->execute();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}



?>