<?php
include("conexiondb.php");
$consulta = "select * from usuarios";
$stm=$conexion->query($consulta);
while($row = $stm->fetch(PDO::FETCH_BOTH)) {
    var_dump($row["nombre"]." ".$row["apellidos"] );
    echo "<br>";
}
?>