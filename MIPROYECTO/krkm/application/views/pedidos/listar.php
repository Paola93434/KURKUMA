<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/listar.css'); ?>">
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
                            <a class="nav-link active" href="<?php echo site_url('pedidos'); ?>">Pedidos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('usuarios/login'); ?>">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido principal -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <h1 class="text-center mb-4">Lista de Pedidos</h1>

                <!-- Botón para agregar un nuevo pedido alineado a la derecha -->
                <div class="d-flex justify-content-end mb-4">
                    <a href="<?php echo site_url('pedidos/crear'); ?>" class="btn btn-primary">Nuevo Pedido</a>
                </div>

                <!-- Tabla -->
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID Pedido</th>
                                <th>Cliente</th>
                                <th>Fecha</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($pedidos)): ?>
                                <?php foreach ($pedidos as $pedido): ?>
                                    <tr>
                                        <td><?php echo $pedido['idPedido']; ?></td>
                                        <td><?php echo $pedido['nombreCliente']; ?></td>
                                        <td><?php echo $pedido['fecha_pedido']; ?></td>
                                        <td>$<?php echo number_format($pedido['total'], 2); ?></td>
                                        <td>
                                            <span class="badge <?= $pedido['estado'] == 1 ? 'badge-warning' : 'badge-success'; ?>">
                                                <?= $pedido['estado'] == 1 ? 'Pendiente' : 'Completado'; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <a href="<?php echo site_url('pedidos/ver/' . $pedido['idPedido']); ?>" class="btn btn-info btn-sm">Ver Detalles</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center">No hay pedidos registrados.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
