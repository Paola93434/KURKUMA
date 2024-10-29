<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($usuario) ? 'Modificar Usuario' : 'Crear Usuario'; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .btn-custom {
            background-color: #5cb85c;
            color: white;
        }
        .btn-secondary-custom {
            background-color: #6c757d;
            color: white;
        }
        .container {
            margin-top: 50px;
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
            <label for="apellidoPaterno">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" value="<?php echo isset($usuario) ? $usuario['apellidoPaterno'] : ''; ?>" placeholder="Ingrese su apellido paterno" required>
        </div>
        
        <div class="form-group">
            <label for="apellidoMaterno">Apellido Materno</label>
            <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" value="<?php echo isset($usuario) ? $usuario['apellidoMaterno'] : ''; ?>" placeholder="Ingrese su apellido materno" required>
        </div>
        
        <div class="form-group">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" value="<?php echo isset($usuario) ? $usuario['celular'] : ''; ?>" placeholder="Ingrese su número de celular" required>
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
                <option value="administrador" <?php echo isset($usuario) && $usuario['tipo'] == 'administrador' ? 'selected' : ''; ?>>Administrador</option>
                <option value="empleado" <?php echo isset($usuario) && $usuario['tipo'] == 'empleado' ? 'selected' : ''; ?>>Empleado</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="1" <?php echo isset($usuario) && $usuario['estado'] == '1' ? 'selected' : ''; ?>>Activo</option>
                <option value="0" <?php echo isset($usuario) && $usuario['estado'] == '0' ? 'selected' : ''; ?>>Inactivo</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-custom btn-block"><?php echo isset($usuario) ? 'Actualizar Usuario' : 'Agregar Usuario'; ?></button>
        
        <?php echo form_close(); ?>
        
        <br>
        <?php echo anchor('usuarios/index', 'Volver a la lista de usuarios', array('class' => 'btn btn-secondary-custom btn-block')); ?>
    </div>
</body>
</html>
