<?php
require_once 'inc/header.php';
require_once 'inc/sidebar.php';
?>
<h1>Usuarios</h1>

<form>
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" required>

    <label for="email">Email</label>
    <input type="email" id="email" required>

    <label for="password">Contraseña</label>
    <input type="password" id="password" required>

    <label for="perfil">Perfil</label>

    <select id="perfil">
        <option>Administrador</option>
        <option>Editor</option>
    </select>

    <button type="submit">Guardar</button>
</form>
<table>
    <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Perfil</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>
    <tr>
        <td>Administrador</td>
        <td>admin@cityfarmac.com</td>
        <td>Administrador</td>
        <td>Activo</td>
        <td>
            <button>Modificar</button>
            <button>Activar/Inactivar</button>
        </td>
    </tr>
</table>

<?php
require_once 'inc/footer.php';
?>