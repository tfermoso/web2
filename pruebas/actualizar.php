<?php
include("conexiondb.php");
$consulta="update usuarios set nombre=:nombre where id=:id";
$stm=$conexion->prepare( $consulta);
$nuevo_nombre="PEPE";
$id=6;
$stm->bindParam(":nombre",$nuevo_nombre);
$stm->bindParam(":id",$id);
$stm->execute();



?>