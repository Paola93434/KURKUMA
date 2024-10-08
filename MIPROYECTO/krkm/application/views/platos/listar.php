<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Platos del Menú</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f0f9; /* Color de fondo claro lila */
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .btn-primary-custom {
            background-color: #9b59b6; /* Color lila claro */
            color: #ffffff;
        }
        .btn-primary-custom:hover {
            background-color: #8e44ad; /* Lila más oscuro */
            color: #ffffff;
        }
        .btn-success-custom {
            background-color: #2ecc71; /* Color verde brillante */
            color: #ffffff;
        }
        .btn-success-custom:hover {
            background-color: #27ae60; /* Verde más oscuro */
            color: #ffffff;
        }
        .btn-danger-custom {
            background-color: #e74c3c; /* Color rojo brillante */
            color: #ffffff;
        }
        .btn-danger-custom:hover {
            background-color: #c0392b; /* Rojo más oscuro */
            color: #ffffff;
        }
        table {
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }
        thead th {
            background-color: #d5a6f2; /* Lila pastel */
            color: #4a3f54; /* Lila oscuro */
            font-weight: bold;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f6fd; /* Lila muy claro */
        }
        tbody tr:hover {
            background-color: #e6e6fa; /* Lila claro al pasar el ratón */
        }
        h1 {
            color: #9b59b6; /* Color lila claro */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row mb-2">
            <div class="col-md-12">
                <h1 class="my-4 text-center">Lista de Platos del Menú</h1>
                <a href="<?php echo site_url('platos/crear'); ?>" class="btn btn-primary-custom mb-3">Agregar Plato al Menú</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Categoría</th>
                            <th>Imagen</th>
                            <th>Acciones</th> <!-- Cambié Modificar y Eliminar por una columna Acciones -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($platos)): ?>
                            <?php $indice = 1; ?>
                            <?php foreach ($platos as $plato): ?>
                                <tr>
                                    <th><?php echo $indice; ?></th>
                                    <td><?php echo $plato['nombre']; ?></td>
                                    <td><?php echo $plato['descripcion']; ?></td>
                                    <td><?php echo $plato['precio']; ?></td>
                                    <td><?php echo $plato['categoria']; ?></td>
                                    <td>
                                        <?php if ($plato['imagen']): ?>
                                            <img src="<?php echo base_url('uploads/' . $plato['imagen']); ?>" alt="Imagen de plato" width="100" class="img-fluid">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <!-- Cuadro con opciones de Modificar y Eliminar -->
                                        <a href="<?php echo site_url('platos/editar/' . $plato['idPlato']); ?>" class="btn btn-success-custom btn-sm">Modificar</a>
                                        <?php echo form_open('platos/eliminar/' . $plato['idPlato'], ['style' => 'display:inline']); ?>
                                        <button type="submit" class="btn btn-danger-custom btn-sm">Eliminar</button>
                                        <?php echo form_close(); ?>
                                    </td>
                                </tr>
                                <?php $indice++; ?>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center">No hay platos registrados.</td>
                            </tr>
                        <?php endif; ?>

                        <!-- Contenido del menú aquí -->

                        <div class="button-container">
                            <a href="<?php echo site_url('usuarios/login'); ?>" class="btn btn-danger-custom">Cerrar Sesión</a>
                        </div>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
