<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="loginstyle.css" rel="stylesheet">
    </head>
    <body class="fondo-registro">
    

<?php 
include('conexion.php');
/*if ($con){
    echo " se conectó correctamente <br>";
}else{
    echo "hubo un error<br>";
}*/
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$pass=$_POST['contraseña'];
 $registro= "INSERT INTO usuario ( nom_usuario, email, contraseña) VALUES ('$usuario','$correo','$pass')";
 $querysql=mysqli_query($con,$registro);
if ($querysql<>''){

    ?>
    <h1 id="registro-text"> ¡Se ha registrado correctamente! </h1>
    <a id="text-a"href="login.php">volver al inicio</a>
    <?php
}else{
    ?>
    <h2 id="sin-registro"> EL FORMULARIO DE REGISTRO NO SE COMPLETÓ, POR FAVOR INGRESE SUS DATOS NUEVAMENTE </h2>
<?php 
}
?>
    </body>
</html>