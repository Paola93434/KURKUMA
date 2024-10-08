<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Plato</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f9f0ff; /* Fondo lila claro */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin-top: 50px;
            border-left: 8px solid #9b59b6; /* Línea decorativa color lila */
        }
        h1 {
            color: #8e44ad; /* Título en lila */
            text-align: center;
            margin-bottom: 25px;
            font-weight: bold;
            font-size: 1.8rem;
        }
        .form-group label {
            color: #8e44ad;
            font-weight: bold;
        }
        .form-control, .form-control-file {
            border: 1px solid #dfe6e9;
            border-radius: 8px;
            padding: 10px;
            font-size: 14px;
            background-color: #f7f9fc; /* Fondo azul suave en los campos */
        }
        .form-control:focus, .form-control-file:focus {
            border-color: #8e44ad; /* Lila para los bordes al enfocar */
            box-shadow: 0 0 5px rgba(142, 68, 173, 0.5);
        }
        .btn-primary {
            background-color: #9b59b6; /* Botón lila */
            border-color: #9b59b6;
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #8e44ad; /* Lila más fuerte al pasar el ratón */
            border-color: #8e44ad;
        }
        .btn-secondary {
            background-color: #b2bec3;
            border-color: #b2bec3;
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }
        .btn-secondary:hover {
            background-color: #636e72; /* Gris más oscuro al pasar el ratón */
            border-color: #636e72;
        }
        .mt-2 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Agregar Plato</h1>
        <?php echo form_open_multipart('platos/guardar'); ?>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Ingrese la descripción"></textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Ingrese la categoría">
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen">
            </div>
            <button type="submit" class="btn btn-primary">Agregar Plato</button>
        <?php echo form_close(); ?>
        <a href="<?php echo site_url('platos'); ?>" class="btn btn-secondary mt-2">Volver a la lista de platos</a>
    </div>
</body>
</html>
