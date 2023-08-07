<?php
$conexion = mysqli_connect("localhost","root","","app");//localhost = servidor,rootm = usuario,""=contraseña,cecytem = la base de datos
mysqli_set_charset($conexion,"utf8");//opcional pero indispensabel, pero si no esta esta linea habra una coalicion de datos  con ., y otros signos gramaticales
if(!$conexion){                //-----|
	echo'error de conexion';   //     |
}                              //     |----esta se                         
else{                          //     |
	echo "conexion";                   //     |
}                              //     |
                               //-----|