<?php

include("baseDatos.php");

$conexionbd = conectar_bd();

if(!$conexionbd){
    die("Conexión fallida: " . mysqli_connect_error());
}

echo "<h1> Conexion exitosa</h1>";

mysqli_close($conexionbd);

?>