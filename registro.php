<?php
 if(isset($_POST["nombre"])){
    include("conexiondb.php");
    try {
        // Preparar y ejecutar la consulta SQL
        $sql = "INSERT INTO usuarios (nombre, apellidos, email, fecha, password) 
                VALUES (:nombre, :apellidos, :email, :fecha, :password)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $_POST["nombre"]);
        $stmt->bindParam(':apellidos', $_POST["apellidos"]);
        $stmt->bindParam(':email', $_POST["email"]);
        $stmt->bindParam(':fecha', $_POST["fecha"]);
        // Encriptar la contraseña antes de guardarla
        $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $stmt->bindParam(':password', $hashed_password);
        //$stmt->bindParam(':password', $_POST["password"]);
        $stmt->execute();
    
        echo "Registro insertado exitosamente";
    
        // Redirigir a la página de login   
        header("Location: login.html");
    } catch (PDOException $e) {
        echo "Conexión fallida: " . $e->getMessage();
    }
 }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web2 - Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div>
        <a href="index.html"><img src="img/logo.svg" alt="Logo"></a>
        <form class="register" action="procesar2.php" method="post">
            <label for="nombre">Nombre</label>
            <input required type="text" name="nombre" id="nombre">
            <label for="apellidos">Apellidos</label>
            <input required type="text" name="apellidos" id="apellidos">
            <label for="usuario">Email</label>
            <input required type="email" name="email" id="email">
            <label for="fecha">Fecha Nacimiento</label>
            <input type="date" name="fecha" id="fecha">
            <label for="password">Password</label>
            <input  type="password"  name="password" id="password">
            <label for="password">Introduce de nuevo la Password</label>
            <input  type="password" name="" id="repassword">
            <span id="msg">*Las contraseñas deben ser iguales</span>
            <button id="btnCrear" disabled>Crear usuario</button>
        </form>
        <p>*Si tienes usuario <a href="login.html">logeate</a></p>
    </div>

<script src="js/registro.js"></script>
</body>

</html>