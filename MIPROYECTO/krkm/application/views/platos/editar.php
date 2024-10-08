<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Plato</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Editar Plato</h1>
        <?php echo form_open_multipart('platos/actualizar'); ?>
            <input type="hidden" name="idPlato" value="<?php echo $plato['idPlato']; ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $plato['nombre']; ?>" placeholder="Ingrese el nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Ingrese la descripción"><?php echo $plato['descripcion']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" value="<?php echo $plato['precio']; ?>" placeholder="Ingrese el precio" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo $plato['categoria']; ?>" placeholder="Ingrese la categoría">
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <?php if ($plato['imagen']): ?>
                    <div class="mb-2">
                        <img src="<?php echo base_url('uploads/' . $plato['imagen']); ?>" alt="Imagen" width="100">
                    </div>
                <?php endif; ?>
                <input type="file" class="form-control-file" id="imagen" name="imagen">
                <input type="hidden" name="imagen_actual" value="<?php echo $plato['imagen']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Plato</button>
        <?php echo form_close(); ?>
        <a href="<?php echo site_url('platos'); ?>" class="btn btn-secondary mt-2">Volver a la lista de platos</a>
    </div>
</body>
</html>
