<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Pedido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Enlace a archivo CSS personalizado -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Detalles del Pedido</h2>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Plato</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($pedido)): ?>
                    <?php foreach ($pedido as $detalle): ?>
                        <tr>
                            <td><?= $detalle['nombre']; ?></td>
                            <td><?= $detalle['cantidad']; ?></td>
                            <td>$<?= number_format($detalle['precio'], 2); ?></td>
                            <td>$<?= number_format($detalle['precio'] * $detalle['cantidad'], 2); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">No hay detalles disponibles para este pedido.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="text-center mt-3">
            <a href="<?= site_url('pedidos'); ?>" class="btn btn-primary">Regresar a la Lista de Pedidos</a>
        </div>
    </div>
</body>
</html>
