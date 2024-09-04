<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Comida</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f9fc;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin-top: 50px;
        }
        h1 {
            color: #5a5c69;
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .form-group label {
            color: #4e73df;
            font-weight: bold;
        }
        .form-control, .form-control-file {
            border: 1px solid #d1d3e2;
            border-radius: 5px;
            padding: 10px;
            font-size: 14px;
        }
        .form-control:focus, .form-control-file:focus {
            border-color: #4e73df;
            box-shadow: 0 0 5px rgba(78, 115, 223, 0.5);
        }
        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #2e59d9;
            border-color: #2e59d9;
        }
        .btn-secondary {
            background-color: #858796;
            border-color: #858796;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
        }
        .btn-secondary:hover {
            background-color: #6c757d;
            border-color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Agregar Comida</h1>
        <?php echo form_open_multipart('comidas/guardar'); ?>
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
            <button type="submit" class="btn btn-primary">Agregar Comida</button>
        <?php echo form_close(); ?>
        <a href="<?php echo site_url('comidas'); ?>" class="btn btn-secondary mt-2">Volver a la lista de comidas</a>
    </div>
</body>
</html>
