<?php
include ("../../conexion.php");
$id = $_POST['id']; 
$nom = $_POST ['nombre'];  
$contraseña = $_POST['contraseña']; 
$correo = $_POST['correo'];
$insertar = "INSERT INTO empleados(id,nombre,contraseña,correo)
VALUES('$id'$nom','$contraseña','$correo','$insertar')";//el primer parentesis es de los campos de la base de datos, y el segundo parentesis son las variables
$resultado = mysqli_query($conexion,$insertar) ; 
mysqli_close($conexion); 
echo "<script>alert('Insercion coompletada');
window.location='/app/puestos/indexPues.php'</script>"; 
?>