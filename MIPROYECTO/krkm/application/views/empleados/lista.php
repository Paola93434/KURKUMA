<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/listar.css'); ?>">
    <!-- Incluir Font Awesome para los iconos -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
                            <a class="nav-link" href="<?php echo site_url('platos'); ?>">Platos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('clientes'); ?>">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo site_url('empleados'); ?>">Empleados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('usuarios/login'); ?>">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido principal -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <div class="container mt-5">
                    <div class="custom-card">
                        <h1 class="text-center mb-4">Lista de Empleados</h1>

                        <div class="d-flex justify-content-center mb-4">
                            <a href="<?php echo site_url('empleados/crear'); ?>" class="btn btn-primary btn-add">Agregar Empleado</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover custom-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                        <th>Puesto</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($empleados as $empleado): ?>
                                        <tr>
                                            <td><?php echo $empleado['idEmpleado']; ?></td>
                                            <td><?php echo $empleado['nombre']; ?></td>
                                            <td><?php echo $empleado['apellido']; ?></td>
                                            <td><?php echo $empleado['email']; ?></td>
                                            <td><?php echo $empleado['telefono']; ?></td>
                                            <td><?php echo $empleado['puesto']; ?></td>
                                            <td>
                                                <?php echo ($empleado['estado'] == 1) ? '<span class="badge badge-success">Activo</span>' : '<span class="badge badge-secondary">Inactivo</span>'; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo site_url('empleados/editar/'.$empleado['idEmpleado']); ?>" class="btn btn-success btn-sm btn-edit">Editar</a>
                                                <a href="<?php echo site_url('empleados/eliminar/'.$empleado['idEmpleado']); ?>" class="btn btn-danger btn-sm btn-delete">Eliminar</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
