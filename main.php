<?php
session_start();
if(! isset($_SESSION["usuario"])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <img src="img/logo.svg" alt="">
        <div>
            <img id="imgUser" class="imgUser" src="img/ususario.jfif" alt="" srcset="">
            <div class="menuUser" id="menuUser">
                <ul>
                    <li><a href="">Datos de usuario</a></li>
                    <li><a href="index.html">Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <aside>
            <ul>
                <li><i class="fa-solid fa-cart-shopping"></i>Pedidos</li>
                <li><i class="fa-solid fa-file-invoice"></i>Facturas</li>
                <li><i class="fa-solid fa-circle-exclamation"></i>Incidencias</li>
                <li><i class="fa-solid fa-calendar"></i>Calendario</li>
                <li><i class="fa-solid fa-newspaper"></i>Presupuestos</li>
            </ul>

        </aside>
        <div class="asideMovil">
            <i id="menuMovil" class="fa-solid fa-bars"></i>
            <ul id="menu">
                <li><i class="fa-solid fa-cart-shopping"></i>Pedidos</li>
                <li><i class="fa-solid fa-file-invoice"></i>Facturas</li>
                <li><i class="fa-solid fa-circle-exclamation"></i>Incidencias</li>
                <li><i class="fa-solid fa-calendar"></i>Calendario</li>
                <li><i class="fa-solid fa-newspaper"></i>Presupuestos</li>
            </ul>
        </div>
        <section class="contenedorPrincipal">
           <h3>Listado incidencias</h3>
           <div class="incidencias">
                <form action="" id="formIncidencias">
                     <label for="fecha">Fecha</label>
                     <input type="date" name="fecha" id="fecha" value="">
                     <label for="descripcion">Descripcion</label>
                     <input required type="text" name="descripcion" id="descripcion">
                     <button>Enviar</button>
                </form>
           </div>
           <div class="lista">
            <table id="tablaIncidencias">
                <thead>
                    <th>Id</th>
                    <th>Fecha</th>
                    <th>Descripcion</th>
                    <th>Operaciones</th>
                </thead>
                <tbody id="tbodyIncidencias">
                    <tr>
                        <td>1</td>
                        <td>12/12/2021</td>
                        <td>Problema con el servidor</td>
                        <td>
                            <i class="fa-solid fa-trash"></i>
                            <i class="fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>12/12/2021</td>
                        <td>Problema con el servidor</td>
                        <td>
                            <i class="fa-solid fa-trash"></i>
                            <i class="fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>12/12/2021</td>
                        <td>Problema con el servidor</td>
                        <td>
                            <i class="fa-solid fa-trash"></i>
                            <i class="fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>12/12/2021</td>
                        <td>Problema con el servidor</td>
                        <td>
                            <i class="fa-solid fa-trash"></i>
                            <i class="fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>12/12/2021</td>
                        <td>Problema con el servidor</td>
                        <td>
                            <i class="fa-solid fa-trash"></i>
                            <i class="fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

            </table>
           </div>
        </section>
    </main>
    <footer>
        <p>© 2025 Todos los derechos reservados</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>