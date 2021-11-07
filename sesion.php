<?php 
include('conexion.php');//traemos la conexion
include('datosform.php');
session_start();
$_SESSION['correo']=$_POST['correo'];
$_SESSION['contraseña']=$_POST['contraseña'];
$consulta="SELECT * FROM usuario WHERE email='$_SESSION[correo]' AND contraseña ='$_SESSION[contraseña]'";
$result=mysqli_query($con,$consulta);
$filas=mysqli_num_rows($result);//esta función permite almacenar el resultado para luego realizar la validación
if($filas ){//validamos la consulta
header('location:mi-cuenta.php');//si es verdadera, inicia a mi.cuenta.php
die();
}else {
 header('location:error.php');//si es falsa, nos dirige a una página de error 
}
/*if($filas==''){
    header('location:login.php');
    die();
}*/

?>