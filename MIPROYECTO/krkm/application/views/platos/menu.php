<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Platos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f0f9; /* Fondo lila claro */
        }
        .menu-container {
            margin-top: 50px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .menu-item {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin: 15px;
            width: 300px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
        }
        .menu-item img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .menu-item h3 {
            color: #9b59b6; /* Color lila claro */
        }
        .menu-item p {
            color: #555;
        }
        .menu-item .price {
            color: #27ae60; /* Verde para el precio */
            font-weight: bold;
            font-size: 1.2em;
        }
        h1 {
            color: #9b59b6;
            text-align: center;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .btn-custom {
            background-color: #9b59b6; /* Color lila claro */
            color: #ffffff;
            margin: 5px;
        }
        .btn-custom:hover {
            background-color: #8e44ad; /* Lila más oscuro */
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Menú de Platos</h1>
        <div class="menu-container">
            <?php if (!empty($platos)): ?>
                <?php foreach ($platos as $plato): ?>
                    <div class="menu-item">
                        <?php if ($plato['imagen']): ?>
                            <img src="<?php echo base_url('uploads/' . $plato['imagen']); ?>" alt="Imagen de <?php echo $plato['nombre']; ?>">
                        <?php endif; ?>
                        <h3><?php echo $plato['nombre']; ?></h3>
                        <p><?php echo $plato['descripcion']; ?></p>
                        <p class="price">Precio: Bs.<?php echo $plato['precio']; ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center">No hay platos disponibles en el menú.</p>
            <?php endif; ?>
        </div>
        <div class="button-container">
            <a href="<?php echo site_url('usuarios/cerrar_sesion'); ?>" class="btn btn-danger-custom">Cerrar Sesión</a>
        </div>
    </div>
</body>
</html>
