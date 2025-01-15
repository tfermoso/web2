<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
}
include("./partials/cabecera.php");
?>
<div class="contenedorPrincipal">
    
</div>
<?php
include("./partials/footer.php");   
?>