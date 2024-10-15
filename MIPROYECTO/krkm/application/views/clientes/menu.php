<!-- application/views/cliente/menu.php -->
<!-- Enlace al archivo CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">
<h1>Menú de Platos</h1>
<ul>
    <?php foreach ($platos as $plato): ?>
        <li>
            <h2><?php echo $plato->nombre; ?></h2>
            <p>Categoría: <?php echo $plato->categoria; ?></p>
            <p>Temporada: <?php echo $plato->temporada; ?></p>
            <p>Precio: <?php echo $plato->precio_compra; ?></p>
            <!-- Puedes agregar más detalles o enlaces según sea necesario -->
        </li>
    <?php endforeach; ?>
</ul>