<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Comida</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Editar Comida</h1>
        <?php echo form_open_multipart('comidas/actualizar'); ?>
            <input type="hidden" name="idComida" value="<?php echo $comida['idComida']; ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $comida['nombre']; ?>" placeholder="Ingrese el nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Ingrese la descripción"><?php echo $comida['descripcion']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" value="<?php echo $comida['precio']; ?>" placeholder="Ingrese el precio" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo $comida['categoria']; ?>" placeholder="Ingrese la categoría">
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <?php if ($comida['imagen']): ?>
                    <div class="mb-2">
                        <img src="<?php echo base_url('uploads/' . $comida['imagen']); ?>" alt="Imagen" width="100">
                    </div>
                <?php endif; ?>
                <input type="file" class="form-control-file" id="imagen" name="imagen">
                <input type="hidden" name="imagen_actual" value="<?php echo $comida['imagen']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Comida</button>
        <?php echo form_close(); ?>
        <a href="<?php echo site_url('comidas'); ?>" class="btn btn-secondary mt-2">Volver a la lista de comidas</a>
    </div>
</body>
</html>
