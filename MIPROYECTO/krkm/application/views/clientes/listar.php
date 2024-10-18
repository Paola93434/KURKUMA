<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">
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
                            <a class="nav-link active" href="<?php echo site_url('clientes'); ?>">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('usuarios/login'); ?>">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido principal -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <!-- Título centrado -->
                <h1 class="text-center mb-4">Lista de Clientes</h1>

                <!-- Botón de agregar cliente alineado a la derecha -->
                <div class="d-flex justify-content-end mb-4">
                    <a href="<?php echo site_url('clientes/crear'); ?>" class="btn btn-primary">Agregar Cliente</a>
                </div>

                <!-- Tabla -->
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="thead-light">
                            <tr style="text-align: center;">
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clientes as $cliente): ?>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $cliente['idCliente']; ?></td>
                                    <td style="vertical-align: middle;"><?php echo $cliente['nombre']; ?></td>
                                    <td style="vertical-align: middle;"><?php echo $cliente['apellido']; ?></td>
                                    <td style="vertical-align: middle;"><?php echo $cliente['email']; ?></td>
                                    <td style="vertical-align: middle;"><?php echo $cliente['telefono']; ?></td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <?php echo ($cliente['estado'] == 1) ? '<span class="badge badge-success">Activo</span>' : '<span class="badge badge-secondary">Inactivo</span>'; ?>
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <a href="<?php echo site_url('clientes/editar/'.$cliente['idCliente']); ?>" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i> <!-- Icono de editar -->
                                        </a>
                                        <a href="<?php echo site_url('clientes/eliminar/'.$cliente['idCliente']); ?>" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i> <!-- Icono de eliminar -->
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
