<h1>Detalles de la Venta</h1>
<table border="1">
    <thead>
        <tr>
            <th>Plato</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($venta as $detalle): ?>
        <tr>
            <td><?php echo $detalle->nombrePlato; ?></td>
            <td><?php echo $detalle->cantidad; ?></td>
            <td><?php echo $detalle->precio; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?php echo site_url('ventas'); ?>">Volver a Listado</a>
