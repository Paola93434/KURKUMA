<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Reporte</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Crear Nuevo Reporte</h1>
        <form action="<?php echo site_url('reportes/almacenar'); ?>" method="post">
            <div class="form-group">
                <label for="fecha_inicio">Fecha Inicio</label>
                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
            </div>
            <div class="form-group">
                <label for="fecha_fin">Fecha Fin</label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
            </div>
            <div class="form-group">
                <label for="total_ventas">Total Ventas</label>
                <input type="number" step="0.01" class="form-control" id="total_ventas" name="total_ventas" required>
            </div>
            <div class="form-group">
                <label for="total_pedidos">Total Pedidos</label>
                <input type="number" class="form-control" id="total_pedidos" name="total_pedidos" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Reporte</button>
            <a href="<?php echo site_url('reportes'); ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
