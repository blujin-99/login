<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="loginstyle.css">
    </head>
    <body>
<form class="form-registro" method="POST" action="registro.php" require>
<p>Nombre de usuario</p>
<input class="barra-datos" type="text" name="usuario" placeholder="Nombre de Usuario"required>
<p>Correo electrónico</p>
<input class="barra-datos"type="email" name="correo" placeholder="Correo electrónico"required>
<p>Contraseña</p>
<input class="barra-datos"type="password" name="contraseña" placeholder="Contraseña"required>
<input id="boton-2" type="submit" value="Registrarse">
</form>


    <?php 


?>
    </body>
</html>
