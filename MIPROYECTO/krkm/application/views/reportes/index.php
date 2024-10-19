<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Reportes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <h1 class="text-center mt-4">Lista de Reportes de Ventas</h1>
        <div class="d-flex justify-content-end mb-4">
            <a href="<?php echo site_url('reportes/crear'); ?>" class="btn btn-primary">Nuevo Reporte</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead class="thead-light">
                    <tr style="text-align: center;">
                        <th>ID Reporte</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Total Ventas</th>
                        <th>Total Pedidos</th>
                        <th>Fecha de Creación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reportes as $reporte): ?>
                        <tr>
                            <td style="text-align: center; vertical-align: middle;"><?php echo $reporte['idReporte']; ?></td>
                            <td style="text-align: center; vertical-align: middle;"><?php echo date('d-m-Y', strtotime($reporte['fecha_inicio'])); ?></td>
                            <td style="text-align: center; vertical-align: middle;"><?php echo date('d-m-Y', strtotime($reporte['fecha_fin'])); ?></td>
                            <td style="text-align: center; vertical-align: middle;">$<?php echo number_format($reporte['total_ventas'], 2); ?></td>
                            <td style="text-align: center; vertical-align: middle;"><?php echo $reporte['total_pedidos']; ?></td>
                            <td style="text-align: center; vertical-align: middle;"><?php echo date('d-m-Y H:i:s', strtotime($reporte['fecha_creacion'])); ?></td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="<?php echo site_url('reportes/eliminar/'.$reporte['idReporte']); ?>" class="btn btn-sm btn-danger">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
