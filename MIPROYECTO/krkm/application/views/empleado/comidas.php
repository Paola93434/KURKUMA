<!-- application/views/empleado/platos.php -->
<h1>Gestión de Platos</h1>
<a href="<?php echo site_url('empleado/agregar_plato'); ?>">Agregar Nuevo Plato al Menú/a>
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
        <?php foreach ($platos as $plato): ?>
            <tr>
                <td><?php echo $plato->nombre; ?></td>
                <td><?php echo $plato->categoria; ?></td>
                <td><?php echo $plato->temporada; ?></td>
                <td><?php echo $plato->precio_compra; ?></td>
                <td>
                    <!-- Agrega botones para editar y eliminar -->
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
