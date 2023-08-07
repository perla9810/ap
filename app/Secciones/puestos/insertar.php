<?php
include ("../../conexion.php");
$id = $_POST['id']; 
$pue = $_POST['puesto']; 
$insertar = "INSERT INTO empleados(id,puesto)
VALUES(''$id','$pue','$insertar')";//el primer parentesis es de los campos de la base de datos, y el segundo parentesis son las variables
$resultado = mysqli_query($conexion,$insertar) ; 
mysqli_close($conexion); 
echo "<script>alert('Insercion coompletada');
window.location='/app/puestos/indexEPues.php'</script>"; 
?>