<?php

include("baseDatos.php");
$conexion_bd = conectar_bd();
$query = "SELECT id_Empleado,nombre_Empleado,edad_Empleado FROM empleado";
$resultado2 = mysqli_query($conexion_bd,$query);
mysqli_close($conexion_bd);
?>  

<html>
    <head>

    </head>
    <body>
        <h1>Lista de Empleados</h1>
        <ul>
            <?php
            while($registro = mysqli_fetch_assoc($resultado2)){
                echo "<li>".$registro['nombre_Empleado']." (".$registro['edad_Empleado'].") años  ";
                echo "<a href='modificarEmpledo.php?empleadoId=".$registro['id_Empleado']."'> Modoficar </a>   ";
                echo "<a href='eliminarEmpledo.php?empleadoId=".$registro['id_Empleado']."'> Eliminar </a> </li>";
            }
            ?>
        </ul>
    </body>
</html>