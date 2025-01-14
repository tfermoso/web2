<?php

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
        <form action="" method="post" id="formulario">
            <label for="usuario">Usuario</label>
            <input type="email" name="email" id="usuario" placeholder="Introduce tu email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button >Login</button>
        </form>
        <p>*Sino tienes usuario <a href="registro.php">crealo</a></p>
    </div>

<script src="js/login.js"></script>
</body>

</html>