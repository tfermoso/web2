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
<form action="" method="post">
    <label for="id">Id Incidencia</label>
    <input type="number" name="id" id="" readonly value="<?php echo $row['id'] ?>">
    <label for="fecha">Fecha</label>
    <input type="date" name="fecha" id="fecha" value="<?php echo $row['fecha'] ?>">
    <label for="descripcion">Descripcion</label>   
    <input type="text" name="descripcion" id="descripcion" value="<?php echo $row['descripcion'] ?>">
    <input type="submit" value="Editar">
</form>
</div>
<?php
include("./partials/footer.php");   
?>