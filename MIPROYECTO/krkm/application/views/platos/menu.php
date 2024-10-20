<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Platos - Kurkuma</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">
</head>
<body>
    <div class="container">
        <h1>Menú de Platos</h1>
        
        <?php if (!empty($platos)): ?>
        <div id="platoCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($platos as $index => $plato): ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <?php if ($plato['imagen']): ?>
                            <img src="<?php echo base_url('uploads/' . $plato['imagen']); ?>" alt="Imagen de <?php echo $plato['nombre']; ?>">
                        <?php endif; ?>
                        <div class="menu-item">
                            <h3><?php echo $plato['nombre']; ?></h3>
                            <p><?php echo $plato['descripcion']; ?></p>
                            <p class="price">Precio: Bs.<?php echo $plato['precio']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#platoCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#platoCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
        <?php else: ?>
            <p class="text-center">No hay platos disponibles en el menú.</p>
        <?php endif; ?>

        <div class="button-container">
            <a href="<?php echo site_url('usuarios/cerrar_sesion'); ?>" class="btn btn-danger-custom">Cerrar Sesión</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
