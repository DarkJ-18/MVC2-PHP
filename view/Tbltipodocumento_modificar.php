<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html"; charset="utf8"/>
        <title>Ejemplo 2 - MVC PHP</title>
    </head>
    <body>
        <?php foreach($consulta as $datos):?>
        <h1>Modificar información</h1>
        <br>
        <form name="form1" method="post" action="index.php?accion=guardarCambiosTipoDocumento">
        <p>Id: <input type="text" name="txtid" value="<?php print $_REQUEST['id'];?>" readonly></p>
        <p>Nombre: <input type="text" name="txtnombre" value="<?php print $datos['nombre'];?>"></p>
        <p><input type="submit" name="btnguardarcambios" value="Guardar Cambios"></p>
        </form>
        <?php endforeach;?>
    </body>
</html>