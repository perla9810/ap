<?php
include ("../../conexion.php");//cobnecta el arcivo de la base de datos
$nombre = $_REQUEST['nombre'];
$nom = $_POST ['nombre'];  
$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$cv = addslashes(file_get_contents($_FILES['cv']['tmp_name']));
$pue = $_POST['puesto']; 
$fi = $_POST['fecha_ingreso']; 

$mod = "UPDATE empleados SET nombre='$nom',nombre = '$nombre',foto = '$foto',
cv='$cv',puesto='$pues',fecha_ingreso='$fi'
WHERE nombre = $nombre";
$resultado = mysqli_query($conexion,$mod) ; //el query hace la coconecta la base de datos
mysqli_close($conexion); //cierra la conexion de la base de datos
echo "<script>alert('Registro Modificado');
window.location='/app/empleados/indexEmp.php'</script>";  //estas dos lineas mandan una alerta que diga que la base de datos recibio los datos correctamente
?>
