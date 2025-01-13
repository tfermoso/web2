<?php
 if(isset($_POST["nombre"])){
    var_dump($_GET);
    var_dump($_POST);
    exit();
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
        <form class="register" action="procesar.php" method="post">
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