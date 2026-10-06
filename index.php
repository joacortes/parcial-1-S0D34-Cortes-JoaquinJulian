<?php

require_once 'data/data.php';
require_once 'inc/header.php';

?>

<section>
    <h2>Productos destacados</h2>
    <div class="productos">
        <?php

        $cantidadDestacados = 0;

        foreach($productos as $producto){
            if($producto['destacado'] == true &&
            $producto['activo'] == true &&
            $cantidadDestacados < 6){
                ?>
                <article class="producto">
                    <img src="<?php echo $base_url; ?>/assets/img/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                    <h3><?php echo $producto['nombre']; ?></h3>
                    <p>Marca: <?php echo $producto['marca']; ?></p>
                    <p>Precio: <?php echo $producto['precio']; ?></p>
                    <p>Ranking: <?php echo $producto['ranking']; ?>/5</p>

                    <a href="<?php echo $base_url; ?>/producto.php?id=<?php echo $producto['id']; ?>">Ver producto</a>
                </article>

                <?php
                $cantidadDestacados++;
            }
        }
        ?> 
    </div>
</section>

<?php

require_once 'inc/footer.php';

?>