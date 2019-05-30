<?php require_once 'conexion.php'?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Blog</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!--Cabecera-->
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                Mi Blog
            </a>
        </div>

        <!--Menú-->
        <nav id="menu">
            <ul>
                <li>
                    <a class="ini" href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="#">Categorías</a>
                </li>
                <li>
                    <a href="#">Sobre Mí</a>
                </li>
                <li>
                    <a href="#">Contacto</a>
                </li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>