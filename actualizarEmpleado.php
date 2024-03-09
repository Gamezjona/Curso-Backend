<?php

include("baseDatos.php");

if(!empty($_POST['empleado_Nombre']) && !empty($_POST['empleado_Edad']) && !empty($_POST['empleado_Id'])) {

    echo $_POST['empleado_Nombre'].$_POST['empleado_Edad'].$_POST['empleado_Id'];

    $accesibilidad = conectar_bd();
    $query4 = "UPDATE `empleado` SET `nombre_Empleado` ='".$_POST['empleado_Nombre']."', `edad_Empleado` ='".$_POST['empleado_Edad']."' WHERE id_Empleado ='".$_POST['empleado_Id']."'";
    $exito2 = mysqli_query($accesibilidad,$query4);
    

    if($exito2){
        header("Location: listaEmpleados.php");
    }else{
        header("Location: nuevoEmpleado.php");
    } 

}else{
    header('Location: nuevoEmpleado.php');
}

?>