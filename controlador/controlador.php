<?php 

if (!empty($_POST["btnIngresar"])) {
    if (empty($_POST["usuario"]) && empty($_POST["clave"])) {
        echo '<div class="alert alert-danger">Los campos están vacíos</div>';
    } else {
        $usuario=$_POST["usuario"];
        $clave=$_POST["clave"];

        $sql=$conexion->query(" SELECT * FROM Usuarios WHERE nombre_usuario = '$usuario' && clave= '$clave' ");

        if ($datos=$sql->fetch_object()) {
            header("Location: index.php");
        } else {
            echo '<div class="alert alert-danger">Usuario y/o clave incorrecto/s</div>';
        }
       
    }
}

?>
