<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($usuario) ? 'Modificar Usuario' : 'Crear Usuario'; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin-top: 20px;
        }
        .btn-custom {
            background-color: #007bff;
            color: #ffffff;
            font-size: 0.875rem; /* Tamaño de fuente más pequeño */
            padding: 0.375rem 0.75rem; /* Padding reducido */
        }
        .btn-custom:hover {
            background-color: #0056b3;
            color: #ffffff;
        }
        .btn-secondary-custom {
            background-color: #6c757d;
            color: #ffffff;
            font-size: 0.875rem; /* Tamaño de fuente más pequeño */
            padding: 0.375rem 0.75rem; /* Padding reducido */
        }
        .btn-secondary-custom:hover {
            background-color: #5a6268;
            color: #ffffff;
        }
        .form-control {
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4"><?php echo isset($usuario) ? 'Modificar Usuario' : 'Agregar Usuario'; ?></h1>
        
        <?php echo form_open(isset($usuario) ? 'usuarios/modificarbd' : 'usuarios/guardarbd'); ?>

        <?php if (isset($usuario)): ?>
            <input type="hidden" name="idUsuario" value="<?php echo $usuario['idUsuario']; ?>">
        <?php endif; ?>
        
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo isset($usuario) ? $usuario['nombre'] : ''; ?>" placeholder="Ingrese su nombre" required>
        </div>
        
        <div class="form-group">
            <label for="primerApellido">Primer Apellido</label>
            <input type="text" class="form-control" id="primerApellido" name="primerApellido" value="<?php echo isset($usuario) ? $usuario['primerApellido'] : ''; ?>" placeholder="Ingrese su primer apellido" required>
        </div>
        
        <div class="form-group">
            <label for="segundoApellido">Segundo Apellido</label>
            <input type="text" class="form-control" id="segundoApellido" name="segundoApellido" value="<?php echo isset($usuario) ? $usuario['segundoApellido'] : ''; ?>" placeholder="Ingrese su segundo apellido" required>
        </div>
        
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login" name="login" value="<?php echo isset($usuario) ? $usuario['login'] : ''; ?>" placeholder="Ingrese su login" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su password" <?php echo !isset($usuario) ? 'required' : ''; ?>>
        </div>
        
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select class="form-control" id="tipo" name="tipo" required>
                <option value="Administrador" <?php echo isset($usuario) && $usuario['tipo'] == 'Administrador' ? 'selected' : ''; ?>>Administrador</option>
                <option value="Usuario" <?php echo isset($usuario) && $usuario['tipo'] == 'Usuario' ? 'selected' : ''; ?>>Usuario</option>
                <option value="Empleado" <?php echo isset($usuario) && $usuario['tipo'] == 'Empleado' ? 'selected' : ''; ?>>Empleado</option>
                <option value="Cliente" <?php echo isset($usuario) && $usuario['tipo'] == 'Cliente' ? 'selected' : ''; ?>>Cliente</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="Activo" <?php echo isset($usuario) && $usuario['estado'] == 'Activo' ? 'selected' : ''; ?>>Activo</option>
                <option value="Inactivo" <?php echo isset($usuario) && $usuario['estado'] == 'Inactivo' ? 'selected' : ''; ?>>Inactivo</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-custom btn-block"><?php echo isset($usuario) ? 'Actualizar Usuario' : 'Agregar Usuario'; ?></button>
        
        <?php echo form_close(); ?>
        
        <br>
        <?php echo anchor('usuarios/index', 'Volver a la lista de usuarios', array('class' => 'btn btn-secondary-custom btn-block')); ?>
    </div>
</body>
</html>
