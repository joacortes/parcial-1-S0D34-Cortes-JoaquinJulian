<?php

require_once 'inc/header.php';
require_once 'inc/sidebar.php';

?>

<h1>Marcas</h1>
<form>
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" required>

    <button type="submit">Guardar</button>

    <table>
        <tr>
            <th>Marca</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <td>Nivea</td>
            <td>Activo</td>
            <td>
                <button>Modificar</button>
                <button>Activar/Inactivar</button>
            </td>
        </tr>
    </table>
</form>

<?php

require_once 'inc/footer.php';
?>