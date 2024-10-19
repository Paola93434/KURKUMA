<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Venta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Enlace a archivo CSS personalizado si es necesario -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Crear Nueva Venta</h1>
        <form action="<?php echo site_url('ventas/crear'); ?>" method="POST">
            <!-- Selección de cliente -->
            <div class="form-group">
                <label for="cliente_id">Cliente:</label>
                <select name="cliente_id" class="form-control" required>
                    <?php foreach($clientes as $cliente): ?>
                        <option value="<?php echo $cliente->idCliente; ?>"><?php echo $cliente->nombre; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <h3>Detalles de la Venta</h3>

            <!-- Contenedor para los detalles de la venta -->
            <div id="detalleVenta">
                <div class="detalle form-row mb-3">
                    <div class="col-md-4">
                        <label for="plato">Plato:</label>
                        <select name="plato[]" class="form-control" required>
                            <?php foreach($platos as $plato): ?>
                                <option value="<?php echo $plato->idPlato; ?>"><?php echo $plato->nombre; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" name="cantidad[]" class="form-control" min="1" required />
                    </div>

                    <div class="col-md-3">
                        <label for="precio">Precio Unitario:</label>
                        <input type="text" name="precio[]" class="form-control" required />
                    </div>
                </div>
            </div>

            <!-- Botón para agregar más platos -->
            <div class="text-center">
                <button type="button" class="btn btn-secondary mb-4" onclick="agregarDetalle()">Agregar Otro Plato</button>
            </div>

            <!-- Botón para registrar la venta -->
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Registrar Venta" />
            </div>
        </form>
    </div>

    <script>
        // Función para agregar más detalles de platos
        function agregarDetalle() {
            const div = document.createElement('div');
            div.className = 'detalle form-row mb-3';
            div.innerHTML = `
                <div class="col-md-4">
                    <label for="plato">Plato:</label>
                    <select name="plato[]" class="form-control" required>
                        <?php foreach($platos as $plato): ?>
                        <option value="<?php echo $plato->idPlato; ?>"><?php echo $plato->nombre; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="cantidad">Cantidad:</label>
                    <input type="number" name="cantidad[]" class="form-control" min="1" required />
                </div>
                <div class="col-md-3">
                    <label for="precio">Precio Unitario:</label>
                    <input type="text" name="precio[]" class="form-control" required />
                </div>
            `;
            document.getElementById('detalleVenta').appendChild(div);
        }
    </script>
</body>
</html>
