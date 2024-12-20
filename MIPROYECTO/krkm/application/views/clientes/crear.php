<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-5" style="width: 50%; border-radius: 15px; background-color: #F3E5F5;">
        <!-- Título centrado con estilo morado oscuro -->
        <h1 class="text-center mb-4" style="color: #4A148C; font-weight: bold; font-size: 32px;">Crear Cliente</h1>

        <!-- Formulario con estilo mejorado -->
        <?php echo form_open('clientes/guardar'); ?>

        <div class="form-group">
            <label for="nombre" style="color: #6A1B9A; font-weight: bold;">Nombre</label>
            <input type="text" name="nombre" class="form-control" required style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
        </div>

        <div class="form-group">
            <label for="apellidoPaterno" style="color: #6A1B9A; font-weight: bold;">Apellido Paterno</label>
            <input type="text" name="apellidoPaterno" class="form-control" required style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
        </div>

        <div class="form-group">
            <label for="apellidoMaterno" style="color: #6A1B9A; font-weight: bold;">Apellido Materno</label>
            <input type="text" name="apellidoMaterno" class="form-control" required style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
        </div>

        <div class="form-group">
            <label for="celular" style="color: #6A1B9A; font-weight: bold;">Celular</label>
            <input type="text" name="celular" class="form-control" required style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
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
