<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Enlace a archivo CSS personalizado -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Lista de Pedidos</h2>
        
        <!-- Botón para agregar un nuevo pedido -->
        <div class="text-right mb-3">
            <a href="<?php echo site_url('pedidos/crear'); ?>" class="btn btn-primary">Nuevo Pedido</a>
        </div>
        
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID Pedido</th>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($pedidos)): ?>
                    <?php foreach ($pedidos as $pedido): ?>
                        <tr>
                            <td><?= $pedido['idPedido']; ?></td>
                            <td><?= $pedido['nombreCliente']; ?></td>
                            <td><?= $pedido['fecha_pedido']; ?></td>
                            <td>$<?= number_format($pedido['total'], 2); ?></td>
                            <td>
                                <span class="badge <?= $pedido['estado'] == 1 ? 'badge-warning' : 'badge-success'; ?>">
                                    <?= $pedido['estado'] == 1 ? 'Pendiente' : 'Completado'; ?>
                                </span>
                            </td>
                            <td>
                                <a href="<?= site_url('pedidos/ver/' . $pedido['idPedido']); ?>" class="btn btn-info btn-sm">Ver Detalles</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">No hay pedidos registrados.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
