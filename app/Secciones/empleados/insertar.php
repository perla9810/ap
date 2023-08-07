<?php
include ("../../conexion.php");
$nom = $_POST ['nombre'];  
$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$cv = addslashes(file_get_contents($_FILES['cv']['tmp_name']));
$pue = $_POST['puesto']; 
$fi = $_POST['fecha_ingreso']; 
$insertar = "INSERT INTO empleados(nombre,foto,cv,puesto,fecha_ingreso,)
VALUES(''$nom','$foto','$cv','$pue','$fi','$insertar')";//el primer parentesis es de los campos de la base de datos, y el segundo parentesis son las variables
$resultado = mysqli_query($conexion,$insertar) ; 
mysqli_close($conexion); 
echo "<script>alert('Insercion coompletada');
window.location='/app/empleados/indexEmp.php'</script>"; 
?>