<?php

require_once 'data/data.php';

$marcaSeleccionada = '';

if(isset($_GET['marca'])) {
    $marcaSeleccionada = $_GET['marca'];
}

$categoriaSeleccionada = "";

if(isset($_GET['categoria'])){
    $categoriaSeleccionada = $_GET['categoria'];
}

$ordenSeleccionado = '';

if (isset($_GET['orden'])) {
    $ordenSeleccionado = $_GET['orden'];
}

$productosFiltrados = [];



foreach($productos as $producto){
    $mostrar = true;

    if($producto['activo'] == false) {
        $mostrar = false;
    }

    if($marcaSeleccionada != ''){
        if($producto['marca'] != $marcaSeleccionada){
            $mostrar = false;
        }
    }

    if($categoriaSeleccionada != ''){
        if($producto['categoria'] != $categoriaSeleccionada){
            $mostrar = false;
        }
    }

    if($mostrar == true){
        $productosFiltrados[] = $producto;
    }

    if($ordenSeleccionado == 'az'){
        usort($productosFiltrados, function ($a, $b) {
            return strcmp($a['nombre'], $b['nombre']);
        });
    }

    if($ordenSeleccionado == 'za'){
        usort($productosFiltrados, function ($a, $b) {
            return strcmp($b['nombre'], $a['nombre']);
        });
    }

    if($ordenSeleccionado == 'ranking'){
        usort($productosFiltrados, function ($a, $b) {
            return $b['ranking'] - $a['ranking'];
        });
    }
}

require_once 'inc/header.php';
?>

<h2>Productos</h2>

<form method="get">
    <label for="categoria">Categoria</label>
    <select name="categoria" id="categoria">
        <option value="">Todas</option>

        <?php foreach($categorias as $categoria) { ?>

        <option value="<?php echo $categoria; ?>"><?php echo $categoria; ?></option>
        <?php } ?>
    </select>

    <label for="marca">Marca</label>
    <select name="marca" id="marca">
        <option value="">Todas</option>

        <?php foreach($marcas as $marca) { ?>

        <option value="<?php echo $marca; ?>"><?php echo $marca; ?></option>
        <?php } ?>
    </select>

    <label for="orden">Ordenar</label>
    <select name="orden" id="orden">
        <option value="destacados">Destacados</option>
        <option value="ranking">Ranqueados mayor a menor</option>
        <option value="az">A-Z</option>
        <option value="za">Z-A</option>
    </select>

    <button type="submit">Filtrar</button>
</form>

<div class="productos">
    <?php
    if(count($productosFiltrados) == 0){
    ?>
    
    <p>No hay productos para mostrar</p>

    <?php
    } else {
        foreach($productosFiltrados as $producto){


    ?>

    <article class="producto">
        <img src="<?php echo $base_url; ?>/assets/img/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
        <h3><?php echo $producto['nombre']; ?></h3>
        <p><?php echo $producto['marca']; ?></p>
        <p>$<?php echo $producto['precio']; ?></p>
        <p>Ranking: <?php echo $producto['ranking']; ?>/5</p>
        <a href="producto.php?id=<?php echo $producto['id']; ?>">Ver detalle</a>
    </article>
    <?php
        }
    }
    ?>
</div>

<?php
require_once 'inc/footer.php';
?>