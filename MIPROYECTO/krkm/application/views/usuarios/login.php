<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>"> 
    <style>
        /* Estilos generales */
        body.custom-body {
            background-color: #f6fffd;
            font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        /* Contenedor de login centrado y con un diseño más compacto */
        .login-container {
            background-color: #ffffff;
            border: 2px solid #6D9886; /* Verde suave */
            border-radius: 8px;
            padding: 30px;
            max-width: 400px;
            width: 100%;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Imagen del logo */
        .login-container img {
            max-width: 150px;
            margin-bottom: 15px;
        }

        /* Estilo del título */
        .login-container h2 {
            color: #6D9886; /* Verde suave */
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        /* Campos del formulario */
        .login-container .form-control {
            border: 1px solid #6D9886; /* Verde suave */
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 10px;
        }

        /* Botón personalizado */
        .btn-primary-custom {
            background-color: #6D9886; /* Verde suave */
            border: none;
            padding: 10px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-primary-custom:hover {
            background-color: #5a8772; /* Un tono más oscuro al pasar el mouse */
        }

        /* Ajuste responsivo */
        @media (max-width: 576px) {
            .login-container {
                padding: 20px;
                max-width: 300px;
            }
        }
    </style>
</head>
<body class="custom-body">
    
    <div class="login-container p-4">
        <!-- Imagen del logo -->
        <img src="<?php echo base_url('uploads/img/logok.jpg'); ?>" alt="Logo" class="img-fluid mb-3">
        
        <!-- Título del formulario -->
        <h2>Iniciar Sesión</h2>
        
        <!-- Formulario de inicio de sesión -->
        <?php echo form_open('usuarios/autenticar'); ?>
            <div class="form-group">
                <label for="login">Login:</label>
                <input type="text" name="login" id="login" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary-custom btn-block">Ingresar</button>
        <?php echo form_close(); ?>
    </div>
    
</body>
</html>
