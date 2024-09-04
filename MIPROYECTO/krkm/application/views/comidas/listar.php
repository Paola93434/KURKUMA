<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Comidas</title>
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
                <h1 class="my-4">Lista de Comidas</h1>
                <a href="<?php echo site_url('comidas/crear'); ?>" class="btn btn-primary-custom mb-2">Agregar Comida</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Categoría</th>
                            <th>Imagen</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($comidas)): ?>
                            <?php $indice = 1; ?>
                            <?php foreach ($comidas as $comida): ?>
                                <tr>
                                    <th><?php echo $indice; ?></th>
                                    <td><?php echo $comida['nombre']; ?></td>
                                    <td><?php echo $comida['descripcion']; ?></td>
                                    <td><?php echo $comida['precio']; ?></td>
                                    <td><?php echo $comida['categoria']; ?></td>
                                    <td>
                                        <?php if ($comida['imagen']): ?>
                                            <img src="<?php echo base_url('uploads/' . $comida['imagen']); ?>" alt="Imagen" width="100" class="img-fluid">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo site_url('comidas/editar/' . $comida['idComida']); ?>" class="btn btn-success-custom btn-sm">Modificar</a>
                                    </td>
                                    <td>
                                        <?php echo form_open('comidas/eliminar/' . $comida['idComida']); ?>
                                        <button type="submit" class="btn btn-danger-custom btn-sm">Eliminar</button>
                                        <?php echo form_close(); ?>
                                    </td>
                                </tr>
                                <?php $indice++; ?>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8" class="text-center">No hay comidas registradas.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
