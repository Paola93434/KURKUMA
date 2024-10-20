<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Plato</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">
</head>
<body>
    <div class="container">
        <h1 class="my-4 text-center">Agregar Plato</h1>
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
