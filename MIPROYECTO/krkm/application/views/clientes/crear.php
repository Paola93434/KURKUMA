<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-5" style="width: 50%; border-radius: 15px; background-color: #F3E5F5;">
        <!-- Título centrado con estilo morado oscuro -->
        <h1 class="text-center mb-4" style="color: #4A148C; font-weight: bold; font-size: 32px;">Crear Cliente</h1>

        <!-- Formulario con estilo mejorado -->
        <?php echo form_open('clientes/guardar'); ?>

        <div class="form-group">
            <label for="idUsuario" style="color: #6A1B9A; font-weight: bold;">Usuario</label>
            <select name="idUsuario" class="form-control" required style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
                <?php foreach ($usuarios as $usuario): ?>
                    <option value="<?php echo $usuario['idUsuario']; ?>"><?php echo $usuario['login']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="nombre" style="color: #6A1B9A; font-weight: bold;">Nombre</label>
            <input type="text" name="nombre" class="form-control" required style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
        </div>

        <div class="form-group">
            <label for="apellido" style="color: #6A1B9A; font-weight: bold;">Apellido</label>
            <input type="text" name="apellido" class="form-control" required style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
        </div>

        <div class="form-group">
            <label for="email" style="color: #6A1B9A; font-weight: bold;">Email</label>
            <input type="email" name="email" class="form-control" required style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
        </div>

        <div class="form-group">
            <label for="telefono" style="color: #6A1B9A; font-weight: bold;">Teléfono</label>
            <input type="text" name="telefono" class="form-control" style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
        </div>

        <div class="form-group">
            <label for="direccion" style="color: #6A1B9A; font-weight: bold;">Dirección</label>
            <input type="text" name="direccion" class="form-control" style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
        </div>

        <div class="form-group">
            <label for="estado" style="color: #6A1B9A; font-weight: bold;">Estado</label>
            <select name="estado" class="form-control" style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>

        <!-- Botón "Crear" centrado con diseño mejorado -->
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary" style="background-color: #7E57C2; border: none; padding: 12px 30px; font-size: 18px; border-radius: 30px;">Crear</button>
        </div>

        <?php echo form_close(); ?>
    </div>
</div>

<!-- CSS adicional para mejor diseño -->
<style>
    body {
        background-color: #F8EAF6;
    }

    .form-control:hover, .form-control:focus {
        border-color: #8E24AA;
        box-shadow: 0 0 8px rgba(142, 36, 170, 0.2);
    }

    .btn-primary:hover {
        background-color: #5E35B1;
        opacity: 0.9;
    }

    .card {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        border: none;
    }
</style>


