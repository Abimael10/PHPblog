<?php
//Iniciar la sesión y conectar a la base de datos
require_once 'includes/conexion.php';

//Recoger datos del formulario
if(isset($_POST)) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    //Consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);

        //Comprobar la contraseña
        $verificar = password_verify($password, $usuario['password']);
    }

    if($verificar) {
        //Utilizar una sesión para guardar los datos del usuario legueado
        $_SESSION['usuario'] = $usuario;

        if(isset($_SESSION['error_login'])) {
            unset($_SESSION['error_login']);
        }

        } else {
        //Enviar error para loguearse
        $_SESSION['error_login'] = "Error para loguearse :(";
    } else {
        //Mensaje de error
        $_SESSION['error_login'] = "Error para loguearse :(";
    }

    header('Location: index.php');

}