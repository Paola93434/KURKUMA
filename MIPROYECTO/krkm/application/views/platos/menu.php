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
    <style>
        body {
            background-color: #e6e6fa; /* Fondo lila claro */
            font-family: 'Poppins', sans-serif; /* Nueva fuente */
        }
        .menu-container {
            margin-top: 30px;
        }
        h1 {
            color: #2c3e50; /* Azul fuerte */
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: 600;
        }
        .carousel-item img {
            width: 100%;
            height: auto;
            max-height: 600px;
            object-fit: contain; /* Las imágenes se ajustan mejor */
            border-radius: 10px;
        }
        .menu-item {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
        }
        .menu-item h3 {
            color: #3498db; /* Azul pastel */
            font-size: 1.8em;
            font-weight: 500;
        }
        .menu-item p {
            color: #555;
            font-size: 1.2em;
        }
        .menu-item .price {
            color: #27ae60; /* Verde para el precio */
            font-weight: bold;
            font-size: 1.5em;
        }
        .button-container {
            text-align: center;
            margin-top: 30px;
        }
        .btn-custom {
            background-color: #5d6d7e; /* Gris-azulado de tus proyectos anteriores */
            color: #ffffff;
            margin: 5px;
            padding: 10px 20px;
            font-size: 1.2em;
            font-family: 'Poppins', sans-serif;
        }
        .btn-custom:hover {
            background-color: #34495e; /* Azul fuerte más oscuro */
        }
        .btn-danger-custom {
            background-color: #e74c3c; /* Rojo suave */
            color: white;
        }
        .btn-danger-custom:hover {
            background-color: #c0392b;
        }
        @media (max-width: 768px) {
            h1 {
                font-size: 2em;
            }
            .menu-item {
                margin: 10px;
            }
            .carousel-item img {
                max-height: 300px;
            }
        }
        @media (max-width: 576px) {
            h1 {
                font-size: 1.5em;
            }
            .menu-item h3 {
                font-size: 1.4em;
            }
            .menu-item .price {
                font-size: 1.2em;
            }
            .carousel-item img {
                max-height: 250px;
            }
        }
    </style>
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
