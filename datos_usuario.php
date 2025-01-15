<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
}

include("conexiondb.php");

if (isset($_FILES["foto"])) {
  
//Guardar foto en el servidor
    $nombreFoto = $_FILES["foto"]["name"];
    $ruta = "./fotos/" . $nombreFoto;  
    if(move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta)){
        $sql="update usuarios set nombre=:nombre, apellidos=:apellidos, email=:email, foto=:foto where id=:id";
        $stm=$conexion->prepare($sql);
        $stm->bindParam(":nombre", $_POST["nombre"]);
        $stm->bindParam(":apellidos", $_POST["apellidos"]);
        $stm->bindParam(":email", $_POST["email"]);
        $stm->bindParam(":foto", $ruta);
        $stm->bindParam(":id", $_POST["id"]);
        $stm->execute();
        header("Location: main.php");

    }
    
    header("Location: main.php");
} else {

    $sql = "select * from usuarios where id = :idusuario";
    $stm = $conexion->prepare($sql);
    $stm->bindParam(":idusuario", $_SESSION["idusuario"]);
    $stm->execute();
    $row = $stm->fetch(PDO::FETCH_ASSOC);
    if (!$row) {
        header("Location: login.php");
    }
}
include("./partials/cabecera.php");
?>
<div class="contenedorPrincipal">
    <form action="" method="post" enctype="multipart/form-data">
        <label for="id">Id Usuario</label>
        <input type="number" name="id" id="" readonly value="<?php echo $row['id'] ?>">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre'] ?>">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" value="<?php echo $row['apellidos'] ?>">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php echo $row['email'] ?>">
        <input type="file" name="foto" id="" accept="image/*">
        <input type="submit" value="Editar">
    </form>
</div>
<?php
include("./partials/footer.php");
?>