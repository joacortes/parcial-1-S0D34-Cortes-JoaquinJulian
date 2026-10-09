<h1>Categorías</h1>

<form>
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" required>

    <label for="padre">Categoría padre</label>

    <select id="padre">
        <option value="">Sin categoría padre</option>
        <option>Dermocosmetica</option>
        <option>Cuidado personal</option>
    </select>

    <button type="submit">Guardar</button>
</form>
<table>
    <tr>
        <th>Nombre</th>
        <th>Padre</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>
    <tr>
        <td>Dermocosmetica</td>
        <td>-</td>
        <td>Activo</td>
        <td>
            <button>Modificar</button>
            <button>Activar/Inactivar</button>
            <button>Ver subcategorías</button>
        </td>
    </tr>
</table>