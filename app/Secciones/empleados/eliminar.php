<?php
include ("../conexion.php");//cobnecta el arcivo de la base de datos
$codigo = $_REQUEST['codigo'];  

$eliminar= "DELETE FROM empleados
WHERE codigo = $codigo";
$resultado = mysqli_query($conexion,$eliminar) ; //el query hace la coconecta la base de datos
mysqli_close($conexion); //cierra la conexion de la base de datos
echo "<script>alert('Registro Eliminado');
window.location='/app/empleados/indexEmp.php'</script>"; //estas dos lineas mandan una alerta que diga que la base de datos recibio los datos correctamente
?>