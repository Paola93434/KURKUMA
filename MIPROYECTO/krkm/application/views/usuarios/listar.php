<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Panel de Administración</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <!-- Menú desplegable -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Módulos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo site_url('clientes'); ?>">Clientes</a>
                        <a class="dropdown-item" href="<?php echo site_url('empleados'); ?>">Empleados</a>
                    </div>
                </li>

                <!-- Botón de Cerrar Sesión -->
                <li class="nav-item">
                    <?php echo form_open('usuarios/logout'); ?>
                    <button type="submit" class="btn btn-danger-custom">Cerrar Sesión</button>
                    <?php echo form_close(); ?>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenedor principal -->
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-md-12">
                <h1 class="my-4 text-center">Lista de Usuarios</h1>
                
                <!-- Botón para agregar usuario -->
                <div class="text-right mb-3">
                    <?php echo form_open('usuarios/crear'); ?>
                    <button type="submit" class="btn btn-primary-custom">Agregar Usuario</button>
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
                                            <button type="submit" class="btn btn-success-custom btn-sm">Editar</button>
                                            <?php echo form_close(); ?>

                                            <!-- Botón para eliminar (con confirmación de eliminación) -->
                                            <?php echo form_open('usuarios/eliminar/'.$usuario->idUsuario); ?>
                                            <button type="submit" class="btn btn-danger-custom btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</button>
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
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="footer">
        <p>&copy; 2024 Sistema de Usuarios. Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
