<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
    <link rel="stylesheet" href="./css/sign.css">
</head>
<body>
    <form class="forma" action="sign.php" method="POST">

        <h1>Registro</h1>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z ]+" placeholder="Nombre"><br>

            <input type="text" name="apellidos" required="required" pattern="[A-Za-z ]+" placeholder="Apellidos"><br>

            <input type="email" name="email" placeholder="Email"><br>

            <input type="password" name="password" required="required" placeholder="Contraseña"><br>

            <input type="submit" name="submit" value="Registrarse">

            <p>Si ya tienes una cuenta, haz click <a href="index.php">Aquí</a> para volver a Inicio.</p>
    </form>
</body>
</html>