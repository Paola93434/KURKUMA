<h2>Detalles del Pedido #<?php echo $pedido->idPedido; ?></h2>
<p>Cliente: <?php echo $pedido->cliente; ?></p>
<p>Fecha: <?php echo $pedido->fechaPedido; ?></p>
<p>Total: <?php echo $pedido->total; ?></p>
<p>Estado: <?php echo $pedido->estado; ?></p>

<h3>Comidas</h3>
<table>
    <thead>
        <tr>
            <th>Comida</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($detalle as $item): ?>
            <tr>
                <td><?php echo $item->comida; ?></td>
                <td><?php echo $item->cantidad; ?></td>
                <td><?php echo $item->precio; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
