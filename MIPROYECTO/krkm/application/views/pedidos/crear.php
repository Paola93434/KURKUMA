<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Pedido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Enlace a archivo CSS personalizado -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Crear Pedido</h2>
        <form action="<?= site_url('pedidos/guardar'); ?>" method="POST">
            <div class="form-group">
                <label for="cliente_id">Cliente</label>
                <select name="cliente_id" class="form-control" id="cliente_id" required>
                    <option value="">Seleccionar Cliente</option> <!-- Opción por defecto -->
                    <?php foreach ($clientes as $cliente): ?>
                        <option value="<?= $cliente->idCliente; ?>"><?= $cliente->nombre; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <h4>Platos</h4>
            <?php foreach ($platos as $plato): ?>
                <div class="form-row mb-3 align-items-center">
                    <div class="col-md-6">
                        <label>
                            <input type="checkbox" name="platos[]" value="<?= $plato['idPlato']; ?>"> <?= $plato['nombre']; ?>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <input type="number" name="cantidades[]" value="1" min="1" class="form-control" placeholder="Cantidad">
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="form-group">
                <label for="total">Total</label>
                <input type="number" name="total" class="form-control" id="total" placeholder="Total del pedido" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Guardar Pedido</button>
            </div>
        </form>
    </div>
</body>
</html>
