<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <h4 class="text-center">Menú</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('usuarios'); ?>">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('platos'); ?>">Platos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('usuarios/login'); ?>">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido principal -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <h1 class="my-4 text-center">Lista de Usuarios</h1>

                <!-- Botón para agregar usuario -->
                <div class="text-right mb-3">
                    <?php echo form_open('usuarios/crear'); ?>
                    <button type="submit" class="btn btn-primary">Agregar Usuario</button>
                    <?php echo form_close(); ?>
                </div>

                <!-- Tabla de usuarios -->
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            <th>Login</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Acciones</th>
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
                                        <div class="btn-group" role="group">
                                            <!-- Botón para editar -->
                                            <?php echo form_open('usuarios/editar/'.$usuario->idUsuario); ?>
                                            <button type="submit" class="btn btn-success btn-sm">
                                                <i class="fas fa-edit"></i> Modificar
                                            </button>
                                            <?php echo form_close(); ?>

                                            <!-- Botón para eliminar -->
                                            <?php echo form_open('usuarios/eliminar/'.$usuario->idUsuario); ?>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">
                                                <i class="fas fa-trash-alt"></i> Eliminar
                                            </button>
                                            <?php echo form_close(); ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php $indice++; ?>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8" class="text-center">No hay usuarios registrados.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </main>
        </div>
    </div>
</body>
</html>
