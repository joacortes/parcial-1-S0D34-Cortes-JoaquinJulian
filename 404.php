<?php

http_response_code(404);

require_once 'inc/header.php';

?>

<h2>Error 404</h2>
<p>La página que estás buscando no existe.</p>
<a href="<?php echo $base_url; ?>/index.php">Volver al inicio</a>

<?php

require_once 'inc/footer.php';

?>