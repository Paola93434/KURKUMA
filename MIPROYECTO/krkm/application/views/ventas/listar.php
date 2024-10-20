<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ventas</title>
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
                            <a class="nav-link active" href="<?php echo site_url('ventas'); ?>">Ventas</a>
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
                <h1 class="text-center mb-4">Lista de Ventas</h1>

                <!-- Botón de agregar venta alineado a la derecha -->
                <div class="d-flex justify-content-end mb-4">
                    <a href="<?php echo site_url('ventas/crear'); ?>" class="btn btn-primary">Nueva Venta</a>
                </div>

                <!-- Tabla -->
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="thead-light">
                            <tr style="text-align: center;">
                                <th>ID Venta</th>
                                <th>Cliente</th>
                                <th>Total</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ventas as $venta): ?>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $venta->idVenta; ?></td>
                                    <td style="vertical-align: middle;"><?php echo $venta->nombreCliente; ?></td>
                                    <td style="vertical-align: middle;">$<?php echo number_format($venta->total, 2); ?></td>
                                    <td style="vertical-align: middle;"><?php echo date('d-m-Y', strtotime($venta->fecha_venta)); ?></td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <a href="<?php echo site_url('ventas/ver/'.$venta->idVenta); ?>" class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i> Ver Detalles
                                        </a>
                                        <a href="<?php echo site_url('ventas/eliminar/'.$venta->idVenta); ?>" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i> Eliminar
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
