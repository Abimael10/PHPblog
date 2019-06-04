<?php require_once './includes/conexion.php'; ?>
<?php require_once './includes/helpers.php'; ?>

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

        <?php if(isset($_SESSION['completado'])) : ?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['completado'] ?>
            </div>
        <?php elseif(isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['errores']['general']?>
            </div>
        <?php endif; ?>
        
            <input type="text" name="nombre" placeholder="Introduzca su Nombre">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
            <br>

            <input type="text" name="apellidos" placeholder="Apellidos Aquí">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
            <br>

            <input type="email" name="email" placeholder="Introduzca su Email">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
            <br>

            <input type="password" name="password" required="required" placeholder="Contraseña">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
            <br>

            <input type="submit" name="submit" value="Registrarse">

            <p>Si ya tienes una cuenta, haz click <a href="index.php">Aquí</a> para volver a Inicio.</p>
    </form>
    <?php borrarError(); ?>
</body>
</html>