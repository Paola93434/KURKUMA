<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1 class="my-4">Editar Empleado</h1>
        <?php echo form_open('empleado/actualizar/' . $empleado['idEmpleado']); ?>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $empleado['nombre']; ?>" required>
        </div>
        <div class="form-group">
            <label for="cargo">Cargo:</label>
            <input type="text" class="form-control" id="cargo" name="cargo" value="<?php echo $empleado['cargo']; ?>" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $empleado['estado']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <?php echo form_close(); ?>
    </div>
</body>
</html>
