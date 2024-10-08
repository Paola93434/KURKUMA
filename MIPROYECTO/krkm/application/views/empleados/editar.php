<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg p-4" style="width: 100%; max-width: 600px;">
        <h1 class="text-center mb-4" style="color:#4A148C;">Editar Empleado</h1>
        <?php echo form_open('empleados/editar/'.$empleado['idEmpleado']); ?>
        <div class="form-group">
            <label for="idUsuario" class="font-weight-bold" style="color:#4A148C;">Usuario</label>
            <select name="idUsuario" class="form-control">
                <?php foreach ($usuarios as $usuario): ?>
                    <option value="<?php echo $usuario['idUsuario']; ?>" <?php echo ($usuario['idUsuario'] == $empleado['idUsuario']) ? 'selected' : ''; ?>>
                        <?php echo $usuario['login']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="nombre" class="font-weight-bold" style="color:#4A148C;">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $empleado['nombre']; ?>" required>
        </div>
        <div class="form-group">
            <label for="apellido" class="font-weight-bold" style="color:#4A148C;">Apellido</label>
            <input type="text" name="apellido" class="form-control" value="<?php echo $empleado['apellido']; ?>" required>
        </div>
        <div class="form-group">
            <label for="email" class="font-weight-bold" style="color:#4A148C;">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $empleado['email']; ?>" required>
        </div>
        <div class="form-group">
            <label for="telefono" class="font-weight-bold" style="color:#4A148C;">Teléfono</label>
            <input type="text" name="telefono" class="form-control" value="<?php echo $empleado['telefono']; ?>" required>
        </div>
        <div class="form-group">
            <label for="direccion" class="font-weight-bold" style="color:#4A148C;">Dirección</label>
            <input type="text" name="direccion" class="form-control" value="<?php echo $empleado['direccion']; ?>">
        </div>
        <div class="form-group">
            <label for="puesto" class="font-weight-bold" style="color:#4A148C;">Puesto</label>
            <input type="text" name="puesto" class="form-control" value="<?php echo $empleado['puesto']; ?>">
        </div>
        <div class="form-group">
            <label for="estado" class="font-weight-bold" style="color:#4A148C;">Estado</label>
            <select name="estado" class="form-control">
                <option value="1" <?php echo ($empleado['estado'] == 1) ? 'selected' : ''; ?>>Activo</option>
                <option value="0" <?php echo ($empleado['estado'] == 0) ? 'selected' : ''; ?>>Inactivo</option>
            </select>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-block" style="background-color:#7E57C2; border:none;">Guardar Cambios</button>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>

<!-- CSS -->
<style>
    /* Contenedor centrado y fondo */
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #F3E5F5;
    }

    /* Tarjeta con bordes redondeados */
    .card {
        border-radius: 15px;
        border: 2px solid #7E57C2;
        background-color: #fff;
        padding: 30px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
    }

    /* Títulos y etiquetas con estilo */
    .font-weight-bold {
        font-weight: 600;
        color: #4A148C;
    }

    /* Botones */
    .btn-block {
        background-color: #7E57C2;
        color: #fff;
        font-weight: bold;
        padding: 12px;
        border-radius: 25px;
        transition: background-color 0.3s ease;
    }

    .btn-block:hover {
        background-color: #5E35B1;
    }

    /* Inputs con efectos visuales */
    .form-control {
        border-radius: 8px;
        border: 1px solid #D1C4E9;
        padding: 12px;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #7E57C2;
        box-shadow: 0px 0px 8px rgba(126, 87, 194, 0.2);
    }

    /* Mejoras en la sombra del formulario */
    .card.shadow-lg {
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    /* Espaciado entre campos */
    .form-group {
        margin-bottom: 20px;
    }
</style>
