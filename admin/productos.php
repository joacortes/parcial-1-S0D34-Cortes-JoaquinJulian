<?php

require_once '../data/data.php';
require_once 'inc/header.php';
require_once 'inc/sidebar.php';

?>

<h1>Productos</h1>

<h2>Alta / Edición</h2>

<form>
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" required>

    <label for="descripcion">Descripción</label>
    <textarea id="descripcion" required></textarea>

    <label for="precio">Precio</label>
    <input type="number" id="precio" min="0" required>

    <label for="categoria">Categoría</label>
    <select id="categoria" required>
        <option>Dermocosmetica</option>
        <option>Cuidado personal</option>
    </select>

    <label for="marca">Marca</label>
    <select id="marca" required>
        <option>Dermaglos</option>
        <option>Nivea</option>
    </select>

    <label for="modelo">Modelo</label>
    <input type="text" id="modelo">

    <label for="imagen">Imagen</label>
    <input type="file" id="imagen">

    <label><input type="checkbox">Destacado</label>

    <button type="submit">Guardar</button>
</form>

<h2>Listado</h2>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($productos as $producto) { ?>
        <tr>
            <td>
                <?php echo $producto['nombre']; ?>
            </td>
            <td>
                <?php echo $producto['categoria']; ?>
            </td>
            <td>
                <?php echo $producto['marca']; ?>
            </td>
            <td>
                $<?php echo $producto['precio']; ?>
            </td>
            <td>
                <?php

                if ($producto['activo']) {
                    echo 'Activo';
                } else {
                    echo 'Inactivo';
                }

                ?>
            </td>
            <td>
                <button>Modificar</button>
                <button>Activar/Inactivar</button>
                <button>Ver comentarios</button>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<?php

require_once 'inc/footer.php';

?>