<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
</head>
<body>
    <div class="container mt-4">
        <h1 class="my-4">Lista de Empleados</h1>
        <a href="<?php echo site_url('empleado/crear'); ?>" class="btn btn-custom mb-2">Agregar Empleado</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Estado</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($empleados)): ?>
                    <?php $indice = 1; ?>
                    <?php foreach ($empleados as $empleado): ?>
                        <tr>
                            <th><?php echo $indice; ?></th>
                            <td><?php echo $empleado['nombre']; ?></td>
                            <td><?php echo $empleado['cargo']; ?></td>
                            <td><?php echo $empleado['estado']; ?></td>
                            <td>
                                <a href="<?php echo site_url('empleado/editar/' . $empleado['idEmpleado']); ?>" class="btn btn-success btn-sm">Modificar</a>
                            </td>
                            <td>
                                <?php echo form_open('empleado/eliminar/' . $empleado['idEmpleado']); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                <?php echo form_close(); ?>
                            </td>
                        </tr>
                        <?php $indice++; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">No hay empleados registrados.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
