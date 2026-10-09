<?php

require_once __DIR__ . '/../config/config.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Farmac</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/styles.css">
</head>
<body>
    <header class="header">
        <div class="contenedor">
            <h1>City Farmac</h1>
    
            <nav>
                <a href="<?php echo $base_url; ?>/index.php">Inicio</a>
                <a href="<?php echo $base_url; ?>/productos.php">Productos</a>
                <a href="<?php echo $base_url; ?>/contacto.php">Contacto</a>
                <a href="<?php echo $base_url; ?>/admin/login.php">Administración</a>
            </nav>
        </div>
    </header>
    
    <main class="contenedor">