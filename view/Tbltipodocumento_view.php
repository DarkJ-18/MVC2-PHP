<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Ejemplo 2 MVC PHP</title>
    </head>
    <body>

    <h1>Nuevo Registro</h1>
        <br>
        <form name="form1" method="post" action="index.php?accion=guardar">
        <p>Nombre: <input type="text" name="txtnombre"></p>
        <p><input type="submit" name="btnguardar" value="Guardar"></p>
        </form>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre Documento</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($consulta as $datos): ?>
                <tr>
                    <td><?php print $datos['idtipo']; ?></td>
                    <td><?php print $datos['nombre']; ?></td>
                    <td><a href="index.php?accion=modificar&id=<?php print $datos['idtipo']; ?>">Modificar</a></td>
                    <td><a href="index.php?accion=eliminar&id=<?php print $datos['idtipo']; ?>">Eliminar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
