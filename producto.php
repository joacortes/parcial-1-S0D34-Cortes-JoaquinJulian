<?php

require_once 'data/data.php';

$id = 0;

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$productoEncontrado = null;

foreach($productos as $producto){
    if($producto['id'] == $id && $producto['activo'] == true){
        $productoEncontrado = $producto;
    }
}

require_once 'inc/header.php';

?>

<?php

if($productoEncontrado != null){

?>
<article class="detalle-producto">
    <img src="<?php echo $base_url; ?>/assets/img/<?php echo $productoEncontrado['imagen']; ?>" alt="<?php echo $productoEncontrado['nombre']; ?>">

    <h2><?php echo $productoEncontrado['nombre']; ?></h2>
    <p><?php echo $productoEncontrado['descripcion']; ?></p>
    <p>Marca: <?php echo $productoEncontrado['marca']; ?></p>
    <p>Modelo: <?php echo $productoEncontrado['modelo']; ?></p>
    <p>Precio: $<?php echo $productoEncontrado['precio']; ?></p>
    <p>Ranking: <?php echo $productoEncontrado['ranking']; ?>/5</p>
</article>
<h3>Comentarios</h3>
<?php
foreach($comentarios as $comentario){
    if($comentario['producto_id'] == $productoEncontrado['id'] && $comentario['activo'] == true){
?>
<article class="comentario">
    <p><?php echo $comentario['comentario']; ?></p>
    <p>Ranking: <?php echo $comentario['ranking']; ?>/5</p>
    <small><?php echo $comentario['fecha']; ?></small>
</article>
<?php
    }
}
?>

<form>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="comentario">Comentario</label>
    <textarea name="comentario" id="comentario" required></textarea>

    <label for="ranking">Valoración</label>
    <input type="number" id="ranking" name="ranking" min="1" max="5" required>
    <button type="submit">Enviar comentario</button>
</form>
<?php
} else{
?>
<h2>Producto no encontrado</h2>
<?php
}

require_once 'inc/footer.php';

?>