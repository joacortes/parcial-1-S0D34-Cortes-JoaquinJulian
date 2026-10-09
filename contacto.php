<?php

require_once 'inc/header.php';

?>

<h2>Contáctenos</h2>

<form>
    <label for="nombre">Nombre y apellido</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="telefono">Teléfono</label>
    <input type="tel" id="telefono" name="telefono">

    <label for="area">Área</label>
    <select id="area" name="area" required>
        <option value=""> Seleccionar</option>
        <option value="ventas">Ventas</option>
        <option value="administracion">Administración</option>
        <option value="reclamos">Reclamos</option>
    </select>

    <label for="comentario">Comentario</label>
    <textarea id="comentario" name="comentario" required></textarea>

    <button type="submit">Enviar</button>
</form>

<?php

require_once 'inc/footer.php';

?>