<?php

require_once 'inc/header.php';
require_once 'inc/sidebar.php';

?>

<h1>Comentarios</h1>

<label for="estado">Estado</label>

<select id="estado">
    <option>Todos</option>
    <option>Activos</option>
    <option>Inactivos</option>
</select>
<table>
    <tr>
        <th>Comentario</th>
        <th>Ranking</th>
        <th>Fecha</th>
        <th>Producto</th>
        <th>Estado</th>
        <th>Acción</th>
    </tr>
    <tr>
        <td>Muy buen producto</td>
        <td>5</td>
        <td>01/10/2026</td>
        <td>Protector Solar</td>
        <td>Aprobado</td>
        <td>
            <button>Desaprobar</button>
        </td>
    </tr>
</table>

<?php
require_once 'inc/footer.php';
?>