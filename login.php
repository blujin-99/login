<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <title>Inicio de Sesión</title>
</head>
<body>
     <form class="login" method="POST" action="sesion.php" >
    <h1>INICIE SESIÓN</h1>
    <input class="barras" type="email" name="correo" placeholder="Correo electrónico">    
    <input  class="barras" type="password" name="contraseña" placeholder="Contraseña">  
    <input id="boton" type="submit" value="Iniciar Sesión">  
    </form>
    <p class="text-registro">¿No tienes una cuenta? </p><a href="registro-usuario.php"class="text-registro">Registrate</a>
</body>
</html>