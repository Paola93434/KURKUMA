<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-5" style="width: 50%; border-radius: 15px; background-color: #F3E5F5;">
        <!-- Título centrado con estilo morado oscuro -->
        <h1 class="text-center mb-4" style="color: #4A148C; font-weight: bold; font-size: 32px;">Editar Cliente</h1>

        <!-- Formulario con estilo mejorado y más ordenado -->
        <?php echo form_open('clientes/actualizar/'.$cliente['idCliente']); ?>
        
        <div class="row">
            <!-- Primer columna -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="idUsuario" style="color: #6A1B9A; font-weight: bold;">Usuario</label>
                    <select name="idUsuario" class="form-control" required style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
                        <?php foreach ($usuarios as $usuario): ?>
                            <option value="<?php echo $usuario['idUsuario']; ?>" <?php echo ($cliente['idUsuario'] == $usuario['idUsuario']) ? 'selected' : ''; ?>>
                                <?php echo $usuario['login']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nombre" style="color: #6A1B9A; font-weight: bold;">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="<?php echo $cliente['nombre']; ?>" required style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
                </div>

                <div class="form-group">
                    <label for="email" style="color: #6A1B9A; font-weight: bold;">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $cliente['email']; ?>" required style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
                </div>

                <div class="form-group">
                    <label for="estado" style="color: #6A1B9A; font-weight: bold;">Estado</label>
                    <select name="estado" class="form-control" style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
                        <option value="1" <?php echo ($cliente['estado'] == 1) ? 'selected' : ''; ?>>Activo</option>
                        <option value="0" <?php echo ($cliente['estado'] == 0) ? 'selected' : ''; ?>>Inactivo</option>
                    </select>
                </div>
            </div>

            <!-- Segunda columna -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="apellido" style="color: #6A1B9A; font-weight: bold;">Apellido</label>
                    <input type="text" name="apellido" class="form-control" value="<?php echo $cliente['apellido']; ?>" required style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
                </div>

                <div class="form-group">
                    <label for="telefono" style="color: #6A1B9A; font-weight: bold;">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" value="<?php echo $cliente['telefono']; ?>" style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
                </div>

                <div class="form-group">
                    <label for="direccion" style="color: #6A1B9A; font-weight: bold;">Dirección</label>
                    <input type="text" name="direccion" class="form-control" value="<?php echo $cliente['direccion']; ?>" style="border-radius: 10px; border: 2px solid #6A1B9A; padding: 12px;">
                </div>
            </div>
        </div>

        <!-- Botón "Actualizar" centrado -->
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary" style="background-color: #7E57C2; border: none; padding: 12px 30px; font-size: 18px; border-radius: 30px;">Actualizar</button>
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