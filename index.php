<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Registro</title>
</head>
<body>
    <form method="Post" class="form-register">
        <h4>Registrate</h4>
        <input class="controls" type="text" name="nombre" placeholder="Nombre">
        <input class="controls" type="text" name="cargo" placeholder="Cargo">
        <input class="controls" type="number" name="salario" placeholder="Salario">
        <input class="controls" type="text" name="telefono" placeholder="Telefono">
        <p>Estoy de acuerdo con <b><a href="#">Terminos y condiciones</a></b></p>
        <input class="botons" type="submit" value="Registrar">
        <p><a href="#">¿Ya tengo cuenta?</a></p>
    </form>
    <?php
    include("registrar.php");
     ?>
</body>
</html>