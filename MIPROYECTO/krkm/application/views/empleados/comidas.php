<!-- application/views/empleado/comidas.php -->
<h1>Gestión de Comidas</h1>
<a href="<?php echo site_url('empleado/agregar_comida'); ?>">Agregar Nueva Comida</a>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Temporada</th>
            <th>Precio de Compra</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($comidas as $comida): ?>
            <tr>
                <td><?php echo $comida->nombre; ?></td>
                <td><?php echo $comida->categoria; ?></td>
                <td><?php echo $comida->temporada; ?></td>
                <td><?php echo $comida->precio_compra; ?></td>
                <td>
                    <!-- Agrega botones para editar y eliminar -->
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
