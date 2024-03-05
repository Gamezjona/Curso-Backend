<?php

$usuario = $_POST['user'];
$password = $_POST['pwd'];


$resultado =verificarDatos($usuario,$password);
if($resultado){
    echo "<h1>Bienvenido</h1>";
}
else{
    echo "<h1>Datos incorrectos</h1>";
}

function verificarDatos ($Us,$Con){
    if( $Us == "Administrador" && $Con=="Admin1234"){
        return true;
    }else{
        return false;
    }
}

?>