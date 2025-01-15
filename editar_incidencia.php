<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
}
if(! isset($_GET["idincidencia"])) {
    header("Location: main.php");
}
include("conexiondb.php");
$sql="select * from incidencias where id = :idincidencia";
$stm=$conexion->prepare($sql);
$stm->bindParam(":idincidencia",$_GET["idincidencia"]);
$stm->execute();
$row=$stm->fetch(PDO::FETCH_ASSOC);
if(! $row){
    header("Location: main.php");
}

include("./partials/cabecera.php");
?>
<div class="contenedorPrincipal">

</div>
<?php
include("./partials/footer.php");   
?>