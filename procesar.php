<?php
$host = "localhost"; // o la IP de tu servidor MySQL
$user = "root";
$password = "";
$database = "web2";

// Crear la conexión
$conexion = mysqli_connect($host, $user, $password, $database);

// Verificar la conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";

$sql="INSERT INTO usuarios (nombre, apellidos, email, fecha, password)
 VALUES ('".$_POST["nombre"]."','".$_POST["apellidos"]."','".$_POST["email"]."','".$_POST["fecha"]."','".$_POST["password"]."')";

if (mysqli_query($conexion, $sql)) {
    echo "Nuevo registro creado";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}



// Cerrar la conexión
mysqli_close($conexion);
?>

