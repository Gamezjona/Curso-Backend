<?php
include("baseDatos.php");
$conexion_bd = conectar_bd();
$query2 = "SELECT id_Empleado,nombre_Empleado,edad_Empleado FROM empleado WHERE id_Empleado =".$_GET['empleadoId']." LIMIT 1"; 
$resultado3 = mysqli_query($conexion_bd,$query2);
mysqli_close($conexion_bd);

$registroEmpleado = mysqli_fetch_assoc($resultado3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modimicar Empleadi</title>
</head>
<body>
    <form action="actualizarEmpleado.php" method="post">
        <input type="text" name="empleado_Nombre" value="<?php echo $registroEmpleado['nombre_Empleado']?>">
        <br>
        <input type="number" name="empleado_Edad" value="<?php echo $registroEmpleado['edad_Empleado']?>">
        <br>
        <input type="hidden" name="empleado_Id" value="<?php echo $registroEmpleado['id_Empleado']?>">
        <br>
        <input type="submit" value="Actualizar Empleado">
    </form>
</body>
</html>