<div class="container mt-5">
    <div class="custom-card">
        <h1 class="text-center mb-4">Crear Empleado</h1>
        <?php echo form_open('empleados/crear'); ?>
        <div class="form-group">
            <label for="idUsuario">Usuario</label>
            <select name="idUsuario" class="form-control custom-select">
                <?php foreach ($usuarios as $usuario): ?>
                    <option value="<?php echo $usuario['idUsuario']; ?>"><?php echo $usuario['login']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control custom-input">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control custom-input">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control custom-input">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" class="form-control custom-input">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" class="form-control custom-input">
        </div>
        <div class="form-group">
            <label for="puesto">Puesto</label>
            <input type="text" name="puesto" class="form-control custom-input">
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select name="estado" class="form-control custom-select">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary custom-btn">Crear</button>
        <?php echo form_close(); ?>
    </div>
</div>

<!-- CSS -->
<style>
    /* Estilos del contenedor y el card */
    .custom-card {
        background-color: #f7f3f9;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        border: 2px solid #7E57C2;
        max-width: 700px;
        margin: 0 auto;
    }

    /* Estilo del título */
    .custom-card h1 {
        color: #4A148C;
        font-size: 2rem;
        font-weight: bold;
    }

    /* Estilos de los campos del formulario */
    .custom-input, .custom-select {
        border: 2px solid #D1C4E9;
        border-radius: 8px;
        padding: 10px;
        transition: border-color 0.3s ease;
        background-color: #fff;
    }

    .custom-input:focus, .custom-select:focus {
        border-color: #7E57C2;
        box-shadow: 0px 0px 8px rgba(126, 87, 194, 0.2);
    }

    .form-group label {
        color: #4A148C;
        font-weight: bold;
    }

    /* Estilo del botón */
    .custom-btn {
        background-color: #7E57C2;
        border: none;
        padding: 12px 20px;
        border-radius: 30px;
        font-weight: bold;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    .custom-btn:hover {
        background-color: #5e3f96;
    }

    /* Hacer la tarjeta y los campos responsivos */
    @media (max-width: 768px) {
        .custom-card {
            padding: 20px;
        }

        .custom-btn {
            padding: 10px 15px;
        }

        .custom-input, .custom-select {
            padding: 8px;
        }
    }
</style>
