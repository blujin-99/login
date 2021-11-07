<?php 
session_start();
$_SESSION['correo'];
$_SESSION['contraseña'];
if($_SESSION['correo']=='' and$_SESSION['contraseña']==''){
    echo "DEBES INICIAR SESIÓN";
    die();
}else {
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>

<body id="mi-cuenta-body">
    <h1 id="text-mi-cuenta">¡Hola usuario!</h1>
<form id="form-mi-cuenta" action="cierre.php" method="POST">
    <input id="cerrar-sesion" type="submit" name="cerrar" value="Cerrar Sesión">
</form>
<?php    
}die();
?>
</body>

</html>