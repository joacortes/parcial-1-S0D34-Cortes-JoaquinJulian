<?php

require_once '../config/config.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/styles.css">
</head>
<body>
    <main class="login">
        <h1>Ingresar al panel</h1>
        <form action="index.php">
            <label for="email">Email</label>
            <input type="email" id="email" required>
            <label for="password">Contraseña</label>
            <input type="password" id="password" required>
            <button type="submit">Ingresar</button>
        </form>

        <a href="registro.php">Registrarse</a>

    </main>
</body>
</html>