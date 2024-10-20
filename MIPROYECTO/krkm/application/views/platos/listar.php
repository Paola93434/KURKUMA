<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Platos del Menú</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/listar.css'); ?>">
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
                            <a class="nav-link active" href="<?php echo site_url('platos'); ?>">Platos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('usuarios/login'); ?>">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido principal -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <h1 class="my-4 text-center">Lista de Platos del Menú</h1>
                <div class="mb-3 text-center">
                    <a href="<?php echo site_url('platos/crear'); ?>" class="btn btn-primary">Agregar Plato</a>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Categoría</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($platos)): ?>
                            <?php $indice = 1; ?>
                            <?php foreach ($platos as $plato): ?>
                                <tr>
                                    <th><?php echo $indice; ?></th>
                                    <td><?php echo htmlspecialchars($plato->nombre); ?></td>
                                    <td><?php echo htmlspecialchars($plato->descripcion); ?></td>
                                    <td><?php echo htmlspecialchars($plato->precio); ?></td>
                                    <td><?php echo htmlspecialchars($plato->categoria); ?></td>
                                    <td>
                                        <?php if ($plato->imagen): ?>
                                            <img src="<?php echo base_url('uploads/' . $plato->imagen); ?>" alt="Imagen de plato" width="100" class="img-fluid">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <!-- Botón de editar con ícono -->
                                        <a href="<?php echo site_url('platos/editar/' . $plato->idPlato); ?>" class="btn btn-success btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <!-- Botón de eliminar con ícono -->
                                        <?php echo form_open('platos/eliminar/' . $plato->idPlato, ['style' => 'display:inline']); ?>
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        <?php echo form_close(); ?>
                                    </td>
                                </tr>
                                <?php $indice++; ?>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center">No hay platos registrados.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </main>
        </div>
    </div>
</body>
</html>
