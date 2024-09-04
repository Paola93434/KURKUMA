<!-- application/views/cliente/menu.php -->

<h1>Menú de Comidas</h1>
<ul>
    <?php foreach ($comidas as $comida): ?>
        <li>
            <h2><?php echo $comida->nombre; ?></h2>
            <p>Categoría: <?php echo $comida->categoria; ?></p>
            <p>Temporada: <?php echo $comida->temporada; ?></p>
            <p>Precio: <?php echo $comida->precio_compra; ?></p>
            <!-- Puedes agregar más detalles o enlaces según sea necesario -->
        </li>
    <?php endforeach; ?>
</ul>