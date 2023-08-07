<?php
include ("../../conexion.php");//cobnecta el arcivo de la base de datos
$id = $_REQUEST['id'];
$id = $_POST ['id'];  
$nom = $_POST ['nombre'];  
$contraseña = $_POST['contraseña']; 
$correo = $_POST['correo']; 
$mod = "UPDATE usuarios SET id='$id', id ='$id',nombre = '$nombre',contraseña ='$contraseña', correo = '$correo',
WHERE id = $id";
$resultado = mysqli_query($conexion,$mod) ; //el query hace la coconecta la base de datos
mysqli_close($conexion); //cierra la conexion de la base de datos
echo "<script>alert('Registro Modificado');
window.location='/app/usuario/indexUs.php'</script>";  //estas dos lineas mandan una alerta que diga que la base de datos recibio los datos correctamente
?>