<!-- Enlace al archivo CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">

<div class="container mt-5">
    <!-- Título centrado con estilo lila -->
    <h1 class="text-center mb-4" style="color: #6A1B9A; font-weight: bold; font-size: 32px;">Lista de Clientes</h1>

    <!-- Botón de agregar cliente alineado a la derecha -->
    <div class="d-flex justify-content-end mb-4">
        <a href="<?php echo site_url('clientes/crear'); ?>" class="btn btn-primary" style="background-color: #9575CD; border: none; padding: 12px 28px; font-size: 18px; border-radius: 8px;">Agregar Cliente</a>
    </div>

    <!-- Tabla con estilo lila -->
    <div class="table-responsive">
        <table class="table table-hover table-bordered shadow-lg" style="background-color: #F3E5F5; border-radius: 10px;">
            <thead style="background-color: #8E24AA; color: white;">
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
                            <?php echo ($cliente['estado'] == 1) ? '<span class="badge badge-success" style="background-color: #AB47BC; font-size: 14px;">Activo</span>' : '<span class="badge badge-secondary" style="background-color: #BDBDBD; font-size: 14px;">Inactivo</span>'; ?>
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            <a href="<?php echo site_url('clientes/editar/'.$cliente['idCliente']); ?>" class="btn btn-sm btn-warning" style="background-color: #BA68C8; margin-right: 8px; padding: 5px 15px; color: white;">Editar</a>
                            <a href="<?php echo site_url('clientes/eliminar/'.$cliente['idCliente']); ?>" class="btn btn-sm btn-danger" style="background-color: #D32F2F; padding: 5px 15px; color: white;">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- CSS para mejorar el estilo -->
<style>
    /* Fondo suave para toda la página */
    body {
        background-color: #F8EAF6;
    }

    /* Color de fila alterna en la tabla */
    .table-hover tbody tr:nth-of-type(odd) {
        background-color: #E1BEE7;
    }

    /* Hover effect para las filas */
    .table-hover tbody tr:hover {
        background-color: #CE93D8;
    }

    /* Badge de éxito y badge secundario */
    .badge-success {
        background-color: #AB47BC;
    }

    .badge-secondary {
        background-color: #BDBDBD;
    }

    /* Estilo para los botones */
    .btn-warning {
        background-color: #BA68C8;
        border: none;
    }

    .btn-danger {
        background-color: #D32F2F;
        border: none;
    }

    /* Efecto hover para los botones */
    .btn-warning:hover, .btn-danger:hover {
        opacity: 0.9;
    }

    /* Aumentar el padding en las celdas de la tabla para mayor espacio */
    .table td, .table th {
        padding: 16px;
        vertical-align: middle;
    }
</style>
