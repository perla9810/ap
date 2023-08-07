<?php
include ("../../conexion.php");//cobnecta el arcivo de la base de datos
$id = $_REQUEST['id'];
$id = $_POST ['id'];  
$pue = $_POST['puesto']; 
$mod = "UPDATE puestos SET id = '$id',puesto = '$pues',
WHERE id = $id";
$resultado = mysqli_query($conexion,$mod) ; //el query hace la coconecta la base de datos
mysqli_close($conexion); //cierra la conexion de la base de datos
echo "<script>alert('Registro Modificado');
window.location='/app/puestos/indexPues.php'</script>";  //estas dos lineas mandan una alerta que diga que la base de datos recibio los datos correctamente
?>