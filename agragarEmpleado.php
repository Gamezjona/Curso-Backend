<?php

include("baseDatos.php");

if(!empty($_POST['nombre']) && !empty($_POST['edad'])){

    $accesibilidad = conectar_bd();
    $query = "INSERT INTO empleado (id_Empleado, nombre_Empleado, edad_Empleado) VALUES (NULL, '".$_POST['nombre']."', '".$_POST['edad']."')";
    $exito = mysqli_query($accesibilidad,$query);

    if($exito){
        echo "Se ingreso el empleado";
        //header("Location: listaEmpleados.php");
    }else{
        header("Location: nuevoEmpleado.php");
    }
}else{
    header('Location: nuevoEmpleado.php');
}

?>