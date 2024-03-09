<?php

include("baseDatos.php");

if(!empty($_GET['empleadoId'])) {

    $accesibilidad = conectar_bd();
    $query5 = "DELETE FROM empleado WHERE id_Empleado ='".$_GET['empleadoId']."'";
    $exito2 = mysqli_query($accesibilidad,$query5);
    

    if($exito2){
        header("Location: listaEmpleados.php");
    }else{
        header("Location: listaEmpleados.php");
    } 

}else{
    echo "<h1>Usuario no existe</h1>";
}

?>