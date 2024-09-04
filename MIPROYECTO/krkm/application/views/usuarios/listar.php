<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
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
        .btn-custom {
            background-color: #6c5b7b; /* Color lila oscuro */
            color: #ffffff;
        }
        .btn-custom:hover {
            background-color: #4a3f54; /* Lila más oscuro */
            color: #ffffff;
        }
        .btn-primary-custom {
            background-color: #9b59b6; /* Color lila claro */
            color: #ffffff;
        }
        .btn-primary-custom:hover {
            background-color: #8e44ad; /* Lila más oscuro */
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
        .btn-success-custom {
            background-color: #2ecc71; /* Color verde brillante */
            color: #ffffff;
        }
        .btn-success-custom:hover {
            background-color: #27ae60; /* Verde más oscuro */
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
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-md-12">
                <?php echo form_open('usuarios/logout'); ?>
                <button type="submit" class="btn btn-danger-custom">Cerrar Sesión</button>
                <?php echo form_close(); ?>
                
                <?php echo form_open('usuarios/crear'); ?>
                <button type="submit" class="btn btn-primary-custom">Agregar Usuario</button>
                <?php echo form_close(); ?>
                
                <h1 class="my-4 text-center">Lista de Usuarios</h1>
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            <th>Login</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($usuarios->num_rows() > 0): ?>
                            <?php $indice = 1; ?>
                            <?php foreach ($usuarios->result() as $usuario): ?>
                                <tr>
                                    <th><?php echo $indice; ?></th>
                                    <td><?php echo $usuario->nombre; ?></td>
                                    <td><?php echo $usuario->primerApellido; ?></td>
                                    <td><?php echo $usuario->segundoApellido; ?></td>
                                    <td><?php echo $usuario->login; ?></td>
                                    <td><?php echo $usuario->tipo; ?></td>
                                    <td><?php echo $usuario->estado; ?></td>
                                    <td>
                                        <?php echo form_open('usuarios/editar/'.$usuario->idUsuario); ?>
                                        <button type="submit" class="btn btn-success-custom">Modificar</button>
                                        <?php echo form_close(); ?>
                                    </td>
                                    <td>
                                        <?php echo form_open('usuarios/eliminar/'.$usuario->idUsuario); ?>
                                        <button type="submit" class="btn btn-danger-custom">Eliminar</button>
                                        <?php echo form_close(); ?>
                                    </td>
                                </tr>
                                <?php $indice++; ?>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="9" class="text-center">No hay usuarios registrados.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
