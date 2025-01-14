<?php
include("conexiondb.php");
$consulta="delete from usuarios where id=4";
$conexion->query($consulta);

?>